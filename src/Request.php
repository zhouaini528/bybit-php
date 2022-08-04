<?php
/**
 * @author lin <465382251@qq.com>
 * */

namespace Lin\Bybit;

use GuzzleHttp\Exception\RequestException;
use Lin\Bybit\Exceptions\Exception;

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
    
    protected $response_headers = [];

    protected $platform='';

    protected $version='';

    public function __construct(array $data)
    {
        $this->key=$data['key'] ?? '';
        $this->secret=$data['secret'] ?? '';
        $this->host=$data['host'] ?? 'https://api.bybit.com';

        $this->options=$data['options'] ?? [];

        $this->platform=$data['platform'] ?? [];
        $this->version=$data['version'] ?? [];
    }

    /*
     *
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
        if(!empty($this->key) && !empty($this->secret)){
            $this->data['api_key']=$this->key;
            $this->data['timestamp']=$this->nonce;

            ksort($this->data);

            $temp=$this->data;
            foreach ($temp as $k=>$v) if(is_bool($v)) $temp[$k]=$v?'true':'false';

            $this->signature = hash_hmac('sha256', urldecode(http_build_query($temp)), $this->secret);
        }
    }

    /*
     *
     * */
    protected function headers(){
        switch ($this->platform) {
            case 'spot':{
                if($this->type=='POST') {
                    $this->headers=[
                        'Content-Type' => 'application/x-www-form-urlencoded',
                    ];
                }
                break;
            }
            default:{
                $this->headers=[
                    'Content-Type' => 'application/json',
                ];
            }
        }
    }
    
    /**
     * Get Response Headers
     * */
    public function getResponseHeaders(){
        return $this->response_headers;
    }

    /*
     *
     * */
    protected function options(){
        if(isset($this->options['headers'])) $this->headers=array_merge($this->headers,$this->options['headers']);

        $this->options['headers']=$this->headers;
        $this->options['timeout'] = $this->options['timeout'] ?? 60;
    }

    /*
     *
     * */
    protected function send(){
        $client = new \GuzzleHttp\Client();
        $url=$this->host.$this->path;

        if($this->type=='GET') $url.= '?'.http_build_query($this->data).($this->signature!=''?'&sign='.$this->signature:'');
        else {
            $temp=$this->data;

            foreach ($temp as $k=>$v){
                if($v=='true') $temp[$k]=true;
                if($v=='false') $temp[$k]=false;
            }

            switch ($this->platform) {
                case 'spot':{
                    if($this->type=='DELETE') {
                        $url.= '?'.http_build_query($this->data).($this->signature!=''?'&sign='.$this->signature:'');
                        break;
                    }
                    $this->options['form_params']=array_merge($temp,['sign'=>$this->signature]);
                    break;
                }
                case 'linear':
                case 'inverse':{
                    $this->options['body']=json_encode(array_merge($temp,['sign'=>$this->signature]));
                    break;
                }
            }
        }

//        echo $this->type.PHP_EOL;
//        echo $url.PHP_EOL;
//        print_r($this->options);

        $response = $client->request($this->type, $url, $this->options);
        
        $this->response_headers = $response->getHeaders();

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
