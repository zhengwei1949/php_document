## prepare
- 是否可以上网
- 音响
- 话筒
- Hydra是否正常显示

# day01
## 这一阶段课程的作用
### 摘要
- 以前学习的技术回顾及局限性
- 动态网站开发
- 客户端请求，服务端处理并响应，引入php和ajax
### 总结
1. 我们平时写代码怎么打开网页的
2. 浏览器的作用理解：把html解析成人类可以看的有格式的内容
3. 平时上网的时候是怎么打开网站上的网页的
4. 上网的时候打开的网页代码是放在哪里的? --> 服务器 --> 怎么理解服务器，平时有没有见过服务器
    + 水果店里有很多种水果，苹果，桔子，香蕉...
    + 客户想要桔子，他向服务员说明自己的需求
    + 店员从店里找到对应的桔子，然后给客户
5. 网站流程图v1.0
6. 如果当前的这个html引入了js,css，则是怎么请求的 --> 网站流程图v2.0
7. 淘宝、京东、百度网页是不是写死的? ---> 如何理解***动态***这二个字(通过代码来演示) --> 网站流程图v3.0
    + 动态不是指的有轮播图、有选项卡这些特效，动态指的是***数据是动态的***
    + https://www.baidu.com/s?wd=java
8. 服务器的作用
9. php的作用
10. ajax这又是另一个话题了，二个陌生的概念一起理解会搞混，这块大家忽略掉，后面讲到了再理解

```php
<?php
header('content-type:text/html;charset=utf8;');
$arr = [
    ["id"=>1,"title"=>"第一篇新闻",'content'=>"第一篇新闻的内容"],
    ["id"=>2,"title"=>"第二篇新闻","content"=>"第二篇新闻的内容"],
    ["id"=>3,"title"=>"第三篇新闻","content"=>"第三篇新闻的内容"],
    ["id"=>4,"title"=>"第四篇新闻","content"=>"第四篇新闻的内容"],
    ["id"=>5,"title"=>"第五篇新闻","content"=>"第五篇新闻的内容"],
    ["id"=>6,"title"=>"第六篇新闻","content"=>"第六篇新闻的内容"]
];
($id = @$_GET['id']) or ($id = 1);
// print_r($arr[$id-1]);
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
    <?php if(empty($arr[$id-1])){?>
        <h1>访问的内容不存在</h1>
    <?php }else{?>
        <h1><?php echo $arr[$id-1]["title"];?></h1>
        <p><?php echo $arr[$id-1]["content"];?></p>
    <?php } ?>
</body>
</html>
```

## 我们为什么要学习php以及这块课程的安排
### 摘要
- 为什么要学习php
- 我们将学习哪些东西
### 总结
- 为什么要学习php
    + 能够理解整个网站的开发体系，当网站出了问题的时候，能够快速的知道出了什么问题
    + 更好的与后端进行交流
    + 为了后面的ajax课程的学习
- 这块课程的安排
    + 搭建服务器和运行php的环境软件(apache+php)
    + 服务器端开发(php语法及应用)
    + http协议(理论)
    + 数据库(mysql)
    + ajax
- 课程定位
    + php(不影响找工作，学习比较吃力的同学这块能学会多少算多少，后面找工作之前的复习时间不要用来复习这块)
    + ajax(重点，需要所有人掌握)

## 服务器的理解
### 摘要
- 什么是服务器
- 普通电脑安装提供web服务的软件，就可以作为服务器
- 凡是需要联网才能使用的软件，都要用到服务器
### 总结
- 常见的服务器有哪些
    + 商店
    + 餐馆
    + 游戏服务器
    + 百度云服务器
    + hydra
    + 传智播客
    + 网吧上网网管的电脑扣钱系统
    + apache

## C/S、B/S架构
### 摘要
- 概念
- 优缺点分析
- 具体说明哪些是C/S，哪些是B/S
### 总结
- 常见的C/S架构
    + 微信客户端
    + 网游客户端
    + hydra
    + qq
    + 迅雷
    + 百度云
    + foxmail
- 常见的B/S架构
    + 微信网页版
    + 页游
    + 博学谷
    + 邮箱网页版

