<?php
/**
 * @author lin <465382251@qq.com>
 * */

namespace Lin\Bybit\Api\Spot;

use Lin\Bybit\Request;

class Privates extends Request
{
    /*
     *POST /spot/v1/order
     * */
    public function postOrder(array $data=[]){
        $this->type='POST';
        $this->path='/spot/v1/order';
        $this->data=$data;
        return $this->exec();
    }

    /*
     *GET /spot/v1/order
     * */
    public function getOrder(array $data=[]){
        $this->type='GET';
        $this->path='/spot/v1/order';
        $this->data=$data;
        return $this->exec();
    }

    /*
     *DELETE /spot/v1/order
     * */
    public function deleteOrder(array $data=[]){
        $this->type='DELETE';
        $this->path='/spot/v1/order';
        $this->data=$data;
        return $this->exec();
    }

    /*
     *DELETE /spot/v1/order/fast
     * */
    public function deleteOrderFast(array $data=[]){
        $this->type='DELETE';
        $this->path='/spot/v1/order/fast';
        $this->data=$data;
        return $this->exec();
    }

    /*
     *DELETE /spot/order/batch-cancel
     * */
    public function deleteOrderBatchCancel(array $data=[]){
        $this->type='DELETE';
        $this->path='/spot/order/batch-cancel';
        $this->data=$data;
        return $this->exec();
    }

    /*
     *DELETE /spot/order/batch-fast-cancel
     * */
    public function deleteOrderBatchFastCancel(array $data=[]){
        $this->type='DELETE';
        $this->path='/spot/order/batch-fast-cancel';
        $this->data=$data;
        return $this->exec();
    }

    /*
     *DELETE /spot/order/batch-cancel-by-ids
     * */
    public function deleteOrderBatchCancelByIds(array $data=[]){
        $this->type='DELETE';
        $this->path='/spot/order/batch-cancel-by-ids';
        $this->data=$data;
        return $this->exec();
    }

    /*
     *GET /spot/v1/open-orders
     * */
    public function getOpenOrders(array $data=[]){
        $this->type='GET';
        $this->path='/spot/v1/open-orders';
        $this->data=$data;
        return $this->exec();
    }

    /*
     *GET /spot/v1/history-orders
     * */
    public function getHistoryOrders(array $data=[]){
        $this->type='GET';
        $this->path='/spot/v1/history-orders';
        $this->data=$data;
        return $this->exec();
    }

    /*
     *GET /spot/v1/myTrades
     * */
    public function getMyTrades(array $data=[]){
        $this->type='GET';
        $this->path='/spot/v1/myTrades';
        $this->data=$data;
        return $this->exec();
    }

    /*
     *GET /spot/v1/account
     * */
    public function getAccount(array $data=[]){
        $this->type='GET';
        $this->path='/spot/v1/account';
        $this->data=$data;
        return $this->exec();
    }
}
