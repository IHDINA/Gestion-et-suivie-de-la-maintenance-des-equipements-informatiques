<?php include('header_dashboard.php'); ?>
<?php include('session.php'); ?>
<?php

$type_person = $_SESSION['type'];

if($type_person == 'respAdm'){
    $sender = 'fonctionnaire';
}else{
    $sender = 'admin';
}

$test = mysql_query("SELECT * FROM messages WHERE SENDER='$sender' AND ID_RECEIVER=$session_id AND SEEN='no'");
$row = mysql_num_rows($test);

?>


<?php
 


$manager_id = $_GET['id'];



$u = mysql_query("SELECT * FROM messages where ID_SENDER='$manager_id'and( SENDER='fonctionnaire' or SENDER='admin') and RECEIVER='respAdm' and ID_RECEIVER='$session_id' ");
$ro = mysql_fetch_array($u);
$r=$ro['SENDER'] ;

if($r='fonctionnaire'){
$sql = mysql_query("SELECT * FROM fonctionnaire where fonct_id=$manager_id");
$donnees = mysql_fetch_array($sql);

if(isset($_POST['submit'])){
    $message = $_POST['message'];
    
    if(!empty($message)){
        mysql_query("INSERT INTO messages VALUES('','$session_id','$manager_id','respAdm','$message',CURRENT_TIME(),'no','no','no','$r','$sender','fonctionnaire')");
    }
    header("location: outbox.php");    
}
}
else if($r='admin'){

$sql = mysql_query("SELECT * FROM admin where admin_id=$manager_id");
$donnees = mysql_fetch_array($sql);

if(isset($_POST['submit'])){
    $message = $_POST['message'];
    
    if(!empty($message)){
        mysql_query("INSERT INTO messages VALUES('','$session_id','$manager_id','respAdm','$message',CURRENT_TIME(),'no','no','no','$r','$sender','admin')");
    }
    header("location: outbox.php");  


}
}
?>


    <body id="home">
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('sidebar.php'); ?>
				<div class="span9" id="content">
                     <div class="row-fluid">
					 
					 <div class="empty">
			 	         <div class="alert alert-success">
                            <strong> Messages </strong>
                       </div>
			        </div>
				
					 <h2 id="sc" align="center"><image src="../admin/images/sclogo.png" width="45%" height="45%"/></h2>
					 <?php	
	             $c=mysql_query( "SELECT * FROM `messages`");
	             $count = mysql_num_rows($c);
                 ?>	 
				   <div id="block_bg" class="block">
                        <div class="navbar navbar-inner block-header">
                             <div class="muted pull-left"><i class="icon-reorder icon-large"></i>Repondre a un Messages</div>
                          <div class="muted pull-right">
								Nombre Messages(s) : <span class="badge badge-info"><?php  echo $count; ?></span>
							 </div><br><br>
                            
 <?php                           
 $req = mysql_query("SELECT * FROM fonctionnaire,admin where fonct_id='$manager_id' or admin_id='$manager_id' ");
while($don = mysql_fetch_array($req)){
$p=$don['firstname'];
$t=$don['lastname'];
$don++;
}

 ?>
   
                   <h5> Répondre A:<span style="color: gray;"> <?php echo "Mr ".$p." ".$t ?></span></h5>



    
                  
                  <br>
                    <?php
$s = mysql_query("SELECT * FROM messages where ID_SENDER='$manager_id' and ID_RECEIVER='$session_id' and SENDER='admin' and RECEIVER='respAdm'");
$r = mysql_fetch_array($s);

?>
                  <h5>Objet :<span style="color: gray;"><?php echo $r['objet']; ?></span></h5>
                  <form method="post" role="form">
                  
                      
                        <label>Votre message:</label>
                          <textarea class="form-control" name="message" required style="margin: 0px 0px 10px; width: 659px; height: 206px;"></textarea>
                     
                 <br>
                  <button type="submit" name="submit" class="btn btn-primary">Repondre</button>
                  </form>
              </div>
            </div> </div>
            </div>
        </div>
          </div>	
    </body>
</html>