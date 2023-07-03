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
        <div class="logTitleDIV">登录&nbsp;
            <a href='logup2.php' class="logA" style='color:#e4e4e4;text-decoration: none;' ><span style=''>注册</span></a></div>
        <div  class="logFormDIV">
                <form method="post">
                    <input class="logInput" name='uName' placeholder='输入用户名<?php if($flag==0){ echo '（账号或密码错误）'; }?>'>
                    <input class="logInput" name='uPw' placeholder='输入密码<?php if($flag==0){ echo '（账号或密码错误）'; }?>'>
                    <input  class='logSubmit' type='submit' style="padding-left:0px" value='提交'/>
                    <input name='inf' value="login" style="display:none">
                </form>
        </div>
        
    </body>
    
</html>