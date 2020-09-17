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
    $result=$bybit->privates()->getPositionList([
        'symbol'=>'BTCUSDT',
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r($e->getMessage());
}

/*try {
    $result=$bybit->privates()->postChangePositionMargin([
        'symbol'=>'BTCUSDT',
        'margin'=>'1'
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r($e->getMessage());
}*/

try {
    $result=$bybit->privates()->postPositionTradingStop([
        'symbol'=>'BTCUSDT',
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r($e->getMessage());
}

/*try {
    $result=$bybit->privates()->getUserLeverage();
    print_r($result);
}catch (\Exception $e){
    print_r($e->getMessage());
}

try {
    $result=$bybit->privates()->postUserLeverageSave([
        'symbol'=>'BTCUSDT',
        'leverage'=>'1'
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r($e->getMessage());
}*/

/*try {
    $result=$bybit->privates()->getExecutionList([
        'symbol'=>'BTCUSDT',
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r($e->getMessage());
}*/
