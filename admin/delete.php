<?php
include('lib/dbcon.php');

$id = $_REQUES['id'];

mysql_query("DELETE FROM messages WHERE ID = '$id'");


header("location: outbox.php");
?>