<?php include('header.php'); ?>
<?php include('session.php'); ?>
    <body id="home">
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('dashboard_slidebar.php'); ?>
			
				<div class="span9" id="content">
                     <div class="row-fluid">					 
					 <h2 id="sc" align="center"><image src="images/sclogo.png" width="45%" height="45%"/></h2>
				<?php	
	             $count_item=mysql_query("select * from stdevice 
				 LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
				 where 
			      dev_status = 'Repare'    and dev_name = 'Souris'       OR dev_status = 'Repare'  and dev_name = 'souris'       OR dev_status = 'Repare' and dev_name = 'SOURIS'

			   ORDER BY stdevice.id DESC");
	             $count = mysql_num_rows($count_item);
                 ?>	 
				   <div id="block_bg" class="block">
                        <div class="navbar navbar-inner block-header">
                             <div class="muted pull-left"><i class="icon-remove-sign"></i> Liste Souris Repare (s)</div>
                          <div class="muted pull-right">
								Nombre Equipement (s): <span class="badge badge-info"><?php  echo $count; ?></span>
							 </div>
						  </div>
						  
				<h4 id="sc">List Souris Repare (s) 
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
				<li class="">
					<a href="repare.php">Tous</a>
				</li>
				
			  <?php	
	           $count_item=mysql_query("select * from stdevice 
			   LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
			   where dev_name = 'Clavier' and dev_status = 'Repare' OR dev_name = 'CLAVIER'  and dev_status = 'Repare'
			   OR dev_name = 'clavier'  and dev_status = 'Repare' 
			   ORDER BY stdevice.id DESC");
	           $count = mysql_num_rows($count_item);
               ?>							
				<li class="">
					<a href="r_keyboard.php">Clavier&nbsp;<span class="label label-default"> <?php echo $count;?></span></a>
				</li>
				         				
			<?php	
	           $count_item=mysql_query("select * from stdevice 
			   LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
			   where 
			      dev_status = 'Repare'    and dev_name = 'Souris'       OR dev_status = 'Repare'  and dev_name = 'souris'       OR dev_status = 'Repare' and dev_name = 'SOURIS'
		
			   ORDER BY stdevice.id DESC");
	           $count = mysql_num_rows($count_item);
               ?>
				<li class="active">
				<a href="r_mouse.php">Souris&nbsp;<span class="label label-default"> <?php echo $count;?></span></a></a>
				</li>
				
			 <?php	
	           $count_item=mysql_query("select * from stdevice 
			   LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
			   where dev_status = 'Repare' and dev_name = 'Projecteur' OR dev_status = 'Repare' and dev_name = 'projecteur'
			   OR dev_status = 'Repare' and dev_name = 'PROJECETUR'
			   ORDER BY stdevice.id DESC");
	           $count = mysql_num_rows($count_item);
               ?>
				<li class="">
				<a href="r_projecteur.php">Projecteur&nbsp;<span class="label label-default"> <?php echo $count;?></span></a>
				</li>
				
			 <?php	
	           $count_item=mysql_query("select * from stdevice 
			   LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
			   where dev_status = 'Repare' and dev_name = 'CPU' OR dev_status = 'Repare' and dev_name = 'Cpu'
			   OR dev_status = 'Repare' and dev_name = 'cpu' OR dev_status = 'Repare' and dev_name = 'Unite Central' 
			   ORDER BY stdevice.id DESC");
	           $count = mysql_num_rows($count_item);
               ?>
				<li class="">
				<a href="r_cpu.php">CPU&nbsp;<span class="label label-default"> <?php echo $count;?></span></a>
				</li>
								
			 <?php	
	           $count_item=mysql_query("select * from stdevice 
			   LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
			   where dev_status = 'Repare' and dev_name = 'Imprimante' OR dev_status = 'Repare' and dev_name = 'IMPRIMANTE' 
			   OR dev_status = 'Repare' and dev_name = 'imprimante' 
			   ORDER BY stdevice.id DESC");
	           $count = mysql_num_rows($count_item);
               ?>
				<li class="">
				<a href="r_imprimante.php">Imprimante&nbsp;<span class="label label-default"> <?php echo $count;?></span></a>
				</li>
				
				<?php	
	           $count_item=mysql_query("select * from stdevice 
			   LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
			   where dev_status = 'Repare' and dev_name = 'Ecran' OR dev_status = 'Repare' and dev_name = 'ecran' OR dev_status = 'Repare' and dev_name = 'ECRAN'
			  
			   ORDER BY stdevice.id DESC");
	           $count = mysql_num_rows($count_item);
               ?>
				<li class="">
				<a href="r_ecran.php">Ecran&nbsp;<span class="label label-default"> <?php echo $count;?></span></a>
				</li>
				
				<?php	
	           $count_item=mysql_query("select * from stdevice 
			   LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
			   where dev_status = 'Repare' and dev_name = 'Cable Alimetation' OR dev_status = 'Repare' and dev_name = 'cable alimentation ' OR dev_status = 'Repare' and dev_name = 'Cable_Alimetation'
			
			   ORDER BY stdevice.id DESC");
	           $count = mysql_num_rows($count_item);
               ?>
				<li class="">
				<a href="r_power_cords.php">Cable Alimentation&nbsp;<span class="label label-default"> <?php echo $count;?></span></a>
				</li>
				
				<?php	
	           $count_item=mysql_query("select * from stdevice 
			   LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
			   where 
			   dev_status = 'Repare'    and dev_name = 'Scanner'                    OR dev_status = 'Repare'     and dev_name = 'scanner' 
			OR dev_status = 'Repare'    and dev_name = 'SCANNERr' 
			   ORDER BY stdevice.id DESC");
	           $count = mysql_num_rows($count_item);
               ?>
				<li class="">
				<a href="r_scanner.php">Scanner&nbsp;<span class="label label-default"> <?php echo $count;?></span></a>
				</li>
				
				</ul>
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
					<th>Description </th>
					<th>Num Serie</th>
			        <th>Marque  </th>
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

							 AND dev_status = 'Repare' and dev_name='Souris' ORDER BY location_details.ld_id DESC")or die(mysql_error());
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
			<td><?php echo $row['dev_desc']; ?></td>
			<td><?php echo $row['dev_serial']; ?></td>
			<td><?php echo $row['dev_brand']; ?></td>
			<td><?php echo $row['dev_model']; ?></td>
			<td><?php
			   $device_query1 = mysql_query("select * from stdevice ")or die(mysql_error());
		       $dev=mysql_fetch_assoc($device_query1);
		       if($row['dev_status']=='Repare')
		       {
 echo '<div class="alert alert-warning"><i class="icon-wrench"></i><strong>'.$row['dev_status'].'</strong></div>';		       }		       
		       else
			   {
 echo '<div class="alert alert-warning"><i class="icon-wrench"></i><strong>'.$row['dev_status'].'</strong></div>';		       };
			  ?></td>
			  
			<td><?php echo $row['stdev_location_name']; ?></td>
			        	<td><?php echo $row['firstname'].' '.$row['lastname']; ?></td>

		
		</tr>											
	<?php } ?>   
<?php
		$device_query = mysql_query("select * from stdevice,location_details,stlocation,device_name	,resptech		
		                    WHERE  stdevice.id = location_details.id		
		                     AND location_details.stdev_id = stlocation.stdev_id
							AND stdevice.dev_id=device_name.dev_id
            				AND stdevice.respAdm_id=resptech.respAdm_id

							 AND dev_status = 'Repare' and dev_name='Souris' ORDER BY location_details.ld_id DESC")or die(mysql_error());
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
			<td><?php echo $row['dev_desc']; ?></td>
			<td><?php echo $row['dev_serial']; ?></td>
			<td><?php echo $row['dev_brand']; ?></td>
			<td><?php echo $row['dev_model']; ?></td>
			<td><?php
			   $device_query1 = mysql_query("select * from stdevice ")or die(mysql_error());
		       $dev=mysql_fetch_assoc($device_query1);
		       if($row['dev_status']=='Repare')
		       {
 echo '<div class="alert alert-warning"><i class="icon-wrench"></i><strong>'.$row['dev_status'].'</strong></div>';		       }		       
		       else
			   {
 echo '<div class="alert alert-warning"><i class="icon-wrench"></i><strong>'.$row['dev_status'].'</strong></div>';		       };
			  ?></td>
			  
			<td><?php echo $row['stdev_location_name']; ?></td>
			        	<td><?php echo $row['firstname'].' '.$row['lastname']; ?></td>

		
		</tr>											
	<?php } ?>
    <?php
		$device_query = mysql_query("select * from stdevice,location_details,stlocation,device_name	,admin		
		                    WHERE  stdevice.id = location_details.id		
		                     AND location_details.stdev_id = stlocation.stdev_id
							AND stdevice.dev_id=device_name.dev_id
            				AND stdevice.admin_id=admin.admin_id

							 AND dev_status = 'Repare' and dev_name='Souris' ORDER BY location_details.ld_id DESC")or die(mysql_error());
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
			<td><?php echo $row['dev_desc']; ?></td>
			<td><?php echo $row['dev_serial']; ?></td>
			<td><?php echo $row['dev_brand']; ?></td>
			<td><?php echo $row['dev_model']; ?></td>
			<td><?php
			   $device_query1 = mysql_query("select * from stdevice ")or die(mysql_error());
		       $dev=mysql_fetch_assoc($device_query1);
		       if($row['dev_status']=='Repare')
		       {
 echo '<div class="alert alert-warning"><i class="icon-wrench"></i><strong>'.$row['dev_status'].'</strong></div>';		       }		       
		       else
			   {
 echo '<div class="alert alert-warning"><i class="icon-wrench"></i><strong>'.$row['dev_status'].'</strong></div>';		       };
			  ?></td>
			  
			<td><?php echo $row['stdev_location_name']; ?></td>
			        	<td><?php echo $row['firstname'].' '.$row['lastname']; ?></td>

		
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

	
<?php include('footer.php'); ?>
</div>
<?php include('script.php'); ?>
 </body>
</html>