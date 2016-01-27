      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <!--img src="<?php echo $userinfo['profile_pic']; ?>" class="img-circle" alt="User Image"-->
            </div>
            <div class="pull-left info">
              <p><?php echo $_SESSION['business_name']; ?></p>
              <!--a href="#"><i class="fa fa-circle text-success"></i> Online</a-->
            </div>
          </div>
          <!-- search form -->
          <!--form action="#" method="get" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </form-->
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <!--li class="active treeview">
              <a href="#">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li class="active"><a href="index.html"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
                <li><a href="index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
              </ul>
            </li-->
			<li>
              <a href="home">
                <i class="fa fa-group"></i> <span>My Businesses</span>  <span class="label label-primary pull-right bg-yellow"></span>
              </a>
            </li>
			 <li>
              <a href="deals">
                <i class="fa fa-th"></i> <span>My Deals </span>  <span class="label label-primary pull-right">4</span>
              </a>
            </li>
		
            <!--li class="header">LABELS</li>
            <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
            <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
            <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li-->
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>
