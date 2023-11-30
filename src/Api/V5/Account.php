<?php
/**
 * @author lin <465382251@qq.com>
 * */

namespace Lin\Bybit\Api\V5;

use Lin\Bybit\RequestV5;

class Account extends RequestV5
{
    /*
     *GET /v5/account/wallet-balance
     * */
    public function getWalletBalance(array $data=[]){
        $this->type='GET';
        $this->path='/v5/account/wallet-balance';
        $this->data=$data;
        return $this->exec();
    }

    /*
     *POST /v5/account/upgrade-to-uta
     * */
    public function postUpgradeToUta(array $data=[]){
        $this->type='POST';
        $this->path='/v5/account/upgrade-to-uta';
        $this->data=$data;
        return $this->exec();
    }

    /*
     *GET /v5/account/borrow-history
     * */
    public function getBorrowHistory(array $data=[]){
        $this->type='GET';
        $this->path='/v5/account/borrow-history';
        $this->data=$data;
        return $this->exec();
    }

    /*
     *POST /v5/account/set-collateral-switch
     * */
    public function postSetCollateralSwitch(array $data=[]){
        $this->type='POST';
        $this->path='/v5/account/set-collateral-switch';
        $this->data=$data;
        return $this->exec();
    }

    /*
     *GET /v5/account/collateral-info
     * */
    public function getCollateralInfo(array $data=[]){
        $this->type='GET';
        $this->path='/v5/account/collateral-info';
        $this->data=$data;
        return $this->exec();
    }

    /*
     *GET /v5/asset/coin-greeks
     * */
    public function getCoinGreeks(array $data=[]){
        $this->type='GET';
        $this->path='/v5/asset/coin-greeks';
        $this->data=$data;
        return $this->exec();
    }

    /*
     *GET /v5/account/fee-rate
     * */
    public function getFeeRate(array $data=[]){
        $this->type='GET';
        $this->path='/v5/account/fee-rate';
        $this->data=$data;
        return $this->exec();
    }

    /*
     *GET /v5/account/info
     * */
    public function getInfo(array $data=[]){
        $this->type='GET';
        $this->path='/v5/account/info';
        $this->data=$data;
        return $this->exec();
    }

    /*
     *GET /v5/account/transaction-log
     * */
    public function getTransactionLog(array $data=[]){
        $this->type='GET';
        $this->path='/v5/account/transaction-log';
        $this->data=$data;
        return $this->exec();
    }

    /*
     *POST /v5/account/set-margin-mode
     * */
    public function postSetMarginMode(array $data=[]){
        $this->type='POST';
        $this->path='/v5/account/set-margin-mode';
        $this->data=$data;
        return $this->exec();
    }

    /*
     *POST /v5/account/set-hedging-mode
     * */
    public function postSetHedgingMode(array $data=[]){
        $this->type='POST';
        $this->path='/v5/account/set-hedging-mode';
        $this->data=$data;
        return $this->exec();
    }

    /*
     *POST /v5/account/mmp-modify
     * */
    public function postMmpModify(array $data=[]){
        $this->type='POST';
        $this->path='/v5/account/mmp-modify';
        $this->data=$data;
        return $this->exec();
    }

    /*
     *POST /v5/account/mmp-reset
     * */
    public function postMmpReset(array $data=[]){
        $this->type='POST';
        $this->path='/v5/account/mmp-reset';
        $this->data=$data;
        return $this->exec();
    }

    /*
     *GET /v5/account/mmp-state
     * */
    public function getMmpState(array $data=[]){
        $this->type='GET';
        $this->path='/v5/account/mmp-state';
        $this->data=$data;
        return $this->exec();
    }
}
