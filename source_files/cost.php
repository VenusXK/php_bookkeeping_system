<?php
$mysqli = new mysqli("127.0.0.1", "root", "", "assetmanagementsys", 3306);
if ($mysqli->connect_errno) {
    echo "connect_error<br/>";
    return;
}
?>

<html>
    <head>
        <style>
                        *{
            user-select:none;
            }
            button{
                width:100px;
                height:60px;
                border: none;
                outline: none;
                font-size: 20px;
                font-weight: bolder;
                color:#818181;
                border-radius: 20px;
                background: #e4e4e4  ;
                margin-right:20px;
            }
                select{
                height:60px;
                border: none;
                outline: none;
                font-size: 20px;
                font-weight: bolder;
                color:#818181;
                border-radius: 20px;
                background: #e4e4e4  ;
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
                background: #e4e4e4  ;
                appearance: none;
                -webkit-appearance: none;
                -moz-appearance: none;
            }
            input{
                height:60px;
                border: none;
                outline: none;
                font-size: 20px;
                font-weight: bolder;
                color:#818181;
                border-radius: 20px;
                background: #e4e4e4  ;
            }
            input:focus{
                -webkit-box-shadow: inset 0 1px 100px rgba(0,0,0,.075),0 0 8px rgba(102,175,233,.6);
                box-shadow: inset 0 1px 100px rgba(0,0,0,.075),0 0 8px rgba(102,175,233,.6);
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
        <div style="width:800px;height:500px;margin:auto;margin-top:50px ">
            
            <div style="width:700px;height:500px;margin:auto;margin-top:40px">
                
                <div style="width:600px;height:80px;margin:auto;padding:40px;padding-bottom:20px;font-size:40px;font-weight: bolder">
                    创建一条消费记录
                </div>
                <form method="POST">
                 <input style='font-size:20px;width:200px;padding-left:20px;margin-left: 40px;margin-right: 10px;' name='cMount' placeholder='输入消费金额'>
                 <input style='font-size:20px;width:415px;padding-left:20px;margin-left: 10px;margin-right: 10px;' name='cContent' placeholder='输入消费详情'>
                 

                 <div style='margin-top:30px;'>
                     
                    <script>var $bt11=0;</script>
                    <script>function bt11(){
                    $bt11=$bt11+1;
                    $id='button11';
                    if($bt11 % 2 === 0){
                            document.getElementById($id).style.cssText=' -webkit-box-shadow:none;box-shadow: none;color:#818181;background:e4e4e4;margin-left:50px;';                    }
                    else{
                            
                            document.getElementById($id).style.cssText=' -webkit-box-shadow: inset 0 1px 100px rgba(0,0,0,.9),0 0 8px rgba(102,175,233,.6);box-shadow: inset 0 1px 100px rgba(0,0,0,.075),0 0 8px rgba(102,175,233,.6);background:darkgray;color:white;margin-left:50px;';
                            document.getElementById('cDate').value='<?php  ini_set('date.timezone', 'Asia/Shanghai'); echo date("Y-n-d", strtotime("-2 day"));?>';
                    }}
                    </script>
                     <button id='button11' onclick='bt11()' type="button" style='margin-left:50px;'><?php echo date("n月d日", strtotime("-2 day"));?></button>
                 
                    <script>var $bt12=0;</script>
                     <script>function bt12(){
                    $bt12=$bt12+1;
                    $id='button12';
                    if($bt12 % 2 === 0){
                            document.getElementById($id).style.cssText=' -webkit-box-shadow:none;box-shadow: none;color:#818181;background:e4e4e4;';
                    }
                    else{
                            document.getElementById($id).style.cssText=' -webkit-box-shadow: inset 0 1px 100px rgba(0,0,0,.9),0 0 8px rgba(102,175,233,.6);box-shadow: inset 0 1px 100px rgba(0,0,0,.075),0 0 8px rgba(102,175,233,.6);background:darkgray;color:white;';
                            document.getElementById('cDate').value='<?php echo date("Y-n-d", strtotime("-1 day"));?>';

                    }}
                    </script>
                     <button id='button12' onclick='bt12();' type="button" ><?php echo date("n月d日", strtotime("-1 day"));?></button>
                     
                    <script>var $bt13=0;</script>
                     <script>function bt13(){
                    $bt13=$bt13+1;
                    $id='button13';
                    if($bt13 % 2 === 0){
                            document.getElementById($id).style.cssText=' -webkit-box-shadow:none;box-shadow: none;color:#818181;background:e4e4e4;';
                    }
                    else{
                            document.getElementById($id).style.cssText=' -webkit-box-shadow: inset 0 1px 100px rgba(0,0,0,.9),0 0 8px rgba(102,175,233,.6);box-shadow: inset 0 1px 100px rgba(0,0,0,.075),0 0 8px rgba(102,175,233,.6);background:darkgray;color:white;';
                            document.getElementById('cDate').value='<?php echo date("Y-n-d");?>';

                    }}
                    </script>
                    <button id='button13' onclick='bt13();' type="button"  ><?php echo date("n月d日");?></button>
                    <input id='cDate' style='display:none' name='cDate' value='' />    

                    <input style='width:250px;padding-left:20px;margin-right: 10px;' name='cDate1' placeholder='输入其他日期'>
                    </div>
                 <div style="margin-top:30px">
                     
                    <select name='aName' style='width:240px;padding-left:20px;margin-left:40px;margin-right: 10px;'>
                    <?php $mysqli_assetAll = new mysqli("127.0.0.1", "root", "", "assetmanagementsys", 3306);
                        $result_assetAll=$mysqli_assetAll->query('call findAssetPosAll('.$_SESSION['uId'].')');
                        while($obj_assetNetpos=$result_assetAll->fetch_object()){
                            echo  '<option value='.$obj_assetNetpos->aName.'>'.$obj_assetNetpos->aName.'(储蓄)</option>';
                        }
                        $mysqli_assetAll->close();
                    ?>
                    <?php $mysqli_assetAll = new mysqli("127.0.0.1", "root", "", "assetmanagementsys", 3306);
                        $result_assetAll=$mysqli_assetAll->query('call findAssetDebAll('.$_SESSION['uId'].')');
                        while($obj_assetNetpos=$result_assetAll->fetch_object()){
                            echo  '<option value='.$obj_assetNetpos->aName.'>'.$obj_assetNetpos->aName.'(负债)</option>';
                        }
                        $mysqli_assetAll->close();
                    ?>
                    </select>
                    <select name='b2Name' style='width:240px;padding-left:20px;margin-left:10px;margin-right: 10px;'>
                    <?php $mysqli_budget2All = new mysqli("127.0.0.1", "root", "", "assetmanagementsys", 3306);
                        $result_budget2All=$mysqli_budget2All->query('call findBudget2All('.$_SESSION['uId'].')');
                        while($obj_budget2=$result_budget2All->fetch_object()){
                            echo  '<option value='.$obj_budget2->b2Name.'>'.$obj_budget2->b2Name.'(预算)</option>';
                        }
                        $mysqli_budget2All->close();?>
                    </select>
                <input  style='width:120px' class='submit' type='submit' value='提交'/>
               
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                 </div> </form>
                                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
              
              
            </div> 
                <div style="width:800px;height:400px;margin:auto">
    
                    <div style='width:800px;height:100px;font-size:40px;font-weight: bolder;padding-left: 100px;padding-top:0px;padding-bottom: 0px;'>消费分析</div>
                    <a href='analysisIndex.php'> <div style="overflow: hidden;padding-right: 100px;width:600px;height:250px;background: black;border-radius: 60px;margin:auto;  box-shadow:0px 15px 80px -20px #000000">
              <?php $mysqli_findCostFromDiff= new mysqli("127.0.0.1", "root", "", "assetmanagementsys", 3306); 
                        $sumd0=(int)$mysqli_findCostFromDiff->query("call findCostFromDiffDay( ".$_SESSION['uId'].", 0 )")->fetch_all()[0][0];
                        if($sumd0==null){
                            $sumd0=0;
                        }

                        $mysqli_findCostFromDiff->close();?>
                <?php $mysqli_findCostFromDiff= new mysqli("127.0.0.1", "root", "", "assetmanagementsys", 3306); 
                        $sumd1=$mysqli_findCostFromDiff->query("call findCostFromDiffDay( ".$_SESSION['uId'].", 1 )")->fetch_all()[0][0];
                        if($sumd1==null){
                            $sumd1=0;
                        }

                        $mysqli_findCostFromDiff->close();?>
                <?php $mysqli_findCostFromDiff= new mysqli("127.0.0.1", "root", "", "assetmanagementsys", 3306); 
                        $sumd2=$mysqli_findCostFromDiff->query("call findCostFromDiffDay( ".$_SESSION['uId'].", 2 )")->fetch_all()[0][0];
                        if($sumd2==null){
                            $sumd2=0;
                        }

                        $mysqli_findCostFromDiff->close();?>
                <?php $mysqli_findCostFromDiff= new mysqli("127.0.0.1", "root", "", "assetmanagementsys", 3306); 
                        $sumd3=$mysqli_findCostFromDiff->query("call findCostFromDiffDay( ".$_SESSION['uId'].", 3 )")->fetch_all()[0][0];
                        if($sumd3==null){
                            $sumd3=0;
                        }

                        $mysqli_findCostFromDiff->close();?> 
                <?php $mysqli_findCostFromDiff= new mysqli("127.0.0.1", "root", "", "assetmanagementsys", 3306); 
                        $sumd4=$mysqli_findCostFromDiff->query("call findCostFromDiffDay(".$_SESSION['uId'].", 4 )")->fetch_all()[0][0];
                        if($sumd4==null){
                            $sumd4=0;
                        }

                        $mysqli_findCostFromDiff->close();?>
                <?php $mysqli_findCostFromDiff= new mysqli("127.0.0.1", "root", "", "assetmanagementsys", 3306); 
                        $sumd5=$mysqli_findCostFromDiff->query("call findCostFromDiffDay( ".$_SESSION['uId'].", 5 )")->fetch_all()[0][0];
                        if($sumd5==null){
                            $sumd5=0;
                        }
                        $mysqli_findCostFromDiff->close();?>
                <?php $mysqli_findCostFromDiff= new mysqli("127.0.0.1", "root", "", "assetmanagementsys", 3306); 
                        $sumd6=$mysqli_findCostFromDiff->query("call findCostFromDiffDay( ".$_SESSION['uId'].", 6 )")->fetch_all()[0][0];
                        if($sumd6==null){
                            $sumd6=0;
                        }
                        $mysqli_findCostFromDiff->close();?>
                
                            
  <div id="container" style="height: 350px;width:900px;margin-left: -100px;float:left"></div>



  
  
  
  <script type="text/javascript" src="echarts.min.js"></script>
  <script type="text/javascript">
       function getDateStr(AddDayCount) {
            var dd = new Date();
            dd.setDate(dd.getDate()+AddDayCount);//获取AddDayCount天后的日期
            var y = dd.getFullYear();
            var m = dd.getMonth()+1;//获取当前月份的日期
            var d = dd.getDate();
            return y+'-'+(m<10?'0'+m:m)+'-'+d;
        }
        console.log('前天：',); // 前天： 2018-09-11
        console.log('昨天：',getDateStr(-1)); // 昨天： 2018-09-12
        console.log('今天：',getDateStr(0));  // 今天： 2018-09-13
        console.log('明天：',getDateStr(1));  // 明天： 2018-09-14
        console.log('后天：',getDateStr(2));  // 后天： 2018-09-15
       
       
        var d = new Date();
        var dom = document.getElementById('container');
        var myChart = echarts.init(dom, 'black', {
          renderer: 'canvas',
          useDirtyRect: true
        });
        var app = {};

        var option;

        option = {
      xAxis: {
        boundaryGap: false,
        data: [getDateStr(-6), getDateStr(-5), getDateStr(-4), getDateStr(-3), getDateStr(-2),getDateStr(-1),getDateStr(0)],
        show:false
      },
      yAxis: {
        type: 'value',
        show:false

      },
      series: [
        {
          data: [<?php echo $sumd6 ;?>, <?php echo $sumd5 ;?>, <?php echo $sumd4 ;?>, <?php echo $sumd3 ;?>, <?php echo $sumd2 ;?>, <?php echo $sumd1 ;?>, <?php echo $sumd0 ;?> ],
          type: 'line',
          areaStyle: {}
        }

      ]
      
    };
    
    

        if (option && typeof option === 'object') {
          myChart.setOption(option);
        }

        window.addEventListener('resize', myChart.resize);
  </script>


                        </div></a>
            
            
                          
            </div>
            
            
                <div id='block' style="width:800px;height:400px;margin:auto">
    
                    <div style='width:800px;height:100px;font-size:40px;font-weight: bolder;padding-left: 100px;padding-top:0px;padding-bottom: 0px;margin-top: 80px'>消费历史</div>
                    <div style="position:relative;width:600px;margin:auto">
                        <div id='bar1'class='innerbox' style="overflow:hidden;position: absolute; width:600px;height:175px;background: #eeeeee;border-radius: 40px;margin:auto;  box-shadow:0px 15px 40px -20px #999999;border:1px solid lightgrey">
                            <div id='bar1info' style='float:left;padding:40px;padding-left: 60px;font-size:70px;font-weight: bolder'>更早</div>
                            
                            
                            <table style="padding:40px;width:100%;height:auto;margin-top:175px;font-size:15px;font-weight: bolder">
                                    <?php   
                                                    $mysqli_costAll= new mysqli("127.0.0.1", "root", "", "assetmanagementsys", 3306);
                                                    $result_costAll=$mysqli_costAll->query("CALL findCostAllBeforeLastMonth(".$_SESSION['uId'].")");
                                                    while($obj_costAllThisMonth=$result_costAll->fetch_object()){
                                                        if($obj_costAllThisMonth->cDate[5]!=0){
                                                        echo "<tr><td>".$obj_costAllThisMonth->cDate[5].$obj_costAllThisMonth->cDate[6].'月';
                                                        }
                                                        else{
                                                            echo "<tr><td>".$obj_costAllThisMonth->cDate[6].'月';
                                                        }
                                                        if($obj_costAllThisMonth->cDate[8]!=0){
                                                        echo $obj_costAllThisMonth->cDate[8].$obj_costAllThisMonth->cDate[9].'日</td>';
                                                        }
                                                        else{
                                                            echo $obj_costAllThisMonth->cDate[9].'日</td>';
                                                        }
                                                        echo "<td>".'￥'.number_format($obj_costAllThisMonth->cMount,2)."</td>"; 
                                                        echo "<td>".$obj_costAllThisMonth->cContent."</td>";
                                                        echo "<td>".$obj_costAllThisMonth->aName."</td>";
                                                        echo "<td>".$obj_costAllThisMonth->b2Name."</td>"
                                                                . "<td><a href='Cdelete.php?cId={$obj_costAllThisMonth->cId}'><img src='cross.png' width='20px' height='20px'></a></td></tr>";
                                                    }
                                                    
                                                    $mysqli_costAll->close();
                                                    ?>
                                                </table>
                        </div>
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        <div id='bar2' class='innerbox' style="overflow:hidden;position: absolute ;top:50px;width:600px;height:175px;background: #eeeeee;border-radius: 40px;margin:auto;  box-shadow:0px 15px 40px -20px #999999;border:1px solid lightgrey">
                            <div id='bar2info' style='float:left;padding:40px;padding-left: 60px;font-size:70px;font-weight: bolder'><?php echo date('n月', strtotime(date('Y-n-01') . " - 1 month")); ?></div>
                            <div style="padding:40px;padding-right: 60px;padding-top: 60px;float:right;font-size:50px;font-weight:bolder">
                                                <?php 
                                                    $mysqli_costSum= new mysqli("127.0.0.1", "root", "", "assetmanagementsys", 3306);
                                                    $result_costSum=$mysqli_costSum->query("call findCostSumLastMonth(".$_SESSION['uId'].")");
                                                    $obj_costSumThisMonth=$result_costSum->fetch_object();
                                                    echo '￥'.number_format($obj_costSumThisMonth->CostSumLastMonth,2); 
                                                    $mysqli_costSum->close();
                                                    ?>
                                            </div>
                                                <table style="padding:40px;width:100%;height:auto;margin-top:175px;font-size:15px;font-weight: bolder">
                                    <?php   
                                                    $mysqli_costAll= new mysqli("127.0.0.1", "root", "", "assetmanagementsys", 3306);
                                                    $result_costAll=$mysqli_costAll->query("CALL findCostAllLastMonth(".$_SESSION['uId'].")");
                                                    while($obj_costAllThisMonth=$result_costAll->fetch_object()){
                                                        if($obj_costAllThisMonth->cDate[5]!=0){
                                                        echo "<tr><td>".$obj_costAllThisMonth->cDate[5].$obj_costAllThisMonth->cDate[6].'月';
                                                        }
                                                        else{
                                                            echo "<tr><td>".$obj_costAllThisMonth->cDate[6].'月';
                                                        }
                                                        if($obj_costAllThisMonth->cDate[8]!=0){
                                                        echo $obj_costAllThisMonth->cDate[8].$obj_costAllThisMonth->cDate[9].'日</td>';
                                                        }
                                                        else{
                                                            echo $obj_costAllThisMonth->cDate[9].'日</td>';
                                                        }
                                                        echo "<td>".'￥'.number_format($obj_costAllThisMonth->cMount,2)."</td>"; 
                                                        echo "<td>".$obj_costAllThisMonth->cContent."</td>";
                                                        echo "<td>".$obj_costAllThisMonth->aName."</td>";
                                                        echo "<td>".$obj_costAllThisMonth->b2Name."</td>"
                                                                . "<td><a href='Cdelete.php?cId={$obj_costAllThisMonth->cId}'><img src='cross.png' width='20px' height='20px'></a></td></tr>";
                                                    }
                                                    
                                                    $mysqli_costAll->close();
                                                    ?>
                                                </table>
                        </div>
                        <div id='bar3' class='innerbox' style="overflow:hidden;position: absolute ;top:100px;width:600px;height:175px;background: #eeeeee;border-radius: 40px;margin:auto;  box-shadow:0px 15px 40px -20px #999999;border:1px solid lightgrey">
                                            <div id='barinfo' style='float:left;padding:40px;padding-right: 0px;padding-left: 60px;font-size:70px;font-weight: bolder'><?php echo date('n月'); ?></div>
                                            <div style="padding:40px;padding-right: 60px;padding-top: 60px;float:right;font-size:50px;font-weight:bolder">
                                                <?php 
                                                    $mysqli_costSum= new mysqli("127.0.0.1", "root", "", "assetmanagementsys", 3306);
                                                    $result_costSum=$mysqli_costSum->query("CALL findCostSumThisMonth(".$_SESSION['uId'].")");
                                                    $obj_costSumThisMonth=$result_costSum->fetch_object();
                                                    echo '￥'.number_format($obj_costSumThisMonth->CostSumThisMonth,2); 
                                                    $mysqli_costSum->close();
                                                    ?>
                                            </div>
                                                <table style="padding:40px;width:100%;height:auto;margin-top:175px;font-size:15px;font-weight: bolder">
                                    <?php   
                                                    $mysqli_costAll= new mysqli("127.0.0.1", "root", "", "assetmanagementsys", 3306);
                                                    $result_costAll=$mysqli_costAll->query("CALL findCostAllThisMonth(".$_SESSION['uId'].")");
                                                    while($obj_costAllThisMonth=$result_costAll->fetch_object()){
                                                        if($obj_costAllThisMonth->cDate[5]!=0){
                                                        echo "<tr><td>".$obj_costAllThisMonth->cDate[5].$obj_costAllThisMonth->cDate[6].'月';
                                                        }
                                                        else{
                                                            echo "<tr><td>".$obj_costAllThisMonth->cDate[6].'月';
                                                        }
                                                        if($obj_costAllThisMonth->cDate[8]!=0){
                                                        echo $obj_costAllThisMonth->cDate[8].$obj_costAllThisMonth->cDate[9].'日</td>';
                                                        }
                                                        else{
                                                            echo $obj_costAllThisMonth->cDate[9].'日</td>';
                                                        }
                                                        echo "<td>".'￥'.number_format($obj_costAllThisMonth->cMount,2)."</td>"; 
                                                        echo "<td>".$obj_costAllThisMonth->cContent."</td>";
                                                        echo "<td>".$obj_costAllThisMonth->aName."</td>";
                                                        echo "<td>".$obj_costAllThisMonth->b2Name."</td>"
                                                        . "<td><a href='Cdelete.php?cId={$obj_costAllThisMonth->cId}'><img src='cross.png' width='20px' height='20px'></a></td></tr>";
                                                    }
                                                    
                                                    $mysqli_costAll->close();
                                                    ?>
                                                </table>
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
var ToggleAnimate = function(id, minH, maxH, expand, rate, speed){
    this.minH = minH;
    this.maxH = maxH;
    this.tempTop = 0;
    this.rate = rate;
    this.speed = speed;
    this.moving = false;
    this.moveT = null;
    this.holder = document.getElementById(id);
    this.expand = expand;
}
ToggleAnimate.prototype = {
    start : function(){
        if(this.moving) return;
        this.moving = true;
        this.tempTop = this.expand ? this.minH : this.maxH;
        var t = this;
        this.moveT = setInterval(function(){t.move()}, this.speed);
    },
    move : function(){
        if(this.expand){
            if(this.tempTop >= this.maxH){
                this.moving = false;
                this.expand = false;
                clearInterval(this.moveT);
            }else{
                var h = Math.round((this.maxH - this.tempTop) * this.rate);
                if(h <= 1){
                    h = 1;
                }
                this.tempTop += h;
            }
        }else{
            if(this.tempTop <= this.minH){
                this.moving = false;
                this.expand = true;
                clearInterval(this.moveT);
            }else{
                var h = Math.round((this.tempTop - this.minH) * this.rate);
                if(h <= 1){
                    h = 1;
                }
                this.tempTop -= h;
            }
        }
        this.holder.style.top = this.tempTop + "px";
    }
};
var ToggleOpenAnimate = function(id, minH, maxH, expand, rate, speed){
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
ToggleOpenAnimate.prototype = {
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

var bar1_Num=0;
var bar2_Num=0;
var bar3_Num=0;


var bar2SmallAnimate = new ToggleAnimate("bar2",50,160,true, 0.2, 10);
var bar2SmallBackAnimate = new ToggleAnimate("bar2",20,50,true, 0.2, 10);
var bar3SmallAnimate = new ToggleAnimate("bar3",100,180,true, 0.2, 10);
var bar3SmallBackAnimate = new ToggleAnimate("bar3",40,100,true, 0.2, 10);
var bar2BigAnimate = new ToggleAnimate("bar2",160,1060,true, 0.2, 10);
var bar3BigAnimate = new ToggleAnimate("bar3",180,1080,true, 0.2, 10);
var bar1OpenAnimate = new ToggleOpenAnimate("bar1",175,1200,true, 0.2, 10);
var bar2OpenAnimate = new ToggleOpenAnimate("bar2",175,1200,true, 0.2, 10);
var bar3OpenAnimate = new ToggleOpenAnimate("bar3",175,1200,true, 0.2, 10);
var blockOpenAnimate = new ToggleOpenAnimate("block",400,1300,true, 0.2, 10);

document.getElementById("bar1").onmouseover = function(){
    bar1_state=bar1_Num%2;
    bar2_state=bar2_Num%2;
    bar3_state=bar3_Num%2;
    if(bar1_state===0 && bar2_state===0 && bar3_state===0){
    bar2SmallAnimate.expand=true;
    bar3SmallAnimate.expand=true;
    bar2SmallAnimate.start();
    bar3SmallAnimate.start();
    }
};
document.getElementById("bar1").onmouseout = function(){
    bar1_state=bar1_Num%2;
    bar2_state=bar2_Num%2;
    bar3_state=bar3_Num%2;
    if(bar1_state===0 && bar2_state===0 && bar3_state===0){
    bar2SmallAnimate.expand=false;
    bar3SmallAnimate.expand=false;
    bar2SmallAnimate.start();
    bar3SmallAnimate.start();
    }
};
document.getElementById("bar2").onmouseover = function(){
    bar1_state=bar1_Num%2;
    bar2_state=bar2_Num%2;
    bar3_state=bar3_Num%2;
    if(bar1_state===0 && bar2_state===0 && bar3_state===0){
    bar2SmallBackAnimate.expand=false;
    bar3SmallAnimate.expand=true;
    bar2SmallBackAnimate.start();
    bar3SmallAnimate.start();
    }
};
document.getElementById("bar2").onmouseout = function(){
    bar1_state=bar1_Num%2;
    bar2_state=bar2_Num%2;
    bar3_state=bar3_Num%2;
    if(bar1_state===0 && bar2_state===0 && bar3_state===0){
    bar3SmallAnimate.expand=false;
    bar2SmallBackAnimate.expand=true;
    bar3SmallAnimate.start();
    bar2SmallBackAnimate.start();
    }
};
document.getElementById("bar3").onmouseover = function(){
    bar1_state=bar1_Num%2;
    bar2_state=bar2_Num%2;
    bar3_state=bar3_Num%2;
    if(bar1_state===0 && bar2_state===0 && bar3_state===0){
    bar3SmallBackAnimate.expand=false;
    bar2SmallBackAnimate.expand=false;
    bar2SmallBackAnimate.start();
    bar3SmallBackAnimate.start();
    }
};
document.getElementById("bar3").onmouseout = function(){
    bar1_state=bar1_Num%2;
    bar2_state=bar2_Num%2;
    bar3_state=bar3_Num%2;
    if(bar1_state===0 && bar2_state===0 && bar3_state===0){
    bar3SmallBackAnimate.expand=true;
    bar2SmallBackAnimate.expand=true;
    bar2SmallBackAnimate.start();
    bar3SmallBackAnimate.start();
    }
};
document.getElementById("bar1").onclick = function(){
    bar2_state=bar2_Num%2;
    bar3_state=bar3_Num%2;
    if( bar2_state===0 && bar3_state===0){    
    bar1_Num=bar1_Num+1;
    bar1OpenAnimate.start();
    blockOpenAnimate.start();
    bar2BigAnimate.start();
    bar3BigAnimate.start();
    }
};
document.getElementById("bar2").onclick = function(){
    bar1_state=bar1_Num%2;
    bar3_state=bar3_Num%2;
    if(bar1_state===0 && bar3_state===0){
    bar2_Num=bar2_Num+1;
    bar2OpenAnimate.start();
    blockOpenAnimate.start();
    bar3BigAnimate.start();
    }
};
document.getElementById("bar3").onclick = function(){
    bar1_state=bar1_Num%2;
    bar2_state=bar2_Num%2;
    if(bar2_state===0 && bar1_state ===0 ){
    bar3_Num=bar3_Num+1;
    bar3OpenAnimate.start();
    blockOpenAnimate.start();
    }
};
</script>

</html>