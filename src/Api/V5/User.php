<?php
/**
 * @author lin <465382251@qq.com>
 * */

namespace Lin\Bybit\Api\V5;

use Lin\Bybit\RequestV5;

class User extends RequestV5
{
    /*
     *POST /v5/user/create-sub-member
     * */
    public function postCreateSubMember(array $data=[]){
        $this->type='POST';
        $this->path='/v5/user/create-sub-member';
        $this->data=$data;
        return $this->exec();
    }

    /*
     *POST /v5/user/create-sub-api
     * */
    public function postCreateSubApi(array $data=[]){
        $this->type='POST';
        $this->path='/v5/user/create-sub-api';
        $this->data=$data;
        return $this->exec();
    }

    /*
     *GET /v5/user/query-sub-members
     * */
    public function getQuerySubMembers(array $data=[]){
        $this->type='GET';
        $this->path='/v5/user/query-sub-members';
        $this->data=$data;
        return $this->exec();
    }

    /*
     *POST /v5/user/frozen-sub-member
     * */
    public function postFrozenSubMember(array $data=[]){
        $this->type='POST';
        $this->path='/v5/user/frozen-sub-member';
        $this->data=$data;
        return $this->exec();
    }

    /*
     *GET /v5/user/query-api
     * */
    public function getQueryApi(array $data=[]){
        $this->type='GET';
        $this->path='/v5/user/query-api';
        $this->data=$data;
        return $this->exec();
    }

    /*
     *GET /v5/user/sub-apikeys
     * */
    public function getSubApikeys(array $data=[]){
        $this->type='GET';
        $this->path='/v5/user/sub-apikeys';
        $this->data=$data;
        return $this->exec();
    }

    /*
     *GET /v5/user/get-member-type
     * */
    public function getMemberType(array $data=[]){
        $this->type='GET';
        $this->path='/v5/user/get-member-type';
        $this->data=$data;
        return $this->exec();
    }

    /*
     *POST /v5/user/update-api
     * */
    public function postUpdateApi(array $data=[]){
        $this->type='POST';
        $this->path='/v5/user/update-api';
        $this->data=$data;
        return $this->exec();
    }

    /*
     *POST /v5/user/update-sub-api
     * */
    public function postUpdateSubApi(array $data=[]){
        $this->type='POST';
        $this->path='/v5/user/update-sub-api';
        $this->data=$data;
        return $this->exec();
    }

    /*
     *POST /v5/user/del-submember
     * */
    public function postDelSubmember(array $data=[]){
        $this->type='POST';
        $this->path='/v5/user/del-submember';
        $this->data=$data;
        return $this->exec();
    }

    /*
     *POST /v5/user/delete-api
     * */
    public function postDeleteApi(array $data=[]){
        $this->type='POST';
        $this->path='/v5/user/delete-api';
        $this->data=$data;
        return $this->exec();
    }

    /*
     *POST /v5/user/delete-sub-api
     * */
    public function postDeleteSubApi(array $data=[]){
        $this->type='POST';
        $this->path='/v5/user/delete-sub-api';
        $this->data=$data;
        return $this->exec();
    }

    /*
     *GET /v5/user/aff-customer-info
     * */
    public function getAffCustomerInfo(array $data=[]){
        $this->type='GET';
        $this->path='/v5/user/aff-customer-info';
        $this->data=$data;
        return $this->exec();
    }
}
