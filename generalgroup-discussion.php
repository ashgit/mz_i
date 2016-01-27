 <!DOCTYPE html>
<html>
<?php include("head.php");?>
  <body class="hold-transition skin-blue sidebar-mini" style="padding-right:0px">
    <div class="wrapper">
<?php include("dashboard-header.php");?>
     <?php include("dashboard-sidebar.php");?>
	  <?php $building_id = $userinfo['building_id']; 
		       $building_info = $dbinst->get_building_info($building_id);   
		  ?>
		 


   <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
		 
          <!--h1>
        <a href=""><?php //echo $building_info['building_name'];?></a>
          </h1-->
          <!--ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
          </ol-->
		  
        </section>

        <!-- Main content -->
        <section class="content">
          <!-- Small boxes (Stat box) -->
		  <div id="container">

          <div class="row">
		 <div class="col-md-10" id="open_chat_window">
		 </div>
		    <div class="col-md-10" id="discussions" style="padding-right:0px;width:78%">
			        <!-- Chat box -->
              <div class="box box-success">
                <div class="box-header">
                  <i class="fa fa-clipboard icon-activity fa-icon-re"></i>
                  <h3 class="box-title">Discussions</h3>

                </div>
				<div class="box-footer">
				
				<script type="text/javascript" src="scripts/jquery.min.js"></script>
                <script type="text/javascript" src="scripts/jquery.form.js"></script>
<script type="text/javascript">
$(document).ready(function() 
{ 
$('#add').click(function()
{ 
$("#preview").html('');
$("#preview").html('<img src="loader.gif" alt="Uploading...."/>');
$(".imageform").ajaxForm({
target: '#preview'
}).submit();
});
});
</script>
<?php include('ajax-general-discussion-group.php');?>

				<form id="imageform" method="post" enctype="multipart/form-data" >
			
				
                  <div class="input-group">
				  <input type="hidden" name="group_id" value="<?php echo $group_id; ?>" />
                    <input class="form-control" name="activity_text" placeholder="Enter Discussion title...">
                    <div class="input-group-btn">
                      <input type="submit" class="btn btn-success" name="submit" style="font-size:15px" value="+" id="add"><i class="fa fa-plus"></i></input>
                    </div>
                  </div>
				 
				    <div class="">
					<div style="height:0px;overflow:hidden">
  <input type="file" name="photoimg" id="photoimg" />
</div>
<i class="fa fa-camera icon-camera" onclick="chooseFile();" id="photo" title="Add Photo"></i>

<script type="text/javascript">
function show_hide_child(val)
{
	
	if(document.getElementById('child_'+val).style.display=='none')
	{
	document.getElementById('child_'+val).style.display='block';	
	}
	else
	{
	document.getElementById('child_'+val).style.display='none';		
	}
}

function show_hide_comments(val)
{	
	if(document.getElementById('comment_'+val).style.display=='none')
	{
	document.getElementById('comment_'+val).style.display='block';	
	}
	else
	{
	document.getElementById('comment_'+val).style.display='none';		
	}
}

   function chooseFile() {
      $("#photoimg").click();
   }
   
   function comment_child_forum(activityid,building_id)
{
	
var text = document.getElementById("activity_text").value;	

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
    document.getElementById("comment_ajax").innerHTML=xmlhttp.responseText;
	document.getElementById("activity_text").value = '';
    }
  }
xmlhttp.open("GET","ajax-general-discussion-group-child.php?activityid="+activityid+"&&text="+text+"&&building_id="+building_id,true);
xmlhttp.send();
}

</script>
                     
                    </div>
					 </form>
	
                </div>
 <?php 
				 //time ago function
   
    function time_ago($date)

