<?php
/*1. Создать форму с двумя элементами textarea. При отправке формы скрипт должен выдавать только те слова, которые есть
 и в первом и во втором поле ввода.
Реализацию это логики необходимо поместить в функцию getCommonWords($a, $b), которая будет возвращать массив с общими
словами.*/


function getCommonWords($a, $b){
    $string_1 = explode(" ", $a);
    $string_2 = explode(" ", $b);
    $res=[];
    foreach($string_1 as $val_1) {
        if (in_array($val_1,$string_2)){
            $res[]=$val_1;
        }
    }
    echo '<pre>';
    print_r($res);
    return $res;
}
$res=getCommonWords($_POST['val_1'],$_POST['val_2']);


