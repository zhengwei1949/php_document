<ul>

        <!-- 
        分析：
            1 获取文件的内容 file_get_contents()
            2 处理获取到的内容
            3 根据处理后的数据进行结构创建
            4 设置图片地址以及标题
         -->
            
        <?php 
            //1 获取fruit.txt的内容
            $datas = file_get_contents('./fruit.txt');
            //echo $datas;

            //2 对数据进行处理
            //2.1 根据\n进行分隔
            $data_arr = explode("\n", $datas);
            //var_dump($data_arr);

            //2.2 将$data_arr中的每个元素按照|分隔，并进行保存
            foreach ($data_arr as $value) {
                //$value代表了每个字符串
                //这个字符串的分隔结果是我们需要的，进行单独保存

                //使用: 变量名[] = 值; ，表示要创建一个数组，并且向其中加入一个新的元素
                $result_arr[] = explode('|', $value);
            }
            // print_r($result_arr);
        ?>
        
        <!-- 3 根据$result_arr创建结构 -->
        <?php foreach($result_arr as $values): ?>
            <li>
                <!-- 4 修改图片路径与文字内容 -->
                <img src="<?php echo $values[1]; ?>" alt="">

                <!-- 5 给a标签设置href跳转到详情页，同时进行id参数的传递 -->
                <a href="./detail.php?id=<?php echo $values[0]; ?>"><?php echo $values[2]; ?></a>
            </li>
        <?php endforeach; ?>
                    
        </ul>