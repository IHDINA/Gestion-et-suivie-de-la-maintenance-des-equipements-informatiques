<?php include('header.php'); ?>
<?php include('session.php'); ?>
    <body>
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('Device_sidebar.php'); ?>
		
						<div class="span9" id="content">
		                    <div class="row-fluid">
							
		                        <!-- block -->
		                        <div class="block">
		                            <div class="navbar navbar-inner block-header">
		                                <div class="muted pull-left">Ajouter Equipement</div>
										<div class="muted pull-right"><a id="return" data-placement="left" title="Clicke pour retourner" href="device_stocks.php"><i class="icon-arrow-left icon-large"></i> Acceuil</a></div>
										<script type="text/javascript">
										$(document).ready(function(){
										$('#return').tooltip('show');
										$('#return').tooltip('hide');
										});
										</script>                          
		                            </div>
									
		                <div class="block-content collapse in">	
                         <div class="alert alert-success"><i class="icon-info-sign"></i>  Veuillez remplir les champs obligatoires</div>						
							<form class="form-horizontal" method="post">											
								
										<div class="control-group">
		                                 <label class="control-label" for="inputEmail">Equipement</label>
			                                <div class="controls">
				                              <select name="dev_id" class="chzn-select"  required/>
				                                 <option></option>
			                                     <?php $device_name=mysql_query("select * from device_name")or die(mysql_error()); 
			                                     while ($row=mysql_fetch_array($device_name)){ 												
												 ?>
				                                 <option value="<?php echo $row['dev_id']; ?>&nbspName&nbsp<?php echo $row['dev_name']; ?>"><?php echo $row['dev_name']; ?></option>
				                                 <?php } ?>
				                               </select>
		                                     </div>
	                                    </div>
											
										
										<div class="control-group">
											<label class="control-label" for="inputPassword">Marque</label>
											<div class="controls">
											<input type="text" class="span8" name="dev_brand" id="inputPassword" placeholder="Marque d'Equipement" required>
											</div>
										</div>
										
										<div class="control-group">
											<label class="control-label" for="inputPassword">Serie</label>
											<div class="controls">
											<input type="text" class="span8" name="dev_serial" id="inputPassword" placeholder="Serie d'Equipement" required>
											</div>
										</div>
										
										<div class="control-group">
											<label class="control-label" for="inputPassword">Model</label>
											<div class="controls">
											<input type="text" class="span8" name="dev_model" id="inputPassword" placeholder="Model d'Equipement" required>
											</div>
										</div>
										
										<div id="hide">
										<div class="control-group">
											<label class="control-label" for="inputPassword"  placeholder="Status d'Equipement" >Status</label>
											<div class="controls">
											<select name="dev_status"  required>										
													<option>NOUVEAU</option>																									
												</select>								
											</div>
										</div>
										</div>
												
										<div class="control-group">
											<label class="control-label" for="inputPassword">Description</label>
											<div class="controls">
													<textarea name="dev_desc" id="ckeditor_full"></textarea>
											</div>
										</div>
											
										<div class="control-group">
										<div class="controls">
										<button name="save" id="save" name="singlebutton" data-placement="right" title="Clicker ici pour enregistrer." class="btn btn-primary"><i class="icon-save"></i> ENREGISTRER</button>				
										</div>
										</div>
										<script type="text/javascript">
										$(document).ready(function(){
										$('#save').tooltip('show');
										$('#save').tooltip('hide');
										});
										</script>
							</form>
<?php
if (isset($_POST['save'])){
$dev_id = htmlentities(trim($_POST['dev_id']));
$dev_desc = htmlentities(trim($_POST['dev_desc']));
$dev_serial = htmlentities(trim($_POST['dev_serial']));
$dev_brand = htmlentities(trim($_POST['dev_brand']));
$dev_model = htmlentities(trim($_POST['dev_model']));
$dev_status = htmlentities(trim($_POST['dev_status']));
										
						
$query = mysql_query("select * from stdevice where dev_serial = '$dev_serial' ")or die(mysql_error());
$count = mysql_num_rows($query);

if ($count > 0){ ?>
<script>
alert('CE CODE EST DEJA EXISTE');
window.location = "device_stocks.php";
</script>
<?php
}else{
mysql_query("insert into stdevice (dev_id,dev_desc,dev_serial,dev_brand,dev_model,dev_status) values('$dev_id','$dev_desc','$dev_serial','$dev_brand','$dev_model','$dev_status')")or die(mysql_error());
mysql_query("insert into activity_log (date,username,action) values(NOW(),'$admin_username','Ajouter info Equipement id $dev_id')")or die(mysql_error());											
?>
<script>
window.location = "device_stocks.php";
$.jGrowl("Equipement a bien ajoute ", { header: 'Ajoute dun equipement' });
</script>
<?php
}
}
?>
																										
		                            </div>
		                        </div>
		                        <!-- /block -->
		                    </div>
		                </div>
            </div>
		<?php include('footer.php'); ?>
        </div>
		<?php include('script.php'); ?>
    </body>