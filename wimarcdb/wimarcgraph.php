<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <link href="kaset.ico" rel="shortcut icon" type="image/x-icon" /> 
  
  <link rel="stylesheet" href="horizontal_c.css" type="text/css" charset="utf-8"/>
   <link rel="stylesheet" href="elementkaset00.css" type="text/css" charset="utf-8"/>
   <link rel="stylesheet" href="elementkaset01.css" type="text/css" charset="utf-8"/>
  <link href="examples.css" rel="stylesheet" type="text/css">
<script language="javascript" type="text/javascript" src="jquery.js.download"></script>
	<script language="javascript" type="text/javascript" src="jquery.flot.js.download"></script>
		<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="../excanvas.min.js"></script><![endif]-->


		<script  type="text/javascript" src="jquery.flot.js"></script>
		<script language="javascript" type="text/javascript" src="jquery.flot.categories.js"></script> 
 
<script src="excanvas.min.js"></script>
<script src="jquery.flot.min.js"></script>       
  <script type="text/javascript" src="jquery.flot.axislabels.js"></script>     
  

     	<link rel="stylesheet" href="jquery-ui-themes-1.12.1/jquery-ui.css">

      <script src="jquery-ui-1.12.1/jquery-ui.js"></script>
  
	<script type="text/javascript">
       $(function() {
             //  $("#begindate").datepicker({ dateFormat: "yy-mm-dd" }).val()
			  // $("#enddate").datepicker({ dateFormat: "yy-mm-dd" }).val()
			  
			   $( "#begindate" ).datepicker({
      changeMonth:true,
      changeYear:true,
      yearRange:"-100:+0",
      dateFormat:"dd MM yy"
     });
	 
	  $( "#enddate" ).datepicker({
      changeMonth:true,
      changeYear:true,
      yearRange:"-100:+0",
      dateFormat:"dd MM yy"
     });
	 
	 
	 
			  
       });
   </script>

	

	
<script type="text/javascript">
   
window.onload = function () {
	dp_cal1  = new Epoch('epoch_popup','popup',document.getElementById('popup_container1'));
	dp_cal2  = new Epoch('epoch_popup','popup',document.getElementById('popup_container2'));
        dp_cal3  = new Epoch('epoch_popup','popup',document.getElementById('popup_container3'));
	dp_cal4  = new Epoch('epoch_popup','popup',document.getElementById('popup_container4'));


};
  
 </script> 
  

	
	

  
  <style type="text/css">


/* ==================== Form style sheet END ==================== */

</style>
    <style>



</style>

<style>

</style>

<style>



</style>






