<?php
    // Array
    // (
    //     [myfile] => Array
    //         (
    //             [name] => Array
    //                 (
    //                     [0] => qq.png
    //                     [1] => 程序员的理解.jpg
    //                 )

    //             [tmp_name] => Array
    //                 (
    //                     [0] => C:\Windows\phpC51.tmp
    //                     [1] => C:\Windows\phpC62.tmp
    //                 )

    //         )

    // )
    if(!empty($_FILES)){      
        // 1.获取扩展名
        $nameArr = $_FILES["myfile"]["name"];
        $pathArr = $_FILES["myfile"]["tmp_name"];
        foreach($pathArr as $key => $value){
            // $nameArr[0]
            // 2.获取唯一的图片名称
            $name = time().rand(1000,9999).strrchr($nameArr[$key],".");
            // 3.将文件存储到永久目录：move_uploaded_file
            move_uploaded_file($value,"./upload/".$name);
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
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
        <!-- 文件选择：<input type="file" name="myfile[]" multiple><br> -->
        文件选择： 
        <input type="file" name="myfile[]">
        <input type="file" name="myfile[]">
        <input type="submit">
    </form>
</body>
</html>