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
          <div class="breadcrumb">
              <input type="button" name="add_adv" value="Add New Business" data-toggle="modal" data-target="#myModal" class="btn-primary" />
          </div>
        </section>

        <!-- Main content -->
        <section class="content">
          <!-- Small boxes (Stat box) -->
		  <div id="container">

          <div class="row">
		     <div class="col-md-12">
              <h3>Businesses</h3>
            <ul>
		  <?php while($business = mysql_fetch_array($business_details))
		  {
		
			  ?>
         <li><?php echo $business['business_name'].'&nbsp;-&nbsp'.$business['address']; ?></li>
			
			<?php
		  }
			?>
          </ul>
            </div><!-- ./col -->
          </div><!-- /.row -->
		  
         </div>

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
	  
	   <!-- Modal -->
	
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">

	  <form name="submit_business" method="post" enctype="multipart/form-data">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Add New Business</h4>
        </div>
		
        <div class="modal-body">
        <div class="form-group">
  <label for="usr">Business Name:</label>
  <input type="text" name="business_name" required class="form-control" id="business_name">
</div>

 <div class="form-group">
  <label for="usr">Address:</label><br>
  <textarea type="text" name="address"  class="form-control" onkeypress="geolocation_val(this.value)"  id="address"></textarea>

</div>
<div class="form-group">
  <label for="usr">Category:</label><br>
  <select style="width:180px;float:left"  name="category">
  <?php
		$deal_categories = $dbinst->get_deal_categories();
		?>
		<?php 
		while($cat = mysql_fetch_array($deal_categories))
		{
		?>
<option value="<?php echo $cat['deal_category_id']; ?>"><?php echo $cat['category_name']; ?></option>
		<?php
		}
		?>
  </select>
 
</div>
        </div>
 <div class="modal-footer">
		 <button type="submit" name="submit"  class="btn btn-primary">Add</button>
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
