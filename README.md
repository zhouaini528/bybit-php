### It is recommended that you read the official document first

Bybit docs [https://bybit-exchange.github.io/docs/linear/](https://bybit-exchange.github.io/docs/linear/)

All interface methods are initialized the same as those provided by Bybit. See details [src/api](https://github.com/zhouaini528/bybit-php/tree/master/src/Api)

[中文文档](https://github.com/zhouaini528/bybit-php/blob/master/README_CN.md)

### Other exchanges API

[Exchanges](https://github.com/zhouaini528/exchanges-php) It includes all of the following exchanges and is highly recommended.

[Bitmex](https://github.com/zhouaini528/bitmex-php) Support [Websocket](https://github.com/zhouaini528/bitmex-php/blob/master/README.md#Websocket)

[Okex](https://github.com/zhouaini528/okex-php) Support [Websocket](https://github.com/zhouaini528/okex-php/blob/master/README.md#Websocket)

[Huobi](https://github.com/zhouaini528/huobi-php) Support [Websocket](https://github.com/zhouaini528/huobi-php/blob/master/README.md#Websocket)

[Binance](https://github.com/zhouaini528/binance-php) Support [Websocket](https://github.com/zhouaini528/binance-php/blob/master/README.md#Websocket)

[Kucoin](https://github.com/zhouaini528/kucoin-php)

[Mxc](https://github.com/zhouaini528/Mxc-php)

[Coinbase](https://github.com/zhouaini528/coinbase-php)

[ZB](https://github.com/zhouaini528/zb-php)

[Bitfinex](https://github.com/zhouaini528/bitfinex-php)

[Bittrex](https://github.com/zhouaini528/bittrex-php)

[Kraken](https://github.com/zhouaini528/kraken-php)

[Gate](https://github.com/zhouaini528/gate-php)   

[Bigone](https://github.com/zhouaini528/bigone-php)   

[Crex24](https://github.com/zhouaini528/crex24-php)   

[Bybit](https://github.com/zhouaini528/bybit-php)  

[Coinbene](https://github.com/zhouaini528/coinbene-php)   

[Bitget](https://github.com/zhouaini528/bitget-php)   

[Poloniex](https://github.com/zhouaini528/poloniex-php)

**If you don't find the exchange SDK you want, you can tell me and I'll join them.**

#### Installation
```
composer require linwj/bybit
```

Support for more request Settings
```php
$bybit=new BybitLinear();
//or new
//$bybit=new BybitInverse();

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
```

#### USDT Perpetual

Market Data API [More](https://github.com/zhouaini528/bybit-php/blob/master/tests/linear/publics.php)
```php
$bybit=new BybitLinear();

try {
    $result=$bybit->publics()->getOrderBookL2([
        'symbol'=>'BTCUSDT'
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r($e->getMessage());
}

try {
    $result=$bybit->publics()->getKline([
        'symbol'=>'BTCUSDT',
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
    $result=$bybit->publics()->getRecentTradingRecords([
        'symbol'=>'BTCUSDT',
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
```

Place Active Order API [More](https://github.com/zhouaini528/bybit-php/blob/master/tests/linear/order.php)
```php
$bybit=new BybitLinear($key,$secret);

try {
    $result=$bybit->privates()->postOrderCreate([
        //'order_link_id'=>'xxxxxxxxxxxxxx',
        'side'=>'Buy',
        'symbol'=>'BTCUSDT',
        'order_type'=>'Limit',
        'qty'=>'1',
        'price'=>'4000',
        'time_in_force'=>'GoodTillCancel',
        'reduce_only'=>'false',
        'close_on_trigger'=>'false',
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
```

Place Conditional Order API [More](https://github.com/zhouaini528/bybit-php/blob/master/tests/linear/stoporder.php)
```php
$bybit=new BybitLinear($key,$secret);

try {
    $result=$bybit->privates()->postStopOrderCreate([
        //'order_link_id'=>'xxxxxxxxxxxxxx',
        'side'=>'Buy',
        'symbol'=>'BTCUSDT',
        'order_type'=>'Limit',
        'qty'=>'1',
        'price'=>'4000',
        'time_in_force'=>'GoodTillCancel',
        'reduce_only'=>'false',
        'close_on_trigger'=>'false',
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r($e->getMessage());
}

try {
    $result=$bybit->privates()->getStopOrderSearch([
        'order_id'=>'xxxxxxxxxxxxx',
        //'order_link_id'=>'xxxxxxxxxxxxxx',
        'symbol'=>'BTCUSDT',
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r($e->getMessage());
}

try {
    $result=$bybit->privates()->postStopOrderReplace([
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
    $result=$bybit->privates()->postStopOrderCancel([
        'order_id'=>'xxxxxxxxxxxxx',
        //'order_link_id'=>'xxxxxxxxxxxxxx',
        'symbol'=>'BTCUSDT',
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r($e->getMessage());
}

try {
    $result=$bybit->privates()->getStopOrderList([
        'order_id'=>'xxxxxxxxxxxxx',
        //'order_link_id'=>'xxxxxxxxxxxxxx',
        'symbol'=>'BTCUSDT',
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r($e->getMessage());
}
```

My Position API [More](https://github.com/zhouaini528/bybit-php/blob/master/tests/linear/position.php)
```php
$bybit=new BybitLinear($key,$secret);

try {
    $result=$bybit->privates()->getPositionList([
        'symbol'=>'BTCUSDT',
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r($e->getMessage());
}

try {
    $result=$bybit->privates()->postChangePositionMargin([
        'symbol'=>'BTCUSDT',
        'margin'=>'1'
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r($e->getMessage());
}

try {
    $result=$bybit->privates()->postPositionTradingStop([
        'symbol'=>'BTCUSDT',
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r($e->getMessage());
}

try {
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
}

try {
    $result=$bybit->privates()->getExecutionList([
        'symbol'=>'BTCUSDT',
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r($e->getMessage());
}
```

[More Test](https://github.com/zhouaini528/bybit-php/tree/master/tests/linear)

[More API](https://github.com/zhouaini528/bybit-php/tree/master/src/Api/Linear)

#### Inverse Perpetual

Market data API [More](https://github.com/zhouaini528/bybit-php/blob/master/tests/inverse/publics.php)
```php
$bybit=new BybitInverse();

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
```

Place Active Order API [More](https://github.com/zhouaini528/bybit-php/blob/master/tests/inverse/order.php)
```php
$bybit=new BybitInverse($key,$secret);

try {
    $result=$bybit->privates()->postOrderCreate([
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
    $result=$bybit->privates()->getOrder([
        'order_id'=>'xxxxxxxxxxxxx',
        //'order_link_id'=>'xxxxxxxxxxxxxx',
        'symbol'=>'BTCUSD',
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r($e->getMessage());
}

try {
    $result=$bybit->privates()->postOrderReplace([
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
    $result=$bybit->privates()->postOrderCancel([
        'order_id'=>'xxxxxxxxxxxxx',
        //'order_link_id'=>'xxxxxxxxxxxxxx',
        'symbol'=>'BTCUSD',
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r($e->getMessage());
}

try {
    $result=$bybit->privates()->getOrderList([
        'order_id'=>'xxxxxxxxxxxxx',
        //'order_link_id'=>'xxxxxxxxxxxxxx',
        'symbol'=>'BTCUSD',
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r($e->getMessage());
}
```

Place Conditional Order API [More](https://github.com/zhouaini528/bybit-php/blob/master/tests/inverse/stoporder.php)
```php
$bybit=new BybitInverse($key,$secret);

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

```

My Position Api [More](https://github.com/zhouaini528/bybit-php/blob/master/tests/inverse/position.php)
```php
$bybit=new BybitInverse($key,$secret);

try {
    $result=$bybit->privates()->getPositionList([
        'symbol'=>'BTCUSD',
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r($e->getMessage());
}

try {
    $result=$bybit->privates()->postChangePositionMargin([
        'symbol'=>'BTCUSD',
        'margin'=>'1'
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r($e->getMessage());
}

try {
    $result=$bybit->privates()->postPositionTradingStop([
        'symbol'=>'BTCUSD',
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r($e->getMessage());
}

try {
    $result=$bybit->privates()->getUserLeverage();
    print_r($result);
}catch (\Exception $e){
    print_r($e->getMessage());
}

try {
    $result=$bybit->privates()->postUserLeverageSave([
        'symbol'=>'BTCUSD',
        'leverage'=>'1'
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r($e->getMessage());
}

try {
    $result=$bybit->privates()->getExecutionList([
        'symbol'=>'BTCUSD',
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r($e->getMessage());
}
```

[More Test](https://github.com/zhouaini528/bybit-php/tree/master/tests/inverse)

[More API](https://github.com/zhouaini528/bybit-php/tree/master/src/Api/Inverse)

