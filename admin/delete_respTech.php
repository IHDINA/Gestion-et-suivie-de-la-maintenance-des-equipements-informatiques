<?php
include('./lib/dbcon.php');
dbcon();
if (isset($_POST['RespTech_delete'])){
$id=$_POST['selector'];
$N = count($id);
for($i=0; $i < $N; $i++)
{
	$result = mysql_query("DELETE FROM resptech where respAdm_id='$id[$i]'");
}
header("location: respTech_user.php");
}
?>