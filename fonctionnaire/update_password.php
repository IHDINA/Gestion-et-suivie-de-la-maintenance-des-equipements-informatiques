 <?php
 include('../admin/lib/dbcon.php'); 
 dbcon(); 
 include('session.php');
 $new_password  = $_POST['new_password'];
 mysql_query("update fonctionnaire set password = '$new_password' where fonct_id = '$session_id'")or die(mysql_error());
 ?>