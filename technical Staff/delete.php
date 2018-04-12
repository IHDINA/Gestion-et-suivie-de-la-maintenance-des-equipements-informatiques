<?php
include('../admin/lib/dbcon.php');

/*$id = $_GET['id'];

mysql_query("DELET FROM messages WHERE ID = $id");
mysql_query("UPDATE messages SET DELETED_FOR_MANAGER='yes' WHERE ID = $id");


header("location: outbox.php");*/
include('navbar.php'); 
dbcon(); 
php
$id = $_POST['ID'];
mysql_query("delete from messages where ID = '$id'")or die(mysql_error());

?>

