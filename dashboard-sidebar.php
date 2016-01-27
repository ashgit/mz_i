<!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="<?php echo $userinfo['profile_pic']; ?>" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p><?php echo $userinfo['name']; ?></p>
             </div>
          </div>
          <ul class="sidebar-menu">
          
			<li class="treeview">
              <a href="generalgroup-discussion">
                <i class="fa fa-group"></i> <span>Blogs</span>  <span class="label label-primary pull-right bg-yellow-new"></span>
              </a>
            </li>
			 <li class="treeview">
              <a href="blogs">
                <i class="fa fa-th"></i> <span>Recipes</span>  <!--span class="label label-primary pull-right">4</span-->
              </a>
            </li>
			<li class="treeview">
              <a href="deal-categories">
                <i class="fa fa-thumbs-up"></i> <span>Deals</span> <span class="label label pull-right bg-yellow-new"><?php echo $deal_count; ?></span>
              </a>
            </li>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>
