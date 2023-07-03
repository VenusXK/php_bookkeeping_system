<?php 
    $mysqli=new mysqli("127.0.0.1","root","","assetmanagementsys",3306);
    if($mysqli->connect_errno){
        echo "connect_error<br/>";
    return;
    
}?>

<html>
    <head>
        <link rel="stylesheet" type="text/css" href="../performance.css">
        <style>
            .contentTitle:hover{
                color:black
            }
            body{
            }
            td {
                width:270px
            }
            .contentSummary table td:hover{
                color:black;
            }
            #assetALL table {
            display: none;      /*默认隐藏*/
            }
             #assetALL:hover table {
             display: initial;      /*当鼠标hover时展示*/
             position: absolute
            }
            #assetDEBT table {
            display: none;      /*默认隐藏*/
            }
             #assetDEBT:hover table {
             display: initial;      /*当鼠标hover时展示*/
             position: absolute
            }
            .moreInf{
                text-align: right;
                width:auto;
                background: lightgrey;
                color:#787878;
                padding:20px;
                box-shadow:0px 15px 49px -20px #888888;
                width: 500px;
                margin-left:-20px;
                margin-top:-20px;
            }
            .moreInf tr:hover{
                font-size:18px
            }
        </style>
    </head>
    <body>
        <div class="content">
            <div class="content_sizecontrol"><!-- 内容大小控制 -->
                <div class="contentTitle" style="width:160px;margin-top: 40px;">
                        <h1>消费记录</h1>
                    </div>
                <div class="contentSummary" style="text-decoration: none;width:800px;height:auto">
                    <table style="color:darkgray" >
                        <thead style='color: #9c9c9c'><td><h2>预算类型</h2></td>
                        <td><h2>预算数额</h2></td>
                    <td><h2>剩余数额</h2></td>
                    <td><h2>修改操作</h2></td>
                    <td><h2>删除操作</h2></td></thead>
                        <?php
                            $sql='SELECT bName,bMount,bremain,bId,uId '
                                    . 'FROM budgetTable '
                                    . 'WHERE uId= "user1" AND bName IS NOT NULL '
                                    .'ORDER BY bMount DESC';
                            $result=$mysqli->query($sql);
                            while($row=$result->fetch_array()){
                                echo "<tr><td>";
                                echo "<h2>".$row[0]."</h2></td>";
                                echo "<td><h2>".$row[1]."</h2></td>";
                                echo "<td><h2>".$row[2]."</h2></td>";
                                echo "<td><h3>"."修改"."</h3></td>"
                                . "<td style='text-align:auto'><a href='Bdelete.php?bId={$row[3]}&uId={$row[4]}'
                                style='text-decoration:none;'><h3>删除</h3></a></td></tr>";
                            }
                            
                        ?>
                        
                    </table>
                    <form method='POST' style="height:75px">
                            <input name='cDate' placeholder='键入消费日期' style="width:200px;margin-right: 10px;margin-top: 10px">
                            <input name='cType' placeholder='键入消费数额' style='width:200px;margin-right: 10px;margin-top: 10px'>
                            <input name='cMount' placeholder='键入消费类型' style='width:200px;margin-right: 10px;margin-top: 10px'>
                            <input name='cContent' placeholder='键入消费备注' style='width:200px;margin-right: 10px;margin-top: 10px'>
                            <input style='width:100px' value='提交' name='aType'  type='submit' />
                            <input style='display:none' name='inf' value='budget' />    

                            </form>
                </div>
            </div>
        </div>
    </body>
</html>