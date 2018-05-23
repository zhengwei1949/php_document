1.创建连接--建立连接
    $conn = mysqli_connect(主机或IP地址，用户名，密码，数据库名称);
    如果连接成功，就返回一个连接对象(资源)，如果连接失败，返回false

2.设置编码：主要是解决浏览器出现乱码的问题
    1.服务器端的编码和php的编码不一致：mysqli_set_charset($conn,"utf8") | mysqli_query($conn,"set names utf-8")
    2.php的编码和浏览器端的编码不一致：header("Content-Type:text/html;charset=utf-8")

3.创建sql语句
    1.新增：数值如果是字符串类型，一定要使用引号包含.如果数据没有使用引号包含，有可能会有错
        "insert into temp value('张三')"
    2.删除和修改一定需要考虑是否有条件

4.执行sql语句
    1.增加删除和修改：如果成功则返回true,否则返回false
    2.查询：
        查询失败：false
        查询成功但是没有数据行:mysqli_num_rows(资源对象--引用)
        查询成功也有数据行：读取数据
    3.使用mysqli_query($conn,$sql)

5.接收返回值
    增加删除和修改：true/false 
    查询有结果集同时有数据
        mysqli_fetch_array(查询结果集)：每次读取一行数据，生成数组，里面包含两种形式的数据(索引数组，关联数组)
        mysqli_fetch_assoc:每次读取一行数据，生成数组,里面只包含关联数组
        mysqli_fetch_row:每次读取一行数据，生成数组，里面只包含索引数组
    循环读取：
        while($row = mysqli_fetch_assoc(结果集)){
            $arr[] = $row;
        }