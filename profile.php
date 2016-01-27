<!DOCTYPE html>
<html>
<?php include("head.php");?>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
<?php include("dashboard-header.php");?>
     <?php include("dashboard-sidebar.php");?>
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
		  <?php $building_id = $userinfo['building_id']; 
		       $building_info = $dbinst->get_building_info($building_id);
			   $categories = $dbinst->get_group_categories();
			   
		  ?>
          <h1>
        <a href=""><?php //echo $building_info['building_name'];?></a>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <!-- Small boxes (Stat box) -->
		  <div id="container">

          <div class="row">
		  <?php 
			 
			  $user_profile_id = convert_uudecode(base64_decode($_GET['d']));
			  $user_profile = $dbinst->get_user_info($user_profile_id);
			  $building_user_id = $user_profile['building_id']; 
		      $building_user_info = $dbinst->get_building_info($building_user_id);
			  $city_info = $dbinst->get_city_info($building_user_info['city_id']);
			 // print_r($user_profile);
			  ?>
            <div class="col-md-12">
             
              <div class="">
			  <img src="<?php echo $user_profile['profile_pic']; ?>"><br>
			  <label><?php echo $user_profile['name']; ?></label><br>
			   <label><?php echo $user_profile['marital_status']; ?></label><br>
			   <label>Lives in <?php echo $building_user_info['building_name'].', '.$building_user_info['area'].', '.$city_info['city_name']; ?></label>
			    <label><?php echo $user_profile['about_me']; ?></label>
			   
              </div>
            </div><!-- ./col -->
		
          </div><!-- /.row -->
		  
         </div>

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
       <?php include("footer.php");?>
    <?php include("settings.php");?>
    </div><!-- ./wrapper -->

    <?php include("footer-include.php");?>
  </body>
</html>
