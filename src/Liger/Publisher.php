<?php
namespace Liger;

use Redis;

class Publisher{

    public function publishProduct($product)
    {

    }

    public function publishLegal($legal)
    {
        //Redis::set($prefix.'.'.$key, $value);
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
