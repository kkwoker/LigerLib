<?php
namespace Liger;

use Redis;

class Publisher{

    public function publishProduct(String $prefix, String $key)
    {
        
    }

    public function publishLegal($prefix, $key, $value)
    {
        Redis::set($prefix.'.'.$key, $value);
    }


    public function deleteProduct()
    {

    }

    public function deleteLegal()
    {

    }

    public function test(){
        return 'test';
    }

}
