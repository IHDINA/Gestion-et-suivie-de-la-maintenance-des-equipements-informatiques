   <div class="row-fluid">					  
       <a href="location.php" class="btn btn-info"id="add" data-placement="right" title="Clicker pour ajouter emplacement" ><i class="icon-plus-sign icon-large"></i> Ajouter Location</a>
	               <script type="text/javascript">
		              $(document).ready(function(){
		              $('#add').tooltip('show');
		              $('#add').tooltip('hide');
		              });
		             </script>
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Modifier Emplacement</div>
                            </div>
							<?php
							$query = mysql_query("select * from stlocation where stdev_id = '$get_id'")or die(mysql_error());
							$row = mysql_fetch_array($query);
							?>
                            <div class="block-content collapse in">
                                <div class="span12">
								<form method="post">
										<div class="control-group">
                                          <div class="controls">
                                            <input name="stdev_location_name" value="<?php echo $row['stdev_location_name']; ?>" class="input focused" id="focusedInput" type="text" placeholder = "Emplacement" required>
                                          </div>
                                        </div>
	
									<div class="control-group">
                                          <div class="controls">
												<button name="update" class="btn btn-success" id="update" data-placement="right" title="Clicker pour enregistrer"><i class="icon-save icon-large"> Enregistrer</i></button>
                                                <script type="text/javascript">
	                                            $(document).ready(function(){
	                                            $('#update').tooltip('show');
	                                            $('#update').tooltip('hide');
	                                            });
	                                            </script>
                                          </div>
                                        </div>
                                </form>
								</div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div><?php
if (isset($_POST['update'])){
$stdev_location_name = $_POST['stdev_location_name'];

mysql_query("update stlocation set stdev_location_name = '$stdev_location_name' where stdev_id = '$get_id' ")or die(mysql_error());

mysql_query("insert into activity_log (date,username,action) values(NOW(),'$admin_username','Modifier location $stdev_location_name')")or die(mysql_error());
?>

<script>
$.jGrowl("location a bien modifie", { header: 'Location Modifier' });
window.location = "location.php";
</script>
<?php

}
?>