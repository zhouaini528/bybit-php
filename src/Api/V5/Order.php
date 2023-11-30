<?php
/**
 * @author lin <465382251@qq.com>
 * */

namespace Lin\Bybit\Api\V5;

use Lin\Bybit\RequestV5;

class Order extends RequestV5
{
    /*
     *POST /v5/order/create
     * */
    public function postCreate(array $data=[]){
        $this->type='POST';
        $this->path='/v5/order/create';
        $this->data=$data;
        return $this->exec();
    }

    /*
     *POST /v5/order/amend
     * */
    public function postAmend(array $data=[]){
        $this->type='POST';
        $this->path='/v5/order/amend';
        $this->data=$data;
        return $this->exec();
    }

    /*
     *POST /v5/order/cancel
     * */
    public function postCancel(array $data=[]){
        $this->type='POST';
        $this->path='/v5/order/cancel';
        $this->data=$data;
        return $this->exec();
    }

    /*
     *GET /v5/order/realtime
     * */
    public function getRealTime(array $data=[]){
        $this->type='GET';
        $this->path='/v5/order/realtime';
        $this->data=$data;
        return $this->exec();
    }

    /*
     *POST /v5/order/cancel-all
     * */
    public function postCancelAll(array $data=[]){
        $this->type='POST';
        $this->path='/v5/order/cancel-all';
        $this->data=$data;
        return $this->exec();
    }

    /*
     *GET /v5/order/history
     * */
    public function getHistory(array $data=[]){
        $this->type='GET';
        $this->path='/v5/order/history';
        $this->data=$data;
        return $this->exec();
    }

    /*
     *POST /v5/order/create-batch
     * */
    public function postCreateBatch(array $data=[]){
        $this->type='POST';
        $this->path='/v5/order/create-batch';
        $this->data=$data;
        return $this->exec();
    }

    /*
     *POST /v5/order/amend-batch
     * */
    public function postAmendBatch(array $data=[]){
        $this->type='POST';
        $this->path='/v5/order/amend-batch';
        $this->data=$data;
        return $this->exec();
    }

    /*
     *POST /v5/order/cancel-batch
     * */
    public function postCancelBatch(array $data=[]){
        $this->type='POST';
        $this->path='/v5/order/cancel-batch';
        $this->data=$data;
        return $this->exec();
    }

    /*
     *GET /v5/order/spot-borrow-check
     * */
    public function getSpotBorrowCheck(array $data=[]){
        $this->type='GET';
        $this->path='/v5/order/spot-borrow-check';
        $this->data=$data;
        return $this->exec();
    }

    /*
     *POST /v5/order/disconnected-cancel-all
     * */
    public function postDisconnectedCancelAll(array $data=[]){
        $this->type='POST';
        $this->path='/v5/order/disconnected-cancel-all';
        $this->data=$data;
        return $this->exec();
    }
}
