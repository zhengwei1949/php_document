<?php
    // js中的函数声明
    // function 函数名称(参数列表){
    //     函数体
    //     return 返回值;
    // }
    // 求0~n的和
    // 添加一个全局变量
    // js中函数内部可以使用函数外部声明的全局变量
    // 在php中函数内部无法使用函数外部的成员
    // $cnt;
    // // 如果一个变量没有赋值或者这个变量不存在，那么转换为int之后的结果默认为0
    // var_dump((int)$aa);
    // echo '<hr>';

    $num = 100;
    function cal(){
        // 如果想在函数内部使用函数外部声明的全局变量，那么就可以使用关键字：global
        // global就是用来添加对外部成员的引用
        // 注意点：不能在引用的同时对变量赋值，如果想赋值，则需要换下一行赋值
        global $num;
        // 如果在函数内部修改了全局变量的值，那么这个修改也会影响后面的使用
        $num = 10;
        $sum =0;
        for($i =0;$i<=$num;$i++){
            // $sum = $sum + $i;
            $sum += $i;
        }
        return $sum;
    }

    // function cal($num){
    //     $sum =0;
    //     for($i =0;$i<=$num;$i++){
    //         // $sum = $sum + $i;
    //         $sum += $i;
    //     }
    //     return $sum;
    // }
    // 调用：通过函数名称调用
    $result = cal(100); //5050
    echo $result;

    echo 'num的值是'.$num;
?>