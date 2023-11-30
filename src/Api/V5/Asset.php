<?php
/**
 * @author lin <465382251@qq.com>
 * */

namespace Lin\Bybit\Api\V5;

use Lin\Bybit\RequestV5;

class Asset extends RequestV5
{
    /*
     *GET /v5/asset/exchange/order-record
     * */
    public function getExchangeOrderRecord(array $data=[]){
        $this->type='GET';
        $this->path='/v5/asset/exchange/order-record';
        $this->data=$data;
        return $this->exec();
    }

    /*
     *GET /v5/asset/delivery-record
     * */
    public function getDeliveryRecord(array $data=[]){
        $this->type='GET';
        $this->path='/v5/asset/delivery-record';
        $this->data=$data;
        return $this->exec();
    }

    /*
     *GET /v5/asset/settlement-record
     * */
    public function getSettlementRecord(array $data=[]){
        $this->type='GET';
        $this->path='/v5/asset/settlement-record';
        $this->data=$data;
        return $this->exec();
    }

    /*
     *GET /v5/asset/transfer/query-inter-transfer-list
     * */
    public function getTransferQueryInterTransferList(array $data=[]){
        $this->type='GET';
        $this->path='/v5/asset/transfer/query-inter-transfer-list';
        $this->data=$data;
        return $this->exec();
    }

    /*
     *GET /v5/asset/transfer/query-asset-info
     * */
    public function getTransferQueryAssetInfo(array $data=[]){
        $this->type='GET';
        $this->path='/v5/asset/transfer/query-asset-info';
        $this->data=$data;
        return $this->exec();
    }

    /*
     *GET /v5/asset/transfer/query-account-coins-balance
     * */
    public function getTransferQueryAccountCoinsBalance(array $data=[]){
        $this->type='GET';
        $this->path='/v5/asset/transfer/query-account-coins-balance';
        $this->data=$data;
        return $this->exec();
    }

    /*
     *GET /v5/asset/transfer/query-account-coin-balance
     * */
    public function getTransferQueryAccountCoinBalance(array $data=[]){
        $this->type='GET';
        $this->path='/v5/asset/transfer/query-account-coin-balance';
        $this->data=$data;
        return $this->exec();
    }

    /*
     *GET /v5/asset/transfer/query-transfer-coin-list
     * */
    public function getTransferQueryTransferCoinList(array $data=[]){
        $this->type='GET';
        $this->path='/v5/asset/transfer/query-transfer-coin-list';
        $this->data=$data;
        return $this->exec();
    }

    /*
     *POST /v5/asset/transfer/inter-transfer
     * */
    public function postTransferInterTransfer(array $data=[]){
        $this->type='POST';
        $this->path='/v5/asset/transfer/inter-transfer';
        $this->data=$data;
        return $this->exec();
    }

    /*
     *GET /v5/asset/transfer/query-sub-member-list
     * */
    public function getTransferQuerySubMemberList(array $data=[]){
        $this->type='GET';
        $this->path='/v5/asset/transfer/query-sub-member-list';
        $this->data=$data;
        return $this->exec();
    }

    /*
     *GET /v5/asset/transfer/query-universal-transfer-list
     * */
    public function getTransferQueryUniversalTransferList(array $data=[]){
        $this->type='GET';
        $this->path='/v5/asset/transfer/query-universal-transfer-list';
        $this->data=$data;
        return $this->exec();
    }

    /*
     *POST /v5/asset/transfer/universal-transfer
     * */
    public function postTransferUniversalTransfer(array $data=[]){
        $this->type='POST';
        $this->path='/v5/asset/transfer/universal-transfer';
        $this->data=$data;
        return $this->exec();
    }

    /*
     *GET /v5/asset/deposit/query-allowed-list
     * */
    public function getDepositQueryAllowedList(array $data=[]){
        $this->type='GET';
        $this->path='/v5/asset/deposit/query-allowed-list';
        $this->data=$data;
        return $this->exec();
    }

    /*
     *POST /v5/asset/deposit/deposit-to-account
     * */
    public function getDepositToAccount(array $data=[]){
        $this->type='GET';
        $this->path='/v5/asset/deposit/deposit-to-account';
        $this->data=$data;
        return $this->exec();
    }

    /*
     *GET /v5/asset/deposit/query-record
     * */
    public function getDepositQueryRecord(array $data=[]){
        $this->type='GET';
        $this->path='/v5/asset/deposit/query-record';
        $this->data=$data;
        return $this->exec();
    }

    /*
     *GET /v5/asset/deposit/query-sub-member-record
     * */
    public function getDepositQuerySubMemberRecord(array $data=[]){
        $this->type='GET';
        $this->path='/v5/asset/deposit/query-sub-member-record';
        $this->data=$data;
        return $this->exec();
    }

    /*
     *GET /v5/asset/deposit/query-internal-record
     * */
    public function getDepositQueryInternalRecord(array $data=[]){
        $this->type='GET';
        $this->path='/v5/asset/deposit/query-internal-record';
        $this->data=$data;
        return $this->exec();
    }

    /*
     *GET /v5/asset/deposit/query-address
     * */
    public function getDepositQueryAddress(array $data=[]){
        $this->type='GET';
        $this->path='/v5/asset/deposit/query-address';
        $this->data=$data;
        return $this->exec();
    }

    /*
     *GET /v5/asset/deposit/query-sub-member-address
     * */
    public function getDepositQuerySubMemberAddress(array $data=[]){
        $this->type='GET';
        $this->path='/v5/asset/deposit/query-sub-member-address';
        $this->data=$data;
        return $this->exec();
    }

    /*
     *GET /v5/asset/coin/query-info
     * */
    public function getCoinQueryInfo(array $data=[]){
        $this->type='GET';
        $this->path='/v5/asset/coin/query-info';
        $this->data=$data;
        return $this->exec();
    }

    /*
     *GET /v5/asset/withdraw/query-record
     * */
    public function getWithdrawQueryRecord(array $data=[]){
        $this->type='GET';
        $this->path='/v5/asset/withdraw/query-record';
        $this->data=$data;
        return $this->exec();
    }

    /*
     *GET /v5/asset/withdraw/withdrawable-amount
     * */
    public function getWithdrawWithdrawableAmount(array $data=[]){
        $this->type='GET';
        $this->path='/v5/asset/withdraw/withdrawable-amount';
        $this->data=$data;
        return $this->exec();
    }


    /*
     *POST /v5/asset/withdraw/create
     * */
    public function postWithdrawCreate(array $data=[]){
        $this->type='POST';
        $this->path='/v5/asset/withdraw/create';
        $this->data=$data;
        return $this->exec();
    }

    /*
     *POST /v5/asset/withdraw/cancel
     * */
    public function postWithdrawCancel(array $data=[]){
        $this->type='POST';
        $this->path='/v5/asset/withdraw/cancel';
        $this->data=$data;
        return $this->exec();
    }
}
