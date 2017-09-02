


<?php

 $conn = mysqli_connect("localhost","de_user","password","db_name");
 
 $t0=strtotime('today');
   
   $graph_dateBegin = strtotime("-7 days ",$t0); 
  // $st1 = strftime("%Y-%m-%d",$st0); //เพิ่มเวลา 1 วันตามอายุอ้อย และย้อนหลังไป 1 ปี
	//echo $st1;
 $graph_dateBegin= $graph_dateBegin*1000-18000000;
echo '<form name="menuform" method="post" target="_self" >';
echo '

 <table> 
  <tr> 
   
  
  <td width="75">  
  <BUTTON class="button botton1" name="loadTemp" value="submit" type="submit" title="Temperature"> 
  <IMG src="/wimarcdb/pic/TemField.png"  width="75" height="75" alt="wow"></BUTTON>
  </td>
  <td width="75"> 
  
   <BUTTON class="button botton1" name="loadHum" value="submit" type="submit" title="Humidity"> 
  <IMG src="/wimarcdb/pic/RH.png"  width="75" height="75" alt="wow"></BUTTON>
  
  </td>

  <td width="75"> 
  
  <BUTTON class="button botton1" name="loadRain" value="submit" type="submit" title="Rain"> 
  <IMG src="/wimarcdb/pic/Rain.png"  width="75" height="75" alt="wow"></BUTTON>
  </td>
  
 <!--
  <td width="75"> 
  
  <BUTTON class="button botton1" name="loadWindspeed" value="submit" type="submit" title="Wind Speed"> 
  <IMG src="/pic/WindSpeed.png"  width="75" height="75" alt="wow"></BUTTON>
  </td>
 --> 
  
  

 
 
 <td width="75"> 

 <BUTTON class="button botton1" name="loadLux" value="submit" type="submit" titleLux="Lux"> 
  <IMG src="/wimarcdb/pic/bright300.png"  width="75" height="75" alt="wow"></BUTTON>
  </td>
  <td width="75"> 

 <BUTTON class="button botton1" name="loadMoisture" value="submit" type="submit" titleLux="Moisture"> 
  <IMG src="/wimarcdb/pic/SoilMois.png"  width="75" height="75" alt="wow"></BUTTON>
  </td>



<p><font color="#006699">FROM</font> <input type="text" name="begindate" id="begindate"> </td> 
<p> <font color="#006699">UNTIL</font><input type="text" name="enddate" id="enddate"></td> 


 
<!--<td width="100"> <input id="C" NAME="loadBaro" type="submit" value="ความดันบรรยากาศ" /></td>

<td width="100"> <input id="C" NAME="loadRT" type="submit" value="อุณหภูมิห้อง MRD 2" /></td>


    <td width="100"><input id="D" NAME="loadB5" type="submit" value="B5" /></td>
    <td width="100"><input id="D" NAME="loadB6" type="submit" value="B6" /></td>

</tr>

<tr>
 <td width="100"> <input id="C" NAME="loadTsoil" type="submit" value="กระแสไฟจากโซลาร์เซล" /></td>
 
<td width="100"> <input id="C" NAME="loadTDR" type="submit" value="ความชื้นดิน TDR" /></td>

<td width="100"> <input id="C" NAME="loadTen" type="submit" value="ความชื้นดิน Tensiometer" /></td>



</tr>-->
  </table> 

