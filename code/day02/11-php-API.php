<?php
    $str = "hello world你好";//11-17
    // strlen():可以获取指定字符串的长度
    // 特点：strlen无法正确的处理中文字符(本质上说是不能处理宽字符集，所谓宽字符集就是指php默认不支持的字符，如中文，日文...),如果碰到宽字符集，它会根据当前宽字符集的编码获取这些字符所占据的字节数
    // GB2312：每个字符占据的2个字节
    // UTF-8：每个字符占据3个字节
    // echo strlen($str);

    // 获取php环境中的默认编码
    //echo mb_internal_encoding(); //UTF-8
    // mb_strlen():没有设置编码就使用当前php的默认编码
    // 特点：这个函数默认情况下不能使用，如果想使用就需要添加一个引用
    // php-ini > extension=php_mbstring.dll.打开这个引用，否则无法使用

    // 这个 函数的结果也与当前php的版本有关系，只有php5.6及以上版本才能够真正获取长度
    echo mb_strlen($str);
?>