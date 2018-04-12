
<!-----------------------------------------------Advance Search Form Modal --------------------------------------------------->
<div id="myModal1" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
<h3 id="myModalLabel">Recherche Avancee</h3>
</div>

<div class="modal-body">
    <form class="form-horizontal" method="post" action="advance_search1.php">
	
			  <div class="control-group">
			  <label class="control-label" for="inputEmail"> Equipement</label>
			  <div class="controls">
			  <input type="text" name="dev_name" id="inputEmail" placeholder="equipement" >
			  </div>
			  </div>
				
			  <div class="control-group">
			  <label class="control-label" for="inputPassword"> Serie</label>
			  <div class="controls">
			  <input type="text" name="dev_serial" id="inputPassword" placeholder="serie">
			  </div>
			  </div>		
						
                <div class="control-group">
                <div class="controls">
                <button type="submit" id="search1" data-placement="left" title="Clicker pour rechercher" class="btn btn-primary"><i class="icon-search"></i> Rechercher</button>
				 <script type="text/javascript">
		        $(document).ready(function(){
		        $('#search1').tooltip('show');
		        $('#search1').tooltip('hide');
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