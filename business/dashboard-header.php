<header class="main-header">
        <!-- Logo -->
        <a href="home" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>F</b>T</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>Floorat</b></span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <!--a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a-->
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
         <?php
$notify_total = $dbinst->get_notifications_count();
?>
              <!-- Notifications: style can be found in dropdown.less -->
              <li class="dropdown notifications-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" >
                  <i class="fa fa-bell-o"></i>
                  <span class="label label-warning"><?php echo $notify_total; ?></span>
                </a>
                <ul class="dropdown-menu">
                  <li class="header"><?php echo 'You have '.$notify_total.' notifications';?></li>
                  <li>
                    <!-- inner menu: contains the actual data -->
                    <ul class="menu">
					<?php 
					$notification_array= $dbinst->get_notifications();
					while($notification = mysql_fetch_array($notification_array))
					{
						$notification_type = $notification['notification_type'];
						$initiator_id = $notification['initiator_id'];
						// initiator details 
						$get_initiator_name = $dbinst->get_user_info($initiator_id);
						$initiator_name = $get_initiator_name['name'];
						//$user_icon = $get_initiator_name['profile_pic'];
						
						
						$item_id = $notification['item_id'];
						?>
					 <li>
                        <a href="#">
                          <!--i class="fa fa-circle text-red"></i-->
						 
						  <?php
                           if($notification_type==4)
						   {
						    $get_group_name = $dbinst->get_user_building_groups($item_id);
							$group_name = $get_group_name['group_name'];
							echo  '<img src="'.$user_icon.'" width="40" class="img-circle" style="margin-right:5px" />';
						    echo $initiator_name.' wants to join '.$group_name.' group';
						   }
						    if($notification_type==5)
						   {
						    $get_group_name = $dbinst->get_user_building_groups($item_id);
							$group_name = $get_group_name['group_name'];
							echo  '<img src="'.$user_icon.'" width="40" class="img-circle" style="margin-right:5px" />';
						    echo $initiator_name.' accepted your request for '.$group_name.' group';
						   }
						   if($notification_type==6)
						   {
						    $get_group_name = $dbinst->get_user_building_groups($item_id);
							$group_name = $get_group_name['group_name'];
							echo  '<img src="'.$user_icon.'" width="40" class="img-circle" style="margin-right:5px" />';
						    echo $initiator_name.' rejected your request for '.$group_name.' group';
						   }
						  ?>
                        </a>
                      </li>
                     <?php
					}
					 ?>
                     
                    </ul>
                  </li>
                  <li class="footer"><a href="#">View all</a></li>
                </ul>
              </li>
             
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <!--img src="<?php echo $userinfo['profile_pic']; ?>" class="user-image" alt="User Image"-->
                  <span class="hidden-xs"><?php echo $_SESSION['business_name']; ?></span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <!--img src="<?php echo $userinfo['profile_pic']; ?>" class="img-circle" alt="User Image"-->
                    <p>
                     <?php echo $_SESSION['business_name']; ?>
                      <small>Member since <?php echo date('M, Y',strtotime($userinfo['added_date'])); ?></small>
                    </p>
                  </li>
                  <!-- Menu Body -->
                  <!--li class="user-body">
                    <div class="col-xs-4 text-center">
                      <a href="#">Followers</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">Sales</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">Friends</a>
                    </div>
                  </li-->
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="#" class="btn btn-default btn-flat">Profile</a>
                    </div>
                    <div class="pull-right">
                      <a href="#" class="btn btn-default btn-flat">Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
              <!-- Control Sidebar Toggle Button -->
              <!--li>
                <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
              </li-->
            </ul>
          </div>
        </nav>
      </header>