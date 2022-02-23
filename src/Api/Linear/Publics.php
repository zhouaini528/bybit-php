<?php
/**
 * @author lin <465382251@qq.com>
 * */

namespace Lin\Bybit\Api\Linear;

use Lin\Bybit\Request;

class Publics extends Request
{
    /*
     *GET /v2/public/orderBook/L2
     * */
    public function getOrderBookL2(array $data=[]){
        $this->type='GET';
        $this->path='/v2/public/orderBook/L2';
        $this->data=$data;
        return $this->exec();
    }

    /*
     *GET /public/linear/kline
     * */
    public function getKline(array $data=[]){
        $this->type='GET';
        $this->path='/public/linear/kline';
        $this->data=$data;
        return $this->exec();
    }

    /*
     *GET /v2/public/tickers
     * */
    public function getTickers(array $data=[]){
        $this->type='GET';
        $this->path='/v2/public/tickers';
        $this->data=$data;
        return $this->exec();
    }

    /*
     *GET /public/linear/recent-trading-records
     * */
    public function getRecentTradingRecords(array $data=[]){
        $this->type='GET';
        $this->path='/public/linear/recent-trading-records';
        $this->data=$data;
        return $this->exec();
    }

    /*
     *GET /v2/public/symbols
     * */
    public function getSymbols(array $data=[]){
        $this->type='GET';
        $this->path='/v2/public/symbols';
        $this->data=$data;
        return $this->exec();
    }

    /*
     *GET /v2/public/liq-records
     * */
    public function getLiqRecords(array $data=[]){
        $this->type='GET';
        $this->path='/v2/public/liq-records';
        $this->data=$data;
        return $this->exec();
    }

    /*
     *GET /public/linear/funding/prev-funding-rate
     * */
    public function getFundingPrevRate(array $data=[]){
        $this->type='GET';
        $this->path='/public/linear/funding/prev-funding-rate';
        $this->data=$data;
        return $this->exec();
    }

    /*
     *GET /public/linear/index-price-kline
     * */
    public function getIndexPriceKline(array $data=[]){
        $this->type='GET';
        $this->path='/public/linear/index-price-kline';
        $this->data=$data;
        return $this->exec();
    }

    /*
     *GET /public/linear/mark-price-kline
     * */
    public function getMarkPriceKline(array $data=[]){
        $this->type='GET';
        $this->path='/public/linear/mark-price-kline';
        $this->data=$data;
        return $this->exec();
    }

    /*
     *GET /v2/public/open-interest
     * */
    public function getOpenInterest(array $data=[]){
        $this->type='GET';
        $this->path='/v2/public/open-interest';
        $this->data=$data;
        return $this->exec();
    }

    /*
     *GET /v2/public/big-deal
     * */
    public function getBigDeal(array $data=[]){
        $this->type='GET';
        $this->path='/v2/public/big-deal';
        $this->data=$data;
        return $this->exec();
    }

    /*
     *GET /v2/public/account-ratio
     * */
    public function getAccountRatio(array $data=[]){
        $this->type='GET';
        $this->path='/v2/public/account-ratio';
        $this->data=$data;
        return $this->exec();
    }

    /*
     *GET /v2/public/time
     * */
    public function getTime(array $data=[]){
        $this->type='GET';
        $this->path='/v2/public/time';
        $this->data=$data;
        return $this->exec();
    }

    /*
     *GET /v2/public/announcement
     * */
    public function getAnnouncement(array $data=[]){
        $this->type='GET';
        $this->path='/v2/public/announcement';
        $this->data=$data;
        return $this->exec();
    }
}
