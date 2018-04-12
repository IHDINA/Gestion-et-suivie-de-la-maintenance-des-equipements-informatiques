<?php include('header.php'); ?>
<?php include('session.php'); ?>
   <?php

$type_person = $_SESSION['type'];

if($type_person == 'admin '){
    $sender = 'respAdm';
}
$sender='respAdm' ;
$test = mysql_query("SELECT * FROM messages WHERE SENDER='$sender' AND ID_RECEIVER=$session_id AND SEEN='no'");
$row = mysql_num_rows($test);

?>   
      <?php
    

if(isset($_POST['submit'])){
  
    $message = $_POST['message'];
    
    if (isset($_POST['name'])){
   $name=$_POST['name'] ;
 $sql = mysql_query("select * from resptech where lastname='$name' ");
 while(  $donnees = mysql_fetch_array($sql)){
    
    $i=$donnees['respAdm_id'] ;
 }
 }
    if (isset($_POST['option'])) { 
$obj = $_POST['option']; 
} 
   if(!empty($message)){
        mysql_query("INSERT INTO messages VALUES('',$session_id ,'$i','admin','$message',CURRENT_TIME(),'no','no','no','$obj','$sender')") or die(" ");
         mysql_query("insert into notification (fullname,notification,date_of_notification,link) 
			value('$admin_username','Envoyer un message , Sujet : $obj' ,NOW(), 'inbox.php')")or die(mysql_error());
   }
    header("location: dashboard.php");  
    
    
}

 ?>
<!--Advance Search Form Modal -->
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
				
					 <h2 id="sc" align="center"><image src="images/icon.png" width="45%" height="45%"/></h2>
					 <?php	
	             $c=mysql_query( "SELECT * FROM `messages`");
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
                        <label>A Mr :</label>
                        
                          <select  name="name" required>
                            <?php
                            $extract = mysql_query("SELECT * FROM `resptech` ");
                            while($array=mysql_fetch_array($extract)){
                                echo  '<option>'.$array['lastname'].'</option>';
                            }
                            ?>
                           
                          </select>
               
                             <br>
                          <label>Objet :</label>
                      
                          <select  name="option" >
                            
                           <option>Suivre une Panne</option>
                           <option></option>
                            
                          </select>
                   
                      
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


           