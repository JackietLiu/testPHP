<?php
/**
 * Created by PhpStorm.
 * User: 66945
 * Date: 2018/12/11
 * Time: 22:05
 */
//1、字符运算符 连接符‘.’
$a = 'JackietLiu';
$b = 25;
$c = '汉子';
echo $a.'今年'.$b.'岁，是个'.$c.'<br>';
//2、数字运算符
$d = 1;
$e = 2;
echo $d + $e.'<br>';

$f = 1;
$g = $f++;
$h = ++$g;
echo '$g='.$g.'$f='.$f.'$h='.$h.'<br>';
//3、比较运算符
//返回结果bool值
$i = 10;
$j = 20;
var_dump($i==$j);
echo '<br>';
$k = '10';
var_dump($i == $k); //等于或不等于（比对值)
var_dump($i === $k); //全等于或不全等（比对类型和值)
echo '<br>';
//4、逻辑运算符 && || !
//5、三元运算符
$l = '1';
echo $l === 1 ? '1' : '2';
echo '<br>';
//6、错误抑制符
//用于就算执行错误也不影响脚本整体功能的代码
$m;
echo @$m;
echo '<br>';
