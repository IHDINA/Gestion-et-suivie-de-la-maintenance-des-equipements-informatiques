<?php include('header_dashboard.php'); ?>
<?php include('session.php'); ?>
    <body id="home">
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('newdevice_slidebar.php'); ?>
			    
				  <div class="span9" id="content">
                     <div class="row-fluid">
					            				  
					  <h2 id="sc" align="center"><image src="../admin/images/sclogo.png" width="45%" height="45%"/></h2>
				<?php	
	             $count_item=mysql_query("select * from stdevice 
				 LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
				 where NOT EXISTS 
	             (select * from location_details where stdevice.id = location_details.id)	   
	             and dev_status = 'NOUVEAU' and dev_name = 'PROJCTEUR'
		         OR NOT EXISTS 
	             (select * from location_details where stdevice.id = location_details.id)
		         and dev_status = 'NOUVEAU' and dev_name = 'projecteur'
		         OR NOT EXISTS 
	             (select * from location_details where stdevice.id = location_details.id)
		         and dev_status = 'NOUVEAU' and dev_name = 'Projecteur'
		         OR NOT EXISTS 
	             (select * from location_details where stdevice.id = location_details.id)
		         and dev_status = 'New' and dev_name = 'mnitor'
		         OR NOT EXISTS 
	             (select * from location_details where stdevice.id = location_details.id)
		         and dev_status = 'New' and dev_name = 'mntr'
		         OR NOT EXISTS 
	             (select * from location_details where stdevice.id = location_details.id)
		         and dev_status = 'New' and dev_name = 'MNTR'
		         OR NOT EXISTS 
	             (select * from location_details where stdevice.id = location_details.id)
		         and dev_status = 'New' and dev_name = '(monitor)'
		         OR NOT EXISTS 
	             (select * from location_details where stdevice.id = location_details.id)
		         and dev_status = 'New' and dev_name = '(montor)'
				 ORDER BY stdevice.id DESC ");
	             $count = mysql_num_rows($count_item);
                 ?>	  
					 
				   <div id="block_bg" class="block">
                        <div class="navbar navbar-inner block-header">
                             <div class="muted pull-left"><i class="icon-check"></i>&nbsp;List Projecteur (s)</div>
							 <div class="muted pull-right">
								Nombre Projecteur (s): <span class="badge badge-info"><?php  echo $count; ?></span>
							 </div>
                          </div>
						  
				<h4 id="sc">List Projecteur (s)
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
					<a href="newdevice.php">Tous</a>
				</li>
				
			  <?php	
	           $count_item=mysql_query("select * from stdevice 
			   LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
			   where NOT EXISTS 
	           (select * from location_details where stdevice.id = location_details.id)	   
	           and dev_status = 'NOUVEAU' and dev_name = 'CLAVIER'
		
		        OR NOT EXISTS 
	            (select * from location_details where stdevice.id = location_details.id)
		        and dev_status = 'NOUVEAU' and dev_name = 'clavier'
		        OR NOT EXISTS 
	            (select * from location_details where stdevice.id = location_details.id)
		        and dev_status = 'NOUVEAU' and dev_name = 'Clavier'
		        OR NOT EXISTS 
	            (select * from location_details where stdevice.id = location_details.id)
		        and dev_status = 'New' and dev_name = 'kbard'
		        OR NOT EXISTS 
	            (select * from location_details where stdevice.id = location_details.id)
		        and dev_status = 'New' and dev_name = 'kbord'
		        OR NOT EXISTS 
	            (select * from location_details where stdevice.id = location_details.id)
		        and dev_status = 'New' and dev_name = 'kbrd'
		        OR NOT EXISTS 
	            (select * from location_details where stdevice.id = location_details.id)
		        and dev_status = 'New' and dev_name = '(keyboard)'
		        OR NOT EXISTS 
	            (select * from location_details where stdevice.id = location_details.id)
		        and dev_status = 'New' and dev_name = '(kbrd)'
			   ORDER BY stdevice.id DESC");
	           $count = mysql_num_rows($count_item);
               ?>					
				<li class="">
					<a href="newKeyboard.php">Clavier&nbsp;<span class="label label-default"> <?php echo $count;?></span></a>
				</li>
				         				
			<?php	
	           $count_item=mysql_query("select * from stdevice 
			   LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
			   where NOT EXISTS 
	          (select * from location_details where stdevice.id = location_details.id)	   
	          and dev_status = 'NOUVEAU' and dev_name = 'Souris'
		
		      OR NOT EXISTS 
	          (select * from location_details where stdevice.id = location_details.id)
		      and dev_status = 'NOUVEAU' and dev_name = 'souris'		       
		      OR NOT EXISTS 
	          (select * from location_details where stdevice.id = location_details.id)
		      and dev_status = 'NOUVEAU' and dev_name = 'SOURIS'
		      OR NOT EXISTS 
	          (select * from location_details where stdevice.id = location_details.id)
		      and dev_status = 'New' and dev_name = '(Mouse)'
		      OR NOT EXISTS 
	         (select * from location_details where stdevice.id = location_details.id)
		      and dev_status = 'New' and dev_name = 'Mouse/PS2'
		      OR NOT EXISTS 
	         (select * from location_details where stdevice.id = location_details.id)
		      and dev_status = 'New' and dev_name = 'Mouse/USB'
		      OR NOT EXISTS 
	         (select * from location_details where stdevice.id = location_details.id)
		      and dev_status = 'New' and dev_name = 'Mouse(PS2)'
		      OR NOT EXISTS 
	          (select * from location_details where stdevice.id = location_details.id)
		      and dev_status = 'New' and dev_name = 'Mouse(USB)'
		      OR NOT EXISTS 
	          (select * from location_details where stdevice.id = location_details.id)
		      and dev_status = 'New' and dev_name = 'Mouse-PS2'
		      OR NOT EXISTS 
	          (select * from location_details where stdevice.id = location_details.id)
		      and dev_status = 'New' and dev_name = 'Mouse-USB'
		      OR NOT EXISTS 
	          (select * from location_details where stdevice.id = location_details.id)
		      and dev_status = 'New' and dev_name = 'Mouse PS2'
		      OR NOT EXISTS 
	         (select * from location_details where stdevice.id = location_details.id)
		      and dev_status = 'New' and dev_name = 'Mouse USB' 
			   ORDER BY stdevice.id DESC");
	           $count = mysql_num_rows($count_item);
               ?>
				<li class="">
				<a href="newmouse.php">Souris&nbsp;<span class="label label-default"> <?php echo $count;?></span></a></a>
				</li>
				
			 <?php	
	           $count_item=mysql_query("select * from stdevice 
			   LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
			   where NOT EXISTS 
	             (select * from location_details where stdevice.id = location_details.id)	   
	             and dev_status = 'NOUVEAU' and dev_name = 'PROJECTEUR'
		         OR NOT EXISTS 
	             (select * from location_details where stdevice.id = location_details.id)
		         and dev_status = 'NOUVEAU' and dev_name = 'projecteur'
		         OR NOT EXISTS 
	             (select * from location_details where stdevice.id = location_details.id)
		         and dev_status = 'NOUVEAU' and dev_name = 'Projecteur'
		         OR NOT EXISTS 
	             (select * from location_details where stdevice.id = location_details.id)
		         and dev_status = 'New' and dev_name = 'mnitor'
		         OR NOT EXISTS 
	             (select * from location_details where stdevice.id = location_details.id)
		         and dev_status = 'New' and dev_name = 'mntr'
		         OR NOT EXISTS 
	             (select * from location_details where stdevice.id = location_details.id)
		         and dev_status = 'New' and dev_name = 'MNTR'
		         OR NOT EXISTS 
	             (select * from location_details where stdevice.id = location_details.id)
		         and dev_status = 'New' and dev_name = '(monitor)'
		         OR NOT EXISTS 
	             (select * from location_details where stdevice.id = location_details.id)
		         and dev_status = 'New' and dev_name = '(montor)'
			   ORDER BY stdevice.id DESC");
	           $count = mysql_num_rows($count_item);
               ?>
				<li class="active">
				<a href="newprojector.php">Projecteur&nbsp;<span class="label label-default"> <?php echo $count;?></span></a>
				</li>
				
				<?php	
	           $count_item=mysql_query("select * from stdevice 
			   LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
			   where NOT EXISTS 
	             (select * from location_details where stdevice.id = location_details.id)	   
	             and dev_status = 'NOUVEAU' and dev_name = 'Central Processing unit '
		         OR NOT EXISTS 
	            (select * from location_details where stdevice.id = location_details.id)
		         and dev_status = 'NOUVEAU' and dev_name = 'central processing unit'
		         OR NOT EXISTS 
	            (select * from location_details where stdevice.id = location_details.id)
		         and dev_status = 'NOUVEAU' and dev_name = 'CPU'
		         OR NOT EXISTS 
	            (select * from location_details where stdevice.id = location_details.id)
		         and dev_status = 'NOUVEAU' and dev_name = 'cpu'
		         OR NOT EXISTS 
	            (select * from location_details where stdevice.id = location_details.id)
		         and dev_status = 'NOUVEAU' and dev_name = 'Cpu'
		        OR NOT EXISTS 
	           (select * from location_details where stdevice.id = location_details.id)
		        and dev_status = 'NOUVEAU' and dev_name = 'unite central.'
		        OR NOT EXISTS 
	            (select * from location_details where stdevice.id = location_details.id)
		        and dev_status = 'NOUVEAU' and dev_name = 'Unite Central'
		        OR NOT EXISTS 
	            (select * from location_details where stdevice.id = location_details.id)
		        and dev_status = 'New' and dev_name = 'centrl procesing unit'
		        OR NOT EXISTS 
	           (select * from location_details where stdevice.id = location_details.id)
		       and dev_status = 'New' and dev_name = 'central processing nit'
		       OR NOT EXISTS 
	           (select * from location_details where stdevice.id = location_details.id)
		       and dev_status = 'New' and dev_name = 'cenRal processing unt'
		       OR NOT EXISTS 
	           (select * from location_details where stdevice.id = location_details.id)
		       and dev_status = 'New' and dev_name = 'cetral processin unit'
		       OR NOT EXISTS 
	           (select * from location_details where stdevice.id = location_details.id)
		       and dev_status = 'New' and dev_name = 'cetral_processin_unit'
		       OR NOT EXISTS 
	           (select * from location_details where stdevice.id = location_details.id)
		       and dev_status = 'New' and dev_name = 'centralprocessingunit'
		       OR NOT EXISTS 
	          (select * from location_details where stdevice.id = location_details.id)
		       and dev_status = 'New' and dev_name = 'CENTRAL PROCESSING UNIT'
		       OR NOT EXISTS 
	           (select * from location_details where stdevice.id = location_details.id)
		       and dev_status = 'New' and dev_name = '(CPU)'
		       OR NOT EXISTS 
	           (select * from location_details where stdevice.id = location_details.id)
		       and dev_status = 'New' and dev_name = '(Central Processing unit (CPU))'
			   ORDER BY stdevice.id DESC");
	           $count = mysql_num_rows($count_item);
               ?>
				<li class="">
				<a href="newcpu.php">CPU&nbsp;<span class="label label-default"> <?php echo $count;?></span></a>
				</li>
								
			  <?php	
	           $count_item=mysql_query("select * from stdevice 
			   LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
			   where NOT EXISTS 
	          (select * from location_details where stdevice.id = location_details.id)	   
	           and dev_status = 'New' and dev_name = 'Power supply'
		      OR NOT EXISTS 
	          (select * from location_details where stdevice.id = location_details.id)
		      and dev_status = 'New' and dev_name = 'power supply'
		      OR NOT EXISTS 
	          (select * from location_details where stdevice.id = location_details.id)
		      and dev_status = 'New' and dev_name = 'pwer supply'
		      OR NOT EXISTS 
	         (select * from location_details where stdevice.id = location_details.id)	   
	           and dev_status = 'NOUVEAU' and dev_name = 'imprimante'
		      OR NOT EXISTS 
	          (select * from location_details where stdevice.id = location_details.id)
		      and dev_status = 'NOUVEAU' and dev_name = 'Imprimante'
		      OR NOT EXISTS 
	          (select * from location_details where stdevice.id = location_details.id)
		      and dev_status = 'NOUVEAU' and dev_name = 'IMPRIMANTE'
		       OR NOT EXISTS 
	          (select * from location_details where stdevice.id = location_details.id)
		      and dev_status = 'New' and dev_name = 'powersupply'
		      OR NOT EXISTS 
	          (select * from location_details where stdevice.id = location_details.id)
		      and dev_status = 'New' and dev_name = 'power_supply'
		       OR NOT EXISTS 
	           (select * from location_details where stdevice.id = location_details.id)
		       and dev_status = 'New' and dev_name = 'power.supply'
		       OR NOT EXISTS 
	           (select * from location_details where stdevice.id = location_details.id)
		       and dev_status = 'New' and dev_name = 'pwer.spply'
		       OR NOT EXISTS 
	          (select * from location_details where stdevice.id = location_details.id)
		       and dev_status = 'New' and dev_name = '(power supply)'
		       OR NOT EXISTS 
	          (select * from location_details where stdevice.id = location_details.id)
		       and dev_status = 'New' and dev_name = '(powersupply)'
		       OR NOT EXISTS 
	           (select * from location_details where stdevice.id = location_details.id)
		       and dev_status = 'New' and dev_name = '(power_supply)'
		       OR NOT EXISTS 
	           (select * from location_details where stdevice.id = location_details.id)
		        and dev_status = 'New' and dev_name = '(power-supply)'
		        OR NOT EXISTS 
	            (select * from location_details where stdevice.id = location_details.id)
		        and dev_status = 'New' and dev_name = 'POWER SUPPLY'
			   ORDER BY stdevice.id DESC");
	           $count = mysql_num_rows($count_item);
               ?>
				<li class="">
				<a href="newimprimante.php">Imprimante&nbsp;<span class="label label-default"> <?php echo $count;?></span></a>
				</li>
				
				<?php	
	           $count_item=mysql_query("select * from stdevice 
			   LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
			   where NOT EXISTS 
	           (select * from location_details where stdevice.id = location_details.id)	   
	           and dev_status = 'NOUVEAU' and dev_name = 'Ecran'
		       OR NOT EXISTS 
	           (select * from location_details where stdevice.id = location_details.id)
		       and dev_status = 'NOUVEAU' and dev_name = 'ecran'
		       OR NOT EXISTS 
	           (select * from location_details where stdevice.id = location_details.id)
		       and dev_status = 'NOUVEAU' and dev_name = 'ECRAN'
		       OR NOT EXISTS 
	          (select * from location_details where stdevice.id = location_details.id)
		       and dev_status = 'New' and dev_name = 'Video.Graphic.Accelerator'
		      OR NOT EXISTS 
	          (select * from location_details where stdevice.id = location_details.id)
		       and dev_status = 'New' and dev_name = 'Video-Graphic-Accelerator'
		      OR NOT EXISTS 
	          (select * from location_details where stdevice.id = location_details.id)
		       and dev_status = 'New' and dev_name = 'Video_Graphic_Accelerator'
		       OR NOT EXISTS 
	          (select * from location_details where stdevice.id = location_details.id)
		       and dev_status = 'New' and dev_name = 'VideoGraphicAccelerator'
		       OR NOT EXISTS 
	           (select * from location_details where stdevice.id = location_details.id)
		       and dev_status = 'New' and dev_name = 'Video Graphic'
		       OR NOT EXISTS 
	          (select * from location_details where stdevice.id = location_details.id)
		       and dev_status = 'New' and dev_name = 'Vedio Graphic Acelerator'
		       OR NOT EXISTS 
	          (select * from location_details where stdevice.id = location_details.id)
		       and dev_status = 'New' and dev_name = 'VIDEO GRAPHIC ACCELATOR'
		       OR NOT EXISTS 
	          (select * from location_details where stdevice.id = location_details.id)
		      and dev_status = 'New' and dev_name = 'VIDEO+GRAPHIC+ACCELATOR'
		      OR NOT EXISTS 
	          (select * from location_details where stdevice.id = location_details.id)
		      and dev_status = 'New' and dev_name = 'vido grphic'
		      OR NOT EXISTS 
	          (select * from location_details where stdevice.id = location_details.id)
		      and dev_status = 'New' and dev_name = 'viDo gRphic Accelarator'
		      OR NOT EXISTS 
	          (select * from location_details where stdevice.id = location_details.id)
		      and dev_status = 'New' and dev_name = 'vedeo graphic'
		      OR NOT EXISTS 
	          (select * from location_details where stdevice.id = location_details.id)
		      and dev_status = 'New' and dev_name = 'video graphic accelerator'
		      OR NOT EXISTS 
	          (select * from location_details where stdevice.id = location_details.id)
		      and dev_status = 'New' and dev_name = 'vedio graphic accelerator'
			   ORDER BY stdevice.id DESC");
	           $count = mysql_num_rows($count_item);
               ?>
				<li class="">
				<a href="newecran.php">Ecran&nbsp;<span class="label label-default"> <?php echo $count;?></span></a>
				</li>
				
				<?php	
	           $count_item=mysql_query("select * from stdevice 
			   LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
			   where NOT EXISTS 
	             (select * from location_details where stdevice.id = location_details.id)	   
	             and dev_status = 'NOUVEAU' and dev_name = 'CABLE ALIMENTATION'
		         OR NOT EXISTS 
	            (select * from location_details where stdevice.id = location_details.id)
		        and dev_status = 'NOUVEAU' and dev_name = 'cable alimentation'
		        OR NOT EXISTS 
	            (select * from location_details where stdevice.id = location_details.id)
		        and dev_status = 'NOUVEAU' and dev_name = 'Cable Alimentaion'
		        OR NOT EXISTS 
	           (select * from location_details where stdevice.id = location_details.id)
		        and dev_status = 'NOUVEAU' and dev_name = 'Cable_Alimentation'
		        OR NOT EXISTS 
	            (select * from location_details where stdevice.id = location_details.id)
		        and dev_status = 'New' and dev_name = 'power.cord'
		        OR NOT EXISTS 
	            (select * from location_details where stdevice.id = location_details.id)
		        and dev_status = 'New' and dev_name = '(pwer crd)'
		        OR NOT EXISTS 
	            (select * from location_details where stdevice.id = location_details.id)
		        and dev_status = 'New' and dev_name = 'powr coRd'
		        OR NOT EXISTS 
	            (select * from location_details where stdevice.id = location_details.id)
		        and dev_status = 'New' and dev_name = 'ower cord'
		        OR NOT EXISTS 
	            (select * from location_details where stdevice.id = location_details.id)
		        and dev_status = 'New' and dev_name = 'power cordss'
		        OR NOT EXISTS 
	           (select * from location_details where stdevice.id = location_details.id)
		        and dev_status = 'New' and dev_name = 'pwer crd'
		        OR NOT EXISTS 
	           (select * from location_details where stdevice.id = location_details.id)
		        and dev_status = 'New' and dev_name = 'POWER CORD'
		        OR NOT EXISTS 
	            (select * from location_details where stdevice.id = location_details.id)
		        and dev_status = 'New' and dev_name = 'poer cd'
		        OR NOT EXISTS 
	            (select * from location_details where stdevice.id = location_details.id)
		        and dev_status = 'New' and dev_name = 'powe cor'
		        OR NOT EXISTS 
	            (select * from location_details where stdevice.id = location_details.id)
		        and dev_status = 'New' and dev_name = 'powercord'
		        OR NOT EXISTS 
	            (select * from location_details where stdevice.id = location_details.id)
		         and dev_status = 'New' and dev_name = 'power-cord'
			   ORDER BY stdevice.id DESC");
	           $count = mysql_num_rows($count_item);
               ?>
				<li class="">
				<a href="newpower_cords.php">Cable Alimentation&nbsp;<span class="label label-default"> <?php echo $count;?></span></a>
				</li>
				
					<?php	
	           $count_item=mysql_query("select * from stdevice 
			   LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
			     where NOT EXISTS 
	           (select * from location_details where stdevice.id = location_details.id)	   
	           and dev_status = 'NOUVEAU' and dev_name = 'SCANNER'
		       OR NOT EXISTS 
	           (select * from location_details where stdevice.id = location_details.id)
		       and dev_status = 'NOUVEAU' and dev_name = 'Scanner'
		       OR NOT EXISTS 
	           (select * from location_details where stdevice.id = location_details.id)
		       and dev_status = 'NOUVEAU' and dev_name = 'scanner'
		       OR NOT EXISTS 
	           (select * from location_details where stdevice.id = location_details.id)
		       and dev_status = 'New' and dev_name = 'automatic-Voltage-Regulator'
		       OR NOT EXISTS 
	           (select * from location_details where stdevice.id = location_details.id)
		       and dev_status = 'New' and dev_name = 'avrs'
		       OR NOT EXISTS 
	           (select * from location_details where stdevice.id = location_details.id)
		       and dev_status = 'New' and dev_name = 'automatic v.r'
		       OR NOT EXISTS 
	           (select * from location_details where stdevice.id = location_details.id)
		       and dev_status = 'New' and dev_name = 'automatic voltage R.'
		       OR NOT EXISTS 
	           (select * from location_details where stdevice.id = location_details.id)
		        and dev_status = 'New' and dev_name = 'avregulator'
		       OR NOT EXISTS 
	           (select * from location_details where stdevice.id = location_details.id)
		       and dev_status = 'New' and dev_name = 'automatic Voltage Reactor'
		       OR NOT EXISTS 
	           (select * from location_details where stdevice.id = location_details.id)
		       and dev_status = 'New' and dev_name = 'automatic-Voltage-Reactor'
		       OR NOT EXISTS 
	           (select * from location_details where stdevice.id = location_details.id)
		       and dev_status = 'New' and dev_name = 'automaticVoltageReactor'
		       OR NOT EXISTS 
	           (select * from location_details where stdevice.id = location_details.id)
		       and dev_status = 'New' and dev_name = 'automaticVoltageRegulator'
		       OR NOT EXISTS 
	           (select * from location_details where stdevice.id = location_details.id)
		       and dev_status = 'New' and dev_name = 'automtic Voltge Reactor'
		       OR NOT EXISTS 
	           (select * from location_details where stdevice.id = location_details.id)
		       and dev_status = 'New' and dev_name = 'automtic Voltge Regulator'
			   ORDER BY stdevice.id DESC");
	           $count = mysql_num_rows($count_item);
               ?>
				<li class="">
				<a href="newscanner.php">Scanner&nbsp;<span class="label label-default"> <?php echo $count;?></span></a>
				</li>
				
				</ul>
	</div>
</div>
</div>
		
<div class="block-content collapse in">
<div class="span12">
<form id="send" method="post">	
<div class="empty">
	
</div>
  	<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
		<thead>		
		        <tr>
				<th class="empty"></th>
					<th>Equipement</th>
					<th> Description </th>
					<th>Num Serie</th>
			        <th>Marque  </th>
					<th>Model  </th>
					<th> Status  </th>	              					
		    </tr>
		</thead>
<tbody>
<!-----------------------------------Content------------------------------------>
	
		<?php
	    $device_query = mysql_query("select * from stdevice 
		LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
		where NOT EXISTS 
	    (select * from location_details where stdevice.id = location_details.id)	   
	    and dev_status = 'NOUVEAU' and dev_name = 'projecteur'
		OR NOT EXISTS 
	    (select * from location_details where stdevice.id = location_details.id)
		and dev_status = 'NOUVEAU' and dev_name = 'Projecteur'
		OR NOT EXISTS 
	    (select * from location_details where stdevice.id = location_details.id)
		and dev_status = 'NOUVEAU' and dev_name = 'PROJECTEUR'
		OR NOT EXISTS 
	    (select * from location_details where stdevice.id = location_details.id)
		and dev_status = 'New' and dev_name = 'mnitor'
		OR NOT EXISTS 
	    (select * from location_details where stdevice.id = location_details.id)
		and dev_status = 'New' and dev_name = 'mntr'
		OR NOT EXISTS 
	    (select * from location_details where stdevice.id = location_details.id)
		and dev_status = 'New' and dev_name = 'MNTR'
		OR NOT EXISTS 
	    (select * from location_details where stdevice.id = location_details.id)
		and dev_status = 'New' and dev_name = '(monitor)'
		OR NOT EXISTS 
	    (select * from location_details where stdevice.id = location_details.id)
		and dev_status = 'New' and dev_name = '(montor)'
		
		ORDER BY stdevice.id DESC") or die(mysql_error());
	    while ($row = mysql_fetch_array($device_query)) {
		$id = $row['id'];
		?>
										
		<tr>
		<td width="30" class="empty">
			<input id="" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $id; ?>&nbspName&nbsp<?php echo $dev_name; ?>" >
		</td>
			<td><?php echo $row['dev_name']; ?></td>
			<td><?php echo $row['dev_desc']; ?></td>
			<td><?php echo $row['dev_serial']; ?></td>
			<td><?php echo $row['dev_brand']; ?></td>
			<td><?php echo $row['dev_model']; ?></td>
			<td><div class="alert alert-success"><i class="icon-check"></i><strong><?php echo $row['dev_status']; ?></strong></div></td>				
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