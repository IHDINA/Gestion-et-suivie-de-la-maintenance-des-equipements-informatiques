<!-- Modal -->
<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
<h3 id="myModalLabel">Recherche Avancee</h3>
</div>

<div class="modal-body">
    <form class="form-horizontal" method="post" action="advance_search.php">
	
			  <div class="control-group">
			  <label class="control-label" for="inputEmail"> Emplacement </label>
			  <div class="controls">
			  <input type="text" name="stdev_location_name" id="inputEmail" placeholder="Location " >
			  </div>
			  </div>
			  			 						
			  <div class="control-group">
			  <label class="control-label" for="inputEmail"> Equipement</label>
			  <div class="controls">
			  <input type="text" name="dev_name" id="inputEmail" placeholder="Equipement" >
			  </div>
			  </div>
				
			   
						
                <div class="control-group">
                <div class="controls">
                <button type="submit" id="search" data-placement="left" title="Cliquer" class="btn btn-primary"><i class="icon-search"></i> Rechercher</button>
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