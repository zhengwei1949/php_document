<?php
    // 定义常量的语法：define(常量名称，常量值，标记是否对大小写敏感false)
    // define(name,value,insensitive):insensitive:不敏感的，麻木不仁的，
    // 默认情况下常量对大小写敏感--区分大小写
    // 定义常量:一般情况下常量的名称使用大写字符
    define("PI",3.14,true);
    // 使用常量.常量的使用和变量没有区别，只要注意前面不需要再添加$符号了
    echo PI;
    echo '<hr>';
    echo pi;
    echo '<hr>';

    // php中的魔术常量的使用:魔术常量的意思是指这个常量值会根据不同的使用场合返回不同的值
    // __LINE__:可以获取当前的代码行
    echo __LINE__;
    echo '<hr>';
    // __FILE__:它可以获取当前文件的路径 ：目录+文件名
    echo __FILE__;
    echo '<hr>';
    // __DIR__:它可以获取当前文件的目录
    echo __DIR__;
    echo '<hr>';
    // __FUNCTION__:它可以获取当前魔术常量所在的函数
    function test()
    {
        echo __FUNCTION__;
    }
    test();
?>