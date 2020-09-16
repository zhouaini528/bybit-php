<?php
/**
 * @author lin <465382251@qq.com>
 * */
use \Lin\Crex\BybitInverse;

require __DIR__ .'../../vendor/autoload.php';

include 'key_secret.php';

$crex=new BybitInverse($key,$secret);

//You can set special needs
$crex->setOptions([
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
    $result=$crex->trading()->postPlaceOrder([
        'instrument'=>'ETH-BTC',
        'side'=>'buy',
        'type'=>'limit',
        'volume'=>'100',
        'price'=>'0.01',
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r($e->getMessage());
}

try {
    $result=$crex->trading()->getOrderStatus([
        'id'=>'xxxxxxxxxx'
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r($e->getMessage());
}

try {
    $result=$crex->trading()->getOrderTrades([
        'id'=>'xxxxxxxxxx'
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r($e->getMessage());
}

try {
    $result=$crex->trading()->postCancelOrdersById([
        //'id'=>'xxxxxxxxxx'
        'id'=>['111111','22222222']
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r($e->getMessage());
}

try {
    $result=$crex->trading()->getOrderHistory();
    print_r($result);
}catch (\Exception $e){
    print_r($e->getMessage());
}

try {
    $result=$crex->trading()->getTradeHistory();
    print_r($result);
}catch (\Exception $e){
    print_r($e->getMessage());
}
