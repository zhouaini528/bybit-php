### 建议您先阅读官方文档

Bybit 文档地址 [https://bybit-exchange.github.io/docs/linear/](https://bybit-exchange.github.io/docs/linear/)

所有接口方法的初始化都与Bybit提供的方法相同。更多细节 [src/api](https://github.com/zhouaini528/bybit-php/tree/master/src/Api)

[English Document](https://github.com/zhouaini528/bybit-php/blob/master/README.md)

QQ交流群：668421169

### 其他交易所API

[Exchanges](https://github.com/zhouaini528/exchanges-php) 它包含以下所有交易所，强烈推荐使用该SDK。

[Bitmex](https://github.com/zhouaini528/bitmex-php) 支持[Websocket](https://github.com/zhouaini528/bitmex-php/blob/master/README_CN.md#Websocket)

[Okex](https://github.com/zhouaini528/okex-php) 支持[Websocket](https://github.com/zhouaini528/okex-php/blob/master/README_CN.md#Websocket)

[Huobi](https://github.com/zhouaini528/huobi-php) 支持[Websocket](https://github.com/zhouaini528/huobi-php/blob/master/README_CN.md#Websocket)

[Binance](https://github.com/zhouaini528/binance-php) 支持[Websocket](https://github.com/zhouaini528/binance-php/blob/master/README_CN.md#Websocket)

[Kucoin](https://github.com/zhouaini528/kucoin-php)

[Mxc](https://github.com/zhouaini528/mxc-php)

[Coinbase](https://github.com/zhouaini528/coinbase-php)

[ZB](https://github.com/zhouaini528/zb-php)

[Bitfinex](https://github.com/zhouaini528/zb-php)

[Bittrex](https://github.com/zhouaini528/bittrex-php)

[Kraken](https://github.com/zhouaini528/kraken-php)

[Gate](https://github.com/zhouaini528/gate-php)   

[Bigone](https://github.com/zhouaini528/bigone-php)   

[Crex24](https://github.com/zhouaini528/crex24-php)   

[Bybit](https://github.com/zhouaini528/bybit-php)  

[Coinbene](https://github.com/zhouaini528/coinbene-php)   

[Bitget](https://github.com/zhouaini528/bitget-php)   

[Poloniex](https://github.com/zhouaini528/poloniex-php)

**如果没有找到你想要的交易所SDK你可以告诉我，我来加入它们。**

#### 安装方式
```
composer require linwj/bybit
```

支持更多的请求设置
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

#### USDT永续交易

行情接口 [More](https://github.com/zhouaini528/bybit-php/blob/master/tests/linear/publics.php)
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

活动订单接口 [More](https://github.com/zhouaini528/bybit-php/blob/master/tests/linear/order.php)
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

条件订单接口 [More](https://github.com/zhouaini528/bybit-php/blob/master/tests/linear/stoporder.php)
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

持仓接口 [More](https://github.com/zhouaini528/bybit-php/blob/master/tests/linear/position.php)
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

[更多用例](https://github.com/zhouaini528/bybit-php/tree/master/tests/linear)

[更多API](https://github.com/zhouaini528/bybit-php/tree/master/src/Api/Linear)

#### 反向永续交易

行情接口 [More](https://github.com/zhouaini528/bybit-php/blob/master/tests/inverse/publics.php)
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

活动订单接口 [More](https://github.com/zhouaini528/bybit-php/blob/master/tests/inverse/order.php)
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

条件订单接口 [More](https://github.com/zhouaini528/bybit-php/blob/master/tests/inverse/stoporder.php)
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

持仓接口 [More](https://github.com/zhouaini528/bybit-php/blob/master/tests/inverse/position.php)
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

[更多用例](https://github.com/zhouaini528/bybit-php/tree/master/tests/inverse)

[更多API](https://github.com/zhouaini528/bybit-php/tree/master/src/Api/Inverse)
