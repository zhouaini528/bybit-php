<?php
/**
 * @author lin <465382251@qq.com>
 * */

namespace Lin\Bybit\Api\V5;

use Lin\Bybit\RequestV5;

class Position extends RequestV5
{
    /*
     *GET /v5/position/list
     * */
    public function getList(array $data=[]){
        $this->type='GET';
        $this->path='/v5/position/list';
        $this->data=$data;
        return $this->exec();
    }

    /*
     *POST /v5/position/set-leverage
     * */
    public function postSetLeverage(array $data=[]){
        $this->type='POST';
        $this->path='/v5/position/set-leverage';
        $this->data=$data;
        return $this->exec();
    }

    /*
     *POST /v5/position/switch-isolated
     * */
    public function postSwitchIsolated(array $data=[]){
        $this->type='POST';
        $this->path='/v5/position/switch-isolated';
        $this->data=$data;
        return $this->exec();
    }

    /*
     *POST /v5/position/set-tpsl-mode
     * */
    public function postSetTpslMode(array $data=[]){
        $this->type='POST';
        $this->path='/v5/position/set-tpsl-mode';
        $this->data=$data;
        return $this->exec();
    }

    /*
     *POST /v5/position/switch-mode
     * */
    public function postSwitchMode(array $data=[]){
        $this->type='POST';
        $this->path='/v5/position/switch-mode';
        $this->data=$data;
        return $this->exec();
    }

    /*
     *POST /v5/position/set-risk-limit
     * */
    public function postSetRiskLimit(array $data=[]){
        $this->type='POST';
        $this->path='/v5/position/set-risk-limit';
        $this->data=$data;
        return $this->exec();
    }

    /*
     *POST /v5/position/trading-stop
     * */
    public function postTradingStop(array $data=[]){
        $this->type='POST';
        $this->path='/v5/position/trading-stop';
        $this->data=$data;
        return $this->exec();
    }

    /*
     *POST /v5/position/set-auto-add-margin
     * */
    public function postSetAutoAddMargin(array $data=[]){
        $this->type='POST';
        $this->path='/v5/position/set-auto-add-margin';
        $this->data=$data;
        return $this->exec();
    }

    /*
     *POST /v5/position/add-margin
     * */
    public function postAddMargin(array $data=[]){
        $this->type='POST';
        $this->path='/v5/position/add-margin';
        $this->data=$data;
        return $this->exec();
    }

    /*
     *GET /v5/position/closed-pnl
     * */
    public function getClosedPnl(array $data=[]){
        $this->type='GET';
        $this->path='/v5/position/closed-pnl';
        $this->data=$data;
        return $this->exec();
    }

    /*
     *POST /v5/position/confirm-pending-mmr
     * */
    public function postConfirmPendingMmr(array $data=[]){
        $this->type='POST';
        $this->path='/v5/position/confirm-pending-mmr';
        $this->data=$data;
        return $this->exec();
    }
}
