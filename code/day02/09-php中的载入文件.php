<?php
    // 载入文件:相当于将被载入的文件的代码在当前位置复制一份
    // include:1.如果文件载入失败，也不会影响后续代码的执行  2.如果重复载入文件那么被载入的文件的代码会真正的重复执行
    // include_once:1.如果文件载入失败，也不会影响后续代码的执行 2.如果重复载入文件，最终也只会载入一次
    // require：1.如果文件载入失败，那么后续不再执行  2.如果重复载入文件那么被载入的文件的代码会真正的重复执行
    // require_once:1.如果文件载入失败，那么后续不再执行 2.如果重复载入文件，最终也只会载入一次

    // include '10-constant.php';
    // include '10-constant.php';
    // include '10-constant.php';
    // include_once '10-constant.php';
    // include_once '10-constant.php';
    // include_once '10-constant.php';

    // require '10-constant.php';
    // require '10-constant.php';
    // require '10-constant.php';

    require_once '10-constant.php';
    require_once '10-constant.php';
    require_once '10-constant.php';

    // // 学校名称
    // define("SCHOOL_NAME","传智播客");
    // // 学校地址
    // define("__ADDRESS__","首都北京");

    // // 下面是被载入文件中的代码块
    // echo '下面是被载入文件中的代码块<br>';

    
    echo SCHOOL_NAME;
    echo '<hr>这是载入文件之后的代码块';
?>