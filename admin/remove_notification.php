<?php include('./lib/dbcon.php'); 
dbcon(); ?>
<?php
$id = $_POST['ID'];
mysql_query("delete from notification where notification_id = '$id'")or die(mysql_error());
?>