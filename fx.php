<?php
/**
 * Created by PhpStorm.
 * User: 66945
 * Date: 2018/12/18
 * Time: 20:49
 */
function say($userName) {
    $str = "Hello,".$userName;
    return $str;
}
echo say("JackietLiu"."<br/>");

function dghs($num){
    echo $num."<br />";
    if ($num > 0) {
        dghs($num-1);
    }else {
        echo "<hr />";
    }
    echo $num."<br />";
}
dghs(5);
