<?php 

    //get方式
    //初始化一个curl对象
    $curl = curl_init();
    //设置你要抓取的URL
    curl_setopt($curl, CURLOPT_URL, 'http://coolshell.cn');
    //设置header
    curl_setopt($curl, CURLOPT_HEADER, 1);
    // 设置cURL 参数，要求结果保存到字符串中还是输出到屏幕上。
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    // 运行cURL，请求网页
    $data = curl_exec($curl);
    // 关闭URL请求
    curl_close($curl); 
    // 显示获得的数据
    var_dump($data);

    //post方式
    //初始化一个curl对象
    $curl = curl_init();
    //设置你要抓取的URL
    curl_setopt($curl, CURLOPT_URL, 'http://coolshell.cn');
    //设置header
    curl_setopt($curl, CURLOPT_HEADER, 1);
    // 设置cURL 参数，要求结果保存到字符串中还是输出到屏幕上。
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    //设置post方式提交
    curl_setopt($curl, CURLOPT_POST, 1);
    //设置post数据
    $post_data = array(
        "username" => 'mangos',
        'password' => '123456'
        );
    curl_setopt($curl, CURLOPT_POSTFIELDS, $post_data);
    //执行命令
    $data = curl_exec($curl);
    //关闭URL请求
    curl_close($curl);
    //显示获取的数据
    kdd($data);

 ?>