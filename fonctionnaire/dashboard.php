<?php include('header_dashboard.php'); ?>
<?php include('session.php'); ?>
    <body id="home">
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('sidebar.php'); ?>	
                   <div class="span9" id="content">
                      <div class="row-fluid">
					     <?php $query= mysql_query("select * from fonctionnaire where fonct_id = '$session_id'")or die(mysql_error());
						   $row = mysql_fetch_array($query);
						 ?>
				         <div class="col-lg-12">
                          <div class="alert alert-success alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                             <img id="avatar1" class="img-responsive" src="<?php echo $row['foncthumbnails']; ?>"><strong> Bienvenue!</strong> <?php echo $client_row['firstname']." ".$client_row['lastname'];  ?>
                          </div>
                        </div>
					   				
					  <!-- block -->
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left"><i class="icon-dashboard">&nbsp;</i>Dashboard </div>
								<div class="muted pull-right"><i class="icon-time"></i>&nbsp;<?php include('time.php'); ?></div>
                            </div>
							
                           <div class="block-content collapse in">
				           <div class="span12">
									
				               <div class="block-content collapse in">
<div id="page-wrapper">
        <?php 
	     $stocks = mysql_query("select * from stdevice,fonctionnaire where stdevice.fonct_id=fonctionnaire.fonct_id and fonctionnaire.fonct_id='$session_id'")or die(mysql_error());
		 $stocks = mysql_num_rows($stocks);
		 ?>
                <div class="row-fluid">				
                    <div class="span6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
							  <div class="container-fluid">
                                <div class="row-fluid">
                                    <div class="span3"><br/>
                                        <i class="fa fa-desktop fa-5x"></i><br/>
                                    </div>
                                    <div class="span8 text-right"><br/>
                                        <div class="huge"><?php echo $stocks; ?></div>
                                        <div>MES EQUIPEMENTS</div><br/>
                                    </div>
                                </div>
							 </div>	
                            </div>
                            <a href="device_stocks.php">							  
                                <div class="modal-footer">
                                    <span class="pull-left">Voir les Details</span>
                                    <span class="pull-right"><i class="icon-chevron-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>							  
                            </a>
                        </div>
                    </div>
		<?php 
	     $new = mysql_query("select * from messages where RECEIVER='fonctionnaire' and ID_RECEIVER='$session_id'")or die(mysql_error());
		 $new = mysql_num_rows($new); 
		 ?>			
                     <div class="span6">
                        <div class="panel panel-green">
                            <div class="panel-heading">
							  <div class="container-fluid">
                                <div class="row-fluid">
                                    <div class="span3"><br/>
                                      <i class="fa fa-share-square fa-5x"></i><br/>
                                    </div>
                                    <div class="span8 text-right"><br/>
                                        <div class="huge"><?php echo $new;?></div>
                                        <div>INBOX </div><br/>
                                    </div>
                                </div>
							 </div>	
                            </div>
                            <a href="inbox.php">							  
                                <div class="modal-footer">
                                    <span class="pull-left">Voir les Details</span>
                                    <span class="pull-right"><i class="icon-chevron-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>							  
                            </a>
                        </div>
                    </div>
				 </div>
 </div> 				 							
<div id="page-wrapper">
           <div class="row-fluid">
		 <?php 
	     $damage = mysql_query("select * from messages where SENDER='fonctionnaire' and ID_SENDER='$session_id'")or die(mysql_error());
		 $damage = mysql_num_rows($damage);
		 ?>	
			 <div class="span6">
                        <div class="panel panel-red">
                            <div class="panel-heading">
							  <div class="container-fluid">
                                <div class="row-fluid">
                                    <div class="span3"><br/>
                                      <i class="glyphicon glyphicon-name"></i><br/>
                                    </div>
                                    <div class="span8 text-right"><br/>
                                        <div class="huge"><?php echo $damage;?></div>
                                        <div>OUTBOX</div><br/>
                                    </div>
                                </div>
							 </div>	
                            </div>
                            <a href="outbox.php">							  
                                <div class="modal-footer">
                                    <span class="pull-left">Voir les Details</span>
                                    <span class="pull-right"><i class="glyphicon glyphicon-name"></i></span>
                                    <div class="clearfix"></div>
                                </div>							  
                            </a>
                        </div>
                    </div>
		<?php 
	     $Repaired = mysql_query("select * from messages where SENDER='fonctionnaire' and ID_SENDER='$session_id' and objet='Demande Equipement' and RECEIVER='admin'")or die(mysql_error());
		 $Repaired = mysql_num_rows($Repaired);
		 ?>				
					<div class="span6">
                        <div class="panel panel-yellow">
                            <div class="panel-heading">
							  <div class="container-fluid">
                                <div class="row-fluid">
                                    <div class="span3"><br/>
                                       <i class="fa fa-wrench fa-5x"></i><br/>
                                    </div>
                                    <div class="span8 text-right"><br/>
                                        <div class="huge"><?php echo $Repaired;?></div>
                                        <div>DEMANDE EQUIPEMENT</div><br/>
                                    </div>
                                </div>
							 </div>	
                            </div>
                            <a href="Createdemande.php">							  
                                <div class="modal-footer">
                                    <span class="pull-left">Voir les Details</span>
                                    <span class="pull-right"><i class="icon-chevron-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>							  
                            </a>
                        </div>
                    </div>   				
              </div>	       
        </div>  	
<div id="page-wrapper">
           <div class="row-fluid">
        <?php 
	     $dump = mysql_query("select * from messages where SENDER='fonctionnaire' and ID_SENDER='$session_id' and objet='Demande Maintenance' and RECEIVER='respAdm'")or die(mysql_error());
		 $dump = mysql_num_rows($dump);
		 ?>			   
			<div class="span6">
                        <div class="panel panel-red">
                            <div class="panel-heading">
							  <div class="container-fluid">
                                <div class="row-fluid">
                                    <div class="span3"><br/>
                                       <i class="fa fa-support fa-5x"></i><br/>
                                    </div>
                                    <div class="span8 text-right"><br/>
                                        <div class="huge"><?php echo $dump;?></div>
                                        <div>DEMANDE MAINTENANCE</div><br/>
                                    </div>
                                </div>
							 </div>	
                            </div>
                            <a href="DemandeM.php">							  
                                <div class="modal-footer">
                                    <span class="pull-left">Voir les Details</span>
                                    <span class="pull-right"><i class="icon-chevron-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>							  
                            </a>
                        </div>
                    </div>
	      			  
      </div>
 </div>

               
				
				
			                 </div>	
					     
						
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