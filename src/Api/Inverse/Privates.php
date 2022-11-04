<?php
/**
 * @author lin <465382251@qq.com>
 * */

namespace Lin\Bybit\Api\Inverse;

use Lin\Bybit\Request;

class Privates extends Request
{
    /*
     *POST /v2/private/order/create
     * */
    public function postOrderCreate(array $data=[]){
        $this->type='POST';
        $this->path='/v2/private/order/create';
        $this->data=$data;
        return $this->exec();
    }

    /*
     *GET /open-api/order/list
     * */
    public function getOrderList(array $data=[]){
        $this->type='GET';
        $this->path='/open-api/order/list';
        $this->data=$data;
        return $this->exec();
    }

    /*
     *POST /v2/private/order/cancel
     * */
    public function postOrderCancel(array $data=[]){
        $this->type='POST';
        $this->path='/v2/private/order/cancel';
        $this->data=$data;
        return $this->exec();
    }

    /*
     *POST /v2/private/order/cancelAll
     * */
    public function postOrderCancelAll(array $data=[]){
        $this->type='POST';
        $this->path='/v2/private/order/cancelAll';
        $this->data=$data;
        return $this->exec();
    }

    /*
     *POST /open-api/order/replace
     * */
    public function postOrderReplace(array $data=[]){
        $this->type='POST';
        $this->path='/open-api/order/replace';
        $this->data=$data;
        return $this->exec();
    }

    /*
     *GET /v2/private/order
     * */
    public function getOrder(array $data=[]){
        $this->type='GET';
        $this->path='/v2/private/order';
        $this->data=$data;
        return $this->exec();
    }

    /*
     *POST /open-api/stop-order/create
     * */
    public function postStopOrderCreate(array $data=[]){
        $this->type='POST';
        $this->path='/open-api/stop-order/create';
        $this->data=$data;
        return $this->exec();
    }

    /*
     *GET /open-api/stop-order/list
     * */
    public function getStopOrderList(array $data=[]){
        $this->type='GET';
        $this->path='/open-api/stop-order/list';
        $this->data=$data;
        return $this->exec();
    }

    /*
     *POST /open-api/stop-order/cancel
     * */
    public function postStopOrderCancel(array $data=[]){
        $this->type='POST';
        $this->path='/open-api/stop-order/cancel';
        $this->data=$data;
        return $this->exec();
    }

    /*
     *POST /v2/private/stop-order/cancelAll
     * */
    public function postStopOrderCancelAll(array $data=[]){
        $this->type='POST';
        $this->path='/v2/private/stop-order/cancelAll';
        $this->data=$data;
        return $this->exec();
    }

    /*
     *POST /open-api/stop-order/replace
     * */
    public function postStopOrderReplace(array $data=[]){
        $this->type='POST';
        $this->path='/open-api/stop-order/replace';
        $this->data=$data;
        return $this->exec();
    }

    /*
     *GET /v2/private/stop-order
     * */
    public function getStopOrder(array $data=[]){
        $this->type='GET';
        $this->path='/v2/private/stop-order';
        $this->data=$data;
        return $this->exec();
    }

    /*
     *GET /v2/private/position/list
     * */
    public function getPositionList(array $data=[]){
        $this->type='GET';
        $this->path='/v2/private/position/list';
        $this->data=$data;
        return $this->exec();
    }

    /*
     *POST /position/change-position-margin
     * */
    public function postChangePositionMargin(array $data=[]){
        $this->type='POST';
        $this->path='/position/change-position-margin';
        $this->data=$data;
        return $this->exec();
    }

    /*
     *POST /open-api/position/trading-stop
     * */
    public function postPositionTradingStop(array $data=[]){
        $this->type='POST';
        $this->path='/open-api/position/trading-stop';
        $this->data=$data;
        return $this->exec();
    }

