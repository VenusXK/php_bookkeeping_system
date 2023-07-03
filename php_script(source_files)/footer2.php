<?php
?>
<html>
<head>
    <style>
        #fButton:hover{
              transform: scale(1.1);
        }
    </style>
</head>
<body>
    <div class="footer" style="height:300px;padding-top:0px;margin-top:100px;background: white">
        <hr style="width: 100px;border:10px solid black;border-radius: 100px;" />
        <div style="margin:auto;;height:40px;margin-top:100px;;font-size:26px;font-weight:bolder;"><span style="color:#888888;font-size:25px;line-height: 100px">当前登录用户：<?php echo $_SESSION['uName']; ?></span>
            <a href='logout.php' style="color:#818181;text-decoration: none"><div id='fButton' style='margin:auto;width:130px;background:#e4e4e4;border-radius: 30px;padding:20px;'>退出账号</div></a></div>
    </div>
</body>
</html>
