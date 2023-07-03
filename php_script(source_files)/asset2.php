<?php 
    session_start();

    //接收POST请求，并且POST中inf(information)信息为asset
    if($_SERVER["REQUEST_METHOD"]=="POST" && $_POST['inf']==='asset'){
        
        //设置用户名
        $uName="user1";
        
        //连接数据库
        $mysqli=new mysqli("127.0.0.1","root","","assetmanagementsys",3306);
        //sql语句：查询该用户所有资产的当前数目
                
        //插入资产表
        $mysqli->query('call InsertAsset("'.$_POST['aname'].'",'.$_POST['amount'].',"'.$_POST['aType'].'","'.$_SESSION['uId'].'")');
        
        //页面重定向
        header("location:assetIndex.php");
    }
    else{
        //包含asset表单
        include "asset.php";
    }
