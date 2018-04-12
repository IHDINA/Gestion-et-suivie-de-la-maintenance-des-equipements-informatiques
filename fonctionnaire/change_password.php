
<?php include('header_dashboard.php'); ?>
<?php include('session.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Gestion et suivie de maintenance des equipements informatique de l'ESTA">
    <meta name="author" content="PFE">	
	
</head>
    <body id="home">
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				
                <div class="span10" id="content">
                     <div class="row-fluid">
					   <br>
					   <div class="offset2">
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div id="" class="muted pull-left"><i class="icon-user"></i>&nbsp;Changer Mot de Passe </div>
								<div class="muted pull-right"><a id="return" data-placement="left" title="Click pour Retourner" href="dashboard.php"><i class="icon-arrow-left icon-large"></i> Retourne</a></div>
																<script type="text/javascript">
																$(document).ready(function(){
																	$('#return').tooltip('show');
																	$('#return').tooltip('hide');
																});
																</script>  
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
  								<div class="alert alert-info"><i class="icon-info-sign"></i>  Veuillez remplir les champs obligatoires</div>
								<?php
								$query = mysql_query("select * from fonctionnaire where fonct_id = '$session_id'")or die(mysql_error());
								$row = mysql_fetch_array($query);
								?>		
								
									 <!----------------------form------------------->		
								    <form  method="post" id="change_password" class="form-horizontal">
										<div class="control-group">
											<label class="control-label" for="inputEmail">Mot de Passe Actuel</label>
											<div class="controls">
											<input type="hidden" id="password" name="password" value="<?php echo $row['password']; ?>"  placeholder="Current Password">
											<input type="password" id="current_password" name="current_password"  placeholder="Actuel Password">
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="inputPassword">Nouveau Mot de Passe</label>
											<div class="controls">
											<input type="password" id="new_password" name="new_password" placeholder="Nouveau Password">
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="inputPassword">Retaper le Mot de Passe</label>
											<div class="controls">
											<input type="password" id="retype_password" name="retype_password" placeholder="Retaper Password">
											</div>
										</div>
										<div class="control-group">
											<div class="controls">
											<button id="update" data-placement="right" title="Click to save" type="submit" class="btn btn-info"><i class="icon-save"></i> Enregistrer</button>
											</div>
										</div>
										<script type="text/javascript">
										$(document).ready(function(){
										$('#update').tooltip('show');
										$('#update').tooltip('hide');
										});
										</script>
									</form>
				
   <script>
			jQuery(document).ready(function(){
			jQuery("#change_password").submit(function(e){
					e.preventDefault();
						
						var password = jQuery('#password').val();
						var current_password = jQuery('#current_password').val();
						var new_password = jQuery('#new_password').val();
						var retype_password = jQuery('#retype_password').val();
						if (password != current_password)
						{
						$.jGrowl("Le mot de passe ne correspond pas à votre nouveau mot de passe  ", { header: 'Echec de la modification de mot de passe' });
						}else if  (new_password != retype_password){
						$.jGrowl("Le mot de passe ne correspond pas à votre nouveau mot de passe  ", { header: 'Echec de la modification de mot de passe' });
						}else if ((password == current_password) && (new_password == retype_password)){
					var formData = jQuery(this).serialize();
					$.ajax({
						type: "POST",
						url: "update_password.php",
						data: formData,
						success: function(html){
					
						$.jGrowl("Votre mot de passe est modifie avec succes", { header: 'Mot de Passe est changé avec succes' });
						var delay = 2000;
							setTimeout(function(){ window.location = 'dashboard.php'  }, delay);  
						
						}
						
						
					});
			
					}
				});
			});
</script>
										
                                </div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>
					
                </div>
	         </div>	
          </div>
		  <br>
		<?php include('footer.php'); ?>
        </div>
		<?php include('script.php'); ?>
    </body>
</html>