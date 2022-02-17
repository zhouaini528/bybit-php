<?php
/**
 * @author lin <465382251@qq.com>
 * */

namespace Lin\Bybit\Api\Spot;

use Lin\Bybit\Request;

class Publics extends Request
{
    /*
     *GET /spot/v1/symbols
     * */
    public function getSymbols(array $data=[]){
        $this->type='GET';
        $this->path='/spot/v1/symbols';
        $this->data=$data;
        return $this->exec();
    }

    /*
     *GET /spot/quote/v1/depth
     * */
    public function getDepth(array $data=[]){
        $this->type='GET';
        $this->path='/spot/quote/v1/depth';
        $this->data=$data;
        return $this->exec();
    }

    /*
     *GET /spot/quote/v1/depth/merged
     * */
    public function getDepthMerged(array $data=[]){
        $this->type='GET';
        $this->path='/spot/quote/v1/depth/merged';
        $this->data=$data;
        return $this->exec();
    }

    /*
     *GET /spot/quote/v1/trades
     * */
    public function getTrades(array $data=[]){
        $this->type='GET';
        $this->path='/spot/quote/v1/trades';
        $this->data=$data;
        return $this->exec();
    }

    /*
     *GET /spot/quote/v1/kline
     * */
    public function getKline(array $data=[]){
        $this->type='GET';
        $this->path='/spot/quote/v1/kline';
        $this->data=$data;
        return $this->exec();
    }

    /*
     *GET /spot/quote/v1/ticker/24hr
     * */
    public function getTicker24hr(array $data=[]){
        $this->type='GET';
        $this->path='/spot/quote/v1/ticker/24hr';
        $this->data=$data;
        return $this->exec();
    }

    /*
     *GET /spot/quote/v1/ticker/price
     * */
    public function getTickerPrice(array $data=[]){
        $this->type='GET';
        $this->path='/spot/quote/v1/ticker/price';
        $this->data=$data;
        return $this->exec();
    }

    /*
     *GET /spot/quote/v1/ticker/book_ticker
     * */
    public function getTickerBookTicker(array $data=[]){
        $this->type='GET';
        $this->path='/spot/quote/v1/ticker/book_ticker';
        $this->data=$data;
        return $this->exec();
    }
}
