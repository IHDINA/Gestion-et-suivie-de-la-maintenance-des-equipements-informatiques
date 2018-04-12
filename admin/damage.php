<?php include('header.php'); ?>
<?php include('session.php'); ?>
    <body>
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('damage_slidebar.php'); ?>
			
				<div class="span9" id="content">
                     <div class="row-fluid">					 
					 <h2 id="sc" align="center"><image src="images/sclogo.png" width="45%" height="45%"/></h2>
				<?php	
	             $count_item=mysql_query("select * from stdevice 
				 LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
				 where dev_status = 'Endommage' OR dev_status = 'endommage' ORDER BY stdevice.id DESC ");
	             $count = mysql_num_rows($count_item);
                 ?>	 
				   <div id="block_bg" class="block">
                        <div class="navbar navbar-inner block-header">
                             <div class="muted pull-left"><i class="icon-remove-sign"></i> Liste Equipment Endommage (s)</div>
                          <div class="muted pull-right">
								Nombre Equipement: <span class="badge badge-info"><?php  echo $count; ?></span>
							 </div>
						  </div>
						  
				<h4 id="sc">Liste Equipment Endommage (s)
					<div align="right" id="sc">Date:
						<?php
                            $date = new DateTime();
                            echo $date->format('l, F jS, Y');
                         ?></div>
				 </h4>			  
                  							  
  <div class="container-fluid">
 <div class="row-fluid">						 
 <br/>
	<div class="pull-left">
			    <ul class="nav nav-pills">
				<li class="active">
					<a href="damage.php">Tous</a>
				</li>
				
			  <?php	
	           $count_item=mysql_query("select * from stdevice 
			   LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
			   where dev_name = 'Clavier' and dev_status = 'Endommage' OR dev_name = 'clavier'  and dev_status = 'endommage'
			   OR dev_name = 'CLAVIER'  and dev_status = 'ENDOMMAGE' 
			   ORDER BY stdevice.id DESC");
	           $count = mysql_num_rows($count_item);
               ?>							
				<li class="">
					<a href="damage_keyboard.php">Clavier&nbsp;<span class="label label-default"> <?php echo $count;?></span></a>
				</li>
				         				
			<?php	
	           $count_item=mysql_query("select * from stdevice 
			   LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
			   where 
			      dev_status = 'ENDOMMAGE'    and dev_name = 'SOURIS'       OR dev_status = 'souris'  and dev_name = 'endommage'       OR dev_status = 'Endommage' and dev_name = 'Souris'
			
			   ORDER BY stdevice.id DESC");
	           $count = mysql_num_rows($count_item);
               ?>
				<li class="">
				<a href="damage_mouse.php">Souris&nbsp;<span class="label label-default"> <?php echo $count;?></span></a></a>
				</li>
				
			 <?php	
	           $count_item=mysql_query("select * from stdevice 
			   LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
			   where dev_status = 'endommage' and dev_name = 'projecteur' OR dev_status = 'Endommage' and dev_name = 'Projecteur'
			   OR dev_status = 'ENDOMMAGE' and dev_name = 'PROJECTEUR' 
			   ORDER BY stdevice.id DESC");
	           $count = mysql_num_rows($count_item);
               ?>
				<li class="">
				<a href="damage_projecteur.php">Projecteur&nbsp;<span class="label label-default"> <?php echo $count;?></span></a>
				</li>
				
			 <?php	
	           $count_item=mysql_query("select * from stdevice 
			   LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
			   where dev_status = 'endommage' and dev_name = 'CPU' OR dev_status = 'Endommage' and dev_name = 'Cpu'
			   OR dev_status = 'ENDOMMAGE' and dev_name = 'cpu' OR dev_status = 'Endommage' and dev_name = 'Unite Central' 
			   ORDER BY stdevice.id DESC");
	           $count = mysql_num_rows($count_item);
               ?>
				<li class="">
				<a href="damage_cpu.php">CPU&nbsp;<span class="label label-default"> <?php echo $count;?></span></a>
				</li>
								
			 <?php	
	           $count_item=mysql_query("select * from stdevice 
			   LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
			   where dev_status = 'Endommage' and dev_name = 'Imprimante' OR dev_status = 'Endommage' and dev_name = 'IMPRIMANTE' 
			   OR dev_status = 'Endommage' and dev_name = 'imprimante' 
			   ORDER BY stdevice.id DESC");
	           $count = mysql_num_rows($count_item);
               ?>
				<li class="">
				<a href="damage_imprimante.php">Imprimante&nbsp;<span class="label label-default"> <?php echo $count;?></span></a>
				</li>
				
				<?php	
	           $count_item=mysql_query("select * from stdevice 
			   LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
			   where dev_status = 'Endommage' and dev_name = 'Ecran' OR dev_status = 'Endommage' and dev_name = 'ECRAN' OR dev_status = 'Endommage' and dev_name = 'endommage'
			   
			   ORDER BY stdevice.id DESC");
	           $count = mysql_num_rows($count_item);
               ?>
				<li class="">
				<a href="damage_ecran.php">Ecran&nbsp;<span class="label label-default"> <?php echo $count;?></span></a>
				</li>
				
				<?php	
	           $count_item=mysql_query("select * from stdevice 
			   LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
			   where dev_status = 'Endommage' and dev_name = 'Cable Alimentation' OR dev_status = 'Endommage' and dev_name = 'Cable_Alimentation' OR dev_status = 'Endommage' and dev_name = 'cable alimentation'
			 
			   ORDER BY stdevice.id DESC");
	           $count = mysql_num_rows($count_item);
               ?>
				<li class="">
				<a href="damage_power_cords.php">Cable Alimentation&nbsp;<span class="label label-default"> <?php echo $count;?></span></a>
				</li>
				
				<?php	
	           $count_item=mysql_query("select * from stdevice 
			   LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
			   where 
			   dev_status = 'Endommage'    and dev_name = 'Scanner'                          OR dev_status = 'Endommage'     and dev_name = 'SCANNER' 
			   
			   ORDER BY stdevice.id DESC");
	           $count = mysql_num_rows($count_item);
               ?>
				<li class="">
				<a href="damage_scanner.php">Scanner&nbsp;<span class="label label-default"> <?php echo $count;?></span></a>
				</li>
				
				</ul>
	</div>
</div>
</div>
															
 <div class="container-fluid">
   <div class="row-fluid"> 
   <div class="empty">
	   <div class="pull-right">
	     <a href="print_damage.php" class="btn btn-info" id="print" data-placement="left" title="Click to Print"><i class="icon-print icon-large"></i> Imprimer Liste</a> 	 
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
					<th class="empty"></th>
					<th>Equipement</th>
					<th> Description </th>
					<th>Num Serie</th>
			        <th>Marque </th>
					<th>Model  </th>
					<th>Status  </th>
					<th>Emplacement </th>
                    <th>Utilisateur </th>
								
                    					
		    </tr>
		</thead>
<tbody>
<!-----------------------------------Content------------------------------------>
<?php
		$device_query = mysql_query("select * from stdevice,location_details,stlocation,device_name	,fonctionnaire		
		                    WHERE  stdevice.id = location_details.id		
		                     AND location_details.stdev_id = stlocation.stdev_id
							AND stdevice.dev_id=device_name.dev_id
            				AND stdevice.fonct_id=fonctionnaire.fonct_id

							 AND dev_status = 'Endommage'  ORDER BY location_details.ld_id DESC")or die(mysql_error());
		while($row = mysql_fetch_array($device_query)){
		$id = $row['id'];
		$stdev_id = $row['stdev_id'];
		$dev_status = $row['dev_status'];
		?>
										
		<tr>
		<td class="empty">
			<i class="icon-remove-sign"></i>
		</td>
			<td><?php echo $row['dev_name']; ?></td>
			<td><?php echo html_entity_decode(trim($row['dev_desc'])); ?></td>
			<td><?php echo $row['dev_serial']; ?></td>
			<td><?php echo $row['dev_brand']; ?></td>
			<td><?php echo $row['dev_model']; ?></td>
			<td><?php
			   $device_query1 = mysql_query("select * from stdevice ")or die(mysql_error());
		       $dev=mysql_fetch_assoc($device_query1);
		       if($row['dev_status']=='Endommage')
		       {
			   echo '<div class="alert alert-danger"><i class="icon-remove-sign"></i><strong>'.$row['dev_status'].'</strong></div>';
		       }		       
		       else
			   {
			   echo '<div class="alert alert-warning"><i class="icon-wrench"></i> <strong>'.$row['dev_status'].'</strong></div>';
		       };
			  ?></td>
			  
			<td><?php echo $row['stdev_location_name']; ?></td>
            			<td><?php echo $row['firstname'].' '.$row['lastname']; ?></td>

			
			<?php include('modal_damage.php'); ?>
			<?php include('toolttip_edit_delete.php'); ?>
			<?php if ($dev_status == 'Repaired' ){ ?>
			<td><a class="btn btn-success">Repere</a></td>	
			<?php }else if ($dev_status == 'Endommage' ) { ?>
			
			<?php }else{ ?>			
			<?php } ?>
			
		</tr>											
	<?php } ?>   
<?php
		$device_query = mysql_query("select * from stdevice,location_details,stlocation,device_name	,resptech		
		                    WHERE  stdevice.id = location_details.id		
		                     AND location_details.stdev_id = stlocation.stdev_id
							AND stdevice.dev_id=device_name.dev_id
            				AND stdevice.respAdm_id=resptech.respAdm_id

							 AND dev_status = 'Endommage'  ORDER BY location_details.ld_id DESC")or die(mysql_error());
		while($row = mysql_fetch_array($device_query)){
		$id = $row['id'];
		$stdev_id = $row['stdev_id'];
		$dev_status = $row['dev_status'];
		?>
										
		<tr>
		<td class="empty">
			<i class="icon-remove-sign"></i>
		</td>
			<td><?php echo $row['dev_name']; ?></td>
			<td><?php echo html_entity_decode(trim($row['dev_desc'])); ?></td>
			<td><?php echo $row['dev_serial']; ?></td>
			<td><?php echo $row['dev_brand']; ?></td>
			<td><?php echo $row['dev_model']; ?></td>
			<td><?php
			   $device_query1 = mysql_query("select * from stdevice ")or die(mysql_error());
		       $dev=mysql_fetch_assoc($device_query1);
		       if($row['dev_status']=='Endommage')
		       {
			   echo '<div class="alert alert-danger"><i class="icon-remove-sign"></i><strong>'.$row['dev_status'].'</strong></div>';
		       }		       
		       else
			   {
			   echo '<div class="alert alert-warning"><i class="icon-wrench"></i> <strong>'.$row['dev_status'].'</strong></div>';
		       };
			  ?></td>
			  
			<td><?php echo $row['stdev_location_name']; ?></td>
            			<td><?php echo $row['firstname'].' '.$row['lastname']; ?></td>

			
			<?php include('modal_damage.php'); ?>
			<?php include('toolttip_edit_delete.php'); ?>
			<?php if ($dev_status == 'Repaired' ){ ?>
			<td><a class="btn btn-success">Repere</a></td>	
			<?php }else if ($dev_status == 'Endommage' ) { ?>
			
			<?php }else{ ?>			
			<?php } ?>
			
		</tr>											
	<?php } ?> 
    <?php
		$device_query = mysql_query("select * from stdevice,location_details,stlocation,device_name	,admin		
		                    WHERE  stdevice.id = location_details.id		
		                     AND location_details.stdev_id = stlocation.stdev_id
							AND stdevice.dev_id=device_name.dev_id
            				AND stdevice.admin_id=admin.admin_id

							 AND dev_status = 'Endommage'  ORDER BY location_details.ld_id DESC")or die(mysql_error());
		while($row = mysql_fetch_array($device_query)){
		$id = $row['id'];
		$stdev_id = $row['stdev_id'];
		$dev_status = $row['dev_status'];
		?>
										
		<tr>
		<td class="empty">
			<i class="icon-remove-sign"></i>
		</td>
			<td><?php echo $row['dev_name']; ?></td>
			<td><?php echo html_entity_decode(trim($row['dev_desc'])); ?></td>
			<td><?php echo $row['dev_serial']; ?></td>
			<td><?php echo $row['dev_brand']; ?></td>
			<td><?php echo $row['dev_model']; ?></td>
			<td><?php
			   $device_query1 = mysql_query("select * from stdevice ")or die(mysql_error());
		       $dev=mysql_fetch_assoc($device_query1);
		       if($row['dev_status']=='Endommage')
		       {
			   echo '<div class="alert alert-danger"><i class="icon-remove-sign"></i><strong>'.$row['dev_status'].'</strong></div>';
		       }		       
		       else
			   {
			   echo '<div class="alert alert-warning"><i class="icon-wrench"></i> <strong>'.$row['dev_status'].'</strong></div>';
		       };
			  ?></td>
			  
			<td><?php echo $row['stdev_location_name']; ?></td>
            			<td><?php echo $row['firstname'].' '.$row['lastname']; ?></td>

			
			<?php include('modal_damage.php'); ?>
			<?php include('toolttip_edit_delete.php'); ?>
			<?php if ($dev_status == 'Repaired' ){ ?>
			<td><a class="btn btn-success">Repere</a></td>	
			<?php }else if ($dev_status == 'Endommage' ) { ?>
			
			<?php }else{ ?>			
			<?php } ?>
			
		</tr>											
	<?php } ?> 
</tbody>
</table>
</form>		
		
			  		
</div>
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