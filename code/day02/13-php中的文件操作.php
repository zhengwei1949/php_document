<?php
    // 设置当前页面的返回值的类型是图片格式，意味着后期浏览器接收了返回值之后，会按照图片格式进行解析
    // header("Content-Type:text/html");
    // header("Content-Type:image/jpeg");
    // // file_get_contents:读取文件内容，如果读取成功，就会返回一个字符串类型的值（文件内容），如果读取失败，就会返回false
    // // $res = file_get_contents("data.txt");
    // // var_dump($res);

    // $res = file_get_contents("./images/monkey.png");
    // echo $res;

    // file_put_contents(文件路径，需要写入的内容,FILE_APPEND ):将指定的内容写入到文件,同时返回当前成功写入的字符的数量
    // FILE_APPEND:设置当前的写入方式为追加
    $count = file_put_contents("data.txt","这是我写入的内容",FILE_APPEND);
    echo $count;
?>