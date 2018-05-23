<?php
    print_r($_GET);
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
    <!-- 
        action:就是提交的目标地址 $_SERVER["PHP_SELF"]:可以获取当前文件的路径.它可以自动的获取当前文件的路径，避免由于文件名称或者路径改变带来的手动修改代码的问题
        method:get|post
     -->
    <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="get">
        用户名：<input type="text" name="userName"> <br>
        密码：<input type="password" name="userPwd"> <br>
        <!-- 系统会自动的收集当前表单元素的value值
        1。默认情况下，会收集当前被选择的单选按钮的值，只不过这个值默认都是on
        2.我们也可能为单选按钮设置value属性，那么在数据收集的时候就会将当前的value属性的值进行提交
        -->
        性别：<input type="radio" name="gender" value="男"> 男  <input type="radio" name="gender" value="女"> 女 <br>
        <!-- 对于 复选框，重点掌握传递多个值的情况
            1.如果多个复选框的名称一样，那么就只会默认传递最后一个选项值
            2.如果需要传递所有被选择的复选框的数据，那么可以在name属性值后面添加[],如果添加了[],那么系统会默认收集所有被选择的复选框的值，存储到一个数组中
        -->
        爱好：<input type="checkbox" name="hobby[]" value="写代码">写代码  <input type="checkbox"  name="hobby[]" value="打游戏">打游戏  <input type="checkbox"  name="hobby[]" value="发呆">发呆 <br>

        <!-- 对于下拉列表，如果没有设置value属性，那么默认会传递当前被选择option的innertext 
        但是如果设置了value属性，那么就会传递value属性-->
        <select name="subject" id="">
            <option value="1">前端</option>
            <option value="2">JAVA</option>
            <option value="3">IOS</option>
        </select>
        <input type="submit">
    </form>
</body>
</html>