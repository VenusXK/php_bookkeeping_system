<?php session_start(); ?>

<html>
    <head></head>
    <body style="background:black">
          <div style="width:800px;height:400px;margin:auto">
            <div style="width:700px;height:100px;margin:auto;font-size:50px;font-weight: bolder;color:white;padding:80px;">
                <a href="costIndex.php" style="color:#888888;text-decoration: none">返回</a><br>消费金额折线图（周）&nbsp;&nbsp;
            </div>
  <div id="container" style="height: 100%"></div>

  
  <script type="text/javascript" src="https://fastly.jsdelivr.net/npm/echarts@5/dist/echarts.min.js"></script>
  <!-- Uncomment this line if you want to dataTool extension
  <script type="text/javascript" src="https://fastly.jsdelivr.net/npm/echarts@5/dist/extension/dataTool.min.js"></script>
  -->
  <!-- Uncomment this line if you want to use gl extension
  <script type="text/javascript" src="https://fastly.jsdelivr.net/npm/echarts-gl@2/dist/echarts-gl.min.js"></script>
  -->
  <!-- Uncomment this line if you want to echarts-stat extension
  <script type="text/javascript" src="https://fastly.jsdelivr.net/npm/echarts-stat@latest/dist/ecStat.min.js"></script>
  -->
  <!-- Uncomment this line if you want to use map
  <script type="text/javascript" src="https://fastly.jsdelivr.net/npm/echarts@4.9.0/map/js/china.js"></script>
  <script type="text/javascript" src="https://fastly.jsdelivr.net/npm/echarts@4.9.0/map/js/world.js"></script>
  -->
  <!-- Uncomment these two lines if you want to use bmap extension
  <script type="text/javascript" src="https://api.map.baidu.com/api?v=3.0&ak=YOUR_API_KEY"></script>
  <script type="text/javascript" src="https://fastly.jsdelivr.net/npm/echarts@5/dist/extension/bmap.min.js"></script>
  -->
  
  <?php $mysqli=new mysqli("127.0.0.1", "root", "", "assetmanagementsys", 3306);
        
        $result=$mysqli->query('call CostAnalysis('.$_SESSION['uId'].')');
        $row=$result->fetch_all();
        $row1=array();$row2=array();$row3=array();$row4=array();$row5=array();$row6=array();$row7=array();

        array_push($row1,0,'');
        array_push($row2,0,'');
        array_push($row3,0,'');
        array_push($row4,0,'');
        array_push($row5,0,'');
        array_push($row6,0,'');
        array_push($row7,0,'');
        array_push($row,$row1,$row2,$row3,$row4,$row5,$row6,$row7);
  ?>

  <script type="text/javascript">
    var dom = document.getElementById('container');
    var myChart = echarts.init(dom, null, {
      renderer: 'canvas',
      useDirtyRect: false
    });
    var app = {};
    
    var option;

    option = {
  xAxis: {
    type: 'category',
    

    
    
    
    
 data: ['<?php echo $row[0][1]; ?>', '<?php echo $row[1][1]; ?>', '<?php echo $row[2][1]; ?>',' <?php echo $row[3][1]; ?>',' <?php echo $row[4][1]; ?>', '<?php echo $row[5][1]; ?>', '<?php echo $row[6][1]; ?>']
   },
  yAxis: {
    type: 'value'
  },
  series: [
    {
      data: ['<?php echo $row[0][0]; ?>', '<?php echo $row[1][0]; ?>', '<?php echo $row[2][0]; ?>',' <?php echo $row[3][0]; ?>',' <?php echo $row[4][0]; ?>', '<?php echo $row[5][0]; ?>', '<?php echo $row[6][0]; ?>'],
      type: 'line',
      smooth: true
    }
  ]
};

    if (option && typeof option === 'object') {
      myChart.setOption(option);
    }

    window.addEventListener('resize', myChart.resize);
  </script>
 
          </div><div style="margin:auto;width:780px">
                <div style=";width:700px;height:100px;font-size:50px;font-weight: bolder;color:#888888;padding:80px;margin-top: 400px;padding-bottom: 20px;">
         <a href="analysisBudget.php" style="color:#888888;text-decoration: none">消费类型统计图（周）</a>
                </div>
               <div style=";width:700px;height:100px;font-size:50px;font-weight: bolder;color:#888888;padding:80px;padding-top:0px;">
                   <a href="analysisAsset.php" style="color:#888888;text-decoration: none">资产统计表</a>
                      </div>            
              
          </div>
    </body>
</html>