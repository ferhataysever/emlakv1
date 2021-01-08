<!DOCTYPE html>
<!--[if IE 8]> <html lang="tr" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="tr" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!--> <html lang="tr" class="no-js"> <!--<![endif]-->

<head>
   <meta charset="utf-8" />
   <title>Emlak Takip v1 Yönetim Paneli </title>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta content="width=device-width, initial-scale=1.0" name="viewport" />
   <meta content="" name="description" />
   <meta content="" name="author" />
   <meta name="MobileOptimized" content="320">
   <script type="text/javascript" src="ckeditor/ckeditor.js"></script> 

   <!-- BEGIN:GLOBAL MANDATORY STYLES -->          
   <link href="assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
   <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
   <link href="assets/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
   <!-- END:GLOBAL MANDATORY STYLES -->
   
      <!-- BEGIN PAGE LEVEL STYLES -->          
   <link href="assets/plugins/bootstrap-modal/css/bootstrap-modal-bs3patch.css" rel="stylesheet" type="text/css"/>
   <link href="assets/plugins/bootstrap-modal/css/bootstrap-modal.css" rel="stylesheet" type="text/css"/>
   <link rel="stylesheet" type="text/css" href="assets/plugins/jquery-nestable/jquery.nestable.css" />
   <!-- END PAGE LEVEL STYLES -->      
   
   <!-- BEGIN:PAGE LEVEL PLUGIN STYLES --> 
   <link href="assets/plugins/gritter/css/jquery.gritter.css" rel="stylesheet" type="text/css"/>
   <link href="assets/plugins/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" type="text/css"/>
   <link href="assets/plugins/jqvmap/jqvmap/jqvmap.css" rel="stylesheet" type="text/css"/>
   <link href="assets/plugins/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css"/>
   <!-- END:PAGE LEVEL PLUGIN STYLES -->
   
   <!-- BEGIN:THEME STYLES --> 
   <link href="assets/css/style-metronic.css" rel="stylesheet" type="text/css"/>
   <link href="assets/css/style.css" rel="stylesheet" type="text/css"/>
   <link href="assets/css/style-responsive.css" rel="stylesheet" type="text/css"/>
   <link href="assets/css/plugins.css" rel="stylesheet" type="text/css"/>
   <link href="assets/css/pages/tasks.css" rel="stylesheet" type="text/css"/>
   <link href="assets/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color"/>
   <link href="assets/css/custom.css" rel="stylesheet" type="text/css"/>
   <link href="assets/s2/css/select2.min.css" rel="stylesheet" type="text/css"/>
   
   <!-- END:THEME STYLES -->
   <link rel="shortcut icon" href="assets/img/favicon.jpg" />
   <style type="text/css">
   body,td,th {
	font-family: "Open Sans", sans-serif;
}
   </style>
