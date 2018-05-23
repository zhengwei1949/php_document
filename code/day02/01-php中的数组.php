<?php
    // 索引数组：通过索引操作数组
    // 创建方式：array(添加数组的成员，成员类型不作要求)  [数组成员]
    $arr = array(1,2,3,true,"abc");
    // print_r($arr);
    // $arr = [1,2,3,true,"abc"];
    // 通过索引获取数组中的成员
    // echo $arr[3];
    // 索引索引数组--for
    // for(var i=0;i<arr.length;i++){
    //     console.log(arr[i]);
    // }
    // 在php中需要使用count(数组对象)来获取数组的长度
    // for($i =0;$i < count($arr);$i++){
    //     echo $arr[$i].' ';
    // }

    // 关联数组：以键值对的方式来描述数据，类似于js中的对象 {key:value,key:value...}
    // 语法：array($key=>$value,$key=>$value...)
    // $arr = array(
    //     "name" => "jack",
    //     "age" => 20,
    //     "gender" => true
    // );
    // 获取关联数组中的成员：通过key来获取数组中的成员
    // echo $arr["gender"];
    // echo $arr; //Array
    // print_r($arr);
    // var_dump($arr);
    // 遍历关联数组 foreach
    // foreach(数组对象  as 键 => 值){

    // }
    // foreach(数组对象 as 值){

    // }
    foreach($arr as $key => $value){
        echo $key .":".$value.'<br>';
    }
    // foreach($arr as $value){
    //     echo $value.'<br>';
    // }
?>