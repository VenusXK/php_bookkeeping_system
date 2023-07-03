
<?php 
    session_start();
    //接收POST请求，并且POST中inf(information)信息为budget
    if($_SERVER["REQUEST_METHOD"]=="POST" && $_POST['inf']==='budget'){
        
        //获取用户名
        
        //连接数据库
        $mysqli=new mysqli("127.0.0.1","root","","assetmanagementsys",3306);
        
        $mysqli->query('call insertbudget("'.$_POST['bName'].'",'.$_POST['bMount'].',"'.$_SESSION['uId'].'")');
        
        //页面重定向
        $url = "budgetIndex.php";
        echo "<SCRIPT language= 'JavaScript'>location.href='$url'</SCRIPT>";

    }
    
     //接收POST请求，并且POST中inf(information)信息为budget
    else if($_SERVER["REQUEST_METHOD"]=="POST" && $_POST['inf']==='budget2'){
        
        //获取用户名
        $uId="user1";
        
        //连接数据库
        $mysqli=new mysqli("127.0.0.1","root","","assetmanagementsys",3306);
        $mysqli->query('call insertbudget2("'.$_POST['b2Name'].'",'.$_POST['b2Mount'].','.$_POST['bId'].',"'.$_SESSION['uId'].'")');
        
        //页面重定向
        $url = "budgetIndex.php";
        echo "<SCRIPT language= 'JavaScript'>location.href='$url'</SCRIPT>";
    }
    else{
        //包含表单
        include "budget.php";
    }
