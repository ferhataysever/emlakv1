<body class="page-header-fixed">
   <!-- BEGIN:HEADER -->   
   <div class="header navbar navbar-inverse navbar-fixed-top">
      <!-- BEGIN:TOP NAVIGATION BAR -->
      <div class="header-inner">
         <!-- BEGIN:LOGO -->  
         <a href="index.php" class="navbar-brand"><img src="assets/img/logo.png" alt="logo" class="img-responsive" /></a>
         <!-- END:LOGO -->
         
         
         <!-- BEGIN:RESPONSIVE MENU --> 
         <a href="javascript:;" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><img src="assets/img/menu-toggler.png" alt="" /></a> 
         <!-- END:RESPONSIVE MENU TOGGLER -->
         
         
         
         <!-- START : UP HEADER-->
         <ul class="nav navbar-nav pull-left">
         
            <!-- START : LEFT UP NOTİFİCATİON DROPDOWN -->
            <li class="dropdown" id="header_notification_bar">
            &nbsp;
            </li>
            <!-- END : LEFT UP NOTİFİCATİON DROPDOWN -->
            
            
            
            
            
            <!-- START : LEFT UP MESSAGE DROPDOWN -->
            <li class="dropdown" id="header_inbox_bar">
            &nbsp;
            </li>
            <!-- END : LEFT UP MESSAGE DROPDOWN -->
            
            
            
            
            <!-- START : LEFT UP TASK LIST DROPDOWN -->
            <li class="dropdown" id="header_task_bar">
			&nbsp;
            </li>
            <!-- END : LEFT-UP TASK LIST DROPDOWN -->
            
            </ul>

            
            

            <!-- END:LANGUAGE-->
                                
            <!-- START : RIGHT-UP USER DROP DOWN -->
             <ul class="nav navbar-nav pull-right">
             
			<!-- BEGIN:LANGUAGE-->
            <li class="dropdown language">
			&nbsp;
            </li>
            
            
            <li class="dropdown user">
               <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                   <img alt="" src="assets/img/avatar1_small.jpg"/> 
                   <span class="username"><?php echo $User;?></span>
                   <i class="icon-angle-down"></i>
               </a>
               <ul class="dropdown-menu">
                  <li><a href="?q=profile#tab_1_1"><i class="icon-user"></i> Yönetici Ayarları</a></li>
                  <li class="divider"></li>
                  <li><a href="javascript:;" id="trigger_fullscreen"><i class="icon-move"></i> Tam Ekran</a></li>
                  <?php $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";?>
                  <li><a href="lockscreen.php?link=<?php echo $actual_link; ?>"><i class="icon-lock"></i> Ekranı Kilitle</a></li>
                  <li><a href="logout.php"><i class="icon-key"></i> Çıkış</a></li>
               </ul>

            </li>
            
         </ul>
         <!-- END TOP NAVIGATION MENU -->
      </div>
      <!-- END TOP NAVIGATION BAR -->
   </div>
   
   
   
   
   
   <!-- END:HEADER -->
   <div class="clearfix"></div>
   <!-- BEGIN:CONTAINER -->
   <div class="page-container" >
      <!-- BEGIN:SIDEBAR -->
      <div class="page-sidebar navbar-collapse collapse" >
         <!-- BEGIN:SIDEBAR MENU -->        
         <ul class="page-sidebar-menu">

             <?php
             if (@$_GET['q']=='uye_listesi') {?><li class="active"><?php } else {?> <li> <?php } ?>
                 <a href="#"><i class="icon-user"></i><span class="title">Üye Listesi</span><span class="selected"></span>
                     <span class="arrow "></span>
                 </a>
                 <ul class="sub-menu">

                     <li>
                         <a href="?q=uye_listesi">
                             Üye Listesi</a>
                     </li>

                 </ul>
             </li>


             <?php
			if (@$_GET['q']=='yeni_sayfa'||@$_GET['q']=='sayfa_listesi'||@$_GET['q']=='sayfa_kategorileri'||@$_GET['q']=='teksayfa_ekle'||@$_GET['q']=='modulsayfa_ekle'||@$_GET['q']=='linksayfa_ekle'||@$_GET['q']=='sayfa_duzenle'||@$_GET['q']=='sayfa_kategoriekle'||@$_GET['q']=='sayfa_kategoriduzenle') {?><li class="active"><?php } else {?> <li> <?php } ?>              
            <a href="#"><i class="icon-file-text"></i><span class="title">Şablonlar</span><span class="selected"></span>
            <span class="arrow "></span>
			</a>
			<ul class="sub-menu">
                <li >
                    <a href="?q=sayfa_duzenle&id=85">
                        Kira Kontratı</a>
                </li>


                <li >
                    <a href="?q=sayfa_duzenle&id=86">
                        Satış Sözleşmesi</a>
                </li>

            </ul>
           </li>

             <?php
             if (@$_GET['q']=='yeni_kontrat'||@$_GET['q']=='kontrat_listesi'||@$_GET['q']=='kontrat_duzenle') {?><li class="active"><?php } else {?> <li> <?php } ?>
                 <a href="#"><i class="icon-file-text"></i><span class="title">Kontrat ve Sözleşme</span><span class="selected"></span>
                     <span class="arrow "></span>
                 </a>
                 <ul class="sub-menu">
                     <li >
                         <a href="?q=kontrat_listesi">
                             Kontrat ve Sözleşme Listesi</a>
                     </li>


                 </ul>
             </li>


             <?php
			if (@$_GET['q']=='iletisim_bilgileri') {?><li class="active"><?php } else {?> <li> <?php } ?>
            <a href="?q=iletisim_bilgileri"><i class="icon-map-marker"></i><span class="title">İletişim Bilgileri</span><span class="selected"></span></a></li>
                        
                        
            
         </ul>
         <!-- END SIDEBAR MENU -->
      </div> 
</div>