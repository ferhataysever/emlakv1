<?php

@session_start();
ob_start();
if ($_SESSION['login']!=1) 
{
?>
<script language='javascript'>
	document.location='login.php';
</script>
<?
die();
}
?>

<script>
    window.onunload = refreshParent;
    function refreshParent() {
        window.opener.location.reload();
    }
</script>

<!DOCTYPE html>
<head>
   <title>Galeri</title>
   <meta charset="utf-8" />
   <!-- BEGIN GLOBAL MANDATORY STYLES -->          
   <link href="assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
   <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
   <link href="assets/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
   <!-- END GLOBAL MANDATORY STYLES -->
   <!-- BEGIN PAGE LEVEL STYLES -->
   <link href="assets/plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet" />
   <link href="assets/plugins/jquery-file-upload/css/jquery.fileupload-ui.css" rel="stylesheet" />
   <!-- END PAGE LEVEL STYLES -->
   <!-- BEGIN THEME STYLES --> 
   <link href="assets/css/style-metronic.css" rel="stylesheet" type="text/css"/>
   <link href="assets/css/style.css" rel="stylesheet" type="text/css"/>
   <link href="assets/css/style-responsive.css" rel="stylesheet" type="text/css"/>
   <link href="assets/css/plugins.css" rel="stylesheet" type="text/css"/>
   <link href="assets/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color"/>
   <link href="assets/css/custom.css" rel="stylesheet" type="text/css"/>
   <!-- END THEME STYLES -->
   <link rel="shortcut icon" href="favicon.ico" />
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="page-header-fixed">
      <!-- BEGIN PAGE -->
      <div class="page-content">
         <!-- BEGIN PAGE CONTENT-->
         <div class="row">
            <div class="col-md-12">
               <form id="fileupload" action="" method="POST" enctype="multipart/form-data">
                  <!-- The fileupload-buttonbar contains buttons to add/delete files and start/cancel the upload -->
                  <div class="row fileupload-buttonbar">
                     <div class="col-lg-7">
                        <!-- The fileinput-button span is used to style the file input field as button -->
                        <span class="btn green fileinput-button">
                        <i class="icon-plus"></i>
                        <span>Ekle</span>
                        <input type="file" name="files[]" multiple>
                        </span>
                        <button type="submit" class="btn blue start">
                        <i class="icon-upload"></i>
                        <span>Yüklemeyi Başlat</span>
                        </button>
                        <button type="reset" class="btn yellow cancel">
                        <i class="icon-ban-circle"></i>
                        <span>Yüklemeyi İptal Et</span>
                        </button>
                        <button type="button" class="btn red delete">
                        <i class="icon-trash"></i>
                        <span>Seçilenleri Sil</span>
                        </button>
                        Tümünü Seç
                        <input type="checkbox" class="toggle">
                        <input type="hidden" name="id" id="id" value="<?php echo $_GET['id'];?>">
                        <!-- The loading indicator is shown during file processing -->
                        <span class="fileupload-loading"></span>
                     </div>
                     <!-- The global progress information -->
                     <div class="col-lg-5 fileupload-progress fade">
                        <!-- The global progress bar -->
                        <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100">
                           <div class="progress-bar progress-bar-success" style="width:0%;"></div>
                        </div>
                        <!-- The extended global progress information -->
                        <div class="progress-extended">&nbsp;</div>
                     </div>
                  </div>
                  <!-- The table listing the files available for upload/download -->
                  <table role="presentation" class="table table-striped clearfix">
                     <tbody class="files"></tbody>
                  </table>
               </form>
               <div class="panel panel-success">
                  <div class="panel-heading">
                     <h3 class="panel-title">Yükleme bilgileri</h3>
                  </div>
                  <div class="panel-body">
                     <ul>
                        <li><strong>Ekle</strong> bölümünden yüklenecek resim dosyalarını seçiniz.</li>
                        <li><strong>Yükle</strong> bölümünden eklenen dosyaları yükleyebilrsiniz.</li>
                        <li>Yükleme işlemi bittikten sonra bu ekranı kapatabilirsiniz.</li>
                        <li>Maksimum dosya boyutu <strong>1,5 MB</strong> olmalıdır.</li>
                        <li>Sadece (<strong>JPG, GIF, PNG</strong>) uzantılı resim dosyaları yüklenebilir.</li>

                     </ul>
                  </div>
               </div>
            </div>
         </div>
         <!-- END PAGE CONTENT-->
      </div>
      <!-- END PAGE --> 
      
   <!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
   <script id="template-upload" type="text/x-tmpl">
      {% for (var i=0, file; file=o.files[i]; i++) { %}
          <tr class="template-upload fade">
              <td>
                  <span class="preview"></span>
              </td>
              <td>
                  <p class="name">{%=file.name%}</p>
                  {% if (file.error) { %}
                      <div><span class="label label-danger">Hata</span> {%=file.error%}</div>
                  {% } %}
              </td>
              <td>
                  <p class="size">{%=o.formatFileSize(file.size)%}</p>
                  {% if (!o.files.error) { %}
                      <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0">
                      <div class="progress-bar progress-bar-success" style="width:0%;"></div>
                      </div>
                  {% } %}
              </td>
              <td>
                  {% if (!o.files.error && !i && !o.options.autoUpload) { %}
                      <button class="btn blue start">
                          <i class="icon-upload"></i>
                          <span>Yükle</span>
                      </button>
                  {% } %}
                  {% if (!i) { %}
                      <button class="btn red cancel">
                          <i class="icon-ban-circle"></i>
                          <span>İptal</span>
                      </button>
                  {% } %}
              </td>
          </tr>
      {% } %}
   </script>
   <!-- The template to display files available for download -->
   <script id="template-download" type="text/x-tmpl">
      {% for (var i=0, file; file=o.files[i]; i++) { %}
          <tr class="template-download fade">
              <td>
                  <span class="preview">
                      {% if (file.thumbnailUrl) { %}
                          <a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" data-gallery><img src="{%=file.thumbnailUrl%}"></a>
                      {% } %}
                  </span>
              </td>
              <td>
                  <p class="name">
                      {% if (file.url) { %}
                          <a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" {%=file.thumbnailUrl?'data-gallery':''%}>{%=file.name%}</a>
                      {% } else { %}
                          <span>{%=file.name%}</span>
                      {% } %}
                  </p>
                  {% if (file.error) { %}
                      <div><span class="label label-danger">Hata</span> {%=file.error%}</div>
                  {% } %}
              </td>
              <td>
                  <span class="size">{%=o.formatFileSize(file.size)%}</span>
              </td>
              <td>
                  {% if (file.deleteUrl) { %}
                      <button class="btn red delete" data-type="{%=file.deleteType%}" data-url="{%=file.deleteUrl%}"{% if (file.deleteWithCredentials) { %} data-xhr-fields='{"withCredentials":true}'{% } %}>
                          <i class="icon-trash"></i>
                          <span>Sil</span>
                      </button>
                      <input type="checkbox" name="delete" value="1" class="toggle">
                  {% } else { %}
                      <button class="btn yellow cancel">
                          <i class="icon-ban-circle"></i>
                          <span>İptal</span>
                      </button>
                  {% } %}
              </td>
          </tr>
      {% } %}
   </script>
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
   <script src="assets/plugins/fancybox/source/jquery.fancybox.pack.js"></script>
   <!-- END PAGE LEVEL PLUGINS-->
   <!-- BEGIN:File Upload Plugin JS files-->
   <!-- The jQuery UI widget factory, can be omitted if jQuery UI is already included -->
   <script src="assets/plugins/jquery-file-upload/js/vendor/jquery.ui.widget.js"></script>
   <!-- The Templates plugin is included to render the upload/download listings -->
   <script src="assets/plugins/jquery-file-upload/js/vendor/tmpl.min.js"></script>
   <!-- The Load Image plugin is included for the preview images and image resizing functionality -->
   <script src="assets/plugins/jquery-file-upload/js/vendor/load-image.min.js"></script>
   <!-- The Canvas to Blob plugin is included for image resizing functionality -->
   <script src="assets/plugins/jquery-file-upload/js/vendor/canvas-to-blob.min.js"></script>
   <!-- The Iframe Transport is required for browsers without support for XHR file uploads -->
   <script src="assets/plugins/jquery-file-upload/js/jquery.iframe-transport.js"></script>
   <!-- The basic File Upload plugin -->
   <script src="assets/plugins/jquery-file-upload/js/jquery.fileupload.js"></script>
   <!-- The File Upload processing plugin -->
   <script src="assets/plugins/jquery-file-upload/js/jquery.fileupload-process.js"></script>
   <!-- The File Upload image preview & resize plugin -->
   <script src="assets/plugins/jquery-file-upload/js/jquery.fileupload-image.js"></script>
   <!-- The File Upload audio preview plugin -->
   <script src="assets/plugins/jquery-file-upload/js/jquery.fileupload-audio.js"></script>
   <!-- The File Upload video preview plugin -->
   <script src="assets/plugins/jquery-file-upload/js/jquery.fileupload-video.js"></script>
   <!-- The File Upload validation plugin -->
   <script src="assets/plugins/jquery-file-upload/js/jquery.fileupload-validate.js"></script>
   <!-- The File Upload user interface plugin -->
   <script src="assets/plugins/jquery-file-upload/js/jquery.fileupload-ui.js"></script>
   <!-- The main application script -->
   <!-- The XDomainRequest Transport is included for cross-domain file deletion for IE 8 and IE 9 -->
   <!--[if (gte IE 8)&(lt IE 10)]>
   <script src="assets/plugins/jquery-file-upload/js/cors/jquery.xdr-transport.js"></script>
   <![endif]-->
   <!-- END:File Upload Plugin JS files-->
   <script src="assets/scripts/app.js"></script>
   <script src="assets/scripts/form-fileupload.js"></script>
   <script>
      jQuery(document).ready(function() {
      // initiate layout and plugins
      App.init();
      FormFileUpload.init();
      });
   </script>
   <!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>