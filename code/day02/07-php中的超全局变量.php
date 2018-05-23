<?php

    $name = "jack";
    $age = 20;

    function test(){
        // global
        // 当前脚本中定义的全局变量也会存储在这个超全局变量中
        print_r($GLOBALS);
        echo '<hr>';
        echo $GLOBALS["name"] .":".$GLOBALS["age"];
    }
    test();
?>