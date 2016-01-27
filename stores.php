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
          </section>

        <!-- Main content -->
        <section class="content">
          <!-- Small boxes (Stat box) -->
		  <div id="container">
			<div class="row">
			
            <div class="col-sm-2" style="padding:0px;">
              <!-- small box -->
			 <a href="home">  
              <div class="small-box bg-aqua" style="border-radius:0px;">      
			   <div class="inner">
                  Home
                </div>
               </div>
			 </a>
            </div><!-- ./col -->
            <div class="col-sm-2" style="padding:0px;">
              <!-- small box -->
			   <a href="stores">  
              <div class="small-box bg-green" style="border-radius:0px;">
                <div class="inner">
                  Stores
                </div>
               </div>
			   </a>
            </div><!-- ./col -->
            <div class="col-sm-2" style="padding:0px;">
              <!-- small box -->
			   <a href="activities">  
              <div class="small-box bg-yellow" style="border-radius:0px;">
                <div class="inner">
                  Activity Centers
                </div>
               </div>
			   </a>
            </div><!-- ./col -->
            <div class="col-sm-2" style="padding:0px;">
              <!-- small box -->
			   <a href="events">  
              <div class="small-box bg-red" style="border-radius:0px;">
                <div class="inner">
                  Events
                </div>
               </div>
			   </a>
            </div><!-- ./col -->
          </div>
          <div class="row">
		  <div class="col-md-10" style="padding:0px;width:78%">
		  <?php while($category = mysql_fetch_array($categories))
		  {
			  $img_path = "images/categories/".$category['image'];
			  $category_id = base64_encode(convert_uuencode($category['group_category_id']));
			  $file_path = $category['file_path'];
			  ?>
            <div class="col-md-3">
              <!-- small box -->
              <div class="">
			  
			   <a href="<?php echo $file_path.'?id='.$category_id; ?>"><img src="<?php echo $img_path; ?>" class="cate" style="width:200px" /></a>
			   
              </div>
            </div><!-- ./col -->
			<?php
		  }
			?>
          </div>
		  <div class="col-md-2" style="width:20%">
	<?php include('building-members.php'); ?>
		  </div>
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
