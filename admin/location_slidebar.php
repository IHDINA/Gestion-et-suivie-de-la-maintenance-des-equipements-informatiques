     <div class="span3" id="sidebar">
	                <img id="admin_avatar" class="img-polaroid" src="<?php echo $row['adminthumbnails']; ?>"> 
					 <?php include('count.php'); ?>
					   <?php include('count_damage.php'); ?>
					   <?php include('count_dump.php'); ?>
					    <?php include('count_remain_new_device.php'); ?>
                    <ul class="nav nav-list bs-docs-sidenav nav-collapse collapse">
                         <li class=""> 
						 <a href="dashboard.php"><i class="icon-chevron-right"></i><i class="icon-home"></i>&nbsp;Dashboard</a> 
						 </li>
						<li class="">						
						    <a href="javascript:;" role="button" class="dropdown-toggle" data-toggle="collapse" data-target="#bs"><i class="icon-chevron-right"></i><i class="icon-tablet icon-large"></i>&nbsp;Gerer Equipements
							<div class="muted pull-right"><i class="caret"></i></div></a>						
						    <ul id="bs" class="collapse">						
                            <li class="">
                            <a href="device_stocks.php"><i class="icon-chevron-right"></i><i class="icon-desktop"></i> Equipments / Stocks</a>
                            </li>
                            <li class="">
                            <a href="dev_name.php"><i class="icon-chevron-right"></i><i class="icon-folder-open-alt"></i>Type Equipements</a>
                            </li> 
						    <li>
                            <a href="newdevice.php"><i class="icon-chevron-right"></i><i class="icon-laptop"></i> Affecter&nbsp;<span class="label label-success">Nv</span>&nbsp;Equipement
							<?php if($not_read_new == '0'){
				            }else{ ?>
					        <span class="badge badge-info"><?php echo $not_read_new; ?></span>
				            <?php } ?>
							</a>
                            </li>						
						    <li>
                            <a href="damage.php"><i class="icon-chevron-right"></i><i class="icon-laptop"></i> Equipements Endommage
							<?php if($not_read1 == '0'){
				            }else{ ?>
					        <span class="badge badge-important"><?php echo $not_read1; ?></span>
				            <?php } ?>
							</a>
                            </li>
							<li>
                            <a href="dump_device.php"><i class="icon-chevron-right"></i><i class="icon-remove-sign"></i> Equipements Dechet
							<?php if($not_read_dump == '0'){
				            }else{ ?>
					        <span class="badge badge-important"><?php echo $not_read_dump; ?></span>
				            <?php } ?>
							</a>
                            </li>
						    </ul>
						</li>
						
                         <!------/.* manage location sidebar*------->	
					    <li class="active">						
						    <a href="javascript:;" role="button" class="dropdown-toggle" data-toggle="collapse" data-target="#bs1"><i class="icon-chevron-right"></i><i class="icon-sitemap"></i>&nbsp;Gerer Localisation
							<div class="muted pull-right"><i class="caret"></i></div></a>						
						    <ul id="bs1" class="collapse">						
                            <li class="">
                            <a href="device_location.php"><i class="icon-chevron-right"></i><i class="icon-map-marker"></i>Localiser Equipements</a>
                            </li>
						    <li class="">
                            <a href="location.php"><i class="icon-chevron-right"></i><i class="icon-sitemap"></i> Ajouter Location</a>
                            </li>
						    </ul>
						</li>
						
					  <!------/.* manage TRIS user sidebar*------->	
						<li>						
						    <a href="javascript:;" role="button" class="dropdown-toggle" data-toggle="collapse" data-target="#bs2"><i class="icon-chevron-right"></i><i class="icon-group"></i>&nbsp;Gerer Utilisateurs
							<div class="muted pull-right"><i class="caret"></i></div></a>						
						    <ul id="bs2" class="collapse">						
                            <li class="">
                            <a href="respTech_user.php"><i class="icon-chevron-right"></i><i class="icon-user"></i>&nbsp;Responsables Technique</a>
                            </li>
						    <li class="">
                            <a href="fonct_user.php"><i class="icon-chevron-right"></i><i class="icon-user"></i>&nbsp;Fonctionnaires</a>
                            </li>
						    </ul>
						</li>
						
						<!------/.* System Log sidebar*------->	
						<li>						
						    <a href="javascript:;" role="button" class="dropdown-toggle" data-toggle="collapse" data-target="#bs3"><i class="icon-chevron-right"></i><i class="icon-book"></i>&nbsp;Journal du Systeme
							<div class="muted pull-right"><i class="caret"></i></div></a>						
						    <ul id="bs3" class="collapse">						
                            <li class="">
                            <a href="activity_log.php"><i class="icon-chevron-right"></i><i class="icon-file"></i> Journal d'activite</a>
                            </li>
						    <li class="">
                            <a href="user_log.php"><i class="icon-chevron-right"></i><i class="icon-file"></i>Journal des Utilisateurs </a>
                            </li>
						    </ul>
						</li>
						
					  <!------/.* notification sidebar*------->
					    <li class="">
				           <a href="notification.php"><i class="icon-chevron-right"></i><i class="icon-globe"></i>&nbsp;Notification
				           <?php if($not_read == '0'){
				           }else{ ?>
					       <span class="badge badge-important"><?php echo $not_read; ?></span>
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
                           <a href="javascript:;" role="button" class="dropdown-toggle" data-toggle="collapse" data-target="#bs4"><i class="icon-chevron-right"></i><i class="icon-search icon-large"></i>&nbsp;Recherche Avancee 
						   <div class="muted pull-right"><i class="caret"></i></div></a>
                           <ul id="bs4" class="collapse">
                           <li>
                           <a href="#myModal" data-toggle="modal" tabindex="1"><i class="icon-chevron-right"></i><i class="icon-search"></i>&nbsp;Emplacement Equipement</a>
                           </li>
                          
                           <li>
                           <a href="#myModal1" data-toggle="modal" tabindex="-1" ><i class="icon-chevron-right"></i><i class="icon-search"></i>&nbsp;Tous Equipements</a>
                           </li>
                           </ul>
                        </li>
                  </ul>					
				<?php include('search_form.php'); ?>
				<?php include('search_form1.php'); ?>										
    </div>