<?php
/**
 * @author lin <465382251@qq.com>
 * */
use \Lin\Bybit\BybitV5;

require __DIR__ .'../../../vendor/autoload.php';

include 'key_secret.php';

$bybit=new BybitV5($key,$secret);

//You can set special needs
$bybit->setOptions([
    //Set the request timeout to 60 seconds by default
    'timeout'=>10,

    'headers'=>[
        //X-Referer or Referer - 經紀商用戶專用的頭參數
        //X-BAPI-RECV-WINDOW 默認值為5000
        //cdn-request-id
        'X-BAPI-RECV-WINDOW'=>'6000',
    ]
]);


try {
    $result=$bybit->order()->postCreate([
        'category'=>'spot',
        'symbol'=>'BTCUSDT',
        'side'=>'buy',
        'orderType'=>'limit',
        'qty'=>'1',
        'price'=>'1000',

        //'orderLinkId'=>'xxxxxxxxxxx',
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r($e->getMessage());
}

try {
    $result=$bybit->order()->getRealTime([
        'category'=>'spot',
        'symbol'=>'BTCUSDT',

        'orderId'=>'xxxxxxxxxx',
        //'orderLinkId'=>'xxxxxxxxxxx',
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r($e->getMessage());
}


try {
    $result=$bybit->order()->getSpotBorrowCheck([
        'category'=>'spot',
        'symbol'=>'BTCUSDT',
        'side'=>'by'
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r($e->getMessage());
}
