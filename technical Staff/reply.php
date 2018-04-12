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
 
$manager_id = 0;
$manager_type = '';

$msg_id = $_GET['id'];

$sql = mysql_query("SELECT * FROM messages WHERE ID=$msg_id");
while($row = mysql_fetch_array($sql)){
    $manager_id = $row['ID_SENDER'];
    $manager_type = $row['SENDER'];
}


$u = mysql_query("SELECT * FROM messages where ID=$msg_id ");
$ro = mysql_fetch_array($u);
$r=$ro['SENDER'] ;
$ob=$ro['objet'] ;
if($r=='fonctionnaire'){
$sql = mysql_query("SELECT * FROM fonctionnaire where fonct_id=$manager_id");
$donnees = mysql_fetch_array($sql);

if(isset($_POST['submit'])){
    $message = $_POST['message'];
    
    if(!empty($message)){
        mysql_query("INSERT INTO messages VALUES('','$session_id','$manager_id','respAdm','$message',CURRENT_TIME(),'no','no','no','$ob','fonctionnaire')");
          mysql_query("insert into notification (fullname,notification,date_of_notification,link) 
			value('$client_fullname','Envoyer un message , Sujet : $ob' ,NOW(), 'inbox.php')")or die(mysql_error());
    }
    header("location: outbox.php");    
}
}
else if($r=='admin'){

$sql = mysql_query("SELECT * FROM admin where admin_id=$manager_id");
$donnees = mysql_fetch_array($sql);

if(isset($_POST['submit'])){
    $message = $_POST['message'];
    
    if(!empty($message)){
        mysql_query("INSERT INTO messages VALUES('','$session_id','$manager_id','respAdm','$message',CURRENT_TIME(),'no','no','no','$ob','admin')");
          mysql_query("insert into notification (fullname,notification,date_of_notification,link) 
			value('$client_fullname','Envoyer un message , Sujet : $ob' ,NOW(), 'inbox.php')")or die(mysql_error());
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
    if($manager_type == 'admin'){
        $req = mysql_query("SELECT * FROM admin where admin_id='$manager_id' ");
    }elseif($manager_type == 'fonctionnaire'){
        $req = mysql_query("SELECT * FROM fonctionnaire where fonct_id='$manager_id' ");
    }
while($don = mysql_fetch_array($req)){
    $p = $don['firstname'];
    $t = $don['lastname'];
}

 ?>
   
               <h5> Répondre A:<span style="color: gray;"> <?php echo "Mr ".$p." ".$t ?></span></h5>



    
                  
                  <br>
                    <?php
$s = mysql_query("SELECT * FROM messages where ID=$msg_id");

   while( $r = mysql_fetch_array($s))
   {
    $o = $r['objet'];
   
   
   }

?>
                  <h5>Objet :<span style="color: gray;"><?php echo $o; ?></span></h5>
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