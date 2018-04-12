<?php
include('../admin/lib/dbcon.php'); 
dbcon(); 
include('session.php');
if (isset($_POST['read'])){
$id=$_POST['selector'];
$N = count($id);
for($i=0; $i < $N; $i++)
{

	mysql_query("insert into notification_read (respAdm_id,respAdm_read,notification_id) values('$session_id','yes','$id[$i]')")or die(mysql_error());
	
	
	
}
?>
<script>
window.location = 'notification.php';
</script>
<?php
}
?>