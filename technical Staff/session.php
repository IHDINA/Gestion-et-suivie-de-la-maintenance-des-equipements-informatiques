<?php
//Start session
session_start();
//Check whether the session variable SESS_MEMBER_ID is present or not
if (!isset($_SESSION['id_tech']) ||(trim ($_SESSION['id_tech']) == '')) {
	header("location:".host()."../index.php");
    exit();
}
$session_id=$_SESSION['id_tech'];
$_SESSION['type'] = 'respAdm';
$client_query = mysql_query("select * from resptech where respAdm_id = '$session_id'")or die(mysql_error());
$client_row = mysql_fetch_array($client_query);
$client_fullname =$client_row['firstname']." ".$client_row['lastname'];
?>