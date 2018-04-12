<?php include('header_dashboard.php'); ?>
<?php include('session.php'); ?>
    <body id="home">
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('r_slidebar.php'); ?>
			
				<div class="span9" id="content">
                     <div class="row-fluid">					 
					 <h2 id="sc" align="center"><image src="../admin/images/sclogo.png" width="45%" height="45%"/></h2>
				<?php	
	             $count_item=mysql_query("select * from stdevice 
				 LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
				 where dev_status = 'Repare' and dev_name = 'Imprimante' OR dev_status = 'Repare' and dev_name = 'imprimante' 
			   
			     ORDER BY stdevice.id DESC ");
	             $count = mysql_num_rows($count_item);
                 ?>	 
				   <div id="block_bg" class="block">
                        <div class="navbar navbar-inner block-header">
                             <div class="muted pull-left"><i class="icon-remove-sign"></i>Liste Imprimante Repare (s)</div>
                          <div class="muted pull-right">
								Nombre Equipement (s): <span class="badge badge-info"><?php  echo $count; ?></span>
							 </div>
						  </div>
						  
				<h4 id="sc">List Imprimante Repare (s)
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
			   OR dev_name = 'clavier'  and dev_status = 'Repare' OR dev_name = 'kyboard'  and dev_status = 'damage' OR dev_name = 'kboard'  and dev_status = 'damage'
			   OR dev_name = 'kbard'  and dev_status = 'damage'  OR dev_name = 'kbord'  and dev_status = 'damage' OR dev_name = 'kbrd' and dev_status = 'damage'
			   OR dev_name = '(keyboard)'  and dev_status = 'damage' OR dev_name = '(kbrd)'  and dev_status = 'damage'
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
			   OR dev_status = 'damage'    and dev_name = 'mose'        OR dev_status = 'damage'  and dev_name = 'mse'         OR dev_status = 'damage' and dev_name = 'MOUSE' 
			   OR dev_status = 'damage'    and dev_name = '(Mouse)'
			   OR dev_status = 'damage'    and dev_name = 'Mouse/PS2'    OR dev_status = 'damage'  and dev_name = 'Mouse/USB'  OR dev_status = 'damage' and dev_name = 'Mouse(PS2)' 
			   OR dev_status = 'damage'    and dev_name = 'Mouse(USB)'   OR dev_status = 'damage'  and dev_name = 'Mouse-PS2'  OR dev_status = 'damage' and dev_name = 'Mouse-USB'  
			   OR dev_status = 'damage'    and dev_name = 'Mouse PS2'    OR dev_status = 'damage'  and dev_name = 'Mouse USB' 
			   ORDER BY stdevice.id DESC");
	           $count = mysql_num_rows($count_item);
               ?>
				<li class="">
				<a href="r_mouse.php">Souris&nbsp;<span class="label label-default"> <?php echo $count;?></span></a></a>
				</li>
				
			 <?php	
	           $count_item=mysql_query("select * from stdevice 
			   LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
			   where dev_status = 'Repare' and dev_name = 'Projecteur' OR dev_status = 'Repare' and dev_name = 'projecteur'
			   OR dev_status = 'Repare' and dev_name = 'PROJECETUR' OR dev_status = 'damage' and dev_name = 'monitr' OR dev_status = 'damage' and dev_name = 'mnitor'
			   OR dev_status = 'damage' and dev_name = 'mntr' OR dev_status = 'damage' and dev_name = 'MNTR' OR dev_status = 'damage' and dev_name = '(monitor)'
			   OR dev_status = 'damage' and dev_name = '(montor)'
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
			   OR dev_status = 'Repare' and dev_name = 'cpu' OR dev_status = 'Repare' and dev_name = 'Unite Central' OR dev_status = 'Repare' and dev_name = 'Unite_Central' OR dev_status = 'damage' and dev_name = 'c.p.u.'
			   OR dev_status = 'damage' and dev_name = 'cntral prcessing unit' OR dev_status = 'damage' and dev_name = 'centrl procesing unit' OR dev_status = 'damage' and dev_name = 'central processing nit'
			   OR dev_status = 'damage' and dev_name = 'cenRal processing unt' OR dev_status = 'damage' and dev_name = 'cetral processin unit' OR dev_status = 'damage' and dev_name = 'cetral_processin_unit'
			   OR dev_status = 'damage' and dev_name = 'centralprocessingunit' OR dev_status = 'damage' and dev_name = 'CENTRAL PROCESSING UNIT' OR dev_status = 'damage' and dev_name = '(CPU)' 
			   OR dev_status = 'damage' and dev_name = '(Central Processing unit (CPU))'
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
				<li class="active">
				<a href="r_imprimante.php">Imprimante&nbsp;<span class="label label-default"> <?php echo $count;?></span></a>
				</li>
				
				<?php	
	           $count_item=mysql_query("select * from stdevice 
			   LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
			   where dev_status = 'Repare' and dev_name = 'Ecran' OR dev_status = 'Repare' and dev_name = 'ecran' OR dev_status = 'Repare' and dev_name = 'ECRAN'
			   OR dev_status = 'damage' and dev_name = 'Video.Graphic.Accelerator' OR dev_status = 'damage' and dev_name = 'Video-Graphic-Accelerator' OR dev_status = 'damage' and dev_name = 'Video_Graphic_Accelerator'
			   OR dev_status = 'damage' and dev_name = 'VideoGraphicAccelerator' OR dev_status = 'damage' and dev_name = 'Video Graphic' OR dev_status = 'damage' and dev_name = 'Vedio Graphic Acelerator' OR dev_status = 'damage' and dev_name = 'VIDEO GRAPHIC ACCELATOR'
			   OR dev_status = 'damage' and dev_name = 'VIDEO+GRAPHIC+ACCELATOR' OR dev_status = 'damage' and dev_name = 'vido grphic' OR dev_status = 'damage' and dev_name = 'viDo gRphic Accelarator'
			   OR dev_status = 'New' and dev_name = 'vedeo graphic' OR dev_status = 'damage' and dev_name = 'video graphic accelerator'OR dev_status = 'damage' and dev_name = 'vedio graphic accelerator'
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
			   OR dev_status = 'damage' and dev_name = '(power cord)' OR dev_status = 'damage' and dev_name = 'power.cord' OR dev_status = 'damage' and dev_name = '(pwer crd)' OR dev_status = 'damage' and dev_name = 'powr coRd'
			   OR dev_status = 'damage' and dev_name = 'ower cord' OR dev_status = 'damage' and dev_name = 'power cordss' OR dev_status = 'damage' and dev_name = 'pwer crd' OR dev_status = 'damage' and dev_name = 'POWER CORD'
			   OR dev_status = 'damage' and dev_name = 'poer cd' OR dev_status = 'damage' and dev_name = 'powe cor'OR dev_status = 'damage' and dev_name = 'powercord'OR dev_status = 'damage' and dev_name = 'power-cord'
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
			OR dev_status = 'Repare'    and dev_name = 'SCANNERr'  OR dev_status = 'damage'     and dev_name = 'automatic Voltage Reactor' 
		    OR dev_status = 'damage'    and dev_name = 'automatic_Voltage_Regulator'  OR dev_status = 'damage'     and dev_name = 'automatic-Voltage-Regulator' 
			OR dev_status = 'damage'    and dev_name = 'avrs'                         OR dev_status = 'damage'     and dev_name = 'automatic v.r' 
			OR dev_status = 'damage'    and dev_name = 'automatic voltage R.'         OR dev_status = 'damage'     and dev_name = 'avregulator' 
			OR dev_status = 'damage'    and dev_name = 'automatic Voltage Reactor'    OR dev_status = 'damage'     and dev_name = 'automatic-Voltage-Reactor' 
			OR dev_status = 'damage'    and dev_name = 'automaticVoltageReactor'      OR dev_status = 'damage'     and dev_name = 'automaticVoltageRegulator'
			OR dev_status = 'damage'    and dev_name = 'automtic Voltge Reactor'      OR dev_status = 'damage'     and dev_name = 'automtic Voltge Regulator'
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
					
		    </tr>
		</thead>
<tbody>
<!-----------------------------------Content------------------------------------>
<?php
		$device_query = mysql_query("select * from stdevice			
		       LEFT JOIN location_details ON stdevice.id = location_details.id		
		       LEFT JOIN stlocation ON location_details.stdev_id = stlocation.stdev_id
			   LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
			   where dev_status = 'Repare' and dev_name = 'imprimante' OR dev_status = 'Repare' and dev_name = 'Imprimante' 
			   OR dev_status = 'Repare' and dev_name = 'IMPRIMANTE' 
		ORDER BY location_details.ld_id  DESC")or die(mysql_error());
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
			 echo '<div class="alert alert-warning"><i class="icon-wrench"></i><strong>'.$row['dev_status'].'</strong></div>';
		       }		       
		       else
			   {
			    echo '<div class="alert alert-warning"><i class="icon-wrench"></i><strong>'.$row['dev_status'].'</strong></div>';
		       };
			  ?></td>
			  
			<td><?php echo $row['stdev_location_name']; ?></td>
			
		
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