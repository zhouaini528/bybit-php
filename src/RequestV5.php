<?php
/**
 * @author lin <465382251@qq.com>
 * */

namespace Lin\Bybit;

use GuzzleHttp\Exception\RequestException;
use Lin\Bybit\Exceptions\Exception;

class RequestV5
{
    protected $key='';

    protected $secret='';

    protected $host='';



    protected $nonce='';

    protected $recv_window='5000';

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
     * Get Response Headers
     * */
    public function getResponseHeaders(){
        return $this->response_headers;
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
            if(isset($this->options['headers']) && array_key_exists('X-BAPI-RECV-WINDOW',$this->options['headers'])){
                $this->recv_window=$this->options['headers']['X-BAPI-RECV-WINDOW'];
                unset($this->options['headers']['X-BAPI-RECV-WINDOW']);
            }

            //timestamp+api_key+recv_window+queryString
            $params=$this->nonce.$this->key.$this->recv_window;

            if($this->type=='GET') $params.=urldecode(http_build_query($this->data));
            else $params.=json_encode($this->data);

            $this->signature = hash_hmac('sha256', $params, $this->secret);
        }
    }

    /*
     *
     * */
    protected function headers(){
        if(!empty($this->key) && !empty($this->secret)){
            //X-BAPI-API-KEY - API密鑰
            //X-BAPI-TIMESTAMP - UTC毫秒時間戳
            //X-BAPI-SIGN - 請求參數簽名
            //X-Referer or Referer - 經紀商用戶專用的頭參數
            //X-BAPI-RECV-WINDOW 默認值為5000
            //cdn-request-id
            $this->headers=[
                //'Content-Type' => 'application/json',
                'X-BAPI-API-KEY'=>$this->key,
                'X-BAPI-TIMESTAMP'=>$this->nonce,
                'X-BAPI-SIGN'=>$this->signature,
                'X-BAPI-RECV-WINDOW'=>$this->recv_window,
            ];
        }
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

        if($this->type=='GET') $url.= '?'.http_build_query($this->data);
        else $this->options['body']=json_encode($this->data);

        //echo $this->type.PHP_EOL;
        //echo $url.PHP_EOL;
        //print_r($this->options);
        //die;

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
