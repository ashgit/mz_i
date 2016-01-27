<?php include("modal.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | SOCIAL</title>
	
	<!-- core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
	
	  <!-- CSS -->
        <!--link href='http://fonts.googleapis.com/css?family=Roboto:400,100,900' rel='stylesheet' type='text/css'--><!-- Styles -->
        <!--link href="css/loader.css" rel="stylesheet" type="text/css"-->
        <link href="css/normalize.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link href="css/style.css" rel="stylesheet" type="text/css">
      
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <!--link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
	   <meta content="yes" name="apple-mobile-web-app-capable">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport"--><!-- Core Meta Data -->
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		
 <style>
 
 .main{
	position: absolute;
	top: calc(15% - 75px);
	left: calc(50% - 500px);
	height: 200px;
	width: 1000px ;
	padding: 40px;
	z-index: 2;
	color:#FFF;

}
 
.login{
	position: absolute;
	top: calc(50% - 75px);
	left: calc(50% - 250px);
	height: 270px;
	width: 500px;
	padding: 35px 40px;
	z-index: 2;
	border-radius:10px;
	background-color:rgba(0, 0, 0, 0.9)
}

.login input[type=text]{
	width: 350px;
	height: 50px;
	background: transparent;
	border: 1px solid rgba(255,255,255,0.6);
	border-radius: 2px;
	color: #fff;
	font-family: 'Exo', sans-serif;
	font-size: 16px;
	font-weight: 400;
	padding: 10px;
}

.login input[type=password]{
	width: 350px;
	height: 50px;
	background: transparent;
	border: 1px solid rgba(255,255,255,0.6);
	border-radius: 2px;
	color: #fff;
	font-family: 'Exo', sans-serif;
	font-size: 16px;
	font-weight: 400;
	padding: 4px;
	margin-top: 10px;
}

.login input[type=button]{
	width: 350px;
	height: 45px;
	background: #7eba31;
	border: 1px solid #7eba31;
	cursor: pointer;
	border-radius: 2px;
	color: #FFF;
	font-family: 'Exo', sans-serif;
	font-size: 16px;
	font-weight: 600;
	padding: 6px;
	margin-top: 10px;
}

.login input[type=button]:hover{
	opacity: 0.8;
}

.login input[type=button]:active{
	opacity: 0.6;
}

.login input[type=text]:focus{
	outline: none;
	border: 1px solid rgba(255,255,255,0.9);
}

.login input[type=password]:focus{
	outline: none;
	border: 1px solid rgba(255,255,255,0.9);
}

.login input[type=button]:focus{
	outline: none;
}

::-webkit-input-placeholder{
   color: rgba(255,255,255,0.6);
}

::-moz-input-placeholder{
   color: rgba(255,255,255,0.6);
}



// search 
.search-ul
{
list-style: none;
margin: 5px 5px 5px 5px;
width: 250px;
}
.search-li
{
display: block;
padding: 5px;
background-color: #FFF;
border-bottom: 1px solid #367;
}
#display
{
margin-left:-5px;
width:390px;
}

</style>

<script type="text/javascript">
function fill(Value)
{
$('#building').val(Value);
$('#display').hide();
}

$(document).ready(function(){
$("#building").keyup(function() {
	//alert(1);
var name = $('#building').val();
//alert(name);
if(name=="")
{
$("#display").html("");
}
else
{
	
$.ajax({
type: "POST",
url: "search_ajax.php",
data: "name="+ name ,
success: function(html){
$("#display").html(html).show();
}
});
}
});
});
</script>

<div id="fb-root"></div>

<script>

	function signinCallback(authResult) 
	{
		if (authResult['status']['signed_in']) 
		{
		if (authResult['status']['method'] == 'PROMPT' /*|| authResult['status']['method'] == 'AUTO'*/) //after signin call comes twice once for prompt and once for auto 
		{
			  gapi.client.load('oauth2', 'v2', function()
			  {
				gapi.client.oauth2.userinfo.get()
				  .execute(function(resp)
				  {
					
					 if(document.getElementById("rememberme").checked == true)
			   {
			   remember = 1;
			   }
			   else
			   {
			    remember = 0;
			   }
			    document.getElementById('social_name').value=resp.name;
			   document.getElementById('social_email').value=resp.email;
			   document.getElementById('profile_pic').value=resp.picture;
			   document.getElementById('rem').value=remember;
			   if(document.getElementById('url_1') != null)
				document.getElementById('url_to_shorten').value = document.getElementById('url_1').value;
			  
			  
			   document.getElementById("social_submit").submit();
					
				  });
			  });
		  }

		} 
		else {
			//	alert("signed_Out");
	  }
	}
</script>

<script>//(function(d, s, id) {
//  var js, fjs = d.getElementsByTagName(s)[0];
//  if (d.getElementById(id)) return;
//  js = d.createElement(s); js.id = id;
//  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=558275784274928&version=v2.0";
//  fjs.parentNode.insertBefore(js, fjs);
//}(document, 'script', 'facebook-jssdk'));

window.fbAsyncInit = function() {
    FB.init({
        appId   : '1044201642267842',
        oauth   : true,
        status  : true, // check login status
        cookie  : true, // enable cookies to allow the server to access the session
        xfbml   : true // parse XFBML
    });

  };

function fb_login(){

    FB.login(function(response) {

        if (response.authResponse) {
            console.log('Welcome!  Fetching your information.... ');
            //console.log(response); // dump complete info
            access_token = response.authResponse.accessToken; //get access token
            user_id = response.authResponse.userID; //get FB UID

            FB.api('/me', function(response) {
                user_email = response.email; //get user email
				user_name = response.name; //get user name
				//user_uid = response.UID;
				picture = 'http://graph.facebook.com/'+user_id+'/picture?width=70&&height=70';
          // you can store this data into your database    
		       if(document.getElementById("rememberme").checked == true)
			   {
			   remember = 1;
			   }
			   else
			   {
			    remember = 0;
			   }
			   document.getElementById('social_name').value=user_name;
			   document.getElementById('social_email').value=user_email;
			   document.getElementById('profile_pic').value=picture;
			   document.getElementById('rem').value=remember;
			   if(document.getElementById('url_1') != null)
				document.getElementById('url_to_shorten').value = document.getElementById('url_1').value;
			   
			   document.getElementById("social_submit").submit();
			   
			   
//window.location="user.php?email=" + user_email+"&&name="+user_name+"&&remember="+remember+"&&uid="+picture;
            });

        } else {
            //user hit cancel button
            console.log('User cancelled login or did not fully authorize.');

        }
    }, {
        scope: 'public_profile,email'
    });
}
(function() {
    var e = document.createElement('script');
    e.src = document.location.protocol + '//connect.facebook.net/en_US/all.js';
    e.async = true;
    document.getElementById('fb-root').appendChild(e);
}());

</script>
</head><!--/head-->

<body class="homepage">
<?php include('header.php'); ?>
<div style="height:530px">
	      <div class="wrapper">
            <ul class="scene unselectable"  style="position:absolute" data-friction-x="0.1" data-friction-y="0.1" data-scalar-x="25" data-scalar-y="15" id="scene">
                <li class="layer" data-depth="0.00">
                </li>
                <!-- BG -->

                <li class="layer" data-depth="0.10">
                    <div class="background">
                    </div>
                </li>

                <!-- Hero -->

                <li class="layer" data-depth="0.20">
                    <div class="title">
                        <h2>
                           
                        </h2>
                        <span class="line"></span>
                    </div>
                </li>


                <!--li class="layer" data-depth="0.80">
                    <div class="depth-4">
                        <img alt="flake" src="images/flakes/depth4/flakes.png">
                    </div>
                </li-->

                <!--li class="layer" data-depth="1.00">
                    <div class="depth-5">
                        <img alt="flake" src="images/flakes/depth5/flakes.png">
                    </div>
                </li-->
       
            </ul>
			<div class="main">
			<h2 style="color:#FFF;font-size:40px">One Place for Women's Meet </h2>
<h3 style="color:#FFF;font-size:25px">sozialcircle.com is a private social network for womens. Connect with Neighbours.</h3>
</div>
		<div class="login">
		<h3 style="color:#FFF;font-size:25px;padding-bottom:20px">Get Started with</h3> 
		<input type="text" placeholder="Enter your building name....." name="building" id="building"><br>
		<div id="display"></div> 
		        <br>
				<!--input type="text" placeholder="username" name="user"><br>
				<input type="password" placeholder="password" name="password"><br>
				<input type="button" value="Sign up & join your building"-->
				<a href="#" onclick="fb_login();"><img src="images/facebook_login.png" width="280" height="46" /></a>
				<br>
				OR
				<br>
				<a href="business/">Add Your Business</a>
			
		</div>
		
        </div>
		</div>
      
    <section id="feature">
        <div class="container">
           <div class="center wow fadeInDown">
                <h2>Features</h2>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
            </div>

            <div class="row">
                <div class="features">
                    <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <i class="fa fa-bullhorn"></i>
                            <h2>Fresh and Clean</h2>
                            <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit</h3>
                        </div>
                    </div><!--/.col-md-4-->

                    <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <i class="fa fa-comments"></i>
                            <h2>Retina ready</h2>
                            <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit</h3>
                        </div>
                    </div><!--/.col-md-4-->

                    <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <i class="fa fa-cloud-download"></i>
                            <h2>Easy to customize</h2>
                            <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit</h3>
                        </div>
                    </div><!--/.col-md-4-->
                
                    <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <i class="fa fa-leaf"></i>
                            <h2>Adipisicing elit</h2>
                            <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit</h3>
                        </div>
                    </div><!--/.col-md-4-->

                    <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <i class="fa fa-cogs"></i>
                            <h2>Sed do eiusmod</h2>
                            <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit</h3>
                        </div>
                    </div><!--/.col-md-4-->

                    <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <i class="fa fa-heart"></i>
                            <h2>Labore et dolore</h2>
                            <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit</h3>
                        </div>
                    </div><!--/.col-md-4-->
                </div><!--/.services-->
            </div><!--/.row-->    
        </div><!--/.container-->
    </section><!--/#feature-->

   

    <section id="services" class="service-item">
	   <div class="container">
            <div class="center wow fadeInDown">
                <h2>Our Service</h2>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
            </div>

            <div class="row">

                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap wow fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="images/services/services1.png">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">SEO Marketing</h3>
                            <p>Lorem ipsum dolor sit ame consectetur adipisicing elit</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap wow fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="images/services/services2.png">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">SEO Marketing</h3>
                            <p>Lorem ipsum dolor sit ame consectetur adipisicing elit</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap wow fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="images/services/services3.png">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">SEO Marketing</h3>
                            <p>Lorem ipsum dolor sit ame consectetur adipisicing elit</p>
                        </div>
                    </div>
                </div>  

                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap wow fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="images/services/services4.png">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">SEO Marketing</h3>
                            <p>Lorem ipsum dolor sit ame consectetur adipisicing elit</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap wow fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="images/services/services5.png">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">SEO Marketing</h3>
                            <p>Lorem ipsum dolor sit ame consectetur adipisicing elit</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap wow fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="images/services/services6.png">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">SEO Marketing</h3>
                            <p>Lorem ipsum dolor sit ame consectetur adipisicing elit</p>
                        </div>
                    </div>
                </div>                                                
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#services-->

    <section id="conatcat-info">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <div class="media contact-info wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="pull-left">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="media-body">
                            <h2>Have a question or need a custom quote?</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation +0123 456 70 80</p>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/.container-->    
    </section><!--/#conatcat-info-->

    <footer id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    &copy; 2016 Social. All Rights Reserved.
                </div>
                <div class="col-sm-6">
                    <ul class="pull-right">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Faq</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer><!--/#footer-->

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/wow.min.js"></script>
</body>
</html>