</head>
	<!-- END HEAD -->
	

    <?php

		include('config.php');		
	?>
    
    <!-- BEGIN:SIDEBAR -->
		<?php include('menu.php')?> 
	<!-- END:SIDEBAR -->

    <!-- BEGIN:PAGE -->
		<?php  
			@$q = $_GET['q'];
			
			switch ($q) 
			{
				default:
				include "pages/default.php";
				break;
				

				//sayfalar
				break;	
				case 'sayfa_listesi':
				include "pages/page_list.php";	
				break;	
				case 'sayfa_duzenle':
				include "pages/edit_page.php";	
				break;	


				//iletişim bilgileri
				case 'iletisim_bilgileri':
				include "pages/contact_info.php";	
				break;	
				
				//profile
				case 'profile':
				include "pages/profile.php";	
				break;	

				//üye
				case 'uye_listesi':
				include "pages/uye_list.php";	
				break;

                case 'yeni_uye':
                include "pages/new_uye.php";
                break;


                //sozlesme
                case 'kontrat_listesi':
                include "pages/kontrat_list.php";
                break;

                case 'yeni_kontrat':
                include "pages/new_kontrat.php";
                break;

                case 'kontrat_dokum':
                    include "pages/kontrat_dokum.php";
                    break;

            }
		?>
    <!-- END:PAGE --> 
    <!-- BEGIN:FOOTER -->	
    	<?php include('footer.php'); ?>
    <!-- END:FOOTER -->


   <!-- ckeditor settings -->
	<script language="javascript" type="text/javascript">
        CKEDITOR.replace('Content',{
            filebrowserBrowseUrl: '/browser/browse.php',
            filebrowserImageBrowseUrl: '/browser/browse.php?type=Images',
            filebrowserUploadUrl: '/uploader/upload.php',
            filebrowserImageUploadUrl: '/uploader/upload.php?type=Images',
            filebrowserWindowWidth: '900',
            filebrowserWindowHeight: '400',
            filebrowserBrowseUrl: 'ckfinder/ckfinder.html',
            filebrowserImageBrowseUrl: 'ckfinder/ckfinder.html?Type=Images',
            filebrowserFlashBrowseUrl: 'ckfinder/ckfinder.html?Type=Flash',
            filebrowserUploadUrl: 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
            filebrowserImageUploadUrl: 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
            filebrowserFlashUploadUrl: 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',
            fullPage: true,
            uiColor: '#A1CFF3',
            resize_enabled: false,
            pasteFromWordRemoveFontStyles: false,
            pasteFromWordRemoveStyles: false,
            allowedContent: true
    
        });
    </script>

   <!-- ckeditor settings -->
	<script language="javascript" type="text/javascript">
        CKEDITOR.replace('Content2',{
            filebrowserBrowseUrl: '/browser/browse.php',
            filebrowserImageBrowseUrl: '/browser/browse.php?type=Images',
            filebrowserUploadUrl: '/uploader/upload.php',
            filebrowserImageUploadUrl: '/uploader/upload.php?type=Images',
            filebrowserWindowWidth: '900',
            filebrowserWindowHeight: '400',
            filebrowserBrowseUrl: 'ckfinder/ckfinder.html',
            filebrowserImageBrowseUrl: 'ckfinder/ckfinder.html?Type=Images',
            filebrowserFlashBrowseUrl: 'ckfinder/ckfinder.html?Type=Flash',
            filebrowserUploadUrl: 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
            filebrowserImageUploadUrl: 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
            filebrowserFlashUploadUrl: 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',
            fullPage: true,
            uiColor: '#A1CFF3',
            resize_enabled: false,
            pasteFromWordRemoveFontStyles: false,
            pasteFromWordRemoveStyles: false,
            allowedContent: true
    
        });
    </script>

   <!-- ckeditor settings -->
	<script language="javascript" type="text/javascript">
        CKEDITOR.replace('Content3',{
            filebrowserBrowseUrl: '/browser/browse.php',
            filebrowserImageBrowseUrl: '/browser/browse.php?type=Images',
            filebrowserUploadUrl: '/uploader/upload.php',
            filebrowserImageUploadUrl: '/uploader/upload.php?type=Images',
            filebrowserWindowWidth: '900',
            filebrowserWindowHeight: '400',
            filebrowserBrowseUrl: 'ckfinder/ckfinder.html',
            filebrowserImageBrowseUrl: 'ckfinder/ckfinder.html?Type=Images',
            filebrowserFlashBrowseUrl: 'ckfinder/ckfinder.html?Type=Flash',
            filebrowserUploadUrl: 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
            filebrowserImageUploadUrl: 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
            filebrowserFlashUploadUrl: 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',
            fullPage: true,
            uiColor: '#A1CFF3',
            resize_enabled: false,
            pasteFromWordRemoveFontStyles: false,
            pasteFromWordRemoveStyles: false,
            allowedContent: true
    
        });
    </script>

   <!-- ckeditor settings -->
	<script language="javascript" type="text/javascript">
        CKEDITOR.replace('Content4',{
            filebrowserBrowseUrl: '/browser/browse.php',
            filebrowserImageBrowseUrl: '/browser/browse.php?type=Images',
            filebrowserUploadUrl: '/uploader/upload.php',
            filebrowserImageUploadUrl: '/uploader/upload.php?type=Images',
            filebrowserWindowWidth: '900',
            filebrowserWindowHeight: '400',
            filebrowserBrowseUrl: 'ckfinder/ckfinder.html',
            filebrowserImageBrowseUrl: 'ckfinder/ckfinder.html?Type=Images',
            filebrowserFlashBrowseUrl: 'ckfinder/ckfinder.html?Type=Flash',
            filebrowserUploadUrl: 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
            filebrowserImageUploadUrl: 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
            filebrowserFlashUploadUrl: 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',
            fullPage: true,
            uiColor: '#A1CFF3',
            resize_enabled: false,
            pasteFromWordRemoveFontStyles: false,
            pasteFromWordRemoveStyles: false,
            allowedContent: true
    
        });
    </script>

   <!-- ckeditor settings -->
	<script language="javascript" type="text/javascript">
        CKEDITOR.replace('Content5',{
            filebrowserBrowseUrl: '/browser/browse.php',
            filebrowserImageBrowseUrl: '/browser/browse.php?type=Images',
            filebrowserUploadUrl: '/uploader/upload.php',
            filebrowserImageUploadUrl: '/uploader/upload.php?type=Images',
            filebrowserWindowWidth: '900',
            filebrowserWindowHeight: '400',
            filebrowserBrowseUrl: 'ckfinder/ckfinder.html',
            filebrowserImageBrowseUrl: 'ckfinder/ckfinder.html?Type=Images',
            filebrowserFlashBrowseUrl: 'ckfinder/ckfinder.html?Type=Flash',
            filebrowserUploadUrl: 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
            filebrowserImageUploadUrl: 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
            filebrowserFlashUploadUrl: 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',
            fullPage: true,
            uiColor: '#A1CFF3',
            resize_enabled: false,
            pasteFromWordRemoveFontStyles: false,
            pasteFromWordRemoveStyles: false,
            allowedContent: true
    
        });
    </script>

   <!-- ckeditor settings -->
	<script language="javascript" type="text/javascript">
        CKEDITOR.replace('Content6',{
            filebrowserBrowseUrl: '/browser/browse.php',
            filebrowserImageBrowseUrl: '/browser/browse.php?type=Images',
            filebrowserUploadUrl: '/uploader/upload.php',
            filebrowserImageUploadUrl: '/uploader/upload.php?type=Images',
            filebrowserWindowWidth: '900',
            filebrowserWindowHeight: '400',
            filebrowserBrowseUrl: 'ckfinder/ckfinder.html',
            filebrowserImageBrowseUrl: 'ckfinder/ckfinder.html?Type=Images',
            filebrowserFlashBrowseUrl: 'ckfinder/ckfinder.html?Type=Flash',
            filebrowserUploadUrl: 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
            filebrowserImageUploadUrl: 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
            filebrowserFlashUploadUrl: 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',
            fullPage: true,
            uiColor: '#A1CFF3',
            resize_enabled: false,
            pasteFromWordRemoveFontStyles: false,
            pasteFromWordRemoveStyles: false,
            allowedContent: true
    
        });
    </script>

   <!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
   <!-- BEGIN CORE PLUGINS -->   
   <!--[if lt IE 9]>
   <script src="assets/plugins/respond.min.js"></script>
   <script src="assets/plugins/excanvas.min.js"></script> 
   <![endif]-->   
   <script src="assets/plugins/jquery-1.10.2.min.js" type="text/javascript"></script>
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js" type="text/javascript"></script>-->
   
   <script src="assets/plugins/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
   <!-- IMPORTANT! Load jquery-ui-1.10.3.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
   <script src="assets/plugins/jquery-ui/jquery-ui-1.10.3.custom.min.js" type="text/javascript"></script>      
   <script src="assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
   <script src="assets/plugins/bootstrap-hover-dropdown/twitter-bootstrap-hover-dropdown.min.js" type="text/javascript" ></script>
   <script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
   <script src="assets/plugins/jquery.blockui.min.js" type="text/javascript"></script>  
   <script src="assets/plugins/jquery.cookie.min.js" type="text/javascript"></script>
   <script src="assets/plugins/uniform/jquery.uniform.min.js" type="text/javascript" ></script>
   <!-- END CORE PLUGINS -->
   
   <!-- BEGIN PAGE LEVEL SCRIPTS -->

   <script src="assets/plugins/jqvmap/jqvmap/jquery.vmap.js" type="text/javascript"></script>   
   <script src="assets/plugins/flot/jquery.flot.js" type="text/javascript"></script>
   <script src="assets/plugins/flot/jquery.flot.resize.js" type="text/javascript"></script>
   <script src="assets/plugins/jquery.pulsate.min.js" type="text/javascript"></script>
   <script src="assets/plugins/gritter/js/jquery.gritter.js" type="text/javascript"></script>
   <script src="assets/plugins/fullcalendar/fullcalendar/fullcalendar.min.js" type="text/javascript"></script>
   <script src="assets/plugins/jquery-easy-pie-chart/jquery.easy-pie-chart.js" type="text/javascript"></script>
   <script src="assets/plugins/jquery.sparkline.min.js" type="text/javascript"></script>  
   <script src="assets/plugins/bootstrap-modal/js/bootstrap-modalmanager.js" type="text/javascript" ></script>
   <script src="assets/plugins/bootstrap-modal/js/bootstrap-modal.js" type="text/javascript" ></script>
   <script src="assets/scripts/app.js"></script>
   <script src="assets/scripts/ui-extended-modals.js"></script>   
   <script src="assets/scripts/app.js" type="text/javascript"></script>
   <script src="assets/scripts/index.js" type="text/javascript"></script>
   <script src="assets/scripts/tasks.js" type="text/javascript"></script>   
   <script src="assets/scripts/ajax.js" type="text/javascript"></script>     
   <script src="assets/scripts/form-wizard.js"></script>     
   <script src="assets/plugins/jquery-nestable/jquery.nestable.js"></script>  
   <!-- END PAGE LEVEL SCRIPTS -->     
   <script src="assets/scripts/ui-nestable.js"></script>    
   <script src="assets/scripts/app.js"></script>
   <script src="assets/s2/js/select2.min.js"></script>

   <script>
      jQuery(document).ready(function() {       
         // initiate layout and plugins

		$("#Renkler").select2({
			tags: true,
			tokenSeparators: [',', ' ']
		});

		$("#Bedenler").select2({
			tags: true,
			tokenSeparators: [',', ' ']
		});
		 
         App.init();
         UINestable.init();
		 FormWizard.init();
		 

      });
   </script>
   
   <script>
      jQuery(document).ready(function(abc) {    
         App.init(); // initlayout and core plugins
         Index.init();
         Index.initJQVMAP(); // init index page's custom scripts
         Index.initCalendar(); // init index page's custom scripts
         Index.initCharts(); // init index page's custom scripts
         Index.initChat();
         Index.initMiniCharts();
         Index.initDashboardDaterange();
         Index.initIntro();
         Tasks.initDashboardWidget();
      });
	    
   </script>

   <!-- END JAVASCRIPTS -->
   


</body>


</html>