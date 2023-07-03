<html>
    <head>
        <style>
            
            .submit:hover{
            transform: scale(1.03);           
            }
            *{
            color:#818181;
            }
            .assetinfo:hover {
                transform: scale(1.03);
            }
            #inputdiv input{
                height:60px;
                border: none;
                outline: none;
                font-size: 20px;
                font-weight: bolder;
                color:#818181;
                border-radius: 20px;
                background: #e4e4e4  ;
            }
            #inputdiv select{
                height:60px;
                border: none;
                outline: none;
                font-size: 20px;
                font-weight: bolder;
                color:#818181;
                border-radius: 20px;
                background: #e4e4e4  ;
            }
            
            
            
            input{
                height:60px;
                border: none;
                outline: none;
                font-size: 20px;
                font-weight: bolder;
                color:#818181;
                border-radius: 20px;
                background: white  ;
            }
               select{
                height:60px;
                border: none;
                outline: none;
                font-size: 20px;
                font-weight: bolder;
                color:#818181;
                border-radius: 20px;
                background: #d0d0d0  ;
                appearance: none;
                -webkit-appearance: none;
                -moz-appearance: none;
            }
                option{
                height:80px;
                border: none;
                outline: none;
                font-size: 20px;
                font-weight: bolder;
                color:#818181;
                border-radius: 20px;
                background: #d0d0d0  ;
                appearance: none;
                -webkit-appearance: none;
                -moz-appearance: none;
            }
            input:focus{
                -webkit-box-shadow: inset 0 1px 100px rgba(0,0,0,.075),0 0 8px rgba(102,175,233,.6);
                box-shadow: inset 0 1px 100px rgba(0,0,0,.075),0 0 8px rgba(102,175,233,.6);
            }
            ul{
                list-style-type: none;
            }
            .h{
                font-family: 'Microsoft-Yahei';
                font-size:40px;
                font-weight: bolder;
            }
            .welUnder{
                width:650px;
                height:auto;
                padding-top: 20px;
                padding-left:50px;
                color:#515151;
                box-shadow:0px 15px 28px -20px #e4e4e4

            }
            .welUnder table{
                color:#515151;
            }
            /*滚动条样式*/
            .innerbox::-webkit-scrollbar {
                width: 20px;
                height:0px;
                /*height: 4px;*/
            }

            .innerbox::-webkit-scrollbar-track {
                border-radius: 10px;
                background: rgba(0,0,0,0.1);

            }
            .submit{
                background: black;
                color:white;
                }
        </style>
    </head>
    <body>
        <script>
            function getQueryVariable(variable)
            {
                   var query = window.location.search.substring(1);
                   var vars = query.split("&");
                   for (var i=0;i<vars.length;i++) {
                           var pair = vars[i].split("=");
                           if(pair[0] == variable){return pair[1];}
                   }
                   return(false);
            }
    </script>
    
    
    
    
    
      
    
    
    
    
    
    
    

    
    
    
    
    
    
    
    
        <!-- 净资产 -->
       <div class="welUnder" style="height:250px;background:none;box-shadow: none;margin-top: 50px">
                <div class="h" style="font-size: 50px;margin:20px;margin-bottom: 0;color:black;">净资产数额</div>
                <?php
                        $mysqli_assetNet1 = new mysqli("127.0.0.1", "root", "", "assetmanagementsys", 3306);
                        $result_assetNet1 = $mysqli_assetNet1 -> query("CALL findAssetPosSum(".$_SESSION['uId'].");");
                        $obj_assetNetpos = $result_assetNet1 -> fetch_object();
                        $AssetPosSum = $obj_assetNetpos -> assetSum;
                        $mysqli_assetNet1 -> close();
                        ?>
                <?php 
                        $mysqli_assetNet2 = new mysqli("127.0.0.1", "root", "", "assetmanagementsys", 3306);
                        $result_assetNet2 = $mysqli_assetNet2->query("CALL findAssetdebSum(".$_SESSION['uId'].");");
                        $obj_assetNetdeb = $result_assetNet2->fetch_object();
                        $AssetDebSum = $obj_assetNetdeb->assetSum;
                        $mysqli_assetNet2->close();
                        ?>
            <div class="h" style="font-size: 50px;margin:20px;color:black"><?php 
                        if ($AssetPosSum-$AssetDebSum==0){
                            echo '无资产';
                        }
                        else{
                            echo '￥'.number_format($AssetPosSum-$AssetDebSum,2); 
                        }?></div>
                        
        <div style="height:20px"></div>

        </div>
        
        
        
        
        
        
        
        
        
        
        
        
      
                
        
        
        
        <!-- 总资产模块 -->
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        <div class="welUnder" style="background:#eeeeee">
            
            <!-- 显示头 -->
            <div id='title2' class="h" style="margin:30px;margin-bottom: 0;">总资产数额</div>
            <div id="holder2" style="overflow:hidden;height:120px;">
            <div class="h" style="margin-top: 20px;margin-left: 25px;">
                <?php
                $mysqli_assetSum = new mysqli("127.0.0.1", "root", "", "assetmanagementsys", 3306);
                $result_assetSum=$mysqli_assetSum->query("CALL findassetpossum('".$_SESSION['uId']."');");
                $obj_assetSum=$result_assetSum->fetch_object();
                echo '￥'.number_format($obj_assetSum->assetSum,2); 
                $mysqli_assetSum->close();               
                ?>
            
            
            
                <!-- 表单以创建资产账户-->
                <form method='POST'>
                   <input style='width:200px;padding-left:20px;margin-right:10px;margin-top:50px;' name='aname' placeholder='键入账户名'>
                 <input style='width:200px;padding-left:20px;margin-right: 10px' name='amount' placeholder='键入账户数额'>
                 <input class="submit" style='width:80px' type='submit' value='提交'/>
                 <input style='display:none' name='aType' value='save' />    
                 <input style='display:none' name='inf' value='asset' />
                 </form>
                </div>
            
                <!-- 列表以显示账户详细信息 -->
                <div class="innerbox" style="overflow:auto;overflow-y:hidden;width:580px;padding: 10px;padding-top:0px;padding-bottom:0px;border-radius: 40px;">
                <?php $mysqli_assetAll = new mysqli("127.0.0.1", "root", "", "assetmanagementsys", 3306);
                $result_assetAll = $mysqli_assetAll->query("call findAssetPosAll('".$_SESSION['uId']."');");?>
                    <table><tr>
                    <?php
                    if($mysqli_assetAll->affected_rows!=0){
                        while ($row5 = $result_assetAll->fetch_array()) {
                        echo "<td>"
                         . "<div class='assetinfo' style='width:150px;height:150px;float:left;margin-right:20px;border-radius:40px;font-size:22px;font-weight:bolder;background:#d0d0d0;padding:20px;'>"
                            ."<span style='font-size:30px'>".$row5[0]."</span><br><br>"
                            .number_format($row5[1],2)."<br>"
                            ."<a href='Adelete.php?aId={$row5[2]}'
                            style='text-decoration:none;color:#515151'>删除</a>"
                            . "</div></td>"; }                            
                    }
                    else{
                        echo "<td>"
                         . "<div style='background:#d0d0d0;opacity: 0.7;width:530px;height:150px;float:left;margin-right:20px;border-radius:40px;font-size:60px;font-weight:bolder;padding:20px;text-align:center;line-height:130px'>"
                            ."暂无资产</div></td>";
                    }?>
                    </tr></table>
            </div>
            <div style="height:50px"></div>
            </div></div>
     
        
        
        
        
        
        
        
        
        
        
        
        
        
    <!-- 总负债模块 -->
    
    
    
    
    
    
    
    
    
    
    
    
    
    
        <div class="welUnder" style="background:#eeeeee;">
            
            <!-- 显示头 -->
            <div class="h" id="title" style="margin:30px;margin-bottom: 0">总负债数额</div>
            <div id="holder" style="overflow:hidden;height:120px;">
            <div class="h"  style="margin-top: 20px;margin-left: 25px;">
                <?php
                $mysqli_assetSum = new mysqli("127.0.0.1", "root", "", "assetmanagementsys", 3306);
                $result_assetSum=$mysqli_assetSum->query("CALL findassetdebsum('".$_SESSION['uId']."');");
                $obj_assetSum=$result_assetSum->fetch_object();
                echo '￥'.number_format($obj_assetSum->assetSum,2); 
                $mysqli_assetSum->close();               
                ?>
            
            
            
                <!-- 表单以创建资产账户-->
                <form method='POST'>
                   <input  style='width:200px;padding-left:20px;margin-right:10px;margin-top:50px;' name='aname' placeholder='键入负债名'>
                 <input style='width:200px;padding-left:20px;margin-right: 10px' name='amount' placeholder='键入负债数额'>
                 <input class="submit" style='width:80px' type='submit' value='提交'/>
                 <input style='display:none' name='aType' value='debt' />    
                 <input style='display:none' name='inf' value='asset' />
                 </form>
                </div>
            
                <!-- 列表以显示账户详细信息 -->
                <div class="innerbox" style="overflow:auto;overflow-y: hidden;width:580px;padding: 10px;padding-top:0px;padding-bottom:0px;border-radius: 40px;">
                <?php $mysqli_assetAll = new mysqli("127.0.0.1", "root", "", "assetmanagementsys", 3306);
                $result_assetAll = $mysqli_assetAll->query("call findAssetDebAll('".$_SESSION['uId']."');");?>
                    <table><tr>
                    <?php
                    if($mysqli_assetAll->affected_rows!=0){
                        while ($row5 = $result_assetAll->fetch_array()) {
                        echo "<td>"
                         . "<div class='assetinfo' style='width:150px;height:150px;float:left;margin-right:20px;border-radius:40px;font-size:22px;font-weight:bolder;background:#d0d0d0;padding:20px;box-shadow:0px 15px 10px -20px #888888;'>"
                            ."<span style='font-size:30px'>".$row5[0]."</span><br><br>"
                            .number_format($row5[1],2)."<br>"
                            ."<a href='Adelete.php?aId={$row5[2]}&uId={$row5[3]}'
                            style='text-decoration:none;color:#515151'>删除</a>"
                            . "</div></td>"; }                            
                    }
                    else{
                        echo "<td>"
                         . "<div style='background:#d0d0d0;opacity: 0.7;width:530px;height:150px;float:left;margin-right:20px;border-radius:40px;font-size:60px;font-weight:bolder;padding:20px;text-align:center;line-height:130px'>"
                            ."暂无负债</div></td>";
                    }?>
                    </tr></table>
            </div>
                <div style="height:50px"></div></div>
        </div>

    
     
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    </body>
    
    
    <script type="text/javascript">
