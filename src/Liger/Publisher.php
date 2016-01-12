<?php
namespace Liger;

use Redis;
use DB;
class Publisher{


    public function publishProduct($product)
    {
        $regions = DB::table('region')->get();
        $languages = DB::table('language')->get();
        foreach ($regions as $region) {
            foreach ($languages as $lang) {
                foreach($product['attributesMapping'] as $key => $val){
                    if(isset($val[$lang->id][$region->id])){
                        $redisKeyArray = ['PRODUCT', $lang->short_name, $region->short_name, $product['key']];
                        $redisKey = join('.', $redisKeyArray);
                        $values = Redis::command('hset', [$redisKey, $key, $val[$lang->id][$region->id]]);
                    }
                }
            }
        }
    }

    public function publishLegal($legal)
    {
        //Redis::set($prefix.'.'.$key, $value);
    }


    public function deleteProduct($product)
    {
        $regions = DB::table('region')->get();
        $languages = DB::table('language')->get();
        foreach ($regions as $region) {
            foreach ($languages as $lang) {
                    $redisKeyArray = ['PRODUCT', $lang->short_name, $region->short_name, $product['key']];
                    $redisKey = join('.', $redisKeyArray);
                    $values = Redis::command('del', [$redisKey]);
            }
        }
    }

    public function deleteLegal()
    {

    }


}
