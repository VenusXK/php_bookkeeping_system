<html>
    <head>
        <style>
            
            .submit:hover{
            transform: scale(1.02);           
            }
            *{
            color:#818181;
            }
            .assetinfo:hover {
                transform: scale(1.08);
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
    
    
    
    
    
      
    
    
    
    
    
    
    

    
    
    
    
    
       <div id='inputdiv' style="color:black;width:650px;margin:auto;border-radius: 80px;padding:25px;margin-top: 30px;">
        <div  style="width:600px;height:80px;margin:auto;padding:40px;padding-bottom:20px;font-size:40px;font-weight: bolder;color:black">记录收入
        </div><div>
                <form method="POST">
                 <input style='font-size:20px;width:210px;padding-left:20px;margin-left: 40px;margin-right: 10px;' name='amount' placeholder='输入收入金额'>
                
                     
                    <select name='aname' style='width:210px;padding-left:20px;margin-left:3px;margin-right: 13px;'>
                    <?php $mysqli_assetAll = new mysqli("127.0.0.1", "root", "", "assetmanagementsys", 3306);
                        $result_assetAll=$mysqli_assetAll->query('call findAssetPosAll('.$_SESSION['uId'].')');
                        while($obj_assetNetpos=$result_assetAll->fetch_object()){
                            echo  '<option value='.$obj_assetNetpos->aName.'>'.$obj_assetNetpos->aName.' (储蓄)</option>';
                        }
                        $mysqli_assetAll->close();
                    ?>
                    <?php $mysqli_assetAll = new mysqli("127.0.0.1", "root", "", "assetmanagementsys", 3306);
                        $result_assetAll=$mysqli_assetAll->query('call findAssetDebAll('.$_SESSION['uId'].')');
                        while($obj_assetNetpos=$result_assetAll->fetch_object()){
                            echo  '<option value='.$obj_assetNetpos->aName.'>'.$obj_assetNetpos->aName.' (负债)</option>';
                        }
                        $mysqli_assetAll->close();
                    ?>
                    </select>
                <input  style='width:120px;background: black;color:white;' class="submit" type='submit' value='提交'/>
                <input name='inf' value="income" style='display:none'>
                 </form></div>
                
                
                
                
                
                
                
                
                
                <div id='obj12' style="width:600px;height:80px;margin:auto;padding:40px;padding-bottom:20px;font-size:40px;font-weight: bolder;color:black">
                    记录转账
                </div>
          <div id='obj02' style='overflow: hidden'>
                <form method="POST">
                 <input style='font-size:20px;width:180px;padding-left:20px;margin-left: 40px;margin-right: 13px;' name='taMount' placeholder='输入转账金额'>
                 <input name='inf' value="transfer" style="display:none;width:120px;padding-left: 40px">
                     
                    <select name='faName' style='width:180px;padding-left:20px;margin-right: 13px;'>
                    <?php $mysqli_assetAll = new mysqli("127.0.0.1", "root", "", "assetmanagementsys", 3306);
                        $result_assetAll=$mysqli_assetAll->query('call findAssetPosAll('.$_SESSION['uId'].')');
                        while($obj_assetNetpos=$result_assetAll->fetch_object()){
                            echo  '<option value='.$obj_assetNetpos->aName.'>由 '.$obj_assetNetpos->aName.' (储蓄)</option>';
                        }
                        $mysqli_assetAll->close();
                    ?>
                    <?php $mysqli_assetAll = new mysqli("127.0.0.1", "root", "", "assetmanagementsys", 3306);
                        $result_assetAll=$mysqli_assetAll->query('call findAssetDebAll('.$_SESSION['uId'].')');
                        while($obj_assetNetpos=$result_assetAll->fetch_object()){
                            echo  '<option value='.$obj_assetNetpos->aName.'>由 '.$obj_assetNetpos->aName.' (负债)</option>';
                        }
                        $mysqli_assetAll->close();
                    ?>
                    </select>
                 
                 
                <select name='taName' style='width:180px;padding-left:20px;margin-right: 13px;'>
                    <?php $mysqli_assetAll = new mysqli("127.0.0.1", "root", "", "assetmanagementsys", 3306);
                        $result_assetAll=$mysqli_assetAll->query('call findAssetPosAll('.$_SESSION['uId'].')');
                        while($obj_assetNetpos=$result_assetAll->fetch_object()){
                            echo  '<option value='.$obj_assetNetpos->aName.'>转入 '.$obj_assetNetpos->aName.' (储蓄)</option>';
                        }
                        $mysqli_assetAll->close();
                    ?>
                    <?php $mysqli_assetAll = new mysqli("127.0.0.1", "root", "", "assetmanagementsys", 3306);
                        $result_assetAll=$mysqli_assetAll->query('call findAssetDebAll('.$_SESSION['uId'].')');
                        while($obj_assetNetpos=$result_assetAll->fetch_object()){
                            echo  '<option value='.$obj_assetNetpos->aName.'>转入 '.$obj_assetNetpos->aName.' (负债)</option>';
                        }
                        $mysqli_assetAll->close();
                    ?>
                    </select>
                 
                 
                 <div>
                <input class="submit" style='background: black;color:white;width:580px;margin-left: 40px;margin-top:30px' type='submit' value='提交'/></form>
            </div>
        </div>
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