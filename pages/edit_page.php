<?php
$id=$_GET['id'];
$sorgu = sprintf("SELECT * FROM sablonlar WHERE id='%s'",
mysql_real_escape_string($id));
$Query=mysql_query($sorgu,$conn);
$W=@mysql_fetch_assoc($Query);	
$ContentType=$W['ContentType'];
$getCatid=9999999;
?>

<div class="page-content">

    <!-- BEGIN PAGE CONTENT-->
    <div class="row">
    	<div class="col-md-12">
             <div class="tab-pane" id="site_settings">
                <div class="portlet box green">
                   <div class="portlet-title">
                      <div class="caption"><i class="icon-edit"></i>Kontrat ve Sözleşme Şablonu</div>
                      <div class="tools">
                         <a href="javascript:;" class="collapse"></a>
                         <a href="#portlet-config" data-toggle="modal" class="config"></a>
                      </div>
                   </div>
                   <div class="portlet-body form">


                      <!-- BEGIN FORM-->
                      <form action="#" class="form-horizontal form-row-seperated" method="post" enctype="multipart/form-data">
                             <div class="tab-pane fade active in" id="tab_tr">
                      
                                 <div class="form-body">
                                    <div class="form-group">
                                       <label class="control-label col-md-2">Şablon Adı</label>
                                       <div class="col-md-10">
                                          <input disabled type="text" class="form-control" name="PageTitle" id="PageTitle" value="<?php echo $W['PageTitle'];?>"/>
                                       </div>
                                    </div>
        
                                   <div class="form-group">
                                       <label class="control-label col-md-2">İçerik</label>
                                       <div class="col-md-10">
                                           <textarea class="ckeditor" name="Content" id="Content"><?php echo $W['Content'];?></textarea>
                                       </div>
                                    </div>
        
                                 </div>
                             </div>

                         <div class="form-actions fluid">
                            <div class="row">
                               <div class="col-md-12">
                                  <div class="col-md-offset-2 col-md-10">
                                     <button type="submit" class="btn green" style="width:400px;height:40px">KAYDET</button>
                                  </div>
                                   Değişkenler: {adres} {mesken} {mulksahibi} {mulksahibitc} {mulksahibiadres} {kiraci} {kiracitc} {kiraciadres} {tarih} {sure} {toplambedel} {aylikbedel} {demirbas} {aciklama}


                               </div>
                            </div>
                         </div>
                      </form>
                      <!-- END FORM-->  
                   </div>
                </div>
             </div>
    	</div>
    </div>
    <!-- END PAGE CONTENT-->    
    
</div>

<?php 
if($_POST) 
{
	
	if ($_POST['Content']) $Content=$_POST['Content']; else $Content='';
	$PageTitle=$_POST['PageTitle'];
	$editpagelink = mysql_query("
	UPDATE sablonlar SET 
	Content='$Content'
	WHERE id='$id'
	",$conn);

	if(!$editpagelink){
	  die(mysql_error());
	}
?>

<script language='javascript'>
document.location='index.php';</script>

<?php 

}

?>