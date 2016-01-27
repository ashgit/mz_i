<?php
error_reporting(0);
session_start();
date_default_timezone_set("Asia/Kolkata");
class DB {
	public $link;
	function __construct() {
		//echo"Constructor";
		$this->link =  mysql_connect('localhost', 'root', '',true) or die('Could not connect'.mysql_error());

		    mysql_select_db("momzom",$this->link) or die( "Cannot select db.");
		
        }
		
		function __destruct () {
			//echo"__destruct";
        	mysql_close($this->link);
    	}
		
	/**************************************************************************************
		kidz_user
	**************************************************************************************/
			public function GetUser($email)
			{
				$result=mysql_query("SELECT * FROM kidz_user WHERE email ='$email'",$this->link);
				$row = mysql_fetch_assoc($result);
				return $row;
			}
			
			public function CreateUser($email,$address,$uimageurl,$noofkids,$deviceid, $followercount,$followingcount,$name,
			 $kid_1dob,$kid_1guid,$kid_1name,$kid_1sex,$kid_1imageurl,
			 $kid_2dob,$kid_2guid,$kid_2name,$kid_2sex,$kid_2imageurl,
			 $kid_3dob,$kid_3guid,$kid_3name,$kid_3sex,$kid_3imageurl,
			 $kid_4dob,$kid_4guid,$kid_4name,$kid_4sex,$kid_4imageurl,
			 $lat, $lang,$datecreated
			 )
			 {
				 mysql_query("INSERT INTO kidz_user (email,address,uimageurl,noofkids,deviceid, followercount,followingcount,name, 
				 kid_1dob,kid_1guid,kid_1name,kid_1sex,kid_1imageurl, 
				 kid_2dob,kid_2guid,kid_2name,kid_2sex,kid_2imageurl, 
				 kid_3dob,kid_3guid,kid_3name,kid_3sex,kid_3imageurl,
				 kid_4dob,kid_4guid,kid_4name,kid_4sex,kid_4imageurl,lat, lang,datecreated) VALUES ('$email','$address',
				 '$uimageurl','$noofkids','$deviceid','$followercount','$followingcount','$name',
				 '$kid_1dob','$kid_1guid','$kid_1name','$kid_1sex','$kid_1imageurl',
				 '$kid_2dob','$kid_2guid','$kid_2name','$kid_2sex','$kid_2imageurl',
				 '$kid_3dob','$kid_3guid','$kid_3name','$kid_3sex','$kid_3imageurl',
				 '$kid_4dob','$kid_4guid','$kid_4name','$kid_4sex','$kid_4imageurl','$lat', '$lang', '$datecreated'
				 )",$this->link);
			 }
			 
			 public function  RegisterDevice($email,$deviceid)
			 {
				$result=mysql_query("UPDATE kidz_user SET deviceid='$deviceid' where email= '$email' ",$this->link);
			 }
			 
	function AddKidDetails($email, $dob, $guid, $name, $sex, $imageurl, $noofkids)
	{
		$kidPrefix = "kid_".$noofkids;
		
		$kid_dob = $kidPrefix."dob";
		$kid_guid = $kidPrefix."guid";
		$kid_name = $kidPrefix."name";
		$kid_sex = $kidPrefix."sex";
		$kid_imageurl = $kidPrefix."imageurl";
		
		$queryString = "UPDATE kidz_user SET " ;
		$queryString .= $kid_dob . "='$dob', ";
		$queryString .= $kid_guid . "='$guid', ";
		$queryString .= $kid_name . "='$name', ";
		$queryString .= $kid_sex . "='$sex', ";
		$queryString .= $kid_imageurl . "='$imageurl', ";
		$queryString .= "noofkids='$noofkids' where email='$email'";
		
		$result = mysql_query($queryString, $this->link);
	}
		//kidz_user ends <---
		
	/**************************************************************************************
		kidz_discussions
	**************************************************************************************/
			public function GetDiscussionDetail($item_id)
			{
				$result=mysql_query("SELECT * FROM kidz_discussions WHERE item_id = '$item_id' ",$this->link);
					$rows = array();
					while($r = mysql_fetch_assoc($result)) {				
						$userrow =  $this->GetUser($r["email"]);
						$mergedArray = $r;
						if( !empty( $userrow ) )
						{
						  $mergedArray = array_merge($r, $userrow);
						}
						
						$rows[] = $mergedArray;
					}
					return $rows;
			}			
			
