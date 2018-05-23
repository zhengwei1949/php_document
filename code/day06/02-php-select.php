<?php
    // 设置响应头
    header("Content-Type:text/html;charset=utf-8");
    // 建立数据连接
    $conn = mysqli_connect("localhost","root","root","mybase");
    // 设置编码
    // mysqli_set_charset($conn,"utf8"); set names utf-8:设置编码格式为utf-8
    mysqli_query($conn,"set names utf-8");
    // 判断连接状态
    if(!$conn){
        die("连接失败");
    }
    // 创建查询语句
    $sql = "select * from mytable";
    // 1.如果查询失败，则返回false
    // 2.如果成功：有结果集，但是没有数据    有结果集也有数据
    // 执行查询语句,接收.查询语句的返回结果并不是表中的数据，而只是一个针对表数据的引用
    $result = mysqli_query($conn,$sql);
    // 1.判断本次查询是否成功
    if(!$result){
        die("查询失败");
    }
    // 判断结果集中是否有数据  mysqli_num_rows(结果集)可以判断当前结果集中是否有数据行
    else if(mysqli_num_rows($result) == 0){ //说明查询到了结果集，但是结果集为空
        die("结果集为空");
    }else{
        // var_dump($result);
        // 获取数据的函数:下面这几个函数有一个共同的特点，就是只能读取这一行，但是读取完这一行之后，会自动的将指针移到下一行,如果没有读取到任何的数据，则返回null
        // mysqli_fetch_array(查询语句返回的结果集):提取数据生成一个数组.同时生成索引数组和关联数组两种形式
        // mysqli_fetch_assoc:提取数据生成一个数组:将数据生成关联数组
        // mysqli_fetch_row:提取数据生成一个数组，将数据生成为索引数组
        // print_r(mysqli_fetch_array($result)) ;
        // print_r(mysqli_fetch_assoc($result)) ;
        // print_r(mysqli_fetch_row($result)) ;
        // mysqli_fetch_array(结果集资源，返回的内容的形式 MYSQL_ASSOC | MYSQL_NUM | MYSQL_BOTH)
        // print_r(mysqli_fetch_array($result,MYSQL_NUM));
        // print_r(mysqli_fetch_array($result,MYSQL_NUM));
        // print_r(mysqli_fetch_array($result,MYSQL_NUM));
        // print_r(mysqli_fetch_array($result,MYSQL_NUM));
        // var_dump(mysqli_fetch_array($result,MYSQL_NUM));
        while($arr = mysqli_fetch_array($result,MYSQL_ASSOC)){
            $res[] = $arr;
        }
        print_r($res);
    }
    // echo mysqli_num_rows($result)."<br>";
    // 打印
    // 及时的关闭连接对象，释放资源:什么时候释放：当与mysql相关的操作执行完毕之后就立刻释放
    mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <!-- 根据数据动态的生成页面结构
    还有可能做一些其它的耗时操作
     -->
     <?php  print_r($conn); ?>
</body>
</html>