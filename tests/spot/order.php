<?php
/**
 * @author lin <465382251@qq.com>
 * */
use \Lin\Bybit\BybitSpot;

require __DIR__ .'../../../vendor/autoload.php';

include 'key_secret.php';

$bybit=new BybitSpot($key,$secret);

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
/*
try {
    $result=$bybit->privates()->postOrder([
        'symbol'=>'BTCUSDT',
        'qty'=>'1',
        'side'=>'BUY',
        'type'=>'LIMIT',
        'price'=>'10000',
        //'orderLinkId'=>'xxxxxxxxxxx',
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r($e->getMessage());
}*/

/*
try {
    $result=$bybit->privates()->getOrder([
        'orderLinkId'=>'162081160171552',
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r($e->getMessage());
}
*/

try {
    $result=$bybit->privates()->deleteOrder([
        'orderLinkId'=>'162081160171552',
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r($e->getMessage());
}
