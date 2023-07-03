
<?php 
    session_start();
//接收POST请求，并且POST中inf(information)信息为cost
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        
        //获取用户名
        $user1="user1";
        
        //连接数据库
        if(empty($_POST['cDate'])){
            $_POST['cDate']=$_POST['cDate1'];
        }
        $mysqli=new mysqli("127.0.0.1","root","","assetmanagementsys",3306);
        $result=$mysqli->query("CALL insertCostLogs('".$_POST['cDate']."','".$_POST['cContent']."',".$_POST['cMount'].", '".$_POST['b2Name']."', '".$_POST['aName']."', ".$_SESSION['uId'].");");        
        //页面重定向
        $url = "costIndex.php";
        echo "<SCRIPT language= 'JavaScript'>location.href='$url'</SCRIPT>";

    }
    else{
        //包含表单
        include "cost.php";
    }
