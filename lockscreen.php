<?php
@session_start();
$Username = $_SESSION['Username'];
if ($Username=='') 
{
	?>
				<script language='javascript'>
					document.location='login.php';
				</script>
	<?php
}
@$_SESSION['login']=0;
$link=$_GET['link'];
?>
<!DOCTYPE html>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.0
Version: 1.5.2
Author: KeenThemes
Website: http://www.keenthemes.com/
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
  <meta charset="utf-8" />
   <title>Emlak Kontrat Yönetim Sistemi</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <meta content="" name="description" />
  <meta content="" name="author" />
  <meta name="MobileOptimized" content="320">
  <!-- BEGIN GLOBAL MANDATORY STYLES -->          
  <link href="assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
  <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
  <link href="assets/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
  <!-- END GLOBAL MANDATORY STYLES -->
  <!-- BEGIN THEME STYLES --> 
  <link href="assets/css/style-metronic.css" rel="stylesheet" type="text/css"/>
  <link href="assets/css/style.css" rel="stylesheet" type="text/css"/>
  <link href="assets/css/style-responsive.css" rel="stylesheet" type="text/css"/>
  <link href="assets/css/plugins.css" rel="stylesheet" type="text/css"/>
  <link href="assets/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color"/>
  <link href="assets/css/pages/lock.css" rel="stylesheet" type="text/css" />
  <link href="assets/css/custom.css" rel="stylesheet" type="text/css"/>
  <!-- END THEME STYLES -->
  <link rel="shortcut icon" href="favicon.ico" />
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body>
  <div class="page-lock">
    <div class="page-logo">
      <a class="brand" href="index.html">
      <img src="assets/img/logo.png" alt="logo" />
      </a>
    </div>
    <div class="page-body">
      <img class="page-lock-img" src="assets/img/profile.jpg" alt="" style="max-width:250px;">
      <div class="page-lock-info">
        <h1><?php echo $Username?></h1>
        <span class="locked">Ekran Kilitli</span>
        <form class="form-inline" action="" method="post">
          <div class="input-group input-medium">
            <input type="password" class="form-control" placeholder="Password" id="Password" name="Password">
            <span class="input-group-btn">        
            <button type="submit" class="btn blue icn-only"><i class="m-icon-swapright m-icon-white"></i></button>
            </span>
          </div>
          <!-- /input-group -->
          <div class="relogin">
            <a href="logout.php"><?php echo $Username;?> değil misin?</a>
          </div>
        </form>
      </div>
    </div>
    <div class="page-footer">
      2021 &copy; Ferhat Aysever
    </div>
  </div>
  <!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
  <!-- BEGIN CORE PLUGINS -->   
  <!--[if lt IE 9]>
  <script src="assets/plugins/respond.min.js"></script>
  <script src="assets/plugins/excanvas.min.js"></script> 
  <![endif]-->   
  <script src="assets/plugins/jquery-1.10.2.min.js" type="text/javascript"></script>
  <script src="assets/plugins/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>    
  <script src="assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
  <script src="assets/plugins/bootstrap-hover-dropdown/twitter-bootstrap-hover-dropdown.min.js" type="text/javascript" ></script>
  <script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
  <script src="assets/plugins/jquery.blockui.min.js" type="text/javascript"></script>  
  <script src="assets/plugins/jquery.cookie.min.js" type="text/javascript"></script>
  <script src="assets/plugins/uniform/jquery.uniform.min.js" type="text/javascript" ></script>
  <!-- END CORE PLUGINS -->
  <!-- BEGIN PAGE LEVEL PLUGINS -->
  <script src="assets/plugins/backstretch/jquery.backstretch.min.js" type="text/javascript"></script>
  <!-- END PAGE LEVEL PLUGINS -->   
  <script src="assets/scripts/app.js"></script>  
  <script src="assets/scripts/lock.js"></script>      
  <script>
    jQuery(document).ready(function() {    
       App.init();
       Lock.init();
    });
  </script>
  <!-- END JAVASCRIPTS -->
   
   <?php
   			include "pages/connect.php";
			if($_POST) {
			$Password=$_POST['Password']; 
			$Query=@mysql_query("Select * from kullanicilar where Username='$Username' and Password='$Password'",$conn);
			$W=@mysql_fetch_assoc($Query);
			$Kullanici_Adi=$W['Username'];
			$Parola=$W['Password'];
			
			if ($Kullanici_Adi==$Username && $Parola==$Password) {
				$_SESSION['login']=1;
				$_SESSION['Username']=$W['Username'];
				$_SESSION['UserId']=$W['id'];
	?>
				<script language='javascript'>
					document.location='<?php echo $link;?>';
				</script>
    <?php
			}
			else 
			{
	?>
<script language='javascript'>
	window.alert('Sifreyi Yanlis Girdiniz!');
</script>
<?php
}
}
?>

</body>
<!-- END BODY -->
</html>