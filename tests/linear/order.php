<?php
/**
 * @author lin <465382251@qq.com>
 * */
use \Lin\Bybit\BybitLinear;

require __DIR__ .'../../../vendor/autoload.php';

include 'key_secret.php';

$bybit=new BybitLinear($key,$secret);

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
    $result=$bybit->privates()->postOrderCreate([
        //'order_link_id'=>'xxxxxxxxxxxxxx',
        'side'=>'Sell',
        'symbol'=>'BTCUSDT',
        'order_type'=>'Limit',
        'qty'=>'0.25',
        'price'=>'40000',
        'time_in_force'=>'GoodTillCancel',

        'reduce_only'=>'false',
        'close_on_trigger'=>'false',
        //or set
        'reduce_only'=>false,
        'close_on_trigger'=>false
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r($e->getMessage());
}


try {
    $result=$bybit->privates()->getOrderSearch([
        'order_id'=>'xxxxxxxxxxxxx',
        //'order_link_id'=>'xxxxxxxxxxxxxx',
        'symbol'=>'BTCUSDT',
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r($e->getMessage());
}

try {
    $result=$bybit->privates()->postOrderReplace([
        'order_id'=>'xxxxxxxxxxxxx',
        'symbol'=>'BTCUSDT',
        'p_r_qty'=>'2',
        'p_r_price'=>'4999'
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r($e->getMessage());
}

try {
    $result=$bybit->privates()->postOrderCancel([
        'order_id'=>'xxxxxxxxxxxxx',
        //'order_link_id'=>'xxxxxxxxxxxxxx',
        'symbol'=>'BTCUSDT',
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r($e->getMessage());
}

try {
    $result=$bybit->privates()->getOrderList([
        'order_id'=>'xxxxxxxxxxxxx',
        //'order_link_id'=>'xxxxxxxxxxxxxx',
        'symbol'=>'BTCUSDT',
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r($e->getMessage());
}
