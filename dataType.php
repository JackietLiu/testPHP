<?php
/**
 * Created by PhpStorm.
 * User: 66945
 * Date: 2018/12/3
 * Time: 23:04
 */
$int = 1234;
$var = '\n@ $int'; //单引号不解析，普通字符串定义可以用单引号，复用时用双引号
$var1 = "\n @ $int"; //双引号能解析代码
//不用echo 用var_dump() 他可以输出变量和数据类型
var_dump($int);
echo "<br>";
var_dump($var);
echo "<br>";
var_dump($var1);