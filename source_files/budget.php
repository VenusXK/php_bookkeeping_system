<html>
    <head>
        <style>
                        *{
            user-select:none;
            }
                html {
                scroll-behavior: smooth;
              }
            .budgetinfo:hover {
                transform: scale(1.05);
            }
            .budget2info:hover {
                transform: scale(1.02);
            }
            input{
                height:60px;
                border: none;
                outline: none;
                font-size: 15px;
                font-weight: bolder;
                color:#818181;
                border-radius: 20px;
                background: #e4e4e4  ;
            }
            input:focus{
                -webkit-box-shadow: inset 0 1px 100px rgba(0,0,0,.075),0 0 8px rgba(102,175,233,.6);
                box-shadow: inset 0 1px 100px rgba(0,0,0,.075),0 0 8px rgba(102,175,233,.6);
            }
            li{
                list-style-type: none;
            }
            .h{
                font-family: 'Microsoft-Yahei';
                font-size:40px;
                font-weight: bolder;
                padding-left: 20px;
            }
            .welUnder{
                width:750px;
                color:#515151;
                border-radius: 60px;
            }
            .innerbox::-webkit-scrollbar {
                width: 0px;
                height:0px;
                /*height: 4px;*/
            }
                .submit{
                background: black;
                color:white;
                }
            .submit:hover{
            transform: scale(1.08);           
            }

        </style>
    </head>
    <body>
            
            
            
          
            
            

            
            
            
                
        <div style="width:1020px;margin:auto">
            
                <div style="float:left;width:440px;height:auto;margin:auto;margin-top:50px">
                <div style="width:390px;height:80px;margin:auto;padding:40px;padding-bottom:20px;font-size:40px;font-weight: bolder">
                    一级预算
                </div>
                  
                    <form method="POST">
                                <input name="bName" placeholder="输入预算名称" style="padding-left:16px;width:140px;margin-left:10px;margin-right:10px;">
                                <input name="bMount" placeholder="输入预算数额" style="padding-left:16px;width:140px;margin-right: 10px">
                                <input style="width:80px;background: black;color:white" value="提交" name="aType" class="submit"  type="submit" />
                                <input style="display:none" name="inf" value="budget" />
                                </form>
                     <?php $mysqli_budgetAll3 = new mysqli("127.0.0.1", "root", "", "assetmanagementsys", 3306);
                                        $result_budgetAll3 = $mysqli_budgetAll3->query('call findBudgetAll('.$_SESSION['uId'].')');
                                        if($mysqli_budgetAll3->affected_rows==0){
                                            echo "<div style='color:#818181;width:300px;height:140px;background:#e4e4e4;font-size:40px;font-weight:bolder;padding-left:120px;padding-top:70px;border-radius:40px;margin-top:40px' >暂无预算</div>";
                                        }
                                        else{
                                         echo   "<div class='innerbox' style='overflow:hidden;border-radius:30px;width:420px;border-radius: 20px;padding-top:10px;margin-bottom:10px;'>";
                                       
                                        while($obj_budget3=$result_budgetAll3->fetch_object()){
                                            $len=strlen($obj_budget3->bName)*10;
                                            echo ""
                                            . "<a href=#".$obj_budget3->bName." style='text-decoration:none;color:#515151'>"
                                            . "<div class='budgetinfo' style='color:#818181;float:left;width:".$len."px;height:40px;margin-left:10px;border-radius:15px;font-size:20px;font-weight:bolder;padding-top:10px;margin-bottom:25px;padding-left:15px;background:#e4e4e4;box-shadow:0px 15px 50px -20px #e4e4e4;'>"
                                            .$obj_budget3->bName
                                            . "</div></a>";
                                        }
                                        echo " <div style='height:50px'></div></div>";}
                                        $mysqli_budgetAll3->close(); ?>
                </div>
            
            
            
            
            
            
            
            
            <div style='float:right;margin:auto;width:450px;height:450px;margin-top:10px;margin-right: 120px;'>
                <div class="innerbox" style="overflow: hidden;border-radius: 40px;width:550px;height:535px;overflow:hidden;margin:auto;margin-top: 10px;">                   
                    <?php 
                        $mysqli_budgetAll = new mysqli("127.0.0.1", "root", "", "assetmanagementsys", 3306);
                        $result_budgetAll = $mysqli_budgetAll->query('call findBudgetAll('.$_SESSION['uId'].')');
                        if($mysqli_budgetAll->affected_rows == 0){
                            echo "<div style='width:260px;height:200px;background:#e4e4e4;border-radius:50px;margin-top:50px;float:right;margin-right:30px;font-size:31px;color:#818181;padding:100px;padding-top:130px;font-weight:bolder'>这里是用来创建二级预算的模块<br><br>请先创建一级预算</div>";
                        }
                        else{
                        while($obj_budget=$result_budgetAll->fetch_object()){
                            echo  "<div id=".$obj_budget->bName." style='height:30px'></div>"
                            . "<div   style=' display: inline-block;width:450px;font-size:40px;padding-left:80px;padding-top:10px;font-weight:bolder;margin-top:30px;margin-bottom:25px'>$obj_budget->bName"
                            . ""
                            . "<span style='font-size:20px'> (".number_format($obj_budget->bRemain,2) ."/".  number_format( $obj_budget->bMount,2).")</span><a href='Bdelete.php?dbId={$obj_budget->bId}' style='color:#515151'><div style='width:70px;padding:15px;text-align:center;background:lightgray;border-radius:19px;float:right;font-size:18px;margin-top:5px'>删除</div></a></div>";
                            
                                       
                                        
                                        
                                        
                                        
                                        
                            echo "<form method='POST'>
                                  <input style='padding-left:15px;width:180px;margin-left:60px;margin-right:10px;margin-top:20px' name='b2Name' placeholder='键入二级预算项名称'>
                                  <input style='padding-left:15px;width:180px;margin-right: 10px' name='b2Mount' placeholder='输入二级预算数额'>
                                  <input style='width:80px'class='submit' type='submit' value='提交'/>
                                  <input style='display:none' name='bId' value=".$obj_budget->bId." />
                                  <input style='display:none' name='inf' value='budget2' />
                                  <input style='display:none' name='bName' value=".$obj_budget->bName." />

                                  </form>";
                            
                
                          

                            
                            
                            
                            
                            
                            
                            
                            
                                    
                           echo 
                             "<div  class='innerbox' style='height:300px;width:710px;overflow: auto;margin-left:25px;margin-bottom: 10px'>"
                            . "<table style='color:#515151'>";
                            $mysqli_budget2All = new mysqli("127.0.0.1", "root", "", "assetmanagementsys", 3306);
                            $result_budget2All = $mysqli_budget2All->query("call findbudget2(".$obj_budget->bId.")");
                            while($obj_budget2=$result_budget2All->fetch_object()){
                                $percentage = $obj_budget2->b2Remain/$obj_budget2->b2Mount*100;
                                echo  "<tr>"
                            . "<td><div class='budget2info' style='overflow:hidden;margin-left:40px;width:450px;margin-bottom:10px;height:60px;border-radius:20px;font-size:22px;font-weight:bolder;background:lightgray;box-shadow:0px 15px 25px -20px #888888;'>"
                            . "<div style='height:100%;width:".$percentage."%; background: darkgray ;margin:0px;'>"
                            . "<div style='padding:10px;padding-left:30px'>"
                            . "<div style='width:400px;font-size:30px;float:left'>".$obj_budget2->b2Name."         <span style='font-size:20px;'> $obj_budget2->b2Remain / $obj_budget2->b2Mount </span><a href='B2delete.php?db2Id={$obj_budget2->b2Id}' style='color:#515151'><div style='float:right;font-size:18px;margin-top:8px'>删除</div></a></div>"
                            . "</div></div></div></td></tr>";
                            }
                            
                            echo  "</table><div style='height:30px;'></div></div>";
                            echo "<div style='height:100px;'></div>";
                        }}
                        $mysqli_budgetAll->close();
                    ?>
                        
                                
                </div>
                
                <div style='height:20px;'></div>

                                 
            </div>


                        
                    
        </div>
        <div style="height:600px;"></div>
                    
    </body>
</html>