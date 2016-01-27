<?php include("../modal.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | SOCIAL</title>
	
	<!-- core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/font-awesome.min.css" rel="stylesheet">
    <link href="../css/animate.min.css" rel="stylesheet">
    <link href="../css/prettyPhoto.css" rel="stylesheet">
    <link href="../css/main.css" rel="stylesheet">
    <link href="../css/responsive.css" rel="stylesheet">
	
	  <!-- CSS -->
        <!--link href='http://fonts.googleapis.com/css?family=Roboto:400,100,900' rel='stylesheet' type='text/css'--><!-- Styles -->
        <!--link href="css/loader.css" rel="stylesheet" type="text/css"-->
        <link href="../css/normalize.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="../css/font-awesome.min.css">
        <link href="../css/style.css" rel="stylesheet" type="text/css">
      
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="../images/ico/favicon.ico">
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
</head><!--/head-->

<body class="homepage">
<?php include('header.php'); ?>
<div style="height:700px">
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

                <li class="layer" data-depth="1.00">
                    <div class="depth-5">
                        <img alt="flake" src="../images/flakes/depth5/flakes.png">
                    </div>
                </li>
       
            </ul>
			<div class="main">
			<h2 style="color:#FFF;font-size:40px">Love Where You Live</h2>
<h3 style="color:#FFF;font-size:25px">Mycoop is a private social network for residential buildings. Connect with neighbours and make things happen.</h3>
</div>
		<div class="login">
		<h3 style="color:#FFF;font-size:25px;padding-bottom:0px">Register | Login</h3> 
		
		        <br>
				<form name="login" action="business_login_confirm.php" method="post">
				<input type="text" placeholder="Name" name="user"><br>
				<input type="text" placeholder="Email" name="email"><br>
				<input type="password" placeholder="Password" name="password"><br>
				<input type="submit" value="Confirm"><br>
				Or<br>
				<img src="../images/facebook_login.png">
				<br>
				
			
		</div>
		
        </div>
		</div>
        <!--div class="carousel slide">
            <ol class="carousel-indicators">
                <li data-target="#main-slider" data-slide-to="0" class="active"></li>
                <li data-target="#main-slider" data-slide-to="1"></li>
                <li data-target="#main-slider" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">

                <div class="item active" style="background-image: url(images/slider/bg1.jpg)">
                    <div class="container">
                        <div class="row slide-margin">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    <h1 class="animation animated-item-1">Lorem ipsum dolor sit amet consectetur adipisicing elit</h1>
                                    <h2 class="animation animated-item-2">Accusantium doloremque laudantium totam rem aperiam, eaque ipsa...</h2>
                                    <a class="btn-slide animation animated-item-3" href="#">Read More</a>
                                </div>
                            </div>

                            <div class="col-sm-6 hidden-xs animation animated-item-4">
                                <div class="slider-img">
                                    <img src="images/slider/img1.png" class="img-responsive">
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="item" style="background-image: url(images/slider/bg2.jpg)">
                    <div class="container">
                        <div class="row slide-margin">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    <h1 class="animation animated-item-1">Lorem ipsum dolor sit amet consectetur adipisicing elit</h1>
                                    <h2 class="animation animated-item-2">Accusantium doloremque laudantium totam rem aperiam, eaque ipsa...</h2>
                                    <a class="btn-slide animation animated-item-3" href="#">Read More</a>
                                </div>
                            </div>

                            <div class="col-sm-6 hidden-xs animation animated-item-4">
                                <div class="slider-img">
                                    <img src="images/slider/img2.png" class="img-responsive">
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="item" style="background-image: url(images/slider/bg3.jpg)">
                    <div class="container">
                        <div class="row slide-margin">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    <h1 class="animation animated-item-1">Lorem ipsum dolor sit amet consectetur adipisicing elit</h1>
                                    <h2 class="animation animated-item-2">Accusantium doloremque laudantium totam rem aperiam, eaque ipsa...</h2>
                                    <a class="btn-slide animation animated-item-3" href="#">Read More</a>
                                </div>
                            </div>
                            <div class="col-sm-6 hidden-xs animation animated-item-4">
                                <div class="slider-img">
                                    <img src="images/slider/img3.png" class="img-responsive">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div--><!--/.carousel-->
        <!--a class="prev hidden-xs" href="#main-slider" data-slide="prev">
            <i class="fa fa-chevron-left"></i>
        </a>
        <a class="next hidden-xs" href="#main-slider" data-slide="next">
            <i class="fa fa-chevron-right"></i>
        </a-->
   <!--/#main-slider-->

    
    

                 

               
              
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#recent-works-->

  
    <script src="../js/jquery.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery.prettyPhoto.js"></script>
    <script src="../js/jquery.isotope.min.js"></script>
    <script src="../js/main.js"></script>
    <script src="../js/wow.min.js"></script>
</body>
</html>