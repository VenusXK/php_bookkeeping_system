<?php session_start(); ?>
<html>
    <head></head>
    <body style="background:black">
          <div style="width:800px;height:400px;margin:auto">
            <div style="width:700px;height:100px;margin:auto;font-size:50px;font-weight: bolder;color:white;padding:80px;">
                <a href="costIndex.php" style="color:#888888;text-decoration: none">返回</a><br>资产统计表&nbsp;&nbsp;
            </div>
              

              <?php  
              
                           $str="";
              $mysqli=new mysqli("127.0.0.1", "root", "", "assetmanagementsys", 3306);
            $result=$mysqli->query('call findAssetPosAll('.$_SESSION["uId"].')');
         while($row=$result->fetch_array()){
              $str.='{ value: '.$row[1].', name: "'.$row[0].'(储蓄)" },';
          }
?>
        <?php  
                            $mysqli=new mysqli("127.0.0.1", "root", "", "assetmanagementsys", 3306);
            $result=$mysqli->query('call findAssetDebAll('.$_SESSION["uId"].')');
         while($row=$result->fetch_array()){
              $str.='{ value: '.$row[1].', name: "'.$row[0].'(负债)" },';
          }
?>
              
              
                        </div>

 <div id="container" style="height: 100%;margin-top: -340px;margin-bottom: -500px;"></div>

  
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

  <script type="text/javascript">
    var dom = document.getElementById('container');
    var myChart = echarts.init(dom, 'black', {
      renderer: 'canvas',
      useDirtyRect: false
    });
    var app = {};
    
    var option;

    option = {
        
  title: {
    left: 'center'
  },
  series: [
    {
      type: 'pie',
      radius: '50%',
      data: [
          <?php echo $str; ?>
      ],
      
      
      emphasis: {
        itemStyle: {
          shadowBlur: 10,
          shadowOffsetX: 0,
          shadowColor: 'white'
        }
      }
    }
  ]
};

    if (option && typeof option === 'object') {
      myChart.setOption(option);
    }

    window.addEventListener('resize', myChart.resize);
  </script>
        <div style="margin:auto;width:780px">
                <div style=";width:700px;height:100px;font-size:50px;font-weight: bolder;color:#888888;padding:80px;margin-top: 400px;padding-bottom: 20px;">
         <a href="analysisBudget.php" style="color:#888888;text-decoration: none">消费类型统计图（周）</a>
                </div>
               <div style=";width:700px;height:100px;font-size:50px;font-weight: bolder;color:#888888;padding:80px;padding-top:0px;">
                   <a href="analysisCost.php" style="color:#888888;text-decoration: none">消费金额折线图（周）</a>
                      </div>            
              
          </div>
    </body>
</html>