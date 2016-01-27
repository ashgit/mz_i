<!DOCTYPE html>
<html>
<?php include("head.php");?>
  <body class="hold-transition skin-blue sidebar-mini">
  
    <div class="wrapper">
<?php include("dashboard-header.php");?>
     <?php include("dashboard-sidebar.php");?>
	  <?php
	 //print_r($_POST['submit']);
	 if(isset($_POST['submit']))
	 {
	$name = $_POST['business_name'];
	$address = $_POST['address'];
	$category = $_POST['category'];
$address = str_replace(" ", "+", $_POST['address']);
//$address = "Sector+45+noida";
$url = "http://maps.google.com/maps/api/geocode/json?address=$address&sensor=true&region=India";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_PROXYPORT, 3128);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
$response = curl_exec($ch);
curl_close($ch);
$response_a = json_decode($response);

$lat = $response_a->results[0]->geometry->location->lat;

$long = $response_a->results[0]->geometry->location->lng;

		 
	 }
	 ?>
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
		  <?php 
			$deals = $dbinst->get_business_deals();
			   
		  ?>
       
          <div class="breadcrumb">
              <input type="button" name="add_adv" value="Add New Deal" data-toggle="modal" data-target="#myModal" class="btn-primary" />
          </div>
        </section>

        <!-- Main content -->
        <section class="content">
          <!-- Small boxes (Stat box) -->
		  <div id="container">

          <div class="row">
		    
              <h3>Deals</h3>
          
		  <?php while($deal = mysql_fetch_array($deals))
		  {
			 
		 $img_path = "../images/deals/".$deal['image'];
			   $business_details = $dbinst->get_business_info($deal['business_id']);
			  ?>
			    <div class="col-md-3" style="margin-top:10px" data-toggle="modal" data-target="#myModal2" >
        <strong><?php echo $deal['title']; ?></strong>
		   <img src="<?php echo $img_path; ?>" height="200px" width="200px" />
		   <label><?php echo $business_details['business_name']; ?></label><br>
		   <label><?php echo $business_details['address']; ?></label><br>
			</div>
			<?php
			
		  }
			?>
         
           
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
