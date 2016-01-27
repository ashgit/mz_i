<!DOCTYPE html>
<html>
<style>
.listclass
{
	padding:5px;
	background-color:#FFF;
	border-bottom:5px solid #FCFCFC;
}
</style>
<?php include("head.php");?>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
<?php include("dashboard-header.php");?>
     <?php include("dashboard-sidebar.php");?>
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">		 
          <h1>
        <a href=""><?php echo $building_info['building_name'];?></a>
          </h1>
        <div class="breadcrumb">
		
		  </div>
        </section>

        <!-- Main content -->
        <section class="content">
          <!-- Small boxes (Stat box) -->
		  <div id="container">

          <div class="row">

		  <div class="col-md-12 notice-div" id="nearby_div">
		 <ul style="list-style-type:none;width:60%">
	
           </div>
		   </ul>
          </div><!-- /.row -->
		  
         </div>

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
	  
	  
	  	  		 <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
	  <form name="submit_adv" method="post" enctype="multipart/form-data">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Add New Banner</h4>
        </div>
		
        <div class="modal-body">
        <div class="form-group">
  <label for="usr">Title:</label>
  <input type="text" name="title" required class="form-control" id="usr">
</div>

 <div class="form-group">
  <label for="usr">Upload Banner:</label><br>
  <input type="file" name="group_image1"  class="form-control" style="width:180px;float:left"  id="usr">
</div>

        </div>

		</form>
      </div>
    </div>
  </div>
	  
	  
	  <!-- Modal2 -->
  <div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
	  <form name="submit_adv" method="post" enctype="multipart/form-data">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"></h4>
        </div>
		
        <div class="modal-body">
        
        </div>
		
        <div class="modal-footer">
		 <button type="submit" name="submit" class="btn btn-primary">Add</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
		</form>
      </div>
    </div>
  </div>
	  
       <?php include("footer.php");?>
    <?php include("settings.php");?>
    </div><!-- ./wrapper -->

    <?php include("footer-include.php");?>
  </body>
</html>
