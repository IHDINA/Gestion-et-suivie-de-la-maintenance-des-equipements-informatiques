
  <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left"><i class="icon-plus-sign icon-large"> Ajouter Equipement</i></div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
								
								 <!--------------------form------------------->
								<form method="post">
										<div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" name="dev_name" id="focusedInput" type="text" placeholder = "Equipement" required>
                                          </div>
                                        </div>
										
										<div class="control-group">
                                          <div class="controls">
												<button name="save" class="btn btn-info" id="save" data-placement="right" title="Clicker pour enregistrer"><i class="icon-plus-sign icon-large"> Enregistrer</i></button>
												<script type="text/javascript">
	                                            $(document).ready(function(){
	                                            $('#save').tooltip('show');
	                                            $('#save').tooltip('hide');
	                                            });
	                                            </script>
                                          </div>
                                        </div>
                                </form>
								
								</div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>				 
					<?php
if (isset($_POST['save'])){
$dev_name = htmlentities (trim($_POST['dev_name']));

$query = mysql_query("select * from device_name where dev_name = '$dev_name'")or die(mysql_error());
$count = mysql_num_rows($query);

if ($count > 0){ ?>
<script>
alert('Ce Equipement deja existe ');
</script>
<?php
}else{

mysql_query("insert into device_name (dev_name) values('$dev_name')")or die(mysql_error());

mysql_query("insert into activity_log (date,username,action) values(NOW(),'$admin_username','Ajouter Type Equipement $dev_name')")or die(mysql_error());
?>
<script>
window.location = "dev_name.php";
$.jGrowl("Equipement a bien ajoute ", { header: 'ajouter equipement' });
</script>
<?php
}
}
?>