## 网络基本概念-ip、域名、dns
### 摘要
- ip地址
- 127.0.0.1本机回环地址
- 域名、localhost、DNS、购买域名
- ipconfig命令
- DNS起到了什么作用，DNS也是服务器，专门进行域名解析，真正请求时仍然是访问的ip地址
### 总结
- ip --> 江夏区高新区光谷大道77号光谷金融港B15栋2层
- 域名 --> 武汉传智播客
- dns --> 百度地图
- 网站流程图v4.0(加入dns)
- 需要记住的知识点
    + localhost --> 我当前电脑上的服务器
    + 127.0.0.1 --> 同上

## 网络基本概念-hosts文件、端口
### 摘要
- 只有以管理员权限运行的编辑器才有权限修改hosts文件
- 端口：ip地址像小区地址，端口像门牌号，范围:0到65535(2的16次方-1)
- netstat -an 查看当前占用的端口号，也就是对应的门牌号的房间有没有住着人，端口号不能冲突了，不同服务使用不同端口号，网页服务端口是80和443,数据库mysql端口号是3306,提供数据库服务
### 总结
- 网站流程图v5.0(加入hosts)
- 如何找hosts文件
    + win+r --> drivers
    + 进入etc文件
- 修改hosts文件有可能会出现用管理员权限重试 --> 解决办法
- 测试hosts文件
- 端口的理解
    + 一个商场有很多的商店 --> 光知道ip地址是不够的 --> 还需要知道门牌号 --> 端口就是门牌号
- 检测80端口是否被占用
    + netstat -an

## url组成
### 摘要
- url参数介绍,url的组成部分
### 总结
+ 协议+域名(ip)+端口+端口+目录路径+文件名+查询参数+锚点
+ http://baidu.com:80/a/b/c.php?a=1&b=2#aa(可以打开百度地址举例)

## 安装phpStudy
- 如果安装失败 --> 附件中有两个版本，都试一下 --> 是否缺少vc库（主要见于win7,win8系统）
- 运行phpStudy时，有时候会弹出一个类似错误一个的东西，关掉不影响使用就行，不用管
- 安装的目录一定不要有中文
- 红、绿的含义

## phpStudy的基本使用
- 默认访问文件设置 => 其他选项 --> phpStudy设置--> 端口常规设置
- 域名默认会定位到网站的根目录
- 开启目录访问 => 其他选项 --> phpStudy设置 --> 允许目录列表
- 一个最基本的php代码
    1. 在根目录创建一个php为扩展名的文件(文件名一定不要是中文，不支持中文)
    2. <?php ?>
    3. echo "hello world";
- 引言：为什么会有虚拟主机

## 配置第一个虚拟主机
1. 其他选项 --> 站点域名管理
2. 网站域名、网站目录、第二目录、网站端口
3. 新增
4. 保存
5. 修改vhost文件
6. 修改hosts文件
7. 重启apache

## 配置第二个虚拟主机
- phpStudy的bug，修改第二个会影响之前配置的虚拟主机，使第一个虚拟主机无法加载目录结构

## apache与php的关系
### 摘要
- apache和php是分开的，apache负责提供网页服务，而php负责解析php代码 
- apache还可以和java搭配使用
- phpStudy集成了apache,mysql,php,也可以独立安装这三个软件，只不过特别麻烦(有时候要一整天的折腾)
### 总结
- apache就是服务器软件，光有apache没有php只能实现静态网页服务器
    + 测试=>httpd.conf中的`Include conf/extra/httpd-php.conf`注释掉，测试之前写的php文件-->修改了配置文件，一定要重启phpStudy，否则不能生效
- php是用来做动态网页的，可以把我们写的php代码(里面会有if...else,for,while逻辑代码)解析成html代码
- 补充：怎么理解phpStudy这个软件 --> 全家桶、套餐
    + 真正的数据存放于mysql数据库当中
    + php的另一大作用补充：接收用户提交的表单数据   
    + 从服务器、php、数据库的角度来理解增
        1. 用户填写好表单
        2. 点击submit提交
        3. php接收数据
        4. 把接收到的数据保存到mysql数据库当中
    + 从服务器、php、数据库的角度来理解删(比如购物车中的商品的删)
    + 从服务器、php、数据库的角度来理解改(购物车中商品的数量修改)
    + 从服务器、php、数据库的角度来理解查(查询商品信息)

