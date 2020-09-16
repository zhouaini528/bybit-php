<?php
/**
 * @author lin <465382251@qq.com>
 * */

namespace Lin\Crex;

use GuzzleHttp\Exception\RequestException;
use Lin\Crex\Exceptions\Exception;

class Request
{
    protected $key='';

    protected $secret='';

    protected $host='';



    protected $nonce='';

    protected $signature='';

    protected $headers=[];

    protected $type='';

    protected $path='';

    protected $data=[];

    protected $options=[];

    public function __construct(array $data)
    {
        $this->key=$data['key'] ?? '';
        $this->secret=$data['secret'] ?? '';
        $this->host=$data['host'] ?? 'https://api.crex24.com';

        $this->options=$data['options'] ?? [];
    }

    /**
     * 认证
     * */
    protected function auth(){
        $this->nonce();

        $this->signature();

        $this->headers();

        $this->options();
    }

    /*
     *
     * */
    protected function nonce(){
        $this->nonce=floor(microtime(true) * 1000);
    }

    /*
     *
     * */
    protected function signature(){
        $message=$this->path;
        if($this->type=='GET') $message.= empty($this->data) ? '' : '?'.http_build_query($this->data);
        $message .= $this->nonce;

        if($this->type=='POST' && !empty($this->data)) $message .= json_encode($this->data);

        $this->signature = base64_encode(hash_hmac('sha512', $message , base64_decode($this->secret) , true));
    }

    /*
     *
     * */
    protected function headers(){
        $this->headers=[
            'Content-Type' => 'application/json',
            'X-CREX24-API-KEY' => $this->key,
            'X-CREX24-API-NONCE' => $this->nonce,
            'X-CREX24-API-SIGN' => $this->signature
        ];
    }

    /*
     *
     * */
    protected function options(){
        $this->options=array_merge([
            'headers'=>$this->headers,
            //'verify'=>false
        ],$this->options);

        $this->options['timeout'] = $this->options['timeout'] ?? 60;

        if(isset($this->options['proxy']) && $this->options['proxy']===true) {
            $this->options['proxy']=[
                'http'  => 'http://127.0.0.1:12333',
                'https' => 'http://127.0.0.1:12333',
                'no'    =>  ['.cn']
            ];
        }
    }

    /*
     *
     * */
    protected function send(){
        $client = new \GuzzleHttp\Client();

        $url=$this->host.$this->path;

        if($this->type=='GET') $url.= empty($this->data) ? '' : '?'.http_build_query($this->data);
        else $this->options['body']=json_encode($this->data);
        /*echo $url.PHP_EOL;
        print_r($this->options);*/
        $response = $client->request($this->type, $url, $this->options);

        return $response->getBody()->getContents();
    }

    /*
     *
     * */
    protected function exec(){
        $this->auth();

        try {
            return json_decode($this->send(),true);
        }catch (RequestException $e){
            if(method_exists($e->getResponse(),'getBody')){
                $contents=$e->getResponse()->getBody()->getContents();

                $temp = empty($contents) ? [] : json_decode($contents,true);

                if(!empty($temp)) {
                    $temp['_method']=$this->type;
                    $temp['_url']=$this->host.$this->path;
                }else{
                    $temp['_message']=$e->getMessage();
                }
            }else{
                $temp['_message']=$e->getMessage();
            }

            $temp['_httpcode']=$e->getCode();

            throw new Exception(json_encode($temp));
        }
    }
}
