<?php
/**
 * @author lin <465382251@qq.com>
 * */
use \Lin\Bybit\BybitInverse;

require __DIR__ .'../../../vendor/autoload.php';

include 'key_secret.php';

$bybit=new BybitInverse($key,$secret);

//You can set special needs
$bybit->setOptions([
    //Set the request timeout to 60 seconds by default
    'timeout'=>10,

    //If you are developing locally and need an agent, you can set this
    //'proxy'=>true,
    //More flexible Settings
    /* 'proxy'=>[
     'http'  => 'http://127.0.0.1:12333',
     'https' => 'http://127.0.0.1:12333',
     'no'    =>  ['.cn']
     ], */
    //Close the certificate
    //'verify'=>false,
]);


try {
    $result=$bybit->privates()->postStopOrderCreate([
        //'order_link_id'=>'xxxxxxxxxxxxxx',
        'side'=>'Buy',
        'symbol'=>'BTCUSD',
        'order_type'=>'Limit',
        'qty'=>'1',
        'price'=>'4000',
        'time_in_force'=>'GoodTillCancel',
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r($e->getMessage());
}

try {
    $result=$bybit->privates()->getStopOrder([
        'order_id'=>'xxxxxxxxxxxxx',
        //'order_link_id'=>'xxxxxxxxxxxxxx',
        'symbol'=>'BTCUSD',
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r($e->getMessage());
}

try {
    $result=$bybit->privates()->postStopOrderReplace([
        'order_id'=>'xxxxxxxxxxxxx',
        'symbol'=>'BTCUSD',
        'p_r_qty'=>'2',
        'p_r_price'=>'4999'
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r($e->getMessage());
}

try {
    $result=$bybit->privates()->postStopOrderCancel([
        'order_id'=>'xxxxxxxxxxxxx',
        //'order_link_id'=>'xxxxxxxxxxxxxx',
        'symbol'=>'BTCUSD',
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r($e->getMessage());
}

try {
    $result=$bybit->privates()->getStopOrderList([
        'order_id'=>'xxxxxxxxxxxxx',
        //'order_link_id'=>'xxxxxxxxxxxxxx',
        'symbol'=>'BTCUSD',
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r($e->getMessage());
}
