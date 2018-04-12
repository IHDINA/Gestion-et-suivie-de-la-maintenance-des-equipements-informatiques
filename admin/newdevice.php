<?php include('header.php'); ?>
<?php include('session.php'); ?>
    <body>
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('newdevice_slidebar.php'); ?>
			    
				  <div class="span9" id="content">
                     <div class="row-fluid">
				  
					 <h2 id="sc" align="center"><image src="images/sclogo.png" width="45%" height="45%"/></h2>
				<?php	
	             $count_item=mysql_query("select * from stdevice
		         LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
		         where NOT EXISTS 
	            (select * from location_details where stdevice.id = location_details.id)
		         and dev_status='NOUVEAU' ORDER BY stdevice.id DESC");
	             $count = mysql_num_rows($count_item);
                 ?>		                 					 
				   <div id="block_bg" class="block">
                        <div class="navbar navbar-inner block-header">
                             <div class="muted pull-left"><i class="icon-check"></i>&nbsp;Nouveaux Equipements</div>
							 <div class="muted pull-right">
								Nombre des Equipements (s): <span class="badge badge-info"><?php  echo $count; ?></span>
							 </div>
                          </div>
						  
				<h4 id="sc">Nouveaux Equipement(s) Liste
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
		        and dev_status = 'NOUVEAU' and dev_name = 'Clavier'
		     
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
	          and dev_status = 'NOUVEAU' and dev_name = 'SOURIS'
		
		      OR NOT EXISTS 
	          (select * from location_details where stdevice.id = location_details.id)
		      and dev_status = 'NOUVEAU' and dev_name = 'Souris'		       
		
		
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
	             and dev_status = 'NOUVEAU' and dev_name = 'projecteur'
		         OR NOT EXISTS 
	             (select * from location_details where stdevice.id = location_details.id)
		         and dev_status = 'NOUVEAU' and dev_name = 'Projecteur'
	
			   ORDER BY stdevice.id DESC");
	           $count = mysql_num_rows($count_item);
               ?>
				<li class="">
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
	           and dev_status = 'NOUVEAU' and dev_name = 'imprimante'
		      OR NOT EXISTS 
	          (select * from location_details where stdevice.id = location_details.id)
		      and dev_status = 'NOUVEAU' and dev_name = 'Imprimante'
		      OR NOT EXISTS 
	          (select * from location_details where stdevice.id = location_details.id)
		      and dev_status = 'NOUVEAU' and dev_name = 'IMPRIMANTE'

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
		   
			   ORDER BY stdevice.id DESC");
	           $count = mysql_num_rows($count_item);
               ?>
				<li class="">
				<a href="newscanner.php.php">Scanner&nbsp;<span class="label label-default"> <?php echo $count;?></span></a>
				</li>
				
				</ul>
	</div>
</div>
</div>

<div class="block-content collapse in">
   <div class="span12">
	
<form id="send" method="post">	
<div class="empty">
	<div class="control-group">
		 <label class="control-label" for="inputEmail">Emplacement</label>
			 <div class="controls">
				  <select name="stdev_id" class="chzn-select" required/>
				    <option></option>
			          <?php $result =  mysql_query("select * from stlocation")or die(mysql_error()); 
			          while ($row=mysql_fetch_array($result)){ ?>
				   <option value="<?php echo $row['stdev_id']; ?>&nbspName&nbsp<?php echo $row['stdev_location_name']; ?>"><?php echo $row['stdev_location_name']; ?></option>
				    <?php } ?>
                 
				   </select>
                 <label class="control-label" for="inputEmail">Utilisateur Mr/Mme</label>
          <select name="fonct" class="chzn-select" required/>
				    <option></option>
			          <?php $result =  mysql_query("select * from fonctionnaire")or die(mysql_error()); 
			          while ($row=mysql_fetch_array($result)){ ?>
				   <option value="<?php echo $row['fonct_id']; ?>&nbspName&nbsp<?php echo $row['firstname']; ?>"><?php echo $row['lastname']; ?></option>
				    <?php } ?>
                 
				   </select>
		    </div>
	</div>
    
			
	  <div class="control-group"> 
		<div class="controls">
		<button  class="btn btn-primary" id="snd" data-placement="right" title="Clicker Pour l Envoyer"><i class="icon-share">Affecter</i></button>
         <script type="text/javascript">
	     $(document).ready(function(){
	     $('#snd').tooltip('show');
	     $('#snd').tooltip('hide');
	     });
	    </script>
			 		 
		 <div class="pull-right">
	      <a href="print_new.php" class="btn btn-info" id="print" data-placement="left" title="Click to Print"><i class="icon-print icon-large"></i> Imprimer Liste</a> 
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
  	<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
		<thead>		
		        <tr>
				<th class="empty"></th>
					<th>Equipement</th>
					<th>Description </th>
					<th>Num Serie  </th>
			        <th>Marque  </th>
					<th>Model  </th>
					<th>Status  </th>                   					              		  
		    </tr>
		</thead>
<tbody>
<!-----------------------------------Content------------------------------------>
	
		<?php
	    $device_query = mysql_query("select * from stdevice
		LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
		where NOT EXISTS 
	   (select * from location_details where stdevice.id = location_details.id)
		and dev_status='NOUVEAU' ORDER BY stdevice.id DESC") or die(mysql_error());
	    while ($row = mysql_fetch_array($device_query)) {
		$id = $row['id'];
		$dev_name = $row['dev_name'];
		?>
										
		<tr>
		<td width="30" class="empty">
			<input id="" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $id; ?>&nbspName&nbsp<?php echo $dev_name; ?>" >
		</td>
			<td><?php echo $row['dev_name']; ?></td>
			<td><?php echo html_entity_decode(trim($row['dev_desc'])); ?></td>
			<td><?php echo $row['dev_serial']; ?></td>
			<td><?php echo $row['dev_brand']; ?></td>
			<td><?php echo $row['dev_model']; ?></td>
			<td><div class="alert alert-success"><i class="icon-check"></i><strong><?php echo $row['dev_status']; ?></strong></div></td>		
		</tr>
											
	<?php } ?>   

</tbody>
</table>
</form>	
<script>
		jQuery(document).ready(function(){
		jQuery("#send").submit(function(e){
			e.preventDefault();{												
			var formData = jQuery(this).serialize();
			$.ajax({
			type: "POST",
			url: "send.php",
			data: formData,
			success: function(html){
					
			$.jGrowl("Equipement a bien affecte", { header: 'Affectation Equipement' });
			var delay = 500;
			setTimeout(function(){ window.location = 'device_location.php'  }, delay);  
						
			}
												
		 });
			
	   }
	});
});
</script>
				  		
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