<?php
/**
 * Created by PhpStorm.
 * User: 66945
 * Date: 2018/12/3
 * Time: 22:43
 */
/*变量*/
    $var = "你好";
    echo $var;
    echo "<br/>";
    $a = 1;
    $b = 2;

    $a = &$b; //引用赋值
    $b = 9;
    echo $a; //9
    echo "<br/>";
    echo $b; //9