			public function GetDiscussions($timestamp , $limit)
			{
				$result=mysql_query("SELECT * FROM kidz_discussions WHERE timestamp < '$timestamp' ORDER BY timestamp DESC  LIMIT $limit",$this->link);
				$rows = array();
				while($r = mysql_fetch_assoc($result)) {				
					$userrow =  $this->GetUser($r["email"]);
					$mergedArray = $r;
					if( !empty( $userrow ) )
					{
					  $mergedArray = array_merge($r, $userrow);
					}
					
					$rows[] = $mergedArray;
				}
				return $rows;
			}	
			
			public function AddDiscussionComment($item_id,$email,$comment,$timestamp)
			{
			 mysql_query("INSERT INTO kidz_discussion_comment
			(item_id,email,comment,timestamp) VALUES ('$item_id','$email',
				 '$comment','$timestamp')",$this->link);
				$this->IncrementCommentCount($item_id);	 
			}
			
			public function AddDiscussion($item_id,$email,$topic,$timestamp)
			{
			mysql_query("INSERT INTO kidz_discussions
			(item_id,email,topic,timestamp) VALUES ('$item_id','$email',
				 '$topic','$timestamp')",$this->link);
			}
			
			public function GetDiscussion($item_id)
			{
				$result=mysql_query("SELECT * FROM kidz_discussions WHERE item_id ='$item_id'",$this->link);
				$row = mysql_fetch_assoc($result);
				return $row;
			}	
			
			public function GetDiscussionsComments($item_id,$timestamp,$limit)
			{
				$result=mysql_query("SELECT * FROM kidz_discussion_comment WHERE item_id = '$item_id' && timestamp < '$timestamp' ORDER BY timestamp DESC  LIMIT $limit",$this->link);
				$rows = array();
				while($r = mysql_fetch_assoc($result)) {				
					$userrow =  $this->GetUser($r["email"]);
					$mergedArray = $r;
					if( !empty( $userrow ) )
					{
					  $mergedArray = array_merge($r, $userrow);
					}
					
					$rows[] = $mergedArray;
				}
				return $rows;
			}
			
			function IncrementCommentCount($item_id)
			{
				 $row = $this->GetDiscussion($item_id);
				 $commentCount = 0;
				 $commentCount=$row["comment_count"] + 1;
			$result=mysql_query("UPDATE kidz_discussions SET comment_count='$commentCount' where item_id= '$item_id' ",$this->link);
			}
		// Kidz_discussions methods ends <----
	/**************************************************************************************
		kidz_home_like
	**************************************************************************************/
	function AddFeedItemLike($item_id, $email) 
	{
		mysql_query("INSERT INTO kidz_home_like (item_id,email) VALUES ('$item_id','$email')",$this->link);
		
		// Update the like count..
		$row = $this->GetFeedItem($item_id);
		$likeCount = 0;
		$likeCount=$row["likecount"] + 1;
		$result=mysql_query("UPDATE kidz_home SET likecount='$likeCount' where item_id='$item_id'",$this->link);
	}
	
	function RemoveFeedItemLike($item_id, $email) 
	{
		mysql_query("DELETE FROM kidz_home_like where item_id='$item_id' AND email='$email'",$this->link);
		
		// Update the like count..
		$row = $this->GetFeedItem($item_id);
		$likeCount = 0;
		$likeCount=$row["likecount"] - 1;
		if ($likeCount < 0)
			$likeCount = 0; 
		
		$result=mysql_query("UPDATE kidz_home SET likecount='$likeCount' where item_id='$item_id'",$this->link);
	}

	function DoILikeFeedItem($item_id, $email)
	{
		$iLike = 0;
		$result=mysql_query("SELECT * FROM kidz_home_like WHERE item_id ='$item_id' AND email ='$email'",$this->link);
		if (mysql_num_rows($result) > 0) 
		{
			$iLike =1;
		}
		return $iLike;
	}
	
	/**************************************************************************************
		kidz_home_comments
	**************************************************************************************/
	function AddFeedItemComment($item_id,$email,$comment,$timestamp)
	{
		mysql_query("INSERT INTO kidz_home_comments (item_id,timestamp,comment,email) VALUES ('$item_id','$timestamp','$comment','$email')",$this->link);
		
		// Update the comment count..
		$row = $this->GetFeedItem($item_id);
		$commentCount = 0;
		$commentCount=$row["commentcount"] + 1;
		$result=mysql_query("UPDATE kidz_home SET comment_count='$commentCount' where item_id= '$item_id' ",$this->link);
	}
	
	public function GetFeedItemComments($item_id,$timestamp,$email,$limit)
	{
		$result=mysql_query("SELECT * FROM kidz_home_comments WHERE item_id = '$item_id' AND timestamp < '$timestamp' ORDER BY timestamp DESC  LIMIT $limit",$this->link);
		$rows = array();
		while($r = mysql_fetch_assoc($result)) {				
			$userrow =  $this->GetUser($r["email"]);
			$ifollow =  $this->DoIFollowOther($email,$r["email"]);
			$mergedArray = $r;
			if( !empty( $userrow ) )
			{
				$mergedArray = array_merge($r, $userrow);
			}
			$mergedArray["iFollow"] = $ifollow;
			$rows[] = $mergedArray;
		}
		return $rows;
	}
	
	/**************************************************************************************
		kidz_home
	**************************************************************************************/
	function GetFeedItem($item_id)
	{
		$result=mysql_query("SELECT * FROM kidz_home WHERE item_id ='$item_id'",$this->link);
		$row = mysql_fetch_assoc($result);
		return $row;
	}
	
	function AddFeedItem($item_id, $description, $email, $imageurl, $kid_guid, $kid_type, $storelocation, 
								$storetype, $timestamp, $likecount, $commentcount, $storename, $month)
	{
		mysql_query("INSERT INTO kidz_home (item_id,description,email,imageurl,kid_guid,kid_type,month,storelocation,storename,storetype,timestamp,commentcount,likecount) VALUES ('$item_id','$description','$email','$imageurl','$kid_guid','$kid_type','$month','$storelocation','$storename','$storetype','$timestamp','$commentcount','$likecount')",$this->link);
	}
	
	function GetFeedList($timestamp, $email, $limit, $recentTag)
	{
		$feedListQuery = "SELECT * FROM kidz_home WHERE timestamp ";
		if ($recentTag == "false")
			$feedListQuery .= "<";
		else $feedListQuery .= ">=";
		$feedListQuery .= " '$timestamp' ORDER BY timestamp DESC LIMIT $limit";
		
		$result=mysql_query($feedListQuery, $this->link);
		$rows = array();
		while($r = mysql_fetch_assoc($result)) {				
			$userrow =  $this->GetUser($r["email"]);
			$ifollow =  $this->DoIFollowOther($email,$r["email"]);
			$iLike = $this->DoILikeFeedItem($r["item_id"], $email);
			$mergedArray = $r;
			if( !empty( $userrow ) )
			{
				$mergedArray = array_merge($r, $userrow);
			}
			$mergedArray["iFollow"] = $ifollow;
			$mergedArray["ilike"] = $ifollow;
			$rows[] = $mergedArray;
		}
		return $rows;
	}
	
	function GetFeedListForUser($timestamp, $email, $limit)
	{
		$result = mysql_query("SELECT * FROM kidz_home WHERE email = '$email' AND timestamp < '$timestamp' ORDER BY timestamp DESC LIMIT $limit",$this->link);
		$rows = array();
		while($r = mysql_fetch_assoc($result)) {				
			$userrow =  $this->GetUser($r["email"]);
			$ifollow =  $this->DoIFollowOther($email,$r["email"]);
			$iLike = $this->DoILikeFeedItem($r["item_id"], $email);
			$mergedArray = $r;
			if( !empty( $userrow ) )
			{
				$mergedArray = array_merge($r, $userrow);
			}
			$mergedArray["iFollow"] = $ifollow;
			$mergedArray["ilike"] = $ifollow;
			$rows[] = $mergedArray;
		}
		return $rows;
	}
	
	function GetFeedListAsKidTypes($timestamp, $kid_type, $limit, $recentTag)
	{
		$feedListQuery = "SELECT * FROM kidz_home WHERE kid_type = '$kid_type' AND timestamp ";
		if ($recentTag == "false")
			$feedListQuery .= "<";
		else $feedListQuery .= ">=";
		$feedListQuery .= " '$timestamp' ORDER BY timestamp DESC LIMIT $limit";
		
		$result = mysql_query($feedListQuery, $this->link);
		$rows = array();
		while($r = mysql_fetch_assoc($result)) {				
			$userrow =  $this->GetUser($r["email"]);
			$ifollow =  $this->DoIFollowOther($email,$r["email"]);
			$iLike = $this->DoILikeFeedItem($r["item_id"], $email);
			$mergedArray = $r;
			if( !empty( $userrow ) )
			{
				$mergedArray = array_merge($r, $userrow);
			}
			$mergedArray["iFollow"] = $ifollow;
			$mergedArray["ilike"] = $ifollow;
			$rows[] = $mergedArray;
		}
		return $rows;
	}
	
	/**************************************************************************************
		kidz_notification
	**************************************************************************************/
		function AddNotification($id,$receiver_email,$email,$initiator_name,$initiator_image,$timestamp,$type,$post_id,$post_type)
		{
			mysql_query("INSERT INTO kidz_notification (id,receiver_email,email,initiator_name,initiator_image,timestamp,type,post_id,post_type) VALUES ('$id','$receiver_email','$email','$initiator_name','$initiator_image','$timestamp','$type','$post_id','$post_type')",$this->link);
		}
		
		function ReadNotification($id)
		{
			$result=mysql_query("UPDATE kidz_notification SET readstate=1 where id= '$id' ",$this->link);
		}
		
		function GetNotifications($receiver_email,$timestamp,$limit)
		{
			$result=mysql_query("SELECT * FROM kidz_notification WHERE receiver_email = '$receiver_email' && timestamp < '$timestamp' LIMIT $limit",$this->link);
				$rows = array();
				while($r = mysql_fetch_assoc($result)) {				
					$userrow =  $this->GetUser($r["email"]);
					$mergedArray = $r;
					if( !empty( $userrow ) )
					{
					  $mergedArray = array_merge($r, $userrow);
					}
					
					$rows[] = $mergedArray;
				}
			return $rows;
		}
		//kidz_notification method ends <----
		
	/**************************************************************************************
		kidz_follow
	**************************************************************************************/
		function DoIFollowOther($my_email, $email2)
		{
			$iFollow = 0;
			$result=mysql_query("SELECT * FROM kidz_follow WHERE email_following ='$my_email' && email_tofollow ='$email2' ",$this->link);
			if (mysql_num_rows($result) > 0) 
			{
				$iFollow =1;
			}
			return $iFollow;
		}
		
		function UpdateFollowingCount($email, $decrease)
		{
				 $row = $this->GetUser($email);
				 $followingcount = 0;
				 if($decrease == 1)
					$followingcount=$row["followingcount"] - 1;
				 else	
					$followingcount=$row["followingcount"] + 1;
				$result=mysql_query("UPDATE kidz_user SET followingcount='$followingcount' where email= '$email' ",$this->link);
		}
		
		function UpdateFollowersCount($email,$decrease)
		{
				 $row = $this->GetUser($email);
				 $followercount = 0;
				 if($decrease == 1)
					$followercount=$row["followercount"] - 1;
				 else	
					$followercount=$row["followercount"] + 1;
				$result=mysql_query("UPDATE kidz_user SET followercount='$followercount' where email= '$email' ",$this->link);
		}
			
		function FollowUser($email_following,$email_tofollow,$timestamp)
		{
		mysql_query("INSERT INTO kidz_follow
			(email_following,email_tofollow,timestamp) VALUES ('$email_following','$email_tofollow','$timestamp')",$this->link);
		
		$this->UpdateFollowingCount($email_following,0);	
		$this->UpdateFollowersCount($email_tofollow,0);	
				
		}
		
		function UnFollowUser($email_following,$email_tofollow)
		{
		mysql_query("DELETE FROM kidz_follow WHERE email_following='$email_following' && email_tofollow='$email_tofollow' ");
		
			$this->UpdateFollowingCount($email_following,1);	
			$this->UpdateFollowersCount($email_tofollow,1);	
		}

		function GetUserFollowings($email_following,$timestamp,$limit)
		{
			$result=mysql_query("SELECT * FROM kidz_follow WHERE email_following = '$email_following' && timestamp < '$timestamp' LIMIT $limit",$this->link);
				$rows = array();
				while($r = mysql_fetch_assoc($result)) {				
					$userrow =  $this->GetUser($r["email_tofollow"]);
					$mergedArray = $r;
					if( !empty( $userrow ) )
					{
					  $mergedArray = array_merge($r, $userrow);
					}
					
					$rows[] = $mergedArray;
				}
			return $rows;
		}
		
		function GetUserFollowers($email_tofollow,$timestamp,$limit)
		{
			$result=mysql_query("SELECT * FROM kidz_follow WHERE email_tofollow = '$email_tofollow' && timestamp < '$timestamp' LIMIT $limit",$this->link);
				$rows = array();
				while($r = mysql_fetch_assoc($result)) {				
					$userrow =  $this->GetUser($r["email_following"]);
					$mergedArray = $r;
					if( !empty( $userrow ) )
					{
					  $mergedArray = array_merge($r, $userrow);
					}
					
					$rows[] = $mergedArray;
				}
			return $rows;
		}
 
		//kidz_follow method ends <---
		
	/**************************************************************************************
		kidz_events
	**************************************************************************************/
		function GetEvents($lat,$lang,$circleDist)
		{
		$qu = "SELECT *,  ( 6371 * acos( cos( radians($lat
) ) * cos( radians( lat ) ) * cos( radians( lang ) - radians($lang) ) + sin( radians($lat) ) * sin( radians( lat ) ) ) ) AS distance FROM kidz_events HAVING distance < $circleDist ORDER BY distance";
		
