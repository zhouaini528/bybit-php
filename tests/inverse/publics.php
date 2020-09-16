<?php
/**
 * @author lin <465382251@qq.com>
 * */
use \Lin\Bybit\BybitInverse;

require __DIR__ .'../../../vendor/autoload.php';

include 'key_secret.php';

$bybit=new BybitInverse();

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
    $result=$bybit->publics()->getOrderBookL2([
        'symbol'=>'BTCUSD'
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r($e->getMessage());
}

try {
    $result=$bybit->publics()->getKlineList([
        'symbol'=>'BTCUSD',
        'interval'=>'15',
        'from'=>time()-3600,
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r($e->getMessage());
}

try {
    $result=$bybit->publics()->getTickers();
    print_r($result);
}catch (\Exception $e){
    print_r($e->getMessage());
}

try {
    $result=$bybit->publics()->getTradingRecords([
        'symbol'=>'BTCUSD',
        'limit'=>'5',
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r($e->getMessage());
}

try {
    $result=$bybit->publics()->getSymbols();
    print_r($result);
}catch (\Exception $e){
    print_r($e->getMessage());
}
