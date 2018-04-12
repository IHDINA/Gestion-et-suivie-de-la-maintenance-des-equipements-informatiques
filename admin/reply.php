<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php

$type_person = $_SESSION['type'];

if($type_person == 'admin'){
    $sender = 'respAdm';
}else{
    $sender = 'admin';
}

$test = mysql_query("SELECT * FROM messages WHERE SENDER='$sender' AND ID_RECEIVER=$session_id AND SEEN='no'");
$row = mysql_num_rows($test);

?>


<?php
 


$employe_id = $_GET['id'];


$u = mysql_query("SELECT * FROM messages where ID_SENDER='$employe_id'and ID_RECEIVER='$session_id'");
$ro = mysql_fetch_array($u);
$r=$ro['objet'] ;

$sql = mysql_query("SELECT * FROM resptech where respAdm_id=$employe_id");
$donnees = mysql_fetch_array($sql);

if(isset($_POST['submit'])){
    $message = $_POST['message'];
    
    if(!empty($message)){
        mysql_query("INSERT INTO messages VALUES('',$session_id,$employe_id,'admin','$message',CURRENT_TIME(),'no','no','no','$r','respAdm')");
        mysql_query("insert into notification (fullname,notification,date_of_notification,link) 
			value('$admin_username','Envoyer un message , Sujet : $ob' ,NOW(), 'inbox.php')")or die(mysql_error());
    }
    header("location: outbox.php");    
}

?>

    <body id="home">
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('dashboard_slidebar.php'); ?>
				<div class="span9" id="content">
                     <div class="row-fluid">
					 
					 <div class="empty">
			 	         <div class="alert alert-success">
                            <strong> Messages </strong>
                       </div>
			        </div>
				
					 <h2 id="sc" align="center"><image src="images/sclogo.png" width="45%" height="45%"/></h2>
					 <?php	
	             $c=mysql_query( "SELECT * FROM `messages`");
	             $count = mysql_num_rows($c);
                 ?>	 
				   <div id="block_bg" class="block">
                        <div class="navbar navbar-inner block-header">
                             <div class="muted pull-left"><i class="icon-reorder icon-large"></i>Repondre a un Messages</div>
                          <div class="muted pull-right">
								Nombre Messages(s) : <span class="badge badge-info"><?php  echo $count; ?></span>
							 </div>
						 
						  
         				<br><br>
        	  



    
                  <h5>      Repondre A :<span style="color: gray;"><?php echo "Mr ".$donnees['firstname']." ".$donnees['lastname']; ?></span></h5>
                  <br>
                    <?php
$s = mysql_query("SELECT * FROM messages where ID_SENDER='$employe_id' and ID_RECEIVER='$session_id' and SENDER='respAdm' and RECEIVER='admin'");
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