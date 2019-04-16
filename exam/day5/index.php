<?php
/**
 * Created by PhpStorm.
 * User: MECHREV
 * Date: 2019/4/16
 * Time: 8:43
 */
$arr=[1,2,3,4,5,6];//定义数组
$new=fun($arr);//调用方法
print_r($new);
function fun($arr){
    $arr1=[];
    $arr2=[];
    foreach ($arr as $k=>$v){
        if($v%2==1){
            $arr1[]=$v;//奇数数组
        }else{
            $arr2[]=$v;//偶数数组
        }
    }
    sort($arr1);
    sort($arr2);//从小到大排序
    return $newArr=array_merge($arr1,$arr2);//合并数组，奇数数组在前，偶数数组在后
}