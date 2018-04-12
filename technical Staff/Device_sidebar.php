     <div class="span3" id="sidebar">
	              <img id="avatar" class="img-polaroid" src="<?php echo $row['respthumbnails']; ?>">
				   <?php include('count_damage.php'); ?>
				    <?php include('count_dump.php'); ?>
         <?php include('count.php'); ?>
                    <ul class="nav nav-list bs-docs-sidenav nav-collapse collapse">
                        <li class=""> <a href="dashboard.php"><i class="icon-chevron-right"></i><i class="icon-home"></i>&nbsp;Dashboard</a> </li>
						<li class="active">
                            <a href="device_stocks.php"><i class="icon-chevron-right"></i><i class="icon-desktop"></i> Equipements / Stocks</a>
                        </li>
						<li class="">
                            <a href="device_location.php"><i class="icon-chevron-right"></i><i class="icon-map-marker"></i>Emplacement </a>
                        </li>					
						<li>
                            <a href="newdevice.php"><i class="icon-chevron-right"></i><i class="icon-laptop"></i> Nouveaux Equipements </a>
                        </li>	
						<li>
                            <a href="damage.php"><i class="icon-chevron-right"></i><i class="icon-laptop"></i> Equipements Endommagés
							<?php if($not_read1 == '0'){
				           }else{ ?>
					       <span class="badge badge-important"><?php echo $not_read1; ?></span>
				           <?php } ?>
							</a>
                        </li>
						
						<li>
                            <a href="dump_device.php"><i class="icon-chevron-right"></i><i class="icon-remove-sign"></i> Equipement en Dechet
							<?php if($not_read_dump == '0'){
				            }else{ ?>
					        <span class="badge badge-important"><?php echo $not_read_dump; ?></span>
				            <?php } ?>
							</a>
                        </li>
						<li class="dropdown">
                                <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-chevron-right"></i><i class="glyphicon glyphicon-envelope" ></i>Messagerie
				
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                      <a href="inbox.php" ><i class="icon-chevron-right"></i><i class="glyphicon glyphicon-inbox"></i>Inbox</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a href="outbox.php" ><i class="icon-chevron-right"></i><i class="glyphicon glyphicon-hdd"></i>Outbox</a>
                                    </li>
                                </ul>
                            </li>
                         <li class="">
				           <a href="notification.php"><i class="icon-chevron-right"></i><i class="icon-globe"></i>&nbsp;Notification
				           <?php if($not_read == '0'){
				           }else{ ?>
					       <span class="badge badge-important"><?php echo $not_read; ?></span>
				           <?php } ?>
				           </a>
			            </li>
                        <li class="dropdown">
                                <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-chevron-right"></i><i class="icon-search icon-large"></i>&nbsp;Recherche Avancee&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								<i class="caret"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                      <a href="#myModal" data-toggle="modal" tabindex="1"><i class="icon-chevron-right"></i><i class="icon-search"></i>&nbsp;Emplacement Equipement&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a href="#myModal1" data-toggle="modal" tabindex="-1" ><i class="icon-chevron-right"></i><i class="icon-search"></i>&nbsp;Tous Equipements&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
                                    </li>
                                </ul>
                            </li>
                    </ul>
					
				<?php include('search_form.php'); ?>
				<?php include('search_form1.php'); ?>										
    </div>