<?php
include('./lib/dbcon.php');
dbcon();
if (isset($_POST['fonct_delete'])){
$id=$_POST['selector'];
$N = count($id);
for($i=0; $i < $N; $i++)
{
	$result = mysql_query("DELETE FROM fonctionnaire where fonct_id='$id[$i]'");
}
header("location: fonct_user.php");
}
?>