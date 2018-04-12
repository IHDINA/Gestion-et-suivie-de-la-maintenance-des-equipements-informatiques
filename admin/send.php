<?php
 	 include('./lib/dbcon.php'); 
     dbcon();
	include('session.php');
	$id=$_POST['selector'];
 	$stdev_id  = $_POST['stdev_id'];
    $sid  = $_POST['fonct'];
    

	if ($id == '' ){ 
	header("location: device_location.php");
	?>
	

	<?php }else{
	
	$query = mysql_query("select * from location_details order by ld_id DESC")or die(mysql_error());
	$row = mysql_fetch_array($query);
	$ld_id  = $row['ld_id'];
	

    $N = count($id);
    for($i=0; $i < $N; $i++)
    {
	$oras = strtotime("now");
	$ora = date("Y-m-d",$oras);
    mysql_query("insert into location_details (id,stdev_id,date_deployment,fonct_id) values('$id[$i]','$stdev_id','$ora','$sid')")or die(mysql_error());
                mysql_query("update stdevice set fonct_id='$sid' where id='$id[$i]'")or die(mysql_error());

	mysql_query("insert into activity_log (date,username,action) values(NOW(),'$admin_username','Affectations equipement id $id[$i] a lemplacement id $stdev_id')")or die(mysql_error());		
    }

    header("location: device_location.php");
    }  
?>
	
	

	
			setTimeout(function(){ window.location = 'Newform.php'  }, delay);  
	