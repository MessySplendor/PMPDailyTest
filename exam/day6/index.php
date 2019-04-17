<?php
/**
 * Created by PhpStorm.
 * User: MECHREV
 * Date: 2019/4/17
 * Time: 8:41
 */
//获取1出现的次数
echo getCount1(1,100);
function getCount1($start=1,$end=13){
    if($start<1||$end<$start){
        return '您所给数据不规范';
    }
    $str='';
    for($i=$start;$i<=$end;$i++){
        if(!(strpos($i,'1')===false)){
            $str.=$i;
            echo $i.'<br/>';
        }
    }
    return substr_count($str,'1');
}