<?php

    // 怎么创建就应该怎么删除：方法的参数应该对应
    // setcookie("username","jack",PHP_INT_MAX,"/");
    // setcookie("username","");
    setcookie("username","",PHP_INT_MAX,"/");
    echo "ok";
?>