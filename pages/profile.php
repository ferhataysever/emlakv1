 <!-- BEGIN PAGE -->
      <div class="page-content">
        <!-- SAYFA BAŞI YARDIM KUTUSU-->
        <div class="alert alert-warning alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
        <strong>Yönetici Ayarları; </strong> Bu menüden yönetici şifrenizi değiştirebilirsiniz.
        </div>
        <!-- SAYFA BAŞI YARDIM KUTUSU-->

         <!-- BEGIN PAGE CONTENT-->
         <div class="row">
            <div class="col-md-12">
               <!-- BEGIN EXAMPLE TABLE PORTLET-->
               <div class="portlet box green">
                  <div class="portlet-title">
                     <div class="caption"><i class="icon-reorder"></i>
                     Şifre Değiştir
                     </div>
                     <div class="tools">
                        <a href="javascript:;" class="collapse"></a>
                        <a href="#portlet-config" data-toggle="modal" class="config"></a>
                     </div>
                  </div>
                  <div class="portlet-body">
                        <form action="" method="post">
                        <div class="form-body">
                        <div class="form-group">
                        <label for="exampleInputEmail1">Eski Parola</label>
                        <input type="password"  name="eskiparola" class="form-control" id="eskiparola">
                        </div> 
                        <div class="form-group">
                        <label for="exampleInputEmail1">Yeni Parola</label>
                        <input type="password"  name="yeniparola" class="form-control" id="yeniparola">
                        </div> 
                        <div class="form-group">
                        <label for="exampleInputEmail1">Yeni Parola(Tekrar)</label>
                        <input type="password"  name="yeniparolatekrar" class="form-control" id="yeniparolatekrar">
                        </div> 
                        
                        
                         <div class="form-actions fluid">
                            <div class="row">
                               <div class="col-md-12">
                                  <div class="col-md-offset-2 col-md-10">
                                     <button type="submit" class="btn green" style="width:400px;height:40px">KAYDET</button>
                                  </div>
                               </div>
                            </div>
                         </div>
                        
                                               
                        
                        </form>
                          
                  </div>
               </div>
               <!-- END EXAMPLE TABLE PORTLET-->
            </div>
         </div>
         <!-- END PAGE CONTENT -->
		</div>
     </div>
     <?php 
	 if($_POST) 
	 {
		include "connect.php";
     	$eskiparola=$_POST['eskiparola'];  
     	$yeniparola=$_POST['yeniparola'];  
     	$yeniparolatekrar=$_POST['yeniparolatekrar'];  
		$kullaniciadi=$_SESSION['Username'];
				
		$sql1 = mysql_query ("Select Password From users where id=1",$conn) ;
		$oldpass = mysql_result ($sql1 , 0 , 0 ) ;
		
		if ( $oldpass != $eskiparola )
		{
		?>
			<script language='javascript'>
			window.alert('Eski Parolayı Yanlıs Girdiniz!');
			document.location='./index.php?q=profile';
			</script>
		
		<?php 	
			die();	
		}
			
		if ( $yeniparola != $yeniparolatekrar )
		{
		?>
			<script language='javascript'>
			window.alert('Yeni Parolayı Yanlıs Girdiniz!');
			document.location='./index.php?q=profile';
			</script>
		
		<?php 	
			die();	
		}
		
		$sqlupdate = mysql_query ("UPDATE users SET Password='$yeniparola' where id=1",$conn) ;
		
		if ( $sqlupdate )
		{
		?>
			<script language='javascript'>
			window.alert('Parola Degistirildi..');
			document.location='./index.php?q=profile';
			</script>
		
		<?php 	
			die();	
		}

	}
	
	?>