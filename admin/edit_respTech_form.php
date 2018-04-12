<div class="row-fluid">				  
   <a href="respTech_user.php" class="btn btn-info" id="add" data-placement="right" title="Clicker pour ajouter " ><i class="icon-plus-sign icon-large"></i>Ajouter un nouveau Responsable Technique</a>
   <script type="text/javascript">
	$(document).ready(function(){
	$('#add').tooltip('show');
	$('#add').tooltip('hide');
	});
	</script> 
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left"><i class="icon-pencil icon-large"></i> Modifier Informations Generales.</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
								<?php
								$query = mysql_query("select * from resptech where respAdm_id = '$get_id'")or die(mysql_error());
								$row = mysql_fetch_array($query);
								?>
								
								 <!-- --------------------form ---------------------->						
								<form method="post">
										<div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" value="<?php echo $row['firstname']; ?>" name="firstname" id="focusedInput" type="text" placeholder = "Firstname" required>
                                          </div>
                                        </div>
										
										<div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" value="<?php echo $row['lastname']; ?>"  name="lastname" id="focusedInput" type="text" placeholder = "Lastname" required>
                                          </div>
                                        </div>
										
											<div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" value="<?php echo $row['username']; ?>"  name="username" id="focusedInput" type="text" placeholder = "Username" required>
                                          </div>
                                        </div>
                                    <div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" value="<?php echo $row['bureau']; ?>" name="bureau" id="focusedInput" type="text" placeholder = "Bureau" required>
                                          </div>
                                        </div>
                                    <div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" value="<?php echo $row['email']; ?>" name="email" id="focusedInput" type="text" placeholder = "Email" required>
                                          </div>
                                        </div>
                                    <div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" value="<?php echo $row['telephone']; ?>" name="telephone" id="focusedInput" type="text" placeholder = "Telephone" required>
                                          </div>
                                        </div>
										
								
										
											<div class="control-group">
                                          <div class="controls">
												<button name="update" class="btn btn-success" id="update" data-placement="right" title="Clicker pour modifier"><i class="icon-save icon-large"> Modifier</i></button>
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
      </div>
<?php		
if (isset($_POST['update'])){

$firstname = htmlentities (trim($_POST['firstname']));
$lastname = htmlentities (trim($_POST['lastname']));
$username = htmlentities (trim($_POST['username']));
 $bureau=htmlentities (trim($_POST['bureau']));                                
$email=htmlentities (trim($_POST['email']));                                
$telephone=htmlentities (trim($_POST['telephone']));   



mysql_query("update resptech set username = '$username'  , firstname = '$firstname' , lastname = '$lastname',bureau='$bureau',email='$email',telephone='$telephone' where respAdm_id = '$get_id' ")or die(mysql_error());

mysql_query("insert into activity_log (date,username,action) values(NOW(),'$admin_username','Modifier Responsable Technique $firstname')")or die(mysql_error());	
?>
<script>
  window.location = "respTech_user.php";
 $.jGrowl("Responsable Technique a bien modifie", { header: 'esponsable Technique a modifie' });  
</script>
<?php
}
?>