<?php
    // 封装增加删除和修改操作
    function opt($sql){
        // 创建连接.如果成功就返回连接对象(资源),如果失败就返回fasle
        $conn = mysqli_connect("localhost","root","root","mybase");
        // 判断连接是否成功
        if(!$conn){
            die("连接失败");
        }
        // 设置编码
        mysqli_set_charset($conn,"utf8");
        // 执行Sql语句，接收返回值:对于增加删除和而言，mysqli_query返回true/flase
        $res = mysqli_query($conn,$sql);
        // 及时关闭连接
        mysqli_close($conn);
        // 返回
        return $res;
    }


    // 封装查询操作
    function select($sql){
        // 创建连接.如果成功就返回连接对象(资源),如果失败就返回fasle
        $conn = mysqli_connect("localhost","root","root","mybase");
        // 判断连接是否成功
        if(!$conn){
            die("连接失败");
        }
        // 设置编码
        mysqli_set_charset($conn,"utf8");
        // 查询语句的返回值：如果成功就返回资源(结果集)，如果失败返回false
        $res = mysqli_query($conn,$sql);
        if(!$res){
            echo '查询失败';
        }else if(mysqli_num_rows($res) ==0){ //有结果集但是没有数据行
            echo '没有查询到数据';
        }else{
            // 有结果集也有数据行
            while($arr = mysqli_fetch_assoc($res)){
                $result[] = $arr;
            }
            mysqli_close($conn);
            return $result;
        }
        mysqli_close($conn);
    }

?>