<!--Advance Search Form Modal-->
<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
<h3 id="myModalLabel">Formulaire Recherche</h3>
</div>

<div class="modal-body">
    <form class="form-horizontal" method="post" action="advance_search.php">
	
	          <div class="control-group">
		      <label class="control-label" for="inputEmail">Emplacement</label>
			  <div class="controls">
			  <select name="stdev_location_name" class="" required/>
			  <option>&larr; Selectionner Emplacement &rarr;</option>
			  <?php
				$class_query = mysql_query("select * from stlocation")or die(mysql_error());
				while($location_row = mysql_fetch_array($class_query)){			
				?>
			  <option><?php echo $location_row['stdev_location_name']; ?></option>
			  <?php } ?>
			  </select>
		      </div>
	          </div>
							
			  <div class="control-group">
		      <label class="control-label" for="inputEmail">Equipement</label>
			  <div class="controls">
			  <select name="dev_name" class="" required/>
			  <option>&larr; Selectionner Equipement &rarr;</option>
			  <?php
				$device_query = mysql_query("select * from device_name")or die(mysql_error());
				while($device_row = mysql_fetch_array($device_query)){			
				?>
			  <option><?php echo $device_row['dev_name']; ?></option>
			  <?php } ?>
			  </select>
		      </div>
	          </div>
			  			  			
			  
												
                <div class="control-group">
                <div class="controls">
                <button type="submit" id="search" data-placement="left" title="Clicker pour rechercher" class="btn btn-primary"><i class="icon-search"></i> Rechercher</button>
				 <script type="text/javascript">
		        $(document).ready(function(){
		        $('#search').tooltip('show');
		        $('#search').tooltip('hide');
		        });
		        </script> 
                </div>
                </div>
				
    </form>
</div>

<div class="modal-footer">
<button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i> Fermer</button>
</div>
</div>