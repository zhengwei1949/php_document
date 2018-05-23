<?php 
    //通过列表页的a标签传递的id参数值，获取到对应的一组li的数据
    //根据得到的数据渲染底部结构即可
    if (isset($_GET['id'])) {
        //说明传递了id参数值，进行保存
        $id = $_GET['id'];

        //获取以及处理文件的内容
        $datas = file_get_contents('./fruit.txt');
        $data_arr = explode("\n", $datas);
        foreach ($data_arr as $value) {
            $result_arr[] = explode('|', $value);
        }

        //根据id，获取对应的图片地址
        foreach ($result_arr as $value) {
            if($id === $value[0]){
                $data = $value;
                break;
            }
        }
    }
   
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
    <style>
        .container ul > li {
            float: none;
            width: 100%;
            text-align: center;
        }
        .container ul > li img {
            width: auto;
        }
    </style>
</head>
<body>
    <div class="header">
        传智网上水果超市
    </div>
    <div class="container">
        <p>
            <a href="#">水果</a>
            <a href="#">干果</a>
            <a href="#">蔬菜</a>
        </p>
        <ul>
            <li>
                <img src="<?php echo $data[1]; ?>" alt="">
                <p>这是 <?php echo $data[2];?>的商品的详情图</p>
            </li>
        </ul>
    </div>
    <div class="footer">
        传智播客 版权所有
    </div>
</body>
</html>