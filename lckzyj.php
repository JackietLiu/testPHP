<?php
/**
 * Created by PhpStorm.
 * User: 66945
 * Date: 2018/12/11
 * Time: 22:40
 */
header('Content-type:text/htmk;charset=utf8');//字符串支持说明
//流程控制语句
$a = mt_rand(1,1000);

if ($a >= 500) {
    echo $a.'大于等于500';
}else {
    echo $a.'小于500';
}
