<?php
    // 设置当前php的返回值的编码为utf-8
    header("Content-Type:text/html;charset=utf-8");
    // 建立与服务器的连接：如果想执行数据的增加删除修改和查询，我们得先做这些设置：
    // 设置主机，用户名，密码，你想操作的数据库
    // 使用mysqli-connect函数就可以实现php与服务器的连接
    // 这个函数会自动的打开连接
    // 这个函数有返回值：如果连接失败，就返回false，如果连接成功就返回一个连接对象(资源)
    // 失败的情况：
    // Unknown database 'mybase1'：数据库找不到，请注意名称是否正确
    // Access denied for user 'root'@'localhost' (using password: YES)：密码错误
    // Access denied for user 'root1'@'localhost' (using password: YES)：用户名错误
    // mysqli_connect():：这种错误一般是服务器相关的错误
    $conn = mysqli_connect("localhost","root","root","mybase");

    // 为了保证服务器返回值的编码与当前php编码一致，我们可以设置服务器的返回数据的编码
    // mysqli_set_charset(连接对象，编码格式字符串)
    mysqli_set_charset($conn,"utf8");
    
    // 判断当前连接是否成功
    if(!$conn){
        // echo '连接失败aaa';
        // return;
        die("连接失败aaa");
        // exit()
    }
    // 连接成功，那么就可以创建sql语句，执行相关操作
    // 1.新增数据:在执行新增语句的时候，mysqli_query的返回值：如果成功则返回true,否则返回false
    // 2.修改操作：
    // 3.删除操作
    // $sql = "insert into mytable values('张三',30,'男')";
    $sql = "update mytable set phone =123 where id = '3'";
    // $sql = "delete from mytable where id = '4'";
    // 执行Sql语句：mysqli_query(连接对象，sql语句)
    $result = mysqli_query($conn,$sql);
    if($result){
        echo '删除成功';
    }else{
        echo '删除失败<br>';
        // mysqli_error:它可以输出最近一条sql语句在执行时所产生的错误信息
        echo mysqli_error($conn);
    }
?>