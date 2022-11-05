<?php
/**
 * @author lin <465382251@qq.com>
 * */

namespace Lin\Bybit\Api\Linear;

use Lin\Bybit\Request;

class Privates extends Request
{
    //***************Place Active Order

    /*
     *POST /private/linear/order/create
     * */
    public function postOrderCreate(array $data=[]){
        $this->type='POST';
        $this->path='/private/linear/order/create';
        $this->data=$data;
        return $this->exec();
    }

    /*
     *GET /private/linear/order/list
     * */
    public function getOrderList(array $data=[]){
        $this->type='GET';
        $this->path='/private/linear/order/list';
        $this->data=$data;
        return $this->exec();
    }

    /*
     *POST /private/linear/order/cancel
     * */
    public function postOrderCancel(array $data=[]){
        $this->type='POST';
        $this->path='/private/linear/order/cancel';
        $this->data=$data;
        return $this->exec();
    }

    /*
     *POST /private/linear/order/cancel-all
     * */
    public function postOrderCancelAll(array $data=[]){
        $this->type='POST';
        $this->path='/private/linear/order/cancel-all';
        $this->data=$data;
        return $this->exec();
    }

    /*
     *POST /private/linear/order/replace
     * */
    public function postOrderReplace(array $data=[]){
        $this->type='POST';
        $this->path='/private/linear/order/replace';
        $this->data=$data;
        return $this->exec();
    }

    /*
     *GET /private/linear/order/search
     * */
    public function getOrderSearch(array $data=[]){
        $this->type='GET';
        $this->path='/private/linear/order/search';
        $this->data=$data;
        return $this->exec();
    }

    //*******Place Conditional Order

    /*
     *POST /private/linear/stop-order/create
     * */
    public function postStopOrderCreate(array $data=[]){
        $this->type='POST';
        $this->path='/private/linear/stop-order/create';
        $this->data=$data;
        return $this->exec();
    }

    /*
     *GET /private/linear/stop-order/list
     * */
    public function getStopOrderList(array $data=[]){
        $this->type='GET';
        $this->path='/private/linear/stop-order/list';
        $this->data=$data;
        return $this->exec();
    }

    /*
     *POST /private/linear/stop-order/cancel
     * */
    public function postStopOrderCancel(array $data=[]){
        $this->type='POST';
        $this->path='/private/linear/stop-order/cancel';
        $this->data=$data;
        return $this->exec();
    }

    /*
     *POST /private/linear/stop-order/cancel-all
     * */
    public function postStopOrderCancelAll(array $data=[]){
        $this->type='POST';
        $this->path='/private/linear/stop-order/cancel-all';
        $this->data=$data;
        return $this->exec();
    }

    /*
     *POST /private/linear/stop-order/replace
     * */
    public function postStopOrderReplace(array $data=[]){
        $this->type='POST';
        $this->path='/private/linear/stop-order/replace';
        $this->data=$data;
        return $this->exec();
    }

    /*
     *GET /private/linear/stop-order/search
     * */
    public function getStopOrderSearch(array $data=[]){
        $this->type='GET';
        $this->path='/private/linear/stop-order/search';
        $this->data=$data;
        return $this->exec();
    }

    //***************Position

    /*
     *GET /private/linear/position/list
     * */
    public function getPositionList(array $data=[]){
        $this->type='GET';
        $this->path='/private/linear/position/list';
        $this->data=$data;
        return $this->exec();
    }

    /*
     *POST /private/linear/position/set-auto-add-margin
     * */
    public function postPositionSetAutoAddMargin(array $data=[]){
        $this->type='POST';
        $this->path='/private/linear/position/set-auto-add-margin';
        $this->data=$data;
        return $this->exec();
    }

    /*
     *POST /private/linear/position/switch-isolated
     * */
    public function postPositionSwitchIsolated(array $data=[]){
        $this->type='POST';
        $this->path='/private/linear/position/switch-isolated';
        $this->data=$data;
        return $this->exec();
    }

    /*
     *POST /private/linear/position/add-margin
     * */
    public function postPositionAddMargin(array $data=[]){
        $this->type='POST';
        $this->path='/private/linear/position/add-margin';
        $this->data=$data;
        return $this->exec();
    }

    /*
     *POST /private/linear/position/set-leverage
     * */
    public function postPositionSetLeverage(array $data=[]){
        $this->type='POST';
        $this->path='/private/linear/position/set-leverage';
        $this->data=$data;
        return $this->exec();
    }


    /*
     *POST /private/linear/position/trading-stop
     * */
    public function postPositionTradingStop(array $data=[]){
        $this->type='POST';
        $this->path='/private/linear/position/trading-stop';
        $this->data=$data;
        return $this->exec();
    }

    /*
     *POST /private/linear/position/switch-mode
     * */
    public function postPositionSwitchMode(array $data=[]){
        $this->type='POST';
        $this->path='/private/linear/position/switch-mode';
        $this->data=$data;
        return $this->exec();
    }
    
    /*
     *POST /private/linear/tpsl/switch-mode
     * */
    public function postTpslSwitchMode(array $data=[]){
        $this->type='POST';
        $this->path='/private/linear/tpsl/switch-mode';
        $this->data=$data;
        return $this->exec();
    }

    /*
     *GET /private/linear/trade/execution/list
     * */
    public function getTradeExecutionList(array $data=[]){
        $this->type='GET';
        $this->path='/private/linear/trade/execution/list';
        $this->data=$data;
        return $this->exec();
    }

    /*
     *GET /private/linear/trade/closed-pnl/list
     * */
    public function getTradeClosedPnlList(array $data=[]){
        $this->type='GET';
        $this->path='/private/linear/trade/closed-pnl/list';
        $this->data=$data;
        return $this->exec();
    }

    /*
     *GET /public/linear/risk-limit
     * */
    public function getRiskLimit(array $data=[]){
        $this->type='GET';
        $this->path='/public/linear/risk-limit';
        $this->data=$data;
        return $this->exec();
    }

    /*
     *GET /private/linear/funding/prev-funding
     * */
    public function getFundingPrev(array $data=[]){
        $this->type='GET';
        $this->path='/private/linear/funding/prev-funding';
        $this->data=$data;
        return $this->exec();
    }

    /*
     *GET /private/linear/funding/predicted-funding
     * */
    public function getFundingPredicted(array $data=[]){
        $this->type='GET';
        $this->path='/private/linear/funding/predicted-funding';
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
