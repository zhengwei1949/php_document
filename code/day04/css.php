<?php
    // 通过header函数设置响应头：就是告诉浏览器拿到数据之后如何进行解析处理
    // header("Content-Type:text/css");
    // echo 'body{background:red}'

    // echo '<script>location.href=""</script>';
    // 使用header函数发送重定向的指定，让浏览器进行重定向的操作
    // header("Location:01-form-get.php");
    // 在指定的时间之后跳转
    // header("refresh:3;url=01-form-get.php");

    // 实现当前页面的自动下载
    // header("Content-Type:application/octet-stream");
    // 实现自动下载，同时可以设置下载后的文件名称
    // header("Content-Disposition:attachment;filename=temp.php");

    // 获取请求报文数据
    // print_r(getallheaders());
    $refer = getallheaders()["Referer"];
    echo $refer;
    // 获取url中的各部分
    print_r(parse_url($refer));
    $host = parse_url($refer)["host"];
    if($host === "127.0.0.2"){
        echo '我们是一家人';
    }else{
        echo '不是一家人，不响应';
    }
?>