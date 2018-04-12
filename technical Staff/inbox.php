<?php include('header_dashboard.php'); ?>
<?php include('session.php'); ?>
<?php

$type_person = $_SESSION['type'];

if($type_person == 'respAdm'){
    $sender = 'fonctionnaire';
}else{
    $sender = 'respAdm';
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
				
					 <h2 id="sc" align="center"><image src="../admin/images/sclogo.png" width="45%" height="45%"/></h2>
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
						  
 <h4 id="sc">Device List 
	<div align="right" id="sc">Date:
		<?php
            $date = new DateTime();
            echo $date->format('l, F jS, Y');
         ?></div>
</h4> 
                						  
<br/>
	<div class="container-fluid">
  <div class="row-fluid"> 
     <div class="empty">
	     <div class="pull-right">
		   <a href="create.php" class="btn btn-info" id="print" data-placement="left" title="Clicker pour rediger une intervention"><i class="icon-print icon-large"></i>Nouveau Message</a> 		      
		   <script type="text/javascript">
		     $(document).ready(function(){
		     $('#print').tooltip('show');
		     $('#print').tooltip('hide');
		     });
		   </script>        	   
         </div>
      </div>
    </div> 
</div>
<div class="block-content collapse in">
    <div class="span12">
	<form action="" method="post">
  	<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
		<thead>		
		        <tr>			        
						
				         <th>Message ID</th>
                            <th>Date</th>
                            <th>De</th>
                            <th>Message</th>
                             <th>Objet</th>
                            <th></th>
                            <th></th>
                    					
		    </tr>
		</thead>
<tbody>
<?php
mysql_query("DELETE FROM messages WHERE DELETED_FOR_MANAGER='yes' AND DELETED_FOR_EMPLOYE='yes'");
mysql_query("UPDATE messages SET SEEN='yes' WHERE ID_RECEIVER=$session_id");

$select = mysql_query("SELECT  * FROM messages WHERE  SENDER='fonctionnaire'  AND RECEIVER='respAdm' ORDER BY TIME desc");

while($data=mysql_fetch_array($select)){
    $id_sender = $data['ID_SENDER'];
    $sql = mysql_query("SELECT * FROM fonctionnaire where fonct_id=$id_sender");
    $donnees = mysql_fetch_array($sql);
    
    if($data['SEEN'] == 'no'){
        echo '<tr style="background: #aacada !important;">';
    }else{
        echo '<tr>';
    }
    echo '<td>'.$data['ID'].'</td>';
    echo '<td>'.$data['TIME'].'</td>';
    echo '<td>'.$donnees['firstname'].' '.$donnees['lastname'].'</td>';
    echo '<td>'.$data['CONTENT'].'</td>';
    echo '<td>'.$data['objet'].'</td>';
    echo '<td><a href="reply.php?id='.$data['ID'].'">Repondre</a></td>';
    echo '<td><a href="remove_inbox.php?id='.$data['ID'].'">Supprimer</a></td>';
    echo '</tr>';
    
}
$select1 = mysql_query("SELECT  * FROM messages WHERE SENDER='admin' AND RECEIVER='respAdm' ORDER BY TIME desc");

while($data1=mysql_fetch_array($select1)){
    $id_sender1 = $data1['ID_SENDER'];
    $sql1 = mysql_query("SELECT * FROM admin where admin_id=$id_sender1");
    $donnees1 = mysql_fetch_array($sql1);
    
    if($data['SEEN'] == 'no'){
        echo '<tr style="background: #aacada !important;">';
    }else{
        echo '<tr>';
    }
    echo '<td>'.$data1['ID'].'</td>';
    echo '<td>'.$data1['TIME'].'</td>';
    echo '<td>'.$donnees1['firstname'].' '.$donnees1['lastname'].'</td>';
    echo '<td>'.$data1['CONTENT'].'</td>';
    echo '<td>'.$data1['objet'].'</td>';
    echo '<td><a href="reply.php?id='.$data1['ID'].'">Repondre</a></td>';
    echo '<td><a href="delete.php?id='.$data1['ID'].'">Supprimer</a></td>';
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