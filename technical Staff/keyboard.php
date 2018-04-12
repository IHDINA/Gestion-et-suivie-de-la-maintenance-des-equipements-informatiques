<?php include('header_dashboard.php'); ?>
<?php include('session.php'); ?>
     <body id="home">
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('Device_sidebar.php'); ?>
			
				<div class="span9" id="content">
                     <div class="row-fluid">
					 
					 <h2 id="sc" align="center"><image src="../admin/images/sclogo.png" width="45%" height="45%"/></h2>
				<?php	
	             $count_item=mysql_query("select * from stdevice 
				 LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
				 where dev_name = 'CLAVIER' OR dev_name = 'Clavier' OR dev_name = 'clavier'  
				 OR dev_name = 'kyboard' OR dev_name = 'kboard' OR dev_name = 'kbard' OR dev_name = 'kbord'OR dev_name = 'kbrd' OR dev_name = '(keyboard)'
				 OR dev_name = '(kbrd)'
				 ORDER BY stdevice.id DESC ");
	             $count = mysql_num_rows($count_item);
                 ?>	
				   <div id="block_bg" class="block">
                        <div class="navbar navbar-inner block-header">
                             <div class="muted pull-left"><i class="icon-reorder icon-large"></i> Liste des Clavier</div>
							 <div class="muted pull-right">
								Nombre de Clavier (s): <span class="badge badge-info"><?php  echo $count; ?></span>
							 </div>
                          </div>
						  
				<h4 id="sc"> Clavier (s) Liste 
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
					<a href="device_stocks.php">Tous</a>
				</li>
					
			  <?php	
	           $count_item=mysql_query("select * from stdevice 
			   LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
			   where dev_name = 'CLAVIER' OR dev_name = 'Clavier' OR dev_name = 'clavier'
			   OR dev_name = 'kyboard' OR dev_name = 'kboard' OR dev_name = 'kbard' OR dev_name = 'kbord'OR dev_name = 'kbrd' OR dev_name = '(keyboard)'
			   OR dev_name = '(kbrd)'
			   ORDER BY stdevice.id DESC");
	           $count = mysql_num_rows($count_item);
               ?>					
				<li class="active">
					<a href="Keyboard.php">Clavier&nbsp;<span class="label label-default"> <?php echo $count;?></span></a>
				</li>
				
				<?php	
	           $count_item=mysql_query("select * from stdevice 
			   LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
			   where dev_name = 'Souris' OR dev_name = 'souris'
               OR dev_name = 'SOURIS' OR dev_name = 'mose'OR dev_name = 'mse' OR dev_name = 'MOUSE' OR dev_name = '(Mouse)'
			   OR dev_name = 'Mouse/PS2' OR dev_name = 'Mouse/USB' OR dev_name = 'Mouse(PS2)' OR dev_name = 'Mouse(USB)' 
			   OR dev_name = 'Mouse-PS2' OR dev_name = 'Mouse-USB' OR dev_name = 'Mouse PS2' OR dev_name = 'Mouse USB' 
			   ORDER BY stdevice.id DESC");
	           $count = mysql_num_rows($count_item);
               ?>
				<li class="">
				<a href="Mouse.php">Souris&nbsp;<span class="label label-default"> <?php echo $count;?></span></a></a>
				</li>
				
			   <?php	
	           $count_item=mysql_query("select * from stdevice 
			   LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
			   where dev_name = 'Projecteur' OR dev_name = 'PROJECTEUR'
               OR dev_name = 'projecteur' OR dev_name = 'monitr' OR dev_name = 'mnitor' OR dev_name = 'mntr' OR dev_name = 'MNTR'
			   OR dev_name = '(monitor)' OR dev_name = '(montor)'
			   ORDER BY stdevice.id DESC");
	           $count = mysql_num_rows($count_item);
               ?>
				<li class="">
				<a href="projector.php">Projecteur&nbsp;<span class="label label-default"> <?php echo $count;?></span></a></a></a>
				</li>
				
			 <?php	
	           $count_item=mysql_query("select * from stdevice 
			   LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
			   where dev_name = 'CPU' OR dev_name = 'central processing unit' OR dev_name = 'cpu'
			   OR dev_name = 'Cpu' OR dev_name = 'Unite Central' OR dev_name = 'unite central' OR dev_name = 'c.p.u.'   OR dev_name = 'cntral prcessing unit' OR dev_name = 'centrl procesing unit' OR dev_name = 'central processing nit'
			   OR dev_name = 'cenRal processing unt' OR dev_name = 'cetral processin unit' OR dev_name = 'cetral_processin_unit' OR dev_name = 'centralprocessingunit' OR dev_name = 'CENTRAL PROCESSING UNIT'
			   OR dev_name = '(CPU)' OR dev_name = '(Central Processing unit (CPU))'
			   ORDER BY stdevice.id DESC");
	           $count = mysql_num_rows($count_item);
               ?>
				<li class="">
				<a href="cpu.php">CPU&nbsp;<span class="label label-default"> <?php echo $count;?></span></a>
				</li>
				
			 <?php	
	           $count_item=mysql_query("select * from stdevice 
			   LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
			   where  dev_name = 'Imprimante' OR dev_name = 'IMPRIMANTE'
			   OR dev_name = 'imprimante'  OR dev_name = 'power spply' OR dev_name = 'pwer suply' OR dev_name = 'poer Suply'
			   OR dev_name = 'powersupply' OR dev_name = 'power_supply' OR dev_name = 'power.supply' OR dev_name = 'pwer.spply'
			   OR dev_name = '(power supply)' OR dev_name = '(powersupply)' OR dev_name = '(power_supply)' OR dev_name = '(power-supply)'
			   OR dev_name = 'POWER SUPPLY'
			   ORDER BY stdevice.id DESC");
	           $count = mysql_num_rows($count_item);
               ?>
				<li class="">
				<a href="imprimante.php">Imprimante&nbsp;<span class="label label-default"> <?php echo $count;?></span></a>
				</li>
				
				<?php	
	           $count_item=mysql_query("select * from stdevice 
			   LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
			   where dev_name = 'ECRAN' OR dev_name = 'Ecran'
			   OR dev_name = 'ecran'
			   OR dev_name = 'VideoGraphicAccelerator' OR dev_name = 'Video Graphic' OR dev_name = 'Vedio Graphic Acelerator' OR dev_name = 'VIDEO GRAPHIC ACCELATOR'
			   OR dev_name = 'VIDEO+GRAPHIC+ACCELATOR' OR dev_name = 'vido grphic' OR dev_name = 'viDo gRphic Accelarator' OR dev_name = 'video graphic accelarator' 
			   OR dev_name = 'vedeo graphic' OR dev_name = 'video graphic accelerator' OR dev_name = 'videographicaccelerator' OR dev_name = 'vedio graphic accelerator'
			   ORDER BY stdevice.id DESC");
	           $count = mysql_num_rows($count_item);
               ?>
				<li class="">
				<a href="ecran.php">Ecran&nbsp;<span class="label label-default"> <?php echo $count;?></span></a>
				</li>
				
				<?php	
	           $count_item=mysql_query("select * from stdevice 
			   LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
			   where dev_name = 'Cable Alimentation' OR dev_name = 'cable alimentation'
			   OR dev_name = 'CABLE ALIMENTATION' OR dev_name = 'Cable_Alimentation' OR dev_name = 'power.cord' OR dev_name = '(pwer crd)'
			   OR dev_name = 'powr coRd' OR dev_name = 'ower cord' OR dev_name = 'power cordss' OR dev_name = 'pwer crd'
			   OR dev_name = 'POWER CORD' OR dev_name = 'poer cd' OR dev_name = 'powe cor' OR dev_name = 'powercord'
			   OR dev_name = 'powe cor'  OR dev_name = 'power-cord'
			   ORDER BY stdevice.id DESC");
	           $count = mysql_num_rows($count_item);
               ?>
				<li class="">
				<a href="power_cords.php">Cable Aliementation&nbsp;<span class="label label-default"> <?php echo $count;?></span></a>
				</li>
				
				<?php	
	           $count_item=mysql_query("select * from stdevice 
			   LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
			   where dev_name = 'scanner' OR dev_name = 'Scanner'
			   OR dev_name = 'SCANNER' OR dev_name = 'automatic Voltage Reactor' OR dev_name = 'automatic_Voltage_Regulator' OR dev_name = 'automatic-Voltage-Regulator'
			   OR dev_name = 'avrs' OR dev_name = 'automatic v.r' OR dev_name = 'automatic voltage R.' OR dev_name = 'avregulator'
			   OR dev_name = 'automatic Voltage Reactor' OR dev_name = 'automatic-Voltage-Reactor' OR dev_name = 'automaticVoltageReactor'  OR dev_name = 'automaticVoltageRegulator'
			   OR dev_name = 'automtic Voltge Reactor'  OR dev_name = 'automtic Voltge Regulator'
		       ORDER BY stdevice.id DESC");
	           $count = mysql_num_rows($count_item);
               ?>
				<li class="">
				<a href="scanner.php">Scanner&nbsp;<span class="label label-default"> <?php echo $count;?></span></a>
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
					<th>Equipment</th>
					<th> Description </th>
					<th>Num Serie</th>
			        <th>Marque </th>
					<th>Model  </th>
					<th> Status  </th>
                <th class="empty"></th>					
		    </tr>
		</thead>
<tbody>
<!-----------------------------------Content------------------------------------>
	
		<?php
	    $device_query = mysql_query("select * from stdevice 
		LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
		where dev_name = 'CLAVIER' OR dev_name = 'clavier'
		OR dev_name = 'Clavier' OR dev_name = 'kboard' OR dev_name = 'kbard' OR dev_name = 'kbord'OR dev_name = 'kbrd'
		OR dev_name = '(keyboard)' OR dev_name = '(kbrd)'
		ORDER BY stdevice.id DESC") or die(mysql_error());
	    while ($row = mysql_fetch_array($device_query)) {
		$id = $row['id'];
		$dev_id = $row['dev_id'];
		?>
										
		<tr>
		<td><?php
			   $device_query2 = mysql_query("select * from stdevice ")or die(mysql_error());
		       $dev=mysql_fetch_assoc($device_query2);
		       if($row['dev_status']=='NOUVEAU')
		       {
			   echo '<i class="icon-check"></i><div id="hide"><strong>'.$row['dev_status'].'</strong></div>';
		       }
		       else if($row['dev_status']=='Utilise')
			   {
			   echo '<i class="icon-ok"></i><div id="hide"><strong>'.$row['dev_status'].'</strong></div>';
		       }
			   else if($row['dev_status']=='Repaired')
			   {
			   echo '<i class="icon-wrench"></i><div id="hide"><strong>'.$row['dev_status'].'</strong></div>';
		       }
		       else
			   {
			   echo '<i class="icon-remove-sign"></i><div id="hide"><strong>'.$row['dev_status'].'</strong></div>';
		       };
			  ?>
		</td>
			<td><?php echo $row['dev_name']; ?></td>
			<td><?php echo html_entity_decode(trim($row['dev_desc'])); ?></td>
			<td><?php echo $row['dev_serial']; ?></td>
			<td><?php echo $row['dev_brand']; ?></td>
			<td><?php echo $row['dev_model']; ?></td>
			<td><?php
			   $device_query1 = mysql_query("select * from stdevice ")or die(mysql_error());
		       $dev=mysql_fetch_assoc($device_query1);
		       if($row['dev_status']=='NOUVEAU')
		       {
			   echo '<div class="alert alert-success"><i class="icon-check"></i><strong>'.$row['dev_status'].'</strong></div>';
		       }
		       else if($row['dev_status']=='Utilise')
			   {
			   echo '<div class="alert alert-warning"><i class="icon-ok"></i><strong>'.$row['dev_status'].'</strong></div>';
		       }
			   else if($row['dev_status']=='Repare')
			   {
			   echo '<div class="alert alert-warning"><i class="icon-wrench"></i><strong>'.$row['dev_status'].'</strong></div>';
		       }
		       else
			   {
			   echo '<div class="alert alert-danger"><i class="icon-remove-sign"></i><strong>'.$row['dev_status'].'</strong></div>';
		       };
			  ?></td>
												
			
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