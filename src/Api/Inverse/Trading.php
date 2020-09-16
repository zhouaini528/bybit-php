<?php
/**
 * @author lin <465382251@qq.com>
 * */

namespace Lin\Crex\Api;

use Lin\Crex\Request;

class Trading extends Request
{
    /*
     *POST https://api.crex24.com/v2/trading/placeOrder
     * */
    public function postPlaceOrder(array $data=[]){
        $this->type='POST';
        $this->path='/v2/trading/placeOrder';
        $this->data=$data;
        return $this->exec();
    }

    /*
     *GET https://api.crex24.com/v2/trading/orderStatus
     * */
    public function getOrderStatus(array $data=[]){
        $this->type='GET';
        $this->path='/v2/trading/orderStatus';
        $this->data=$data;
        return $this->exec();
    }

    /*
     *GET https://api.crex24.com/v2/trading/orderTrades
     * */
    public function getOrderTrades(array $data=[]){
        $this->type='GET';
        $this->path='/v2/trading/orderTrades';
        $this->data=$data;
        return $this->exec();
    }

    /*
     *POST https://api.crex24.com/v2/trading/modifyOrder
     * */
    public function getModifyOrder(array $data=[]){
        $this->type='GET';
        $this->path='/v2/trading/modifyOrder';
        $this->data=$data;
        return $this->exec();
    }

    /*
     *GET https://api.crex24.com/v2/trading/activeOrders
     * */
    public function getActiveOrders(array $data=[]){
        $this->type='GET';
        $this->path='/v2/trading/activeOrders';
        $this->data=$data;
        return $this->exec();
    }

    /*
     *POST https://api.crex24.com/v2/trading/cancelOrdersById
     * */
    public function postCancelOrdersById(array $data=[]){
        $this->type='POST';
        $this->path='/v2/trading/cancelOrdersById';
        $this->data=$data;
        return $this->exec();
    }

    /*
     *GET https://api.crex24.com/v2/trading/orderHistory
     * */
    public function getOrderHistory(array $data=[]){
        $this->type='GET';
        $this->path='/v2/trading/orderHistory';
        $this->data=$data;
        return $this->exec();
    }

    /*
     *GET https://api.crex24.com/v2/trading/tradeHistory
     * */
    public function getTradeHistory(array $data=[]){
        $this->type='GET';
        $this->path='/v2/trading/tradeHistory';
        $this->data=$data;
        return $this->exec();
    }

    /*
     *GET https://api.crex24.com/v2/trading/tradingFee
     * */
    public function getTradingFee(array $data=[]){
        $this->type='GET';
        $this->path='/v2/trading/tradingFee';
        $this->data=$data;
        return $this->exec();
    }

    /*
     *GET https://api.crex24.com/v2/trading/tradeFee
     * */
    public function getTradeFee(array $data=[]){
        $this->type='GET';
        $this->path='/v2/trading/tradeFee';
        $this->data=$data;
        return $this->exec();
    }
}
