<?php
namespace Liger;

use Redis;

class Publisher{
    public function publishProduct(String $prefix, String $key){
        return 'test';
    }

    public function publishLegal($prefix, $key, $value){
        Redis::set($prefix.'.'.$key, $value);
    }

    public function test(){
        return 'test';
    }
}