<style>
#chartLegend .legendLabel { padding-right: 10px; }
</style>


       <!--Load the AJAX API-->
   
 <script type="text/javascript">
    function initialize() {
      var map = new google.maps.Map(
        document.getElementById('map-canvas'), {
          center: new google.maps.LatLng(13.85028,100.57207),
          zoom: 8,
          mapTypeId: google.maps.MapTypeId.ROADMAP
      });
      var image = 'kasetsensor100.png';
      var marker1 = new google.maps.Marker({
            position: new google.maps.LatLng(13.850280,100.572079),
            map: map,
             icon: image,
            title:"ภาคพืชไร่ ม.เกษตร" // แสดง title เมื่อเอาเมาส์มาอยู่เหนือ  
      });
      var image = 'kasetsensor100.png';
      var marker2 = new google.maps.Marker({
            position: new google.maps.LatLng(14.17252,100.51605),
            map: map,
             icon: image,
             title:"ศูนย์เรียนรู้ เทศบาลตำบลราชคาม อ.บางไทร จ.พระนครศรีอยุธยา" // แสดง title เมื่อเอาเมาส์มาอยู่เหนือ  
      });
      var image = 'manit_logo.png';
        var marker3 = new google.maps.Marker({
            position: new google.maps.LatLng(13.205069,99.872546),
            map: map,
             icon: image,
            title:"สถานีตรวจวัด มานิตย์ฟาร์ม" // แสดง title เมื่อเอาเมาส์มาอยู่เหนือ 
            
      });
    var image = 'logo.png';  
    var marker4 = new google.maps.Marker({
            position: new google.maps.LatLng(14.780651, 101.227390),
            map: map,
             icon: image,
            title:"สถานีตรวจวัด ไร่คุณธรรม" // แสดง title เมื่อเอาเมาส์มาอยู่เหนือ 
      });
  var image = '01weather_logo.png';  
    var marker5 = new google.maps.Marker({
            position: new google.maps.LatLng(14.496727, 100.058545),
            map: map,
             icon: image,
            title:"สถานีตรวจวัดศูนย์พันธุ์ข้าวเฮียใช้" // แสดง title เมื่อเอาเมาส์มาอยู่เหนือ 
      });


 var infowindow1 = new google.maps.InfoWindow({  
        content:$.ajax({  
            url:'StationKASET.php',//ใช้ ajax ใน jQuery ดึงข้อมูลจากไฟล์ placeDetail.php มาแสดง  
            async:false  
        }).responseText  
    });  




var infowindow2 = new google.maps.InfoWindow({  
        content:$.ajax({  
            url:'StationBangSai.php',//ใช้ ajax ใน jQuery ดึงข้อมูลจากไฟล์ placeDetail.php มาแสดง  
            async:false  
        }).responseText  
    }); 

var infowindow3 = new google.maps.InfoWindow({  
        content:$.ajax({  
            url:'StationMANIT.php',//ใช้ ajax ใน jQuery ดึงข้อมูลจากไฟล์ placeDetail.php มาแสดง  
            async:false  
        }).responseText  
    }); 

var infowindow4 = new google.maps.InfoWindow({  
        content:$.ajax({  
            url:'Station01grape.php',//ใช้ ajax ใน jQuery ดึงข้อมูลจากไฟล์ placeDetail.php มาแสดง  
            async:false  
        }).responseText  
    }); 
var infowindow5 = new google.maps.InfoWindow({  
        content:$.ajax({  
            url:'Station01weather.php',//ใช้ ajax ใน jQuery ดึงข้อมูลจากไฟล์ placeDetail.php มาแสดง  
            async:false  
        }).responseText  
    });

 google.maps.event.addListener(marker1, 'click', function() {
    infowindow1.open(map,marker1);
  });
google.maps.event.addListener(marker2, 'click', function() {
    infowindow2.open(map,marker2);
  });

google.maps.event.addListener(marker3, 'click', function() {
    infowindow3.open(map,marker3);
  });


google.maps.event.addListener(marker4, 'click', function() {
    infowindow4.open(map,marker4);
  });
google.maps.event.addListener(marker5, 'click', function() {
    infowindow5.open(map,marker5);
  });

    }
    google.maps.event.addDomListener(window, 'load', initialize);
    </script>

       
       
       
       
       <script type="text/javascript">
   
       
    function drawChartfromtable() {
       
        var TestVar = tablename.value; 
      window.location.href = "showgraphFlot.php?TestVar=" + TestVar; 
                             
    }

    </script> 
</SCRIPT>
<SCRIPT LANGUAGE="JavaScript">
function exportwindow () {
  var TestVar = document.getElementById('database').value;; 
  var dateBegin = document.getElementById('popup_container3').value;
  var dateEnd = document.getElementById('popup_container4').value;
 
    
  //myWindow = window.open("","myWindow","width=200,height=100");    // Opens a new window
// window.location.href = "export_db2.php?TestVar=" + TestVar;       
window.location.href = "kasetALopburiexport_datarange.php?TestVar=" + TestVar+"&dateBegin=" + dateBegin+"&dateEnd=" + dateEnd; 
}

</SCRIPT>



<?php

 $last_time = date("H:i:s");
$time_array = split ("\:", $last_time);
$time_array[0]=$time_array[0];
if ($time_array[0]> 18)
	$time_array[0]=17;
$filename0 = 'GHbangyai/image/H'.$time_array[0];

if ($time_array[0] == 12)
{$last_date = date("Ymd");	
$filename0 = 'pichit01/image/'.$last_date.'H'.$time_array[0];
}


if ($time_array[0] == 0)
{
 $time_array[0]=24;   
}
$time_array[0]=$time_array[0]-1;



