<?php
    header("Content-Type:text/html;charset=utf-8");
    include_once "./common.php";


    // $res = opt("insert into mytable values(null,'张三','20','男','1234567')");
    // if($res){
    //     echo '新增成功';
    // }else{
    //     echo '新增失败';
    // }



    $res = select("select * from mytable");
    echo $res;
    print_r($res);
?>