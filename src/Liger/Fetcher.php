<?php
namespace Liger;

use Redis;
use DB;
class Fetcher{

    public function fetchProduct($productKey, $lang, $region){
        $keyArray = ['PRODUCT', strtoupper($lang), strtoupper($region), $productKey];
        $key = join('.', $keyArray);
        $product = Redis::command('HGETALL', [$key]);

        return $product;
    }

}
