			
			<form id="login_form1" class="form-signin" method="post">
				<h3 class="form-signin-heading">
					<i class="icon-lock"></i> S'Authenfier :
				</h3>
				<input type="text"      class="input-block-level"   id="username" name="username" placeholder="Username" required>
				<input type="password"  class="input-block-level"   id="password" name="password" placeholder="Password" required>
				
				<button data-placement="right" title="Cliquer ici pour se connecter" id="signin" name="login" class="btn btn-info" type="submit"><i class="icon-signin icon-large"></i> Se Connecter</button>
				<script type="text/javascript">
				$(document).ready(function(){
				$('#signin').tooltip('show');
				$('#signin').tooltip('hide');
				});
				</script>		
			</form>
						<script>
						jQuery(document).ready(function(){
						jQuery("#login_form1").submit(function(e){
								e.preventDefault();
								var formData = jQuery(this).serialize();
								$.ajax({
									type: "POST",
									url: "login.php",
									data: formData,
									success: function(html){
									if(html=='true_admin')
									{
									$.jGrowl("Chargement de la page ......", { sticky: true });
									$.jGrowl("Bienvenue a la Gestion et suivie des equipements informatique de l'ESTA", { header: 'Accès autorisé' });
									var delay = 1000;
										setTimeout(function(){ window.location = 'admin/dashboard.php'  }, delay);  
									}else if (html == 'true'){
										$.jGrowl("Bienvenue a la Gestion et suivie des equipements informatique de l'ESTA", { header: 'Accès autorisé' });
									var delay = 1000;
										setTimeout(function(){ window.location = 'technical Staff/dashboard.php'  }, delay);  
									}else if (html == 'true_f'){
										$.jGrowl("Bienvenue a la Gestion et suivie des equipements informatique de l'ESTA", { header: 'Accès autorisé' });
									var delay = 1000;
										setTimeout(function(){ window.location = 'fonctionnaire/dashboard.php'  }, delay);  
									}
                                    else
									{
									$.jGrowl("Verifiez votre NOM d'UTILISATEUR ou votre MOT DE PASSE", { header: 'Échec de la connexion' });
									}
									}
								});
								return false;
							});
						});
						</script>
			