<?php
/**
 * @author lin <465382251@qq.com>
 * */

namespace Lin\Bybit;

use Lin\Bybit\Api\V5\Account;
use Lin\Bybit\Api\V5\Asset;
use Lin\Bybit\Api\V5\Market;
use Lin\Bybit\Api\V5\Order;
use Lin\Bybit\Api\V5\Position;
use Lin\Bybit\Api\V5\User;

class BybitV5
{
    protected $key;
    protected $secret;
    protected $host;

    protected $options=[];

    function __construct(string $key='',string $secret='',string $host='https://api.bybit.com'){
        $this->key=$key;
        $this->secret=$secret;
        $this->host=$host;
    }

    /**
     *
     * */
    private function init(){
        return [
            'key'=>$this->key,
            'secret'=>$this->secret,
            'host'=>$this->host,
            'options'=>$this->options,

            'platform'=>'spot',
            'version'=>'',
        ];
    }

    /**
     *
     * */
    function setOptions(array $options=[]){
        $this->options=$options;
    }

    /**
     *
     * */
    public function account(){
        return  new Account($this->init());
    }

    /**
     *
     * */
    public function asset(){
        return  new Asset($this->init());
    }

    /**
     *
     * */
    public function order(){
        return  new Order($this->init());
    }

    /**
     *
     * */
    public function market(){
        return  new Market($this->init());
    }

    /**
     *
     * */
    public function position(){
        return  new Position($this->init());
    }

    /**
     *
     * */
    public function user(){
        return  new User($this->init());
    }
}