## 动态网页的基本实现原理
- 13、14两种视频一起放
### 摘要
### 总结
- 案例一：把视频中讲解的例子用代码实现出来(先模仿，不要理解为什么)
    + ["11","22","33"]这个数组渲染成html列表
    + 注意事项
        1、从现在开始，一定不要双击打开html页面
        2、不要使用webstorm右上角图标点击打开网页
        3、只能通过在地址栏输入网址的方式打开网页
        4、语句结束一定要加上分号，否则会报错
- 案例二：时间代码(先模仿，不要理解为什么)

```php
<?php
$arr = ["11","22","33"];
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
    <ul>
        <?php for($i=0;$i<=2;$i++){?>
        <li><?php echo $arr[$i];?></li>
        <?php } ?>
    </ul>
</body>
</html>
```

```php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php 
        echo date('Y-m-d');
    ?>
</body>
</html>
```
## php输出方式和php混编方式
### 摘要
- php的返回结果会按照浏览器的解析规则来展示
- php将结果返回给浏览器，浏览器按照html的解析规划进行解析
- echo 
- print_r
- var_dump
### 总结
- 打印输出的几种方式(print不要记，不用)
    + echo 输出字符串、数字
    + print_r 输出数组
    + var_dump 输出null,布尔型,判断数据的类型(不要用echo打印布尔型)
- 混写
    + php代码要在<?php ?>里面，外面的算html的内容
    + 练习if..else
    + 练习if...endif,if...else...endif
### 练习
- 声明一个$age,判断如果年龄大于18岁，显示h1标题：您已成年，否则显示您未成年

## php中的注释和变量
### 摘要
- 单行注释
- 多行注释
- 变量的声明，默认值是null
- 视频中变量没有赋值直接打印没有报错，如果我们也想不出现notice报错，设置php.ini配置文件,error_reporting=E_ALL&~E_NOTICE 意思是报告所有的错误，但除了E_NOTICE这一种。这也是最常用的错误报告级别，它不会报告注意类（如：使用了未定义的变量）的错误。修改完了一定要重启phpStudy
### 总结
- 注释方式和js一样
- 变量命名规范和js一样(不同点：爱钱)
- 没有var,第一次算定义，第二次算赋值

## 变量的几个相关函数
- isset：判断变量是否存在，判断变量是否定义了，同时它还可以判断变量的值是否为null
- empty：判断变量是否为空，为空的值有:"",0,"0","0.0",false,[]
- unset：删除变量

```php
echo $a;//会报错
```

```php
//可以改写成
if (isset($a)) {
    echo $a;
}
```

```php
$arr = [];
for($i=0;$i<100;$i++){
    echo $arr[$i];
}
```

```php
//可以改写成
$arr = [];
if(!empty($arr)){
    for ($i = 0; $i < 100; $i++) {
        echo $arr[$i];
    }
}
```

```php
$a = 100;
echo $a;
unset($a);
echo $a;
```

## 数据类型-字符串
- php中的数据类型
    + 基本数据类型：string,int,float,boolean
    + 复合数据类型：array,object(不讲，我们的课程没有涉及到php的面向对象相关知识点，我们将来在学习ES6的时候会学习到ES6中的js的构造函数类的写法，和php大体上是一致的，到时候学到了可以再自己去查一下php的面向对象相关知识点)
    + 特殊数据类型：null,资源(后面会学习到)

## 作业
- 配置虚拟主机
    + day8.com www.day8.com
    + day9.com www.day9.com
- 参考《流程图练习.png》自己把流程图画出来理解今天讲的这些概念
- 讲解header头避免中文乱码
- 讲解vscode如何创建代码片段(快速生成header这一行代码)
- 把今天的代码自己写一遍
    + 动态打印获取时间
    + 条件判断php、html混编
    + 循环php,html混编



