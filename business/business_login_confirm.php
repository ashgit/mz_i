<?php include("../modal.php");?>
  <?php 
$dbinst = new DB();
$today = date('d-m-Y');
 ?>
<?php
$name = $_POST['user'];
$email = $_POST['email'];
$password = $_POST['password'];
$users = $dbinst->check_business_user($email);
$users_login = $dbinst->check_business_login($email,$password);
if($users<=0)
{
	$insert_user = $dbinst->insert_business_user($name,$email,$password);
	
	
	$_SESSION['business_user_id'] = $insert_user;
	$_SESSION['business_email'] = $email;
	
	header('Location: home');
}
else if($users_login > 0)
{
	$business_details = $dbinst->get_business_user($email);
	
	$_SESSION['business_user_id'] = $business_details['id'];
	$_SESSION['business_email'] = $email;
	
	header('Location: home');
}
else
{
	
}
?>