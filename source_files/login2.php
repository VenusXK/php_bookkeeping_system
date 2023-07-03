<?php 
    session_start();
    $flag=1;
    //接收POST请求，并且POST中inf(information)信息为asset
    if($_SERVER["REQUEST_METHOD"]=="POST" && $_POST['inf']==='login'){
        
        //设置用户名
        $uName=$_POST['uName'];
        
        //连接数据库
        $mysqli=new mysqli("127.0.0.1","root","","assetmanagementsys",3306);
        //sql语句：查询该用户所有资产的当前数目
        //插入资产表
        $mysqli->query('call login("'.$_POST['uName'].'","'.$_POST['uPw'].'",@fuid)');
        $result=$mysqli->query('select @fuid;');
        $obj=$result->fetch_array();
        if($obj[0]==null){
            $flag=0;
             include "login.php";
        }
        else{
                    $_SESSION['uName']=$_POST['uName'];
                    $_SESSION['uId']= $obj[0];
                    //页面重定向
                    $url = "assetIndex.php";
                    header('location:'.$url);
        }    }
    else{
        //包含asset表单
        include "login.php";
    }
