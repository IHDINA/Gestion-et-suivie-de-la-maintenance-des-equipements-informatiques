	<div id="repair<?php echo $id; ?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
		<h3 id="myModalLabel">Reparer Equipement</h3>
		</div>
		<div class="modal-body">
			<div class="alert alert-success"> Reparer Equipement Selectionne</div>
            <form method="post" action="">
            Choissisez type maintenance
                <select name="maintenance">
                <option >Corrective</option>
                 <option >Pretentive</option>

                
                </select>
               
            </form>
		</div>
		<div class="modal-footer">
			<a class="btn btn-success" name="button" href="repair.php<?php echo '?id='.$id; ?>">Oui</a>
			<button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i>&nbsp;Annuler</button>
		</div>
    </div>
	
	
	<div id="Dump<?php echo $id; ?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
		<h3 id="myModalLabel">Degrader un Equipement</h3>
		</div>
		<div class="modal-body">
			<div class="alert alert-success">Voulez vous mettre Equipement en Dechet</div>
		</div>
		<div class="modal-footer">
			<a class="btn btn-success" href="dump.php<?php echo '?id='.$id; ?>">Oui</a>
			<button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i>&nbsp;Annuler</button>
		</div>
    </div>
	<?php
if (isset($_POST['button'])){
$type= $_POST['maintenance'];
   

mysql_query("insert into maintenance (type) values ('$type') ") ;
   

}
?>