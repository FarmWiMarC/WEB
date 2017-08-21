<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  
  
  <link rel="stylesheet" href="horizontal.css" type="text/css" charset="utf-8"/>
   <link rel="stylesheet" href="element0.css" type="text/css" charset="utf-8"/>
   <link rel="stylesheet" href="element1.css" type="text/css" charset="utf-8"/>
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





       
<title>WiMarC Farm</title>
 
    

</head>
<body>
<!--<img src="kasetfield.jpg">-->

<div id="data" >

 <img id="image" align="middle"  src="/wimarc/wimarcfarmlogo.jpg"  />

 
 
 
 
</div>




 
   
                
                


       
       
<fieldset>

<legend>Historical data</legend>

  
	



<?php 

include "wimarcHistorygraph.php" 
?>
              
 <script type="text/javascript">

 
	$(function() {
            
        if (<?php echo json_encode($data1); ?> != null)  	
		{  
		 var Data1 = <?php echo json_encode($data1); ?>;
		}
		if (<?php echo json_encode($data2); ?> != null)   
		{
		 var Data2 = <?php echo json_encode($data2); ?>;
        }
		if (<?php echo json_encode($data3); ?> != null)  
		{        
		var Data3 = <?php echo json_encode($data3); ?>;
}
		if (<?php echo json_encode($data4); ?> != null)     
		{		
		var Data4 = <?php echo json_encode($data4); ?>;
}
		if (<?php echo json_encode($data5); ?> != null)     
		{        
		var Data5 = <?php echo json_encode($data5); ?>;
}
		if (<?php echo json_encode($data6); ?> != null)     
		{		
		var Data6 = <?php echo json_encode($data6); ?>;
}
		if (<?php echo json_encode($data7); ?> != null)      
		{        
		var Data7 = <?php echo json_encode($data7); ?>;
}
		if (<?php echo json_encode($data8); ?> != null)      
		{
		var Data8 = <?php echo json_encode($data8); ?>;
		}      
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