		 $result = mysql_query($qu,$this->link);

		 $rows = array();
				while($r = mysql_fetch_assoc($result)) {				
					$rows[] = $r;
				}
		 return $rows;
		}
		
		function AddEventReview($item_id,$timestamp,$email,$review)
		{
				mysql_query("INSERT INTO kidz_events_reviews
			(item_id,timestamp,email,review) VALUES ('$item_id','$timestamp','$email','$review')",$this->link);
		}
		
		function GetEventReviews($item_id,$timestamp,$limit,$my_email)
		{
			$result=mysql_query("SELECT * FROM kidz_events_reviews WHERE item_id = '$item_id' && timestamp < '$timestamp' ORDER BY timestamp DESC LIMIT $limit",$this->link);
				$rows = array();
				while($r = mysql_fetch_assoc($result)) {				
					$userrow =  $this->GetUser($r["email"]);								
					$ifollow =  $this->DoIFollowOther($my_email,$r["email"]);
					$mergedArray = $r;
					if( !empty( $userrow ) )
					{
					  $mergedArray = array_merge($r, $userrow);
					}
					$mergedArray["iFollow"] = $ifollow;
					$rows[] = $mergedArray;
				}
				return $rows;
		}
		
		//kidz_events method ends <----
	
	/**************************************************************************************
		kidz_business
	**************************************************************************************/
		function GetBusinesses($lat,$lang,$circleDist,$circleDist,$biztype)
		{
		$bizcond="";
		if($biztype="kAccessories")
		{
		$bizcond="kAccessories = 1";
		}
		else if($biztype="kClothes")
		{
		$bizcond="kClothes = 1";
		}
		else if($biztype="kFeeding")
		{
		$bizcond="kFeeding = 1";
		}
		else if($biztype="kFurniture")
		{
		$bizcond="kFurniture = 1";
		}
		else if($biztype="kKidsGear")
		{
		$bizcond="kKidsGear = 1";
		}
		else if($biztype="kStationery")
		{
		$bizcond="kStationery = 1";
		}
		else if($biztype="kToys")
		{
		$bizcond="kToys = 1";
		}
		$qu = "SELECT *,  ( 6371 * acos( cos( radians($lat
) ) * cos( radians( lat ) ) * cos( radians( lang ) - radians($lang) ) + sin( radians($lat) ) * sin( radians( lat ) ) ) ) AS distance FROM kidz_business HAVING distance < $circleDist AND $bizcond ORDER BY distance";
		
		 $result = mysql_query($qu,$this->link);

		 $rows = array();
				while($r = mysql_fetch_assoc($result)) {				
					$rows[] = $r;
				}
		 return $rows;
		}
		
	function AddBusinessReview($item_id,$timestamp,$email,$review)
	{
		mysql_query("INSERT INTO kidz_business_reviews (item_id,timestamp,email,review) VALUES ('$item_id','$timestamp','$email','$review')",$this->link);
	}
		
		function GetBusinessReviews($item_id,$timestamp,$limit,$my_email)
		{
			$result=mysql_query("SELECT * FROM kidz_business_reviews WHERE item_id = '$item_id' && timestamp < '$timestamp' ORDER BY timestamp DESC LIMIT $limit",$this->link);
				$rows = array();
				while($r = mysql_fetch_assoc($result)) {				
					$userrow =  $this->GetUser($r["email"]);								
					$ifollow =  $this->DoIFollowOther($my_email,$r["email"]);
					$mergedArray = $r;
					if( !empty( $userrow ) )
					{
					  $mergedArray = array_merge($r, $userrow);
					}
					$mergedArray["iFollow"] = $ifollow;
					$rows[] = $mergedArray;
				}
				return $rows;
		}
		
		//kidz_business method ends <----
	
	
	//kidz_hobby method starts ---->
		function GetHobbies($lat,$lang,$circleDist,$circleDist,$hobbytype)
		{
		$hobbycond="";
		if($hobbytype="kBrainAndPersonality")
		{
		$hobbycond="kBrainAndPersonality = 1";
		}
		else if($hobbytype="kCookAndBake")
		{
		$hobbycond="kCookAndBake = 1";
		}
		else if($hobbytype="kDanceAndMusic")
		{
		$hobbycond="kDanceAndMusic = 1";
		}
		else if($hobbytype="kPaintAndCraft")
		{
		$hobbycond="kPaintAndCraft = 1";
		}
		else if($hobbytype="kSportsAndGames")
		{
		$hobbycond="kSportsAndGames = 1";
		}
		
		$qu = "SELECT *,  ( 6371 * acos( cos( radians($lat
) ) * cos( radians( lat ) ) * cos( radians( lang ) - radians($lang) ) + sin( radians($lat) ) * sin( radians( lat ) ) ) ) AS distance FROM kidz_hobby HAVING distance < $circleDist AND $hobbycond ORDER BY distance";
		
		 $result = mysql_query($qu,$this->link);

		 $rows = array();
				while($r = mysql_fetch_assoc($result)) {				
					$rows[] = $r;
				}
		 return $rows;
		}
		
		function AddHobbyReview($item_id,$timestamp,$email,$review)
		{
				mysql_query("INSERT INTO kidz_hobby_reviews
			(item_id,timestamp,email,review) VALUES ('$item_id','$timestamp','$email','$review')",$this->link);
		}
		
		function GetHobbyReviews($item_id,$timestamp,$limit,$my_email)
		{
			$result=mysql_query("SELECT * FROM kidz_hobby_reviews WHERE item_id = '$item_id' && timestamp < '$timestamp' ORDER BY timestamp DESC LIMIT $limit",$this->link);
				$rows = array();
				while($r = mysql_fetch_assoc($result)) {				
					$userrow =  $this->GetUser($r["email"]);								
					$ifollow =  $this->DoIFollowOther($my_email,$r["email"]);
					$mergedArray = $r;
					if( !empty( $userrow ) )
					{
					  $mergedArray = array_merge($r, $userrow);
					}
					$mergedArray["iFollow"] = $ifollow;
					$rows[] = $mergedArray;
				}
				return $rows;
		}
		
		//kidz_hobby method ends <----
		
    } //class DB close	


?>