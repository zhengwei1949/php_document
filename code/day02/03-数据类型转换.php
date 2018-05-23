<?php
    // - 数据有不同的类型，那么在操作数据的时候可能进行类型的转换才能完成对应的操作
    // - 类型转换大致可以分为两种：自动转换  强制类型转换
    // - 在php中大多数情况下都是自动转换
    // $str = "123";
    // var_dump($str);
    // // 在php中的强制类型转换，就是在变量前面添加(类型)
    // var_dump((int)$str);
    // echo '<hr>';
    // // 将变量转换为数组:系统将创建一个数组，同时将这个变量做为数组的第一个元素
    // var_dump((array)$str);
    // (bool)$str  (string)$str  (object)$str

    $str = "abc";
    $num = (int)$str;
    var_dump($num); // 报错 | 0
?>