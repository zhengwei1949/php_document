<?php
    // echo 'abc';

    // echo 'alert(123)';

    // 接收用户传递的函数名称
    $callback = $_GET["callback"];
    // $arr = array(
    //     "name" =>"jack",
    //     "Age" => 20
    // );


    // $data = json_encode($arr);

    $data = file_get_contents("nav.json");

    // 返回的数据最终只能是字符串
    echo $callback.'('.$data.')';
?>