if ($time_array[0]<10)
{
$filename1 = 'k01images/H0'.$time_array[0];
$time_array[0]=$time_array[0]-1;
$filename2 = 'k01images/H0'.$time_array[0];

}
 else {
 $filename1 = 'k01images/H'.$time_array[0];  
 $time_array[0]=$time_array[0]-1;
$filename2 = 'k01images/H'.$time_array[0];
 
}

     ?>    
 



       
<title>Greenhouse BangYai</title>
 
    

</head>
<body>
<!--<img src="kasetfield.jpg">-->

<div id="data" >

 <img id="image" align="middle"  src="<?php echo $filename0.'.jpg'?>" width="100%" height="479px" />

 
 
 
 
</div>




 
   
                
                


       
       
<fieldset>

<legend>Historical data</legend>

  
	


<?php 

include "wimarcHistorygraph.php" ?>

              
 <script type="text/javascript">


 
	$(function() {
            
              

		 var Data1 = <?php echo json_encode($data1); ?>;
		 var Data2 = <?php echo json_encode($data2); ?>;
                  var Data3 = <?php echo json_encode($data3); ?>;
		 var Data4 = <?php echo json_encode($data4); ?>;
                   var Data5 = <?php echo json_encode($data5); ?>;
		 var Data6 = <?php echo json_encode($data6); ?>;
                  var Data7 = <?php echo json_encode($data7); ?>;
		 var Data8 = <?php echo json_encode($data8); ?>;
               
                  $.plot("#placeholder", [ 
                   { data: Data1, label: "<?php echo $legend1; ?>"},
                   { data: Data2, label: "<?php echo $legend2; ?>"},
                   { data: Data3, label: "<?php echo $legend3; ?>"},
                   { data: Data4, label: "<?php echo $legend4; ?>"},
                    { data: Data5, label: "<?php echo $legend5; ?>"},
                   { data: Data6, label: "<?php echo $legend6; ?>"},
                   { data: Data7, label: "<?php echo $legend7; ?>"},
                 //  { data: Data8, label: "Sensor 8"}
    
                          ], {
			series: {
				   points: {show: true}
			},
                        yaxis: { axisLabel: "<?php echo $label; ?>"
                                
				
			},
			xaxis: {mode: "time",
                                timeformat: "%d/%m",
                                axisLabel: "วันที่ "
                                
			},
                         grid: {
				hoverable: true,
				clickable: true
			},
                        legend: {
                         noColumns: 3,
                         container: $("#chartLegend")
                        },
                        
		});

$("<div id='tooltip'></div>").css({
			position: "absolute",
			display: "none",
			border: "1px solid #fdd",
			padding: "2px",
			"background-color": "#fee",
			opacity: 0.80
		}).appendTo("body");

		$("#placeholder").bind("plothover", function (event, pos, item) {

			
			if ($("#enableTooltip:checked").length > 0) {
				if (item) {
                                    
                                    
					var x = item.datapoint[0].toFixed(2),
						y = item.datapoint[1].toFixed(2);

var a = new Date(item.datapoint[0]-(5*60*60*1000));
 var months = ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'];
     var year = a.getFullYear();
     var month = months[a.getMonth()];
     var date = a.getDate();
     var hour = a.getHours();
     var min = a.getMinutes();
     var sec = a.getSeconds();
      var time = "<br />"+" on "+date+' '+month+' '+year+' Time: '+hour+':'+min ;



					$("#tooltip").html(item.series.label +":"+y +time )
						.css({top: item.pageY+5, left: item.pageX+5})
						.fadeIn(200);
				} else {
					$("#tooltip").hide();
				}
			}
		});

		$("#placeholder").bind("plotclick", function (event, pos, item) {
			if (item) {
				$("#clickdata").text(" - click point " + item.dataIndex + " in " + item.series.label);
				plot.highlight(item.series, item.datapoint);
			}
		});



		// Add the Flot version string to the footer

		$("#footer").prepend("Flot " + $.plot.version + " &ndash; ");
	});

	</script>             
              
              
<?php include "showgraph.php" ?>
           
              
   
              
              
              
              
              
              
              
              
              






</body>



</html>