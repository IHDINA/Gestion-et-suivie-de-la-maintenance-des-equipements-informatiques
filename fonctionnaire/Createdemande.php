<?php include('header_dashboard.php'); ?>
<?php include('session.php'); ?>
   <?php

$type_person = $_SESSION['type'];

if($type_person == 'fonctionnaire'){
    $sender = 'respAdm';
}else{
    $sender = 'admin';
}

$test = mysql_query("SELECT * FROM messages WHERE SENDER='$sender' AND ID_RECEIVER=$session_id AND SEEN='no'");
$row = mysql_num_rows($test);

?>   
      <?php
    
if(isset($_POST['submit'])){
  
    $message = $_POST['message'];
    
    if (isset($_POST['name'])){
   $name=$_POST['name'] ;
 $sql = mysql_query("select * from admin where lastname='$name' ");
 while(  $donnees = mysql_fetch_array($sql)){
    
    $i=$donnees['admin_id'] ;
 }
 }
  
   if(!empty($message)){
        mysql_query("INSERT INTO messages VALUES('',$session_id ,'$i','fonctionnaire','$message',CURRENT_TIME(),'no','no','no','Demande Equipement','admin')") or die(" ");
         mysql_query("insert into notification (fullname,notification,date_of_notification,link) 
			value('$client_fullname','Envoyer un message , Sujet : Demande Equipement' ,NOW(), 'inbox.php')")or die(mysql_error());
   }
    header("location: outbox.php");  
    
    
}

 ?>
<!-----------------------------------------------Advance Search Form Modal --------------------------------------------------->
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
	             $c=mysql_query( "select * from messages where SENDER='fonctionnaire' and ID_SENDER='$session_id' and objet='Demande Equipement'");
	             $count = mysql_num_rows($c);
                 ?>	 
				   <div id="block_bg" class="block">
                        <div class="navbar navbar-inner block-header">
                             <div class="muted pull-left"><i class="icon-reorder icon-large"></i> Nouveau Message</div>
                          <div class="muted pull-right">
								Nombre Messages(s) : <span class="badge badge-info"><?php  echo $count; ?></span>
						
                						  
  </div>
              
           
    
						  
         
						  
                      
                         




    <form  method="post" >
     <br><br<br><br>  
                        <label>A Mr/Mme:</label>
                        
                          <select  name="name" required>
                            <?php
                          
                            $extract1 = mysql_query("SELECT * FROM admin");
                            while($array1=mysql_fetch_array($extract1)){
                                echo  '<option value="'.$array1['lastname'].'" >'.$array1['lastname'].'</option>';
                            }
                                

                            ?>
                           
                          </select>
               
                             <br><br>
                      
                          <lable>Objet :<span style="color: gray;">Demande Equipement</span></label>
                   <br><br>
                      
                        <label>Votre message:</label>
                          <textarea  name="message" required style="margin: 0px 0px 10px; width: 659px; height: 206px;"></textarea>
                      </div>
                  
                  <button type="submit" name="submit" class="btn btn-primary">Envoyer</button>
                  </div>  
         </div>

</form>
</div>
          </div>     </div>
          </div>       
             </div>


	 </div>
                  
    </body>


           