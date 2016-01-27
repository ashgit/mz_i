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
			 // $category_id  = convert_uudecode(base64_decode($_GET['id']));
			   $distance = $dbinst->get_distance($building_info['lat'],$building_info['lng']);		   
		  ?>
			  		  <script type="text/javascript">
function search_nearby(lat,lng)
{

var val = document.getElementById("search").value;
var xmlhttp;
if (window.XMLHttpRequest)
  {
	  // code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {
	  // code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("nearby_div").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","ajax-nearby-search.php?val="+val+"&&lat="+lat+"&&lng="+lng,true);
xmlhttp.send();
}
</script>
          <h1>
        <a href=""><?php echo $building_info['building_name'];?></a>
          </h1>
        <div class="breadcrumb">
		<input type="text" name="search" onkeyup="search_nearby(<?php echo $building_info['lat']; ?>,<?php echo $building_info['lng']; ?>);" id="search" placeholder="Search...." />
		  <!--input type="button" name="add_adv" value="Add Deal" data-toggle="modal" data-target="#myModal" class="btn-primary" /-->
		  </div>
        </section>

        <!-- Main content -->
        <section class="content">
          <!-- Small boxes (Stat box) -->
		  <div id="container">

          <div class="row">

		  <div class="col-md-12 notice-div" id="nearby_div">
		 <ul>
		  <?php

		  $i=1;?>
		  <?php while($business = mysql_fetch_array($distance))
		  {
			//print_r($business);
		
			 // $img_path = "images/deals/".$deal['image'];
			  // $business_details = $dbinst->get_business_info($business_id);
			    
			 
			  ?>
         
			 
			 <?php
			 if(round($business['distance'])==1)
			 {
				 $k = 'Km';
			 }
			 else
			 {
				 $k = 'Kms';
			 }
			 ?>
		    <!--img src="images/pin.png"  style="" /-->
		   <li style="border-bottom:1px solid #CFCFCF;padding:8px"><a href=""><strong style="color:#3c8dbc;font-size:20px"><?php echo $business['business_name']; ?></strong></a><br>
		   <label><?php echo $business['address']; ?></label><br>
		    <label>Distance: <?php echo round($business['distance']).'&nbsp'.$k; ?></label></li>
		  
		
			<?php if($i==3)
			{
				?>
				  <div class="clearfix"></div>
			<?php
			$i=0;
			}
			$i++;
		  
		  }
			?>
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
