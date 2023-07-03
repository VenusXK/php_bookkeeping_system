<html>
    <head>
        <style>
              *{
            user-select:none;
            }
            .logA{
                color:#e4e4e4;
                text-decoration: none;
            }
            .logInput{
                width:400px;
                padding-left:35px;
                margin-top:30px;
                height:60px;
                border: none;
                outline: none;
                font-size: 25px;
                font-weight: bolder;
                color:gray;
                border-radius: 20px;
                background: #f4f4f4  ;
            }
            .logInput:focus{
                box-shadow: 0 0 8px rgba(102,175,233,.6);
            }
            .logInput:hover{
                transform: scale(1.03);
            }
            .logSubmit{
                width:400px;
                padding-left:35px;
                margin-top:30px;
                background:linear-gradient(-45deg,lightgray,darkgray);
                height:60px;
                border: none;
                outline: none;
                font-size: 25px;
                font-weight: bolder;
                color:gray;
                border-radius: 20px;
            }
            .logSubmit:hover{
                transform: scale(1.03);
                background:linear-gradient(-45deg,darkgray,lightgray);
            }
            .logTitleDIV{
                width:450px;
                height:130px;
                margin:auto;
                font-size:70px;
                font-weight:bolder;
                margin-top:100px;
                color:black;
            }
            .logFormDIV{
                width:500px;
                height:350px;
                margin:auto;
                background:#e4e4e4;
                margin:0 auto;
                border-radius: 80px; 
                box-shadow:0px 15px 48px -20px #e4e4e4;
                padding-top:30px;
                padding-left:100px;
            }
        </style>
    </head>
    <body >
        <div class="logTitleDIV">注册&nbsp;
            <a class="logA" href='login.php'><span style=''>登录</span></a></div>
        <div class="logFormDIV">
            <div style='font-size:45px;font-weight: bolder;color:#d4d4d4;padding-top: 80px'>
                注册成功!<br>即将跳转到登录页面
            </div>
        </div>
        <script>
        setTimeout("location.href='login2.php'",1500);
        </script>";
    </body>
    
</html>