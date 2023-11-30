<?php
/**
 * @author lin <465382251@qq.com>
 * */

namespace Lin\Bybit\Api\V5;

use Lin\Bybit\RequestV5;

class Market extends RequestV5
{
    /*
     *GET /v5/market/kline
     * */
    public function getKline(array $data=[]){
        $this->type='GET';
        $this->path='/v5/market/kline';
        $this->data=$data;
        return $this->exec();
    }

    /*
     *GET /v5/market/mark-price-kline
     * */
    public function getMarkPriceKline(array $data=[]){
        $this->type='GET';
        $this->path='/v5/market/mark-price-kline';
        $this->data=$data;
        return $this->exec();
    }

    /*
     *GET /v5/market/index-price-kline
     * */
    public function getIndexPriceKline(array $data=[]){
        $this->type='GET';
        $this->path='/v5/market/index-price-kline';
        $this->data=$data;
        return $this->exec();
    }

    /*
     *GET /v5/market/premium-index-price-kline
     * */
    public function getPremiumIndexPriceKline(array $data=[]){
        $this->type='GET';
        $this->path='/v5/market/premium-index-price-kline';
        $this->data=$data;
        return $this->exec();
    }

    /*
     *GET /v5/market/instruments-info
     * */
    public function getInstrumentsInfo(array $data=[]){
        $this->type='GET';
        $this->path='/v5/market/instruments-info';
        $this->data=$data;
        return $this->exec();
    }

    /*
     *GET /v5/market/orderbook
     * */
    public function getOrderBook(array $data=[]){
        $this->type='GET';
        $this->path='/v5/market/orderbook';
        $this->data=$data;
        return $this->exec();
    }

    /*
     *GET /v5/market/tickers
     * */
    public function getTickers(array $data=[]){
        $this->type='GET';
        $this->path='/v5/market/tickers';
        $this->data=$data;
        return $this->exec();
    }

    /*
     *GET /v5/market/funding/history
     * */
    public function getFundingHistory(array $data=[]){
        $this->type='GET';
        $this->path='/v5/market/funding/history';
        $this->data=$data;
        return $this->exec();
    }

    /*
     *GET /v5/market/recent-trade
     * */
    public function getRecentTrade(array $data=[]){
        $this->type='GET';
        $this->path='/v5/market/recent-trade';
        $this->data=$data;
        return $this->exec();
    }

    /*
     *GET /v5/market/open-interest
     * */
    public function getOpenInterest(array $data=[]){
        $this->type='GET';
        $this->path='/v5/market/open-interest';
        $this->data=$data;
        return $this->exec();
    }

    /*
     *GET /v5/market/historical-volatility
     * */
    public function getHistoricalVolatility(array $data=[]){
        $this->type='GET';
        $this->path='/v5/market/historical-volatility';
        $this->data=$data;
        return $this->exec();
    }

    /*
     *GET /v5/market/insurance
     * */
    public function getInsurance(array $data=[]){
        $this->type='GET';
        $this->path='/v5/market/insurance';
        $this->data=$data;
        return $this->exec();
    }

    /*
     *GET /v5/market/risk-limit
     * */
    public function getRiskLimit(array $data=[]){
        $this->type='GET';
        $this->path='/v5/market/risk-limit';
        $this->data=$data;
        return $this->exec();
    }

    /*
     *GET /v5/market/delivery-price
     * */
    public function getDeliveryPrice(array $data=[]){
        $this->type='GET';
        $this->path='/v5/market/delivery-price';
        $this->data=$data;
        return $this->exec();
    }

    /*
     *GET /v5/market/account-ratio
     * */
    public function getAccountRatio(array $data=[]){
        $this->type='GET';
        $this->path='/v5/market/account-ratio';
        $this->data=$data;
        return $this->exec();
    }

    /*
     *GET /v5/market/time
     * */
    public function getTime(array $data=[]){
        $this->type='GET';
        $this->path='/v5/market/time';
        $this->data=$data;
        return $this->exec();
    }

}
