<?php
    // php默认情况下并不会开启session功能，如果想使用session,则需要手动的添加代码设置
    // 1.动态的生成一个sessionID
    // 2.在服务器端动态的生成一个用于存放本次会话数据的文件，文件名以sess_sessionID来构成。
    // 3.通过响应头动态的设置cookie,在cookie中存放了本次会话所生成的sessionID,在将来返回
    session_start();
    // 创建session: $_SESSION["名称"] = 值;

    $_SESSION["user"] = array(
        "name" => "jack",
        "age"=>20
    );

?>