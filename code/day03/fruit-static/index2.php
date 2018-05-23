
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <div class="header">
        传智网上水果超市
    </div>
    <div class="container">
        <p>
            <a href="javascript:;">水果</a>
            <a href="javascript:;">干果</a>
            <a href="javascript:;">蔬菜</a>
        </p>
        
        <!-- 将列表部分的功能提取到一个独立的php文件中 -->
        <!-- 此处使用include方式引入列表文件 -->
        <?php include './fruit.php'; ?>


    </div>
    <div class="footer">
        传智播客 版权所有
    </div>
</body>
</html>