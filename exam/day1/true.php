<?php
/**
 * Created by PhpStorm.
 * User: MECHREV
 * Date: 2019/4/11
 * Time: 9:00
 */
$string = "Have you ever gone shopping and";
function calFirst($string){
    $len=strlen($string);//字符串长度
    $arr=[];
    for($i=0;$i<$len;$i++){
        if(isset($arr[$string[$i]])){
            $arr[$string[$i]]++;
        }else{
            $arr[$string[$i]]=1;
        }
        if($arr[$string[$i]]>3){
            return $string[$i];
        }
    }
}
echo calFirst($string);