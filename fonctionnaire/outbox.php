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
				
					 <h2 id="sc" align="center"><image src="images/sclogo.png" width="45%" height="45%"/></h2>
					 <?php	
	             $c=mysql_query( "SELECT * FROM `messages`");
	             $count = mysql_num_rows($c);
                 ?>	 
				   <div id="block_bg" class="block">
                        <div class="navbar navbar-inner block-header">
                             <div class="muted pull-left"><i class="icon-reorder icon-large"></i> Liste des Messages</div>
                          <div class="muted pull-right">
								Nombre Messages(s) : <span class="badge badge-info"><?php  echo $count; ?></span>
							 </div>
						  </div>
						  
        						  
<br/>

<div class="block-content collapse in">
    <div class="span12">
	<form action="" method="post">
  	<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
		<thead>		
		        <tr>			        
						
				         <th>Message ID</th>
                            <th>Date</th>
                            <th>A</th>
                            <th>Message</th>
                            <th>Objet</th>
                            <th></th>
                            
                    					
		    </tr>
		</thead>
<tbody>
    <?php
mysql_query("DELETE FROM messages WHERE DELETED_FOR_MANAGER='yes' AND DELETED_FOR_EMPLOYE='yes'");

$select = mysql_query("SELECT * FROM messages WHERE ID_SENDER=$session_id AND SENDER='fonctionnaire' AND RECEIVER='respAdm' AND DELETED_FOR_MANAGER='no' ORDER BY TIME desc");
while($data=mysql_fetch_array($select)){
    $id_sender = $data['ID_RECEIVER'];
    $sql = mysql_query("SELECT * FROM resptech where respAdm_id=$id_sender");
    $donnees = mysql_fetch_array($sql);
    
    echo '<tr>';
    echo '<td>'.$data['ID'].'</td>';
    echo '<td>'.$data['TIME'].'</td>';
    echo '<td>'.$donnees['firstname']." ".$donnees['lastname'].'</td>';
   echo '<td>'.$data['CONTENT'].'</td>';
    echo '<td>'.$data['objet'].'</td>';
    
    echo '<td><a href="delete.php?id='.$data['ID'].'">Supprimer</a></td>';
    echo '</tr>';
    
}

?>
   <?php
mysql_query("DELETE FROM messages WHERE DELETED_FOR_MANAGER='yes' AND DELETED_FOR_EMPLOYE='yes'");

$select = mysql_query("SELECT * FROM messages WHERE ID_SENDER=$session_id AND SENDER='fonctionnaire' AND RECEIVER='admin' AND DELETED_FOR_MANAGER='no' ORDER BY TIME desc");
while($data=mysql_fetch_array($select)){
    $id_sender = $data['ID_RECEIVER'];
    $sql = mysql_query("SELECT * FROM admin where admin_id=$id_sender");
    $donnees = mysql_fetch_array($sql);
    
    echo '<tr>';
    echo '<td>'.$data['ID'].'</td>';
    echo '<td>'.$data['TIME'].'</td>';
    echo '<td>'.$donnees['firstname']." ".$donnees['lastname'].'</td>';
   echo '<td>'.$data['CONTENT'].'</td>';
    echo '<td>'.$data['objet'].'</td>';
    
    echo '<td><a href="delete.php?id='.$data['ID'].'">Supprimer</a></td>';
    echo '</tr>';
    
}

?>
</tbody>
</table>
</form>		
		
			  		
</div>
</div>
</div>
</div>
</div>

	
<?php include('footer.php'); ?>
</div>
<?php include('script.php'); ?>
 </body>
</html>