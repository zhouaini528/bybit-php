<?php
/**
 * @author lin <465382251@qq.com>
 * */

use Lin\Crex\BybitInverse;

require __DIR__ .'../../vendor/autoload.php';

$crex=new BybitInverse();

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
    $result=$crex->market()->getCurrencies();
    print_r($result);
}catch (\Exception $e){
    print_r($e->getMessage());
}

try {
    $result=$crex->market()->getInstruments();
    print_r($result);
}catch (\Exception $e){
    print_r($e->getMessage());
}

try {
    $result=$crex->market()->getTickers();
    print_r($result);
}catch (\Exception $e){
    print_r($e->getMessage());
}

try {
    $result=$crex->market()->getRecentTrades([
        'instrument'=>'LTC-BTC'
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r($e->getMessage());
}

try {
    $result=$crex->market()->getOrderBook([
        'instrument'=>'LTC-BTC',
        'limit'=>10
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r($e->getMessage());
}

try {
    $result=$crex->market()->getOhlcv([
        'instrument'=>'LTC-BTC',
        'granularity'=>'30m'
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r($e->getMessage());
}

try {
    $result=$crex->market()->getTradingFeeSchedules();
    print_r($result);
}catch (\Exception $e){
    print_r($e->getMessage());
}

try {
    $result=$crex->market()->getWithdrawalFees([
        'currency'=>'LTC'
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r($e->getMessage());
}


