<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php $get_id = $_GET['id']; ?>
    <body>
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('location_slidebar.php'); ?>
				<div class="span3" id="adduser">
				<?php include('edit_location_form.php'); ?>		   			
				</div>
                <div class="span6" id="">
                     <div class="row-fluid">
                        <!-- block -->
				   <div class="empty">
                      <div class="alert alert-success alert-dismissable">
                          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                           <i class="icon-info-sign"></i>  <strong>Note!:</strong> Selectionner un checkbox si vous voulez de supprimer un equipement ?
                   </div>
				   
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                            <div class="muted pull-left">Liste Emplacement (s)</div>                           
							<div id="" class="muted pull-right">
								<?php 
								$my_location = mysql_query("select * from stlocation ")or die(mysql_error());
								$count_my_location = mysql_num_rows($my_location);?>
								Nombre Location (s): <span class="badge badge-info"><?php echo $count_my_location; ?></span>
						    </div>
							</div>
                            <div class="block-content collapse in">
                                <div class="span12">
									<form action="delete_class.php" method="post">
  									<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
										<a data-placement="right" title="Clicker pour supprimer" data-toggle="modal" href="#delete_location" id="delete"  class="btn btn-danger" name=""><i class="icon-trash icon-large"> Supprimer</i></a>
										<script type="text/javascript">
									   $(document).ready(function(){
									   $('#delete').tooltip('show');
									   $('#delete').tooltip('hide');
									   });
									  </script>
										<?php include('modal_delete.php'); ?>
									<thead>
										  <tr>
													<th></th>
													<th>Emplacement</th>
													<th></th>
										   </tr>
										</thead>
										<tbody>
										<?php
										$location_query = mysql_query("select * from stlocation")or die(mysql_error());
										while($location_row = mysql_fetch_array($location_query)){
										$id = $location_row['stdev_id'];
										?>
												
										<tr>
											<td width="30">
											<input id="optionsCheckbox" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $id; ?>">
											</td>
											<td><?php echo $location_row['stdev_location_name']; ?></td>
											
											<?php include('toolttip_edit_delete.php'); ?>																											
											<td width="125">
											<a rel="tooltip"  title="Modifier Emplacement" id="e<?php echo $id; ?>" href="edit_location.php<?php echo '?id='.$id; ?>" class="btn btn-success"><i class="icon-pencil icon-large"></i> Modifier Emplacement</a>
											</td>
                                     
                               
										</tr>
										<?php } ?>
                               
                               
										</tbody>
									</table>
									</form>
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