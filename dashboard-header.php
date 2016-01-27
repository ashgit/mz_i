 <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
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
		  <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button" >
            <span class="sr-only">Toggle navigation</span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <li class="dropdown notifications-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" >
                  <i class="fa fa-bell-o"></i>
                  <span class="label bg-yellow-new"><?php echo $notify_total; ?></span>
                </a>
                <ul class="dropdown-menu">
                  <li class="header"><?php echo 'You have '.$notify_total.' notifications';?></li>
                  <li>
                    <!-- inner menu: contains the actual data -->
                    <ul class="menu">
					 <li>

                     
                    </ul>
                  </li>
                  <li class="footer"><a href="notifications.php">View all</a></li>
                </ul>
              </li>
             
              <!-- User Account: style can be found in dropdown.less -->
              <?php /*<li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="<?php echo $userinfo['profile_pic']; ?>" class="user-image" alt="User Image">
                  <span class="hidden-xs"><?php echo $userinfo['name']; ?></span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="<?php echo $userinfo['profile_pic']; ?>" class="img-circle" alt="User Image">
                    <p>
                     <?php echo $userinfo['name']; ?>
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
              </li> */?>
              <!-- Control Sidebar Toggle Button -->
              <!--li>
                <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
              </li-->
            </ul>
          </div>
        </nav>
      </header>