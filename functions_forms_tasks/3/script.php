<?php


$word = ($_POST["number"]);
$fp = file_get_contents('data.txt');
$arr = explode(" ", $fp);
//print_r($arr);

foreach( $arr as $kay => $val) {
if(strlen($val) <= $word) {
    echo $val . " ";
}
}







