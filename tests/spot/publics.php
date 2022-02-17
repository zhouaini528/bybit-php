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
]);

try {
    $result=$bybit->publics()->getSymbols();
    print_r($result);
}catch (\Exception $e){
    print_r($e->getMessage());
}

