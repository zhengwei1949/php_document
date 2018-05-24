<?php
    // 创建cookie
    // setcookie("username","jack");
    // 判断是否拥有某个指定名称的cookie值 -- $_COOKIE
    if(isset($_COOKIE["username"])){
        echo '你曾经来过，欢迎回来';
    }else{
        echo '你是第一次来吧';
        // 有效期 的单位是秒。它的时间参照是php默认起始时间(1970-1-1)
        // setcookie("username","jack",time() + 10);
        // 设置永久存储的cookie
        // setcookie("username","jack",PHP_INT_MAX);

        // 通过path设置访问权限:目录的设置是参照网站根目录的
        // 1.设置目录为父级目录，子目录也能访问
        // 2.设置目录为子级目录，父级目录不能访问
        // /代表整站都能访问
        setcookie("username","jack",PHP_INT_MAX,"/");
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
    <a href="del.php">删除cookie</a>
</body>
</html>