{

if(empty($date)) {

return "No date provided";

}

$periods = array("second", "minute", "hour", "day", "week", "month", "year", "decade");

$lengths = array("60","60","24","7","4.35","12","10");

$now = time();

$date_today = strtotime(date('d-m-y',strtotime($date)));

$today = strtotime(date('d-m-y'));

$unix_date = strtotime($date);

// check validity of date

if(empty($unix_date)) {

return "Bad date";

}

// is it future date or past date

if($now > $unix_date) {

$difference = $now - $unix_date;

$tense = "ago";

} else {

$difference = $unix_date - $now;
$tense = "from now";}

for($j = 0; $difference >= $lengths[$j] && $j < count($lengths)-1; $j++) {

$difference /= $lengths[$j];

}

$difference = round($difference);

if($difference != 1) {

$periods[$j].= "s";

}
if($today==$date_today)
{
	return "Today";
}
else{
return "$difference $periods[$j] {$tense}";
}

} 
 $general_discussion_messages = $dbinst->get_general_group_discussion_messages($building_id);
 if(mysql_num_rows($general_discussion_messages)>0)
		  {
			  $c=1;
		  while($messages = mysql_fetch_array($general_discussion_messages))
		  {
			  $activity_id = $messages['activity_id'];
			  $user_name = $dbinst->get_user_info($messages['user_id']);
              $pic = $user_name['profile_pic'];
			  $userid = base64_encode(convert_uuencode($messages['user_id']));
			  if($messages['activity_parent_id']==0)
			  {
				  ?>	
<div class="col-md-6" style="background-color:#FFF;padding:10px;border:10px solid #ECF0F5">
<!--img src="<?php echo $pic; ?>" class="online" style="height:60px;width:60px;border-radius:60px"-->
<div>
<small class="text-muted pull-right" style="text-align:center">By <?php echo $name = $user_name['name'];?><br>
<?php echo time_ago($messages['added_date']); ?></small></div>
				
				 <label style="font-size:15px;width:82%;min-height: 40px;vertical-align:top">
				 <a href="ajax-general-discussion-individual-chat?a=<?php echo $activity_id ?>&&b=<?php echo $building_id; ?>"><?php 
				 echo substr($messages['text'],0,90);
				 if(strlen($messages['text'])>90)
				 {echo '...';} 
			     ?></a>
				 </label>
				
					<!----others comments on forum activity---->
				 <!--a onclick="show_hide_comments(<?php echo $c;?>)" class=""><span><i class="fa fa-mail-reply"></i> View Comments</span></a-->	  
		<div id="comment_<?php echo $c;?>" style="display:block;margin-top:8px;border-top:1px solid #CCC;height:200px;overflow:hidden">
		<?php
				if($messages['image']!='')
				{
					?>
				 <img src="uploads/<?php echo $messages['image']; ?>"  data-toggle="modal" data-target="#myModal<?php echo $messages['activity_id']; ?>" width="150px" style="padding-top:5px" />
				 <?php
				}
				?>
		<?php $child_comment = $dbinst->get_general_group_discussion_child_messages($activity_id);
		
		$child_check = mysql_num_rows($child_comment);
		  if($child_check > 0)
		  {
			
			 while($child = mysql_fetch_array($child_comment))
		  {
			 // echo $child['comment'];
			  ?>
			  <?php
			 // echo $child['user_id'];
						$user_name = $dbinst->get_user_info($child['user_id']);
                        $pic = $user_name['profile_pic'];
						$child_users = base64_encode(convert_uuencode($child['user_id']));
						 ?>
						  <div class="">
				    <!--img src="<?php echo $pic; ?>" class="online"-->
					  <p class="message">
					
                  

					  <?php
		
					 // $date = date('d-m-Y',strtotime($messages['added_date']));
				
					  ?>
                        <!--small class="text-muted pull-right"><?php echo time_ago($child['added_date']); ?></small-->
                         <a href="profile?d=<?php echo $child_users;?>" class="name"> <?php
						
                         echo $name = $user_name['name'];
						 ?>
                      </a>
                <?php echo $child['text']; ?><br />
                    </p>
					</div>
			  <?php
		  }
		  }
		 	 	?>  
				</div>
				<!----end of others comments on forum activity---->
				
				<div style="display:block;margin-top:8px;border-top:1px solid #CCC">
				<i class="fa fa-group" style="color:#E1E3E4"></i>
				<?php
				$general_people_count = $dbinst->get_general_discussion_people_count($building_id,$activity_id);
				?>
				&nbsp;<?php echo $general_people_count['people_count']; ?> people talking about this
				</div>
</div>		
<?php
			  }
?>		  
    <?php
			$c++;
		  }
		  }
			?>           
              </div><!-- /.box (chat box) -->
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
