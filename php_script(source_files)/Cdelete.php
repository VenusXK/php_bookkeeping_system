<?php
    session_start();
    //从表单获取信息
    $dcId = $_GET ["cId"]; 

    //连接数据库
    $mysqli_Ad=new mysqli("127.0.0.1","root","","assetmanagementsys",3306);

    //删除行
    $mysqli_Ad->query('call deleteCost('.$dcId.');');

    //页面重定向
    header("location:CostIndex.php");
?>