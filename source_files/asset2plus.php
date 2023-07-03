<?php 
    session_start();

    if($_SERVER["REQUEST_METHOD"]=="POST" && $_POST['inf']==='income'){
        
        //设置用户名
        
        //连接数据库
        $mysqli=new mysqli("127.0.0.1","root","","assetmanagementsys",3306);
        //sql语句：查询该用户所有资产的当前数目
                
        //插入资产表
        $mysqli->query('call income("'.$_POST['aname'].'",'.$_SESSION['uId'].','.$_POST['amount'].')');
        
        //页面重定向
        header("location:assetIndex.php");
    }
        if($_SERVER["REQUEST_METHOD"]=="POST" && $_POST['inf']==='transfer'){
        
        //设置用户名
        
        //连接数据库
        $mysqli=new mysqli("127.0.0.1","root","","assetmanagementsys",3306);
        //sql语句：查询该用户所有资产的当前数目
                
        //插入资产表
        $mysqli->query('call transfer("'.$_POST['faName'].'","'.$_POST['taName'].'",'.$_SESSION['uId'].','.$_POST['taMount'].')');
        
        //页面重定向
        header("location:assetIndex.php");
    }
    else{
        //包含asset表单
        include "assetplus.php";
    }