</form> </fieldset>';   






 if ((isset($_POST['loadTemp']))||(isset($_POST['loadHum']))||
         (isset($_POST['loadRain']))||(isset($_POST['loadWindspeed']))||(isset($_POST['loadPressure']))
          ||(isset($_POST['loadLevel']))
          ||(isset($_POST['loadLux']))
		   ||(isset($_POST['loadMoisture'])) ||(isset($_POST['loadDust']))
         ) 
              {   
             
  //  $date_begin = $_POST['date_begin'];//echo $date_begin;
     
  //   $date_end = $_POST['date_end'];      

	

	 
	 
	 
	 
$date_begin = $_POST['begindate'];  //echo  $date_begin;
     
   $date_end = $_POST['enddate'];  // echo $date_end;
	 
	 
	// echo 
              
           $timeBegin = strtotime($date_begin);
                    
           $timeEnd = strtotime($date_end);       
    
      $dateoffset =10*60*60;         
     


 

 
 if((isset($_POST['loadTemp'])))
 { 
///////////////////////////////////////////////////////////////
$tablename = 'sensor'; 
 $legend1="Outside Temperature (celcius)";
 $legend2="";
$legend3="";
$legend4="";
$legend5="";
$legend6="";
$legend7="";
$legend8="";
$data1=null;
$data2=null;
  $data3=null;
  $data4=null;
  $data5=null;
  $data6=null;
  $data7=null;
  $data8=null; 
 
 
     $t0=strtotime('today');
   
   $graph_dateBegin = strtotime("-7 days ",$t0); 
  // $st1 = strftime("%Y-%m-%d",$st0); //เพิ่มเวลา 1 วันตามอายุอ้อย และย้อนหลังไป 1 ปี
	//echo $st1;
 $graph_dateBegin= $graph_dateBegin*1000-18000000;
 
 
 //$db = mysql_select_db($database,$connection) or die  ("Could not select database.".mysql_error());  
        
                $query = "SELECT * FROM $tablename";
            //    $result = mysql_query($query)or ("Could not query ".mysql_error());  
               
               
 if ($result = mysqli_query($conn,$query))
 {
             
 

                while($row = mysqli_fetch_assoc($result))
                    {
                   $timeOffset = 10*60*60*1000; 

                   $timenow=strtotime('today');
                   $timenow=$timenow*1000-18000000;
                                                      $timestampdate = strtotime($row['date']);
                 
                                                    $timestampbegin=$timestampdate;
                 
                   
                                                    //  echo  $timestampdate;


                                                   $timestampdate=$timestampdate*1000-18000000;
                   
                   $timestamp = strtotime($row['time']);
                   $last_time=$row['time']; 
                   $row['time']= $timestamp*1000-18000000-$timenow+$timestampdate+$timeOffset;
                  // $row['time']=$timenow;
                 //  $row['time']=  $timestampdate;

                  //  $row['date']= date('Y m d', $row['date']);

 if(( $timeBegin ==0 )&&( $timeEnd==0))
{

// $date_begin  = date("Y-m-d"); 
//date('d M Y H:i:s',$strtotime);

$timeEnd=strtotime('today')+$dateoffset;

$timeBegin=strtotime("-7 days ",$t0); 

$date_begin= date("Y-m-d",$timeBegin);
$date_end= date("Y-m-d",$timeEnd);
}
 


 
         if (($timestampbegin >= $timeBegin)&&($timestampbegin <= $timeEnd))
             
             
             {
              $label = "Temperature (celcius)";
                 if ($row['Temp']>0) {
                    $data1[] = array(($row['time']),($row['Temp']));    
				 }
                    //  $timeshow= date("Y-m-d H:i:s",($row['time']-18000000)/1000); 
                      
                    // echo  $timeshow;
					  
                   }      
 




                    }
					

  //echo json_encode($data1);
 $data2=null;
  $data3=null;
  $data4=null;
  $data5=null;
  $data6=null;
  $data7=null;
  $data8=null;  
  
  mysqli_free_result($result);
}

mysqli_close($conn);
    
 } 
     
  
 if((isset($_POST['loadLevel'])))
 { 

$tablename = 'sensor'; 
 $legend1="Water Level (cm)";
// $legend2="อุณหภูมิในดิน";
// $legend3="อุณหภูมิในแปลง 2";
 
 
     $t0=strtotime('today');
   
   $graph_dateBegin = strtotime("-7 days ",$t0); 
  // $st1 = strftime("%Y-%m-%d",$st0); //เพิ่มเวลา 1 วันตามอายุอ้อย และย้อนหลังไป 1 ปี
	//echo $st1;
 $graph_dateBegin= $graph_dateBegin*1000-18000000;
 
 
     
                $query = "SELECT * FROM $tablename";
      //          $result = mysql_query($query)or ("Could not query ".mysql_error());  
               
   if ($result = mysqli_query($conn,$query))
 {
             
 

                while($row = mysqli_fetch_assoc($result))             
                
                    {
                   $timeOffset = 10*60*60*1000; 
                   $timenow=strtotime('today');
                   $timenow=$timenow*1000-18000000;
                   $timestampdate = strtotime($row['date']);
                   
                         $timestampbegin=$timestampdate;

                   $timestampdate=$timestampdate*1000-18000000;
                   
                   $timestamp = strtotime($row['time']);
                   $last_time=$row['time']; 
                   $row['time']= $timestamp*1000-18000000-$timenow+$timestampdate+$timeOffset;
                  // $row['time']=$timenow;
                 //  $row['time']=  $timestampdate;

                  //  $row['date']= date('Y m d', $row['date']);

 if(( $timeBegin ==0 )&&( $timeEnd==0))
{

$timeEnd=strtotime('today')+$dateoffset;

$timeBegin=strtotime("-7 days ",$t0); 

$date_begin= date("Y-m-d",$timeBegin);
$date_end= date("Y-m-d",$timeEnd);

}
 



    if (($timestampbegin >= $timeBegin)&&($timestampbegin <= $timeEnd))


{
              $label = "Water Level (cm)";
                  //    if (($row['A'] > 500)&&(($row['A']) < 3000)) 
                 // {
                      $row['M1'] = ($row['M1']/10)-20;
                      if ($row['M1'] < -20) 
                      $row['M1'] = -20;
                      $data1[] = array(($row['time']),($row['M1']));
                   
//    }
                 
                       
                       
                       
                       
                   }      
 
                    }
 
 
 

 }
 }//if (isset) 
 

 
 if((isset($_POST['loadDust'])))
 { 

$tablename = 'a'; 
 $legend1="Dust Density (microgramm/m^3)";
// $legend2="O3 (ppm)";
// $legend3="CO (ppm)";
// $legend3="อุณหภูมิในแปลง 2";
 
 
     $t0=strtotime('today');
   
   $graph_dateBegin = strtotime("-7 days ",$t0); 
  // $st1 = strftime("%Y-%m-%d",$st0); //เพิ่มเวลา 1 วันตามอายุอ้อย และย้อนหลังไป 1 ปี
	//echo $st1;
 $graph_dateBegin= $graph_dateBegin*1000-18000000;
 
 
 $db = mysql_select_db($database,$connection) or die  ("Could not select database.".mysql_error());  
        
                $query = "SELECT * FROM $tablename";
                $result = mysql_query($query)or ("Could not query ".mysql_error());  
               
               
     $result = mysql_query($query)or ("Could not query ".mysql_error());  
               
                while($row = mysql_fetch_assoc($result))
                    {
                   $timeOffset = 10*60*60*1000; 
                   $timenow=strtotime('today');
                   $timenow=$timenow*1000-18000000;
                   $timestampdate = strtotime($row['date']);
                   
                         $timestampbegin=$timestampdate;

                   $timestampdate=$timestampdate*1000-18000000;
                   
                   $timestamp = strtotime($row['time']);
                   $last_time=$row['time']; 
                   $row['time']= $timestamp*1000-18000000-$timenow+$timestampdate+$timeOffset;
                  // $row['time']=$timenow;
                 //  $row['time']=  $timestampdate;

                  //  $row['date']= date('Y m d', $row['date']);

 if(( $timeBegin ==0 )&&( $timeEnd==0))
{

$timeEnd=strtotime('today')+$dateoffset;

$timeBegin=strtotime("-7 days ",$t0); 

$date_begin= date("Y-m-d",$timeBegin);
$date_end= date("Y-m-d",$timeEnd);

}
 



    if (($timestampbegin >= $timeBegin)&&($timestampbegin <= $timeEnd))


{
              $label = "Dust Density";
                      if (($row['A'] > 10)&&(($row['A']) < 4000)) 
                  {
                  //    $row['A'] = 36-($row['A']*0.015);
				  $row['A'] =0.17*$row[A]-100;
				  if  ($row['A'] <0 )  $row['A']=0;
                      $data1[] = array(($row['time']),($row['A']));
                   
                    }
                 
                
                       
               
                       
                   }      
 
                    }
 
 
 
               
       
   
               
  
 
 }//if (isset) 
 
 
 

 
 
 if((isset($_POST['loadAir'])))
 { 

$tablename = 'a'; 
 $legend1="CO (ppm)";
 $legend2="NO (ppm)";
 $legend3="O3 (ppm)";
// $legend3="อุณหภูมิในแปลง 2";
 
 
     $t0=strtotime('today');
   
   $graph_dateBegin = strtotime("-7 days ",$t0); 
  // $st1 = strftime("%Y-%m-%d",$st0); //เพิ่มเวลา 1 วันตามอายุอ้อย และย้อนหลังไป 1 ปี
	//echo $st1;
 $graph_dateBegin= $graph_dateBegin*1000-18000000;
 
 
 $db = mysql_select_db($database,$connection) or die  ("Could not select database.".mysql_error());  
        
                $query = "SELECT * FROM $tablename";
                $result = mysql_query($query)or ("Could not query ".mysql_error());  
               
               
     $result = mysql_query($query)or ("Could not query ".mysql_error());  
               
                while($row = mysql_fetch_assoc($result))
                    {
                   $timeOffset = 10*60*60*1000; 
                   $timenow=strtotime('today');
                   $timenow=$timenow*1000-18000000;
                   $timestampdate = strtotime($row['date']);
                   
                         $timestampbegin=$timestampdate;

                   $timestampdate=$timestampdate*1000-18000000;
                   
                   $timestamp = strtotime($row['time']);
                   $last_time=$row['time']; 
                   $row['time']= $timestamp*1000-18000000-$timenow+$timestampdate+$timeOffset;
                  // $row['time']=$timenow;
                 //  $row['time']=  $timestampdate;

                  //  $row['date']= date('Y m d', $row['date']);

 if(( $timeBegin ==0 )&&( $timeEnd==0))
{

$timeEnd=strtotime('today')+$dateoffset;

$timeBegin=strtotime("-7 days ",$t0); 

$date_begin= date("Y-m-d",$timeBegin);
$date_end= date("Y-m-d",$timeEnd);

}
 



    if (($timestampbegin >= $timeBegin)&&($timestampbegin <= $timeEnd))


{
              $label = "Air Pollutants(ppm)";
                      if (($row['A'] > 500)&&(($row['A']) < 5000)) 
                  {
				  $row['A'] = 10*$row['A']/(5000-($row['A']));
				  $row['A'] =0.6-(1.2*(log10($row['A']/211)));
				  $row['A'] =(pow(10,$row[A]));
                      $data1[] = array(($row['time']),($row['A']));
                   
                    }
                 
                       if (($row['B'] > 500)&&(($row['B']) < 4000)) 
                  {
                    
				  //$row['B'] =100*$row[B]/29;
				  				  $row['B'] = 10*$row['B']/(5000-($row['B']));
								  $row['B'] =(1.006*(log10($row['B']/15)))-0.78381;
						$row['B'] =(pow(10,$row[B]));		  
								  
                      $data2[] = array(($row['time']),($row['B']));
                   
                    }      
                       
                          if (($row['C'] > 500)&&(($row['C']) < 4000)) 
                  {
                    //  $row['B'] = 36-($row['B']*0.015);
				  //$row['B'] =100*$row[B]/29;
				  				  $row['C'] = 10*$row['C']/(5000-($row['C']));
								  $row['C']= log10($row['C']/20);
								   $row['C'] =(1.052*$row['C'])+(0.205*$row['C']*$row['C'])+2;
								  $row['C'] =(pow(10,$row[C]));	
                      $data3[] = array(($row['time']),($row['C']));
                   
                    }           
                       
                   }      

 
                    }
 
 
 
               
       
   
               
  
 
 }//if (isset) 
 
 
 
 
  if((isset($_POST['loadHum'])))
 { $tablename = 'sensor'; 
    $legend1="outside Humidity %RH";
      $legend2="";
$legend3="";
$legend4="";
$legend5="";
$legend6="";
$legend7="";
$legend8="";
$data1=null;
$data2=null;
  $data3=null;
  $data4=null;
  $data5=null;
  $data6=null;
  $data7=null;
  $data8=null; 
 
 
     $t0=strtotime('today');
   
   $graph_dateBegin = strtotime("-7 days ",$t0); 
  // $st1 = strftime("%Y-%m-%d",$st0); //เพิ่มเวลา 1 วันตามอายุอ้อย และย้อนหลังไป 1 ปี
	//echo $st1;
 $graph_dateBegin= $graph_dateBegin*1000-18000000;
 
 
               $query = "SELECT * FROM $tablename";
  if ($result = mysqli_query($conn,$query))
 {
             
 

                while($row = mysqli_fetch_assoc($result))              
                    {
                    $timeOffset = 10*60*60*1000; 
                   $timenow=strtotime('today');
                   $timenow=$timenow*1000-18000000;
                   $timestampdate = strtotime($row['date']);
                   
                   $timestampbegin=$timestampdate;
                   $timestampdate=$timestampdate*1000-18000000;
                   
                   $timestamp = strtotime($row['time']);
                   $last_time=$row['time']; 
                   $row['time']= $timestamp*1000-18000000-$timenow+$timestampdate+$timeOffset;
                  // $row['time']=$timenow;
                 //  $row['time']=  $timestampdate;

                  //  $row['date']= date('Y m d', $row['date']);

 if(( $timeBegin ==0 )&&( $timeEnd==0))
{
$timeEnd=strtotime('today')+$dateoffset;

$timeBegin=strtotime("-7 days ",$t0); 

$date_begin= date("Y-m-d",$timeBegin);
$date_end= date("Y-m-d",$timeEnd);
}
 


         if (($timestampbegin >= $timeBegin)&&($timestampbegin <= $timeEnd))
             {
              $label = " Humidity %RH";
			  if ($row['Humid']>0)
			  {
			  $data1[] = array(($row['time']),($row['Humid']));
			  }
                
                 
             }      
 
                    }
  mysqli_free_result($result);
}

mysqli_close($conn);
    
 } 

 ////////////////////////////////////////////////////////////////////////////////// 
                
    if ((isset($_POST['loadRain']))         
         
         )
    {
          $tablename = 'sensor';   
        $legend1="Rain (mm)"; 
         $legend2="";
$legend3="";
$legend4="";
$legend5="";
$legend6="";
$legend7="";
$legend8="";
$data1=null;
$data2=null;
  $data3=null;
  $data4=null;
  $data5=null;
  $data6=null;
  $data7=null;
  $data8=null; 
             
              
              $t0=strtotime('today');
   
   $graph_dateBegin = strtotime("-7 days ",$t0); 
  // $st1 = strftime("%Y-%m-%d",$st0); //เพิ่มเวลา 1 วันตามอายุอ้อย และย้อนหลังไป 1 ปี
	//echo $st1;
 $graph_dateBegin= $graph_dateBegin*1000-18000000;
 
 
         
                $query = "SELECT * FROM $tablename";
             $lasttimetoday=0;  
               
    if ($result = mysqli_query($conn,$query))
 {
             
 

                while($row = mysqli_fetch_assoc($result))                 
				{
                    
                    
                  $timeOffset = 10*60*60*1000; 
                   $timenow=strtotime('today');
                   $timenow=$timenow*1000-18000000;
                   $timestampdate = strtotime($row['date']);
                        $timestampbegin=$timestampdate;
                   $timestampdate=$timestampdate*1000-18000000;
                   
                   $timestamp = strtotime($row['time']);
                   $last_time=$row['time']; 
                   $row['time']= $timestamp*1000-18000000-$timenow+$timestampdate+$timeOffset;   
             
 if(( $timeBegin ==0 )&&( $timeEnd==0))
{
$timeEnd=strtotime('today')+$dateoffset;

$timeBegin=strtotime("-7 days ",$t0); 

$date_begin= date("Y-m-d",$timeBegin);
$date_end= date("Y-m-d",$timeEnd);
}
 

       
                   if (($timestampbegin >= $timeBegin)&&($timestampbegin <= $timeEnd))
             {
              $label = " Rain (mm)";
                $data1[] = array(($row['time']),($row['Rain']));
                  
                 
             }  
                    
                    
                    
            
                    
            
                   
            
            
            
            }                     
    mysqli_free_result($result);
}

mysqli_close($conn);
    
 }                 //echo json_encode($data5);
                    
 if ((isset($_POST['loadWindspeed']))  )
    { $tablename = 'sensor';   
        
        $legend1="Wind speed (m/s)"; 
        
             
              
              $t0=strtotime('today');
   
   $graph_dateBegin = strtotime("-7 days ",$t0); 
  // $st1 = strftime("%Y-%m-%d",$st0); //เพิ่มเวลา 1 วันตามอายุอ้อย และย้อนหลังไป 1 ปี
	//echo $st1;
 $graph_dateBegin= $graph_dateBegin*1000-18000000;
 
 
 $db = mysql_select_db($database,$connection) or die  ("Could not select database.".mysql_error());  
        
                $query = "SELECT * FROM $tablename";
                $result = mysql_query($query)or ("Could not query ".mysql_error());  
               
               
     $result = mysql_query($query)or ("Could not query ".mysql_error());  
               
                while($row = mysql_fetch_assoc($result))
                    {
                     $timeOffset = 10*60*60*1000; 
                   $timenow=strtotime('today');
                   $timenow=$timenow*1000-18000000;
                   $timestampdate = strtotime($row['date']);
                        $timestampbegin=$timestampdate;

                   $timestampdate=$timestampdate*1000-18000000;
                   
                   $timestamp = strtotime($row['time']);
                   $last_time=$row['time']; 
                   $row['time']= $timestamp*1000-18000000-$timenow+$timestampdate+$timeOffset;
                  // $row['time']=$timenow;
                 //  $row['time']=  $timestampdate;

                  //  $row['date']= date('Y m d', $row['date']);
           
                   
                   
            
                //    echo '  row[C]=  '.$row['C'];
     
 if(( $timeBegin ==0 )&&( $timeEnd==0))
{
$timeEnd=strtotime('today')+$dateoffset;

$timeBegin=strtotime("-7 days ",$t0); 

$date_begin= date("Y-m-d",$timeBegin);
$date_end= date("Y-m-d",$timeEnd);

}
 


       
            
               if (($timestampbegin >= $timeBegin)&&($timestampbegin <= $timeEnd))

{
                  
                 
                  
                  
              $label = "Wind speed (m/s)";
                    // if (($row['C'] < 100))
                    //   {
                                                
                        // $row['E']=(4600-$row['E']*100)/38;
                                                         
                        $data1[] = array(($row['time']),($row['WindS']));
                     //  }
                   }       
                   
             
            }                     
                    }
       
         //   echo json_encode($data1);       


 
 
 if((isset($_POST['loadMoisture'])))
 { 

$tablename = 'sensor'; 
 $legend1="Moisture Content 30cm";
      $legend2="";
$legend3="";
$legend4="";
$legend5="";
$legend6="";
$legend7="";
$legend8="";
$data1=null;
$data2=null;
  $data3=null;
  $data4=null;
  $data5=null;
  $data6=null;
  $data7=null;
  $data8=null; 
 
     $t0=strtotime('today');
   
   $graph_dateBegin = strtotime("-7 days ",$t0); 
  // $st1 = strftime("%Y-%m-%d",$st0); //เพิ่มเวลา 1 วันตามอายุอ้อย และย้อนหลังไป 1 ปี
	//echo $st1;
 $graph_dateBegin= $graph_dateBegin*1000-18000000;
 
 
        
                $query = "SELECT * FROM $tablename";
    if ($result = mysqli_query($conn,$query))
 {
             while($row = mysqli_fetch_assoc($result))            {
                   $timeOffset = 10*60*60*1000; 
                   $timenow=strtotime('today');
                   $timenow=$timenow*1000-18000000;
                   $timestampdate = strtotime($row['date']);
                   
                         $timestampbegin=$timestampdate;

                   $timestampdate=$timestampdate*1000-18000000;
                   
                   $timestamp = strtotime($row['time']);
                   $last_time=$row['time']; 
                   $row['time']= $timestamp*1000-18000000-$timenow+$timestampdate+$timeOffset;
                  // $row['time']=$timenow;
                 //  $row['time']=  $timestampdate;

                  //  $row['date']= date('Y m d', $row['date']);

 if(( $timeBegin ==0 )&&( $timeEnd==0))
{

$timeEnd=strtotime('today')+$dateoffset;

$timeBegin=strtotime("-7 days ",$t0); 

$date_begin= date("Y-m-d",$timeBegin);
$date_end= date("Y-m-d",$timeEnd);

}
 



    if (($timestampbegin >= $timeBegin)&&($timestampbegin <= $timeEnd))


{
              $label = "Soil Moisture Content";
			   $data1[] = array(($row['time']),($row['M1']));
          
             
                       
                   }      
 
                    }
  mysqli_free_result($result);
}

mysqli_close($conn);
    
 } 
 
		 
if ((isset($_POST['loadLux']))  )
    { $tablename = 'sensor';   
        
        $legend1="Outside"; 
         $legend2="";
$legend3="";
$legend4="";
$legend5="";
$legend6="";
$legend7="";
$legend8="";
$data1=null;
$data2=null;
  $data3=null;
  $data4=null;
  $data5=null;
  $data6=null;
  $data7=null;
  $data8=null; 
        
// $legend3="อุณหภูมิในแปลง 2";
             
              
              $t0=strtotime('today');
			  
			//echo  date("Y-m-d H:i:s",$t0);
			  
			  
   
   $graph_dateBegin = strtotime("-7 days ",$t0); 
  // $st1 = strftime("%Y-%m-%d",$st0); //เพิ่มเวลา 1 วันตามอายุอ้อย และย้อนหลังไป 1 ปี
	//echo $st1;
 $graph_dateBegin= $graph_dateBegin*1000-18000000;
 
 
       
                $query = "SELECT * FROM $tablename";
   if ($result = mysqli_query($conn,$query))
 {
             
 

                while($row = mysqli_fetch_assoc($result))
               
                {
                   $timeOffset = 10*60*60*1000; 
                   $timenow=strtotime('today');
                   $timenow=$timenow*1000-18000000;
                   $timestampdate = strtotime($row['date']);
                        $timestampbegin=$timestampdate;

                   $timestampdate=$timestampdate*1000-18000000;
                   
                   $timestamp = strtotime($row['time']);
				 
				   
                   $last_time=$row['time']; 
                   $row['time']= $timestamp*1000-18000000-$timenow+$timestampdate+$timeOffset;
                  // $row['time']=$timenow;
                 //  $row['time']=  $timestampdate;
                  //   echo  date("Y-m-d H:i:s",($row['time']-18000000)/1000);
                  //  $row['date']= date('Y m d', $row['date']);
           
                   
                   
            
                //    echo '  row[C]=  '.$row['C'];
     
 if(( $timeBegin ==0 )&&( $timeEnd==0))
{
$timeEnd=strtotime('today')+$dateoffset;
$timeBegin=strtotime("-7 days ",$t0); 

$date_begin= date("Y-m-d",$timeBegin);
$date_end= date("Y-m-d",$timeEnd);

}
 
// echo  date("Y-m-d H:i:s",($timeEnd));
// echo $date_end;
       
            
               if (($timestampbegin >= $timeBegin)&&($timestampbegin <= $timeEnd))

{
                  
                 
                  
                  
              $label = "Light Intensity (kLux)";
                    // if (($row['C'] < 100))
                    //   {
                                                
                        // $row['E']=(4600-$row['E']*100)/38;
                                                         
                        $data1[] = array(($row['time']),($row['Light']));
                     //  }
                   
				   
				   
				   
				   }       
                   
 
	   }                     
                
 mysqli_free_result($result);
}

mysqli_close($conn);
    
 } //end if isset          
}//end if       
                     ?>       
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
