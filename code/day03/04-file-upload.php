<?php
    // 在php中，文件上传之后的相关信息都存储在$_FILES中
    // Array
    // (
    //     [myfile] => Array
    //         (
    //             [name] => 跨域攻击.png:源文件的名称
    //             [type] => image/png：源文件的类型
    //             [tmp_name] => C:\Windows\phpE412.tmp：这是文件在服务器的临时路径
    //             [error] => 0：错误信息，0代表没有错误
    //             [size] => 256436：文件的大小
    //         )
    // )
    // 1.判断用户是否提交
    if(!empty($_FILES)){
        print_r($_FILES);
        // echo $_FILES["myfile"]["tmp_name"];
        // 判断文件类型是否满足需要
        $type = $_FILES["myfile"]["type"];
        // strpos(源字符串，搜索字符串):可以获取指定字符串在源字符串中第一次出现的索引值，索引从0开始
        // if(strpos($type,"image/") === 0){
        $filename = $_FILES["myfile"]["name"];
        // 获取当前文件的扩展名 strrchr(源字符串，指定搜索的字符)
        $extension = strrchr($filename,".");
        // 生成一个随机的文件名称：获取到一个唯一值
        $myname = time().rand(1000,9999).$extension;
        move_uploaded_file($_FILES["myfile"]["tmp_name"],"./upload/".$myname);  
        // }else{
        //     echo '你选择不是图片';
        // }
    }
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
    <!-- 1.在php中，上传文件的请求方式必须是post -->
    <!-- 2.在上传的时候必须在表单设置enctype属性
        application/x-www-form-urlencoded：将参数编码为键值对的格式，这是标准的编码格式(UTF-8 GBK GB2312),它用来处理字符串，它是默认的编码格式
        multipart/form-data:它是专门用来处理特殊数据的，如文件
    -->
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
        文件选择：<input type="file" name="myfile"><br>
        <input type="submit">
    </form>
</body>
</html>