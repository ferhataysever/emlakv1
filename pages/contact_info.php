<?php
$sorgu="Select * from iletisim where id=1";
$Query=mysql_query($sorgu,$conn);
$W=@mysql_fetch_assoc($Query);
?>

<div class="page-content">

    <!-- SAYFA BAŞI YARDIM KUTUSU-->
  <div class="alert alert-warning alert-dismissable">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
    <strong>İletişim Bilgileri; </strong> Bu menüden iletişim bilgilerinizi girebilirsiniz.
    </div>
    <!-- SAYFA BAŞI YARDIM KUTUSU-->

    <!-- BEGIN PAGE CONTENT-->
    <div class="row">
    	<div class="col-md-12">
             <div class="tab-pane" id="site_settings">
                <div class="portlet box green">
                   <div class="portlet-title">
                      <div class="caption"><i class="icon-reorder"></i>İletişim Bilgileri</div>
                      <div class="tools">
                         <a href="javascript:;" class="collapse"></a>
                         <a href="#portlet-config" data-toggle="modal" class="config"></a>
                      </div>
                   </div>
                   <div class="portlet-body form">
                      <!-- BEGIN FORM-->
                      <form action="#" class="form-horizontal form-row-seperated" method="post" enctype="multipart/form-data">
                         <div class="form-body">
                            <div class="form-group">
                               <label class="control-label col-md-2">İletişim</label>
                               <div class="col-md-10">
                                   <textarea class="ckeditor" name="Content" id="Content"><?php echo $W['Content']; ?></textarea>
                               </div>
                            </div>
                            
                            <div class="form-group">
                               <label class="control-label col-md-2">E-posta</label>
                               <div class="col-md-10">
                                  <input type="text" class="form-control" name="Email" id="Email"  value="<?php echo $W['Email']; ?>"/>
                               </div>
                            </div>

                            <div class="form-group">
                               <label class="control-label col-md-2">Harita Aktif</label>
                               <div class="col-md-10">
                               	  <input type="checkbox" name="MapActive" value="1" <?php if ($W['MapActive']==1) echo "checked" ?>>
                               </div>
                            </div>

                            <div class="form-group">
                               <label class="control-label col-md-2">Enlem Koordinat</label>
                               <div class="col-md-10">
                                  <input type="text" class="form-control" name="Enlem" id="Enlem"  value="<?php echo $W['Enlem']; ?>"/>
                            	<span class="help-block"><b>Ondalık değer giriniz.</b></span>
                               </div>
                            </div>

                            <div class="form-group">
                               <label class="control-label col-md-2">Boylam Koordinat</label>
                               <div class="col-md-10">
                                  <input type="text" class="form-control" name="Boylam" id="Boylam"  value="<?php echo $W['Boylam']; ?>"/>
                            	<span class="help-block"><b>Ondalık değer giriniz.</b></span>
                               </div>
                            </div>

                            <div class="form-group">
                               <label class="control-label col-md-2">Zoom (Yakınlık)</label>
                               <div class="col-md-10">
                                  <input type="text" class="form-control" name="Zoom" id="Zoom"  value="<?php echo $W['Zoom']; ?>"/>
                            	<span class="help-block"><b>0-20 arası bir değer giriniz.</b></span>
                               </div>
                            </div>

                            <div class="form-group">
                               <label class="control-label col-md-2">Harita Açıklaması</label>
                               <div class="col-md-10">
                                  <input type="text" class="form-control" name="MapAciklama" id="MapAciklama"  value="<?php echo $W['MapAciklama']; ?>"/>
                            	<span class="help-block"><b>Haritada konumunuz üzerinde çıkmasını istediğiniz metni giriniz.</b></span>
                               </div>
                            </div>


                            <div class="form-group">
                                <label class="control-label col-md-2">Sosyal Ağ Linkleri</label>
                                <div class="col-md-10">
                            	<span class="help-block"><b>Aşağıda belirtilen alanlara sosyal ağ hesaplarınızın sayfa adreslerinizi girebilirsiniz.<br />Yoksa boş bırakabilirsiniz.</b></span>
                           		</div>
                            </div>
                            
                            <div class="form-group">
                               <label class="control-label col-md-2">Facebook</label>
                               <div class="col-md-10">
                                  <input type="text" class="form-control" name="Facebook" id="Facebook"  value="<?php echo $W['Facebook']; ?>"/>
                               </div>
                            </div>
                            
                            <div class="form-group">
                               <label class="control-label col-md-2">Twitter</label>
                               <div class="col-md-10">
                                  <input type="text" class="form-control" name="Twitter" id="Twitter"  value="<?php echo $W['Twitter']; ?>"/>
                               </div>
                            </div>

                            <div class="form-group">
                               <label class="control-label col-md-2">Google Plus</label>
                               <div class="col-md-10">
                                  <input type="text" class="form-control" name="GooglePlus" id="GooglePlus"  value="<?php echo $W['GooglePlus']; ?>"/>
                               </div>
                            </div>

                            <div class="form-group">
                               <label class="control-label col-md-2">Linkedin</label>
                               <div class="col-md-10">
                                  <input type="text" class="form-control" name="Linkedin" id="Linkedin"  value="<?php echo $W['Linkedin']; ?>"/>
                               </div>
                            </div>

                            <div class="form-group">
                               <label class="control-label col-md-2">Instagram</label>
                               <div class="col-md-10">
                                  <input type="text" class="form-control" name="Instagram" id="Instagram"  value="<?php echo $W['Instagram']; ?>"/>
                               </div>
                            </div>

                            <div class="form-group">
                               <label class="control-label col-md-2">Youtube</label>
                               <div class="col-md-10">
                                  <input type="text" class="form-control" name="Youtube" id="Youtube"  value="<?php echo $W['Youtube']; ?>"/>
                               </div>
                            </div>

                            <div class="form-group">
                               <label class="control-label col-md-2">Foursquare</label>
                               <div class="col-md-10">
                                  <input type="text" class="form-control" name="Foursquare" id="Foursquare"  value="<?php echo $W['Foursquare']; ?>"/>
                               </div>
                            </div>

                            <div class="form-group">
                               <label class="control-label col-md-2">Flickr</label>
                               <div class="col-md-10">
                                  <input type="text" class="form-control" name="Flickr" id="Flickr"  value="<?php echo $W['Flickr']; ?>"/>
                               </div>
                            </div>                            
                            
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
	$Content=$_POST['Content'];  
	$Email=$_POST['Email'];  
	$Facebook=$_POST['Facebook'];   
	$Twitter=$_POST['Twitter'];   
	$GooglePlus=$_POST['GooglePlus'];
	$Linkedin=$_POST['Linkedin'];
	$Instagram=$_POST['Instagram'];
	$Youtube=$_POST['Youtube'];
	$Foursquare=$_POST['Foursquare'];
	$Flickr=$_POST['Flickr'];
	$Enlem=$_POST['Enlem'];
	$Boylam=$_POST['Boylam'];
	$Zoom=$_POST['Zoom'];
	$MapAciklama=$_POST['MapAciklama'];
	if ($_POST['MapActive']==1) $MapActive=$_POST['MapActive'];
		else $MapActive=0;


	mysql_query("
	UPDATE iletisim SET 
	Content='$Content',
	Email='$Email',
	Enlem='$Enlem',
	Boylam='$Boylam',
	Zoom='$Zoom',
	MapAciklama='$MapAciklama',
	MapActive='$MapActive',
	Facebook='$Facebook',
	Twitter='$Twitter',
	GooglePlus='$GooglePlus',
	Linkedin='$Linkedin',
	Instagram='$Instagram',
	Youtube='$Youtube',
	Foursquare='$Foursquare',
	Flickr='$Flickr',
	Date=NOW()
	WHERE id=1
	",$conn);

?>

<script language='javascript'>
document.location='index.php?q=iletisim_bilgileri';</script>

<?php 

}

?>