/*
*  id:展开/收起内容区的id
*  minH : 展开/收起的最小高度
*  maxH : 展开/收起的最大高度
*  expand : true - 从收起到展开、false - 从展开到收起
*  rate : 缓动变化率 0-1
*  speed : 速度(毫秒)
*/
var Toggle = function(id, minH, maxH, expand, rate, speed){
    this.minH = minH;
    this.maxH = maxH;
    this.tempH = 0;
    this.rate = rate;
    this.speed = speed;
    this.moving = false;
    this.moveT = null;
    this.holder = document.getElementById(id);
    this.expand = expand;
}
Toggle.prototype = {
    start : function(){
        if(this.moving) return;
        this.moving = true;
        this.tempH = this.expand ? this.minH : this.maxH;
        var t = this;
        this.moveT = setInterval(function(){t.move()}, this.speed);
    },
    move : function(){
        if(this.expand){
            if(this.tempH >= this.maxH){
                this.moving = false;
                this.expand = false;
                clearInterval(this.moveT);
            }else{
                var h = Math.round((this.maxH - this.tempH) * this.rate);
                if(h <= 1){
                    h = 1;
                }
                this.tempH += h;
            }
        }else{
            if(this.tempH <= this.minH){
                this.moving = false;
                this.expand = true;
                clearInterval(this.moveT);
            }else{
                var h = Math.round((this.tempH - this.minH) * this.rate);
                if(h <= 1){
                    h = 1;
                }
                this.tempH -= h;
            }
        }
        this.holder.style.height = this.tempH + "px";
    }
}
//版块一(默认已收起)
var obj = new Toggle("holder",120,500,true, 0.2, 10);
document.getElementById("title").onclick = function(){
    obj.start();
}
//版块二(默认已展开)
var obj2 = new Toggle("holder2",120,500,true, 0.2, 10);
document.getElementById("title2").onclick = function(){
    obj2.start();
}


</script>
</html>