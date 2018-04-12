<?php include('navbar.php'); 
dbcon(); ?>
<?php
$id = $_POST['ID'];
mysql_query("delete from messages where ID = '$id'")or die(mysql_error());
?>