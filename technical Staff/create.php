<?php include('header_dashboard.php'); ?>
<?php include('session.php'); ?>
   <?php

$type_person = $_SESSION['type'];

if($type_person == 'respAdm'){
    $sender = 'admin';
}else{
    $sender = 'focntionnaire';
}

$test = mysql_query("SELECT * FROM messages WHERE SENDER='$sender' AND ID_RECEIVER=$session_id AND SEEN='no'");
$row = mysql_num_rows($test);

?>   
      <?php
    

if(isset($_POST['submit'])){
  
    $message = $_POST['message'];
    
   
        
   $name=$_POST['name'] ;
        
$i = '';
$v = '';
    
    
 $sql = mysql_query("select * from fonctionnaire where lastname='$name'");
 while(  $donnees = mysql_fetch_array($sql)){
    $i=$donnees['fonct_id'] ;
 }
 $sql1 = mysql_query("select * from admin where lastname='$name'");
 while(  $donnees = mysql_fetch_array($sql1)){
    $v=$donnees['admin_id'] ;
 } 
 
    if (is_numeric($i)){
    $idd=$i ;
    $type = 'fonctionnaire';
    
    }else{
    $idd=$v ;
    $type = 'admin';
    }
     
        
    if (isset($_POST['option'])) { 
$obj = $_POST['option']; 
} 
   if(!empty($message)){
        mysql_query("INSERT INTO messages VALUES('',$session_id ,'$idd','respAdm','$message',CURRENT_TIME(),'no','no','no','$obj','$type')") or die(" ");
       
       mysql_query("insert into notification (fullname,notification,date_of_notification,link) 
			value('$client_fullname','Envoyer un message , Sujet : $obj' ,NOW(), 'inbox.php')")or die(mysql_error());
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
                        <label>A Mr/Mme:</label>
                        
                          <select  name="name" required>
                            <?php
                            $extract = mysql_query("SELECT * FROM admin ");
                            while($array=mysql_fetch_array($extract)){
                                echo  '<option value="'.$array['lastname'].'">'.$array['lastname'].'</option>';
                            }
                            $extract1 = mysql_query("SELECT * FROM fonctionnaire");
                            while($array1=mysql_fetch_array($extract1)){
                                echo  '<option value="'.$array1['lastname'].'" >'.$array1['lastname'].'</option>';
                            }
                                

                            ?>
                           
                          </select>
               
                             <br>
                          <label>Objet :</label>
                      
                          <select  name="option" >
                            
                           <option>Demande Equipement</option>
                           <option>Intervenir au Panne</option>
                            
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


           