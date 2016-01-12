<?php
namespace Liger;

use Redis;
use DB;
class Fetcher{
    const PRODUCT_PREFIX = 'PRODUCT';

    public function fetchProduct($productKey, $lang, $region){
        $keyArray = [self::PRODUCT_PREFIX, strtoupper($lang), strtoupper($region), $productKey];
        $key = join('.', $keyArray);
        $product = Redis::command('HGETALL', [$key]);

        return $product;
    }

}
