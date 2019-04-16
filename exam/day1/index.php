<?php
/**
 * Created by PhpStorm.
 * User: MECHREV
 * Date: 2019/4/11
 * Time: 8:38
 */
$str='rretreee23432DDDDELKJKL';
//$arr=explode(',',$str);
print_r(count_chars($str,1));die;
foreach (count_chars($str,1) as $k=>$v){
    if($v>3){
        echo   chr($k).'<br/>';
    }
}