
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Gestion et suivie des equipements informatique de l'ESTA">
    <meta name="author" content="IHDINA-MOUDAFAR-NIAZE">
<link rel="shortcut icon" href="images/icon.png" />
</head>
<?php include('header_dashboard.php'); ?>
    <body id="home">
		<?php include('navbar_about.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
                <div class="span12" id="content">
                     <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
								<div class="navbar navbar-inner block-header">
									<div id="" class="muted pull-right"><a id="return" data-placement="left" title="Cliquer pour Retourner" href="index.php"><i class="icon-arrow-left"></i> Acceuil</a></div>
									<script type="text/javascript">
																$(document).ready(function(){
																	$('#return').tooltip('show');
																	$('#return').tooltip('hide');
																});
																</script> 
								</div>
                            <div class="block-content collapse in">
							<h3></i><i class="icon-group"></i>&nbsp;LES DEVELOPPEURS</h3>
							<hr>
                                <div class="span3">
										<center>
										<img id="developers" src="" class="img-circle">
										<hr>
										<p>Nom Complet: IHDINA Houssam</p>		
										<p>Email: ihdina75@gmail.com</p>
										</center>
								</div>
								
                                <div class="span3">
										<center>
								        <img id="developers" src="" class="img-circle">
								        <hr>
										<p>Nom Complet: MOUDAFAR Oumaima</p>										
										<p>Email: MoudafarOuma@gmail.com</p>
								        </center>
								</div>
								
                                <div class="span3">
										<center>
								        <img id="developers" src="" class="img-circle">
								        <hr>
										<p>Nom Complet: NIAZE Najwa</p>
										<p>Email: najwa.niaze@gmail.com</p>
								        </center>
								</div>
								
                             
								
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
</html>