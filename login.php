<?php


	@session_start();
	
		if(@$_SESSION['login']==1)
		{
		?>
		<script language='javascript'>
		document.location='index.php';
		</script>
		<?php
		
		}


	include('pages/connect.php');

?>

<!DOCTYPE html>
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
   <!-- BEGIN PAGE LEVEL STYLES --> 
   <link rel="stylesheet" type="text/css" href="assets/plugins/select2/select2_metro.css" />
   <!-- END PAGE LEVEL SCRIPTS -->
   <!-- BEGIN THEME STYLES --> 
   
   <link href="assets/css/style-metronic.css" rel="stylesheet" type="text/css"/>
   <link href="assets/css/style.css" rel="stylesheet" type="text/css"/>
   <link href="assets/css/style-responsive.css" rel="stylesheet" type="text/css"/>
   <link href="assets/css/plugins.css" rel="stylesheet" type="text/css"/>
   <link href="assets/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color"/>
   <link href="assets/css/pages/login-soft.css" rel="stylesheet" type="text/css"/>
   <link href="assets/css/custom.css" rel="stylesheet" type="text/css"/>
   <!-- END THEME STYLES -->
   <link rel="shortcut icon" href="assets/img/favicon.jpg" />
   <style type="text/css">
   body,td,th {
	font-family: "Open Sans", sans-serif;
}
   h1,h2,h3,h4,h5,h6 {
	font-family: "Open Sans", sans-serif;
}
   </style>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="login">


   <!-- BEGIN LOGO -->
   <div class="logo">
      <img src="assets/img/logo.png" alt="" /> 
   </div>
   <!-- END LOGO -->
   <!-- BEGIN LOGIN -->
   <div class="content">
   
   
   
      <!-- BEGIN LOGIN FORM -->
      <form class="login-form" action="" method="post">
         <h3 class="form-title">Kullanıcı Giriş Ekranı</h3>
         <div class="alert alert-error hide">
            <button class="close" data-dismiss="alert"></button>
            <span>Kullanıcı adı ve şifre giriniz.</span>
         </div>
         <div class="form-group">
            <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
            <label class="control-label visible-ie8 visible-ie9">Kullanıcı Adı</label>
            <div class="input-icon">
               <i class="icon-user"></i>
               <input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Kullanıcı Adı" name="Username"/>
            </div>
         </div>
         <div class="form-group">
            <label class="control-label visible-ie8 visible-ie9">Parola</label>
            <div class="input-icon">
               <i class="icon-lock"></i>
               <input class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="Parola" name="Password"/>
            </div>
         </div>
         <div class="form-actions">
            <button type="submit" class="btn blue pull-right">
            Giriş <i class="m-icon-swapright m-icon-white"></i>
            </button>            
         </div>
      </form>
      <!-- END LOGIN FORM -->        
      
      
      
      
      
      <!-- BEGIN FORGOT PASSWORD FORM -->
      <form class="forget-form" action="login.php" method="post">
         <h3 >Parolanızı mı unuttunuz?</h3>
         <p>Lütfen email adresinizi giriniz</p>
         <div class="form-group">
            <div class="input-icon">
               <i class="icon-envelope"></i>
               <input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Email" name="email" />
            </div>
         </div>
         <div class="form-actions">
            <button type="button" id="back-btn" class="btn">
            <i class="m-icon-swapleft"></i> Geri
            </button>
            <button type="submit" class="btn blue pull-right">
            Gönder <i class="m-icon-swapright m-icon-white"></i>
            </button>            
         </div>
      </form>
      <!-- END FORGOT PASSWORD FORM -->
   
   
   
   
   </div>
   <!-- END LOGIN -->
   <!-- BEGIN COPYRIGHT -->
   <div class="copyright">
      2021 &copy; Ferhat Aysever
   </div>
   <!-- END COPYRIGHT -->
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
   <script src="assets/plugins/jquery-validation/dist/jquery.validate.min.js" type="text/javascript"></script>
   <script src="assets/plugins/backstretch/jquery.backstretch.min.js" type="text/javascript"></script>
   <script type="text/javascript" src="assets/plugins/select2/select2.min.js"></script>
   <!-- END PAGE LEVEL PLUGINS -->
   <!-- BEGIN PAGE LEVEL SCRIPTS -->
   <script src="assets/scripts/app.js" type="text/javascript"></script>
   <script src="assets/scripts/login-soft.js" type="text/javascript"></script>      
   <!-- END PAGE LEVEL SCRIPTS --> 
   <script>
      jQuery(document).ready(function() {     
        App.init();
        Login.init();
      });
   </script>
   <!-- END JAVASCRIPTS -->
   
    <?php
	if($_POST) {
	
		if (trim(($_POST['Password'])=='')||(trim($_POST['Username'])==''))
		{
			?>
			<script language='javascript'>
				window.alert('Bilgileri Kontrol Ediniz!');
				document.location='login.php';
			</script>
			<?php
		}
		else
		{
			$Password=$_POST['Password']; 
			$Username=$_POST['Username'];

			$sorgu = sprintf("Select * from kullanicilar where Username='%s' and Password='%s'",
			mysql_real_escape_string($Username),mysql_real_escape_string($Password));
			
			$Query=mysql_query($sorgu,$conn);
			$W=@mysql_fetch_assoc($Query);
			$Kullanici_Adi=$W['Username'];
			$Parola=$W['Password'];
			
			if ($Kullanici_Adi==$Username && $Parola==$Password) 
			{
				
				$_SESSION['login']=1;
				$_SESSION['Username']=$W['Username'];
				$_SESSION['UserId']=$W['id'];
				?>
				<script language='javascript'>
					document.location='index.php';
				</script>
			<?php
			}
			else 
			{
			?>
			<script language='javascript'>
				window.alert('Bilgileri Kontrol Ediniz!');
			</script>
			<?php
			}
		}
	}
	?>


</body>
<!-- END BODY -->
</html>