<html>
    <head>
        <link rel="stylesheet" type="text/css" href="../style.css">
        <style>
            .navUnder td{
                width:260px;
            }
            #ls2:hover{
                transform: none;
            }
             #ls3:hover{
                transform: none;
            }
             #ls1:hover{
                transform: scale(1.1);
            }
        </style>
    </head>
    <body>
        <div class="navUnder" style="background:linear-gradient(225deg,#787878,#9f9f9f);padding-top: 20px;height:80px">
            <div style="width:600px;margin:auto">
            <table>
                <tr>
                    <td>
                        <div class="navIndex" id='ls1' style="height:55px;margin: auto;width:200px;border-radius: 20px;padding:0px;overflow: hidden">
                            <div class="navIndex" id='ls2' style="background:linear-gradient(135deg,#77FFCC,#AAFFEE);margin: auto;width:50%;border-radius: 0px;"><a href="assetIndex.php" style="color:black;">资产</a></div>
                            <div class="navIndex" id='ls3' style="background: black;margin: auto;width:50%;border-radius: 20px;border-radius: 0px;"><a href="assetIndexplus.php" style="color:white;">动账</a></div>
                        </div>
                    </td>
                    <td>
                        <div class="navIndex" style="margin: auto;float:none;width:180px;border-radius: 20px;">
                            <a href="budgetIndex.php" style="color:white;">预算管理</a>
                        </div>
                    </td>
                    <td>
                        <div class="navIndex" style="margin: auto;float:none;width:180px;border-radius: 20px;">
                            <a href="costIndex.php" style="color:white;">消费记录</a>
                        </div>
                    </td>
                </tr>
            </table>
            </div>
        </div>
    </body>
</html>