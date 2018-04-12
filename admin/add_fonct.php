
  <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left"><i class="icon-plus-sign icon-large"> Ajouter un nouveau fonctionnaire</i></div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
								
								 <!--------------------form------------------->
								<form method="post">
										<div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" name="firstname" id="focusedInput" type="text" placeholder = "Prenom" required>
                                          </div>
                                        </div>
										
										<div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" name="lastname" id="focusedInput" type="text" placeholder = "Nom" required>
                                          </div>
                                        </div>
										
										<div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" name="username" id="focusedInput" type="text" placeholder = "Username" required>
                                          </div>
                                        </div>
										
										<div class="control-group">
                                          <div class="controls">
                                            <input type="password" class="input focused" name="password" id="focusedInput" type="text" placeholder = "Password" required>
                                          </div>
                                        </div>
                                    <div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" name="designation" id="focusedInput" type="text" placeholder = "Designation" required>
                                          </div>
                                        </div>
                                    <div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" name="bureau" id="focusedInput" type="text" placeholder = "Bureau" required>
                                          </div>
                                        </div>
                                    <div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" name="email" id="focusedInput" type="email" placeholder = "Email" required>
                                          </div>
                                        </div>
                                    <div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" name="telephone" id="focusedInput" type="text" placeholder = "Telephone" required>
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
$firstname = htmlentities (trim($_POST['firstname']));
$lastname = htmlentities (trim($_POST['lastname']));
$username = htmlentities (trim($_POST['username']));
$password = htmlentities (trim($_POST['password']));
$designation=htmlentities (trim($_POST['designation']));
$bureau=htmlentities (trim($_POST['bureau']));                                
$email=htmlentities (trim($_POST['email']));                                
$telephone=htmlentities (trim($_POST['telephone']));   

$query = mysql_query("select * from fonctionnaire where username = '$username' and password = '$password' and firstname = '$firstname' and password = '$password'and email='$email' ")or die(mysql_error());
$count = mysql_num_rows($query);

if ($count > 0){ ?>
<script>
alert('Existe Deja');
</script>
<?php
}else{
mysql_query("insert into fonctionnaire (username,password,firstname,lastname,foncthumbnails,designation,bureau,email,telephone) values('$username','$password','$firstname','$lastname','images/NO-IMAGE-AVAILABLE.jpg','$designation','$bureau','$email','$telephone')")or die(mysql_error());

mysql_query("insert into activity_log (date,username,action) values(NOW(),'$admin_username','Ajouter fonctionnaire $firstname')")or die(mysql_error());
?>
<script>
window.location = "fonct_user.php";
$.jGrowl("fonctionnaire a bien ajoute", { header: 'fonctionnaire a ajoute' });
</script>
<?php
}
}
?>