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
        //'X-BAPI-RECV-WINDOW'=>'6000',
    ]
]);


/*
 *
 * {
    "category": "linear",
    "symbol": "BTCUSDT",
    "side": "Buy",
    "orderType": "Limit",
    "qty": "1",
    "price": "25000",
    "timeInForce": "GTC",
    "positionIdx": 0,
    "orderLinkId": "usdt-test-01",
    "reduceOnly": false,
    "takeProfit": "28000",
    "stopLoss": "20000",
    "tpslMode": "Partial",
    "tpOrderType": "Limit",
    "slOrderType": "Limit",
    "tpLimitPrice": "27500",
    "slLimitPrice": "20500"
}
 *
 * */


/*
try {
    $result=$bybit->order()->postCreate([
        'category'=>'inverse',
        'symbol'=>'BTCUSD',
        'side'=>'Buy',
        'orderType'=>'market',
        'qty'=>'5',//usd
        //'price'=>'100000',
        'reduceOnly'=>false,
        //'positionIdx'=>0
        //'orderLinkId'=>'xxxxxxxxxxx',
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r($e->getMessage());
}
*/

try {
    $result=$bybit->order()->postCreate([
        'category'=>'inverse',
        'symbol'=>'BTCUSD',
        'side'=>'Sell',
        'orderType'=>'Market',
        'qty'=>'5',//usd
        //'price'=>'100000',
        'reduceOnly'=>'true',
        //'positionIdx'=>0
        //'orderLinkId'=>'xxxxxxxxxxx',
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r($e->getMessage());
}


die;
try {
    $result=$bybit->order()->postCreate([
        'category'=>'inverse',
        'symbol'=>'BTCUSD',
        'side'=>'Buy',
        'orderType'=>'Limit',
        'qty'=>'5',//usd
        'price'=>'100000',
        'reduceOnly'=>false,
        'positionIdx'=>0
        //'orderLinkId'=>'xxxxxxxxxxx',
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r($e->getMessage());
}

$orderId=$result['result']['orderId'];
//die;
sleep(2);
try {
    $result=$bybit->order()->getRealTime([
        'category'=>'inverse',
        'symbol'=>'BTCUSD',

        //'orderId'=>'xxxxxxxxxx',
        //'orderLinkId'=>'xxxxxxxxxxx',
        'orderId'=>$orderId,
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r($e->getMessage());
}

sleep(2);
try {
    $result=$bybit->order()->postCancel([
        'category'=>'inverse',
        'symbol'=>'BTCUSD',

        //'orderId'=>'xxxxxxxxxx',
        //'orderLinkId'=>'xxxxxxxxxxx',
        'orderId'=>$orderId,
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r($e->getMessage());
}