    /*
     *GET /user/leverage
     * */
    public function getUserLeverage(array $data=[]){
        $this->type='GET';
        $this->path='/user/leverage';
        $this->data=$data;
        return $this->exec();
    }

    /*
     *POST /user/leverage/save
     * */
    public function postUserLeverageSave(array $data=[]){
        $this->type='POST';
        $this->path='/user/leverage/save';
        $this->data=$data;
        return $this->exec();
    }

    /*
     *GET /v2/private/execution/list
     * */
    public function getExecutionList(array $data=[]){
        $this->type='GET';
        $this->path='/v2/private/execution/list';
        $this->data=$data;
        return $this->exec();
    }

    /*
     *GET /v2/private/trade/closed-pnl/list
     * */
    public function getTradeClosedPnlList(array $data=[]){
        $this->type='GET';
        $this->path='/v2/private/trade/closed-pnl/list';
        $this->data=$data;
        return $this->exec();
    }

    /*
     *GET /open-api/wallet/risk-limit/list
     * */
    public function getWalletRiskLimitList(array $data=[]){
        $this->type='GET';
        $this->path='/open-api/wallet/risk-limit/list';
        $this->data=$data;
        return $this->exec();
    }

    /*
     *POST /open-api/wallet/risk-limit
     * */
    public function postWalletRiskLimit(array $data=[]){
        $this->type='POST';
        $this->path='/open-api/wallet/risk-limit';
        $this->data=$data;
        return $this->exec();
    }

    /*
     *GET /open-api/funding/prev-funding-rate
     * */
    public function getFundingPrevRate(array $data=[]){
        $this->type='GET';
        $this->path='/open-api/funding/prev-funding-rate';
        $this->data=$data;
        return $this->exec();
    }

    /*
     *GET /open-api/funding/prev-funding
     * */
    public function getFundingPrev(array $data=[]){
        $this->type='GET';
        $this->path='/open-api/funding/prev-funding';
        $this->data=$data;
        return $this->exec();
    }

    /*
     *GET /open-api/funding/predicted-funding
     * */
    public function getFundingPredicted(array $data=[]){
        $this->type='GET';
        $this->path='/open-api/funding/predicted-funding';
        $this->data=$data;
        return $this->exec();
    }
    /*
     *GET /open-api/api-key
     * */
    public function getApiKey(array $data=[]){
        $this->type='GET';
        $this->path='/open-api/api-key';
        $this->data=$data;
        return $this->exec();
    }

    /*
     *GET /v2/private/account/lcp
     * */
    public function getAccountLcp(array $data=[]){
        $this->type='GET';
        $this->path='/v2/private/account/lcp';
        $this->data=$data;
        return $this->exec();
    }
    /*
     *GET /v2/private/wallet/balance
     * */
    public function getWalletBalance(array $data=[]){
        $this->type='GET';
        $this->path='/v2/private/wallet/balance';
        $this->data=$data;
        return $this->exec();
    }

    /*
     *GET /open-api/wallet/fund/records
     * */
    public function getWalletFundRecords(array $data=[]){
        $this->type='GET';
        $this->path='/open-api/wallet/fund/records';
        $this->data=$data;
        return $this->exec();
    }

    /*
     *GET /open-api/wallet/withdraw/list
     * */
    public function getWalletWithdrawList(array $data=[]){
        $this->type='GET';
        $this->path='/open-api/wallet/withdraw/list';
        $this->data=$data;
        return $this->exec();
    }

    /*
     *GET /v2/private/exchange-order/list
     * */
    public function getExchangeOrderList(array $data=[]){
        $this->type='GET';
        $this->path='/v2/private/exchange-order/list';
        $this->data=$data;
        return $this->exec();
    }

    /*
     *GET /v2/private/account/api-key
     * */
    public function getApiKeyInfo(array $data=[])
    {
        $this->type='GET';
        $this->path='/v2/private/account/api-key';
        $this->data=$data;
        return $this->exec();
    }
}
