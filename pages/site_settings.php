<?php
$sorgu="Select * from sitesettings where id=1";
$Query=mysql_query($sorgu,$conn);
$W=@mysql_fetch_assoc($Query);
$target_path1=$W['Favicon'];
$target_path2=$W['Banner1'];
$target_path3=$W['Banner2'];
$target_path4=$W['Banner1_en'];
$target_path5=$W['Banner2_en'];
$target_path6=$W['Banner1_ru'];
$target_path7=$W['Banner2_ru'];

?>

<div class="page-content">

    <!-- SAYFA BAŞI YARDIM KUTUSU-->
  <div class="alert alert-warning alert-dismissable">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
    <strong>Site Ayarları; </strong> Bu menüden sitenizin genel ayarlarını yapılandırabilirsiniz. Sitenizin adını, anahtar kelimlerini ve diğer birçok özeliğini düzenleyebilirsiniz.
    </div>
    <!-- SAYFA BAŞI YARDIM KUTUSU-->

    <!-- BEGIN PAGE CONTENT-->
    <div class="row">
    	<div class="col-md-12">
             <div class="tab-pane" id="site_settings">
                <div class="portlet box green">
                   <div class="portlet-title">
                      <div class="caption"><i class="icon-reorder"></i>Site Ayarları</div>
                      <div class="tools">
                         <a href="javascript:;" class="collapse"></a>
                         <a href="#portlet-config" data-toggle="modal" class="config"></a>
                      </div>
                   </div>
                   <div class="portlet-body form">

                     <ul  class="nav nav-tabs">
                        <li class="active"><a href="#tab_tr" data-toggle="tab">Rusça</a></li>
                        <li class=""><a href="#tab_en" data-toggle="tab">İngilizce</a></li>

                     </ul>
                     
					<form action="#" class="form-horizontal form-row-seperated" method="post" enctype="multipart/form-data">
                    
                     <div class="tab-content">
                         <div class="tab-pane fade active in" id="tab_tr">

                              <!-- BEGIN FORM-->
                                 <div class="form-body">
                                    <div class="form-group">
                                       <label class="control-label col-md-2">Site Adı</label>
                                       <div class="col-md-10">
                                          <input type="text" placeholder="Emlakv1" class="form-control" name="SiteName" id="SiteName" value="<?php echo $W['SiteName']; ?>"/>
                                       </div>
                                    </div>
                                    <div class="form-group">
                                       <label class="control-label col-md-2">Site Başlığı</label>
                                       <div class="col-md-10">
                                          <input type="text" class="form-control" name="Title" id="Title" value="<?php echo $W['Title']; ?>"/>
                                          <span class="help-block">Sayfalarda görünecek site başlığınızı yazın.</span>
                                       </div>
                                    </div>
                
                                    <div class="form-group">
                                       <label class="control-label col-md-2">Site Açıklaması</label>
                                       <div class="col-md-10">
                                          <input type="text" class="form-control" name="Description" id="Description"  value="<?php echo $W['Description']; ?>"/>
                                          <span class="help-block">Sitenizi açıklayın.(Arama motorlarında açıklama kısmında  çıkacaktır.)</span>
                                       </div>
                                    </div>
                                    <div class="form-group">
                                       <label class="control-label col-md-2">Anahtar Kelimeler</label>
                                       <div class="col-md-10">
                                          <input type="text" class="form-control" name="Keywords" id="Keywords" value="<?php echo $W['Keywords']; ?>"/>
                                          <span class="help-block">Sitenizi anlatan anahtar kelimeleri virgül ile ayırarak yazınız. Örn: Yazılım, Web Yazılım firmaları, Web Tasarım</span>
        
                                       </div>
                                    </div>
        
                                    <div class="form-group">
                                       <label class="control-label col-md-2">Favicon</label>
                                       <div class="col-md-10">
                                          <img src="<?php echo $W['Favicon']; ?>" />
                                          <input type="file" class="form-control" name="Favicon" id="Favicon" />
                                          <span class="help-block">Sitenizin iconunu seçiniz.(Max Width: 50px) Boş bırakabilrsiniz.</span>                                  
                                       </div>
                                    </div>

                                     <div class="form-group">
                                         <label class="control-label col-md-2">Ana Logo</label>
                                         <div class="col-md-10">
                                             <img src="<?php echo $W['Logo']; ?>" />
                                             <input type="file" class="form-control" name="Logo" id="Logo" />
                                             <span class="help-block">Sitenizin logosunu giriniz.</span>
                                         </div>
                                     </div>

                                    <div class="form-group">
                                       <label class="control-label col-md-3">Anasayfa Bannerlar</label>
                                    </div>

                                    <div class="form-group">
                                       <label class="control-label col-md-2">Banner1</label>
                                       <div class="col-md-10">
                                          <img src="<?php echo $W['Banner1']; ?>" width="500px"/>
                                          <input type="file" class="form-control" name="Banner1" id="Banner1" />
                                       </div>
                                    </div>

                                    <div class="form-group">
                                       <label class="control-label col-md-2">Banner1 Link</label>
                                       <div class="col-md-10">
                                          <input type="text" class="form-control" name="Banner1Link" id="Banner1Link" value="<?php echo $W['Banner1Link']; ?>"/>
        
                                       </div>
                                    </div>

                                    <div class="form-group">
                                       <label class="control-label col-md-2">Banner2</label>
                                       <div class="col-md-10">
                                          <img src="<?php echo $W['Banner2']; ?>" width="500px"/>
                                          <input type="file" class="form-control" name="Banner2" id="Banner2" />
                                       </div>
                                    </div>

                                    <div class="form-group">
                                       <label class="control-label col-md-2">Banner2 Link</label>
                                       <div class="col-md-10">
                                          <input type="text" class="form-control" name="Banner2Link" id="Banner2Link" value="<?php echo $W['Banner2Link']; ?>"/>
        
                                       </div>
                                    </div>

                                     <div class="form-group">
                                         <label class="control-label col-md-2">Banner2 İçerik</label>
                                         <div class="col-md-10">
                                             <textarea class="ckeditor" name="Content" id="Content"><?php echo $W['Yazi1']; ?></textarea>
                                         </div>
                                     </div>

                                 </div>
                              <!-- END FORM-->  
                         
                         
                         
                         </div>
                         
                         <div class="tab-pane fade in" id="tab_en">

                              <!-- BEGIN FORM-->
                                 <div class="form-body">

                                    <div class="form-group">
                                       <label class="control-label col-md-2">Site Başlığı</label>
                                       <div class="col-md-10">
                                          <input type="text" class="form-control" name="Title_en" id="Title_en" value="<?php echo $W['Title_en']; ?>"/>
                                          <span class="help-block">Sayfalarda görünecek site başlığınızı yazın.</span>
                                       </div>
                                    </div>
                
                                    <div class="form-group">
                                       <label class="control-label col-md-2">Site Açıklaması</label>
                                       <div class="col-md-10">
                                          <input type="text" class="form-control" name="Description_en" id="Description_en"  value="<?php echo $W['Description_en']; ?>"/>
                                          <span class="help-block">Sitenizi açıklayın.(Arama motorlarında açıklama kısmında  çıkacaktır.)</span>
                                       </div>
                                    </div>
                                    <div class="form-group">
                                       <label class="control-label col-md-2">Anahtar Kelimeler</label>
                                       <div class="col-md-10">
                                          <input type="text" class="form-control" name="Keywords_en" id="Keywords_en" value="<?php echo $W['Keywords_en']; ?>"/>
                                          <span class="help-block">Sitenizi anlatan anahtar kelimeleri virgül ile ayırarak yazınız. Örn: Yazılım, Web Yazılım firmaları, Web Tasarım</span>
        
                                       </div>
                                    </div>
        
                                     <div class="form-group">
                                         <label class="control-label col-md-3">Anasayfa Bannerlar</label>
                                     </div>

                                     <div class="form-group">
                                         <label class="control-label col-md-2">Banner1</label>
                                         <div class="col-md-10">
                                             <img src="<?php echo $W['Banner1_en']; ?>" width="500px"/>
                                             <input type="file" class="form-control" name="Banner1_en" id="Banner1_en" />
                                         </div>
                                     </div>

                                     <div class="form-group">
                                         <label class="control-label col-md-2">Banner1 Link</label>
                                         <div class="col-md-10">
                                             <input type="text" class="form-control" name="Banner1Link_en" id="Banner1Link_en" value="<?php echo $W['Banner1Link_en']; ?>"/>

                                         </div>
                                     </div>

                                     <div class="form-group">
                                         <label class="control-label col-md-2">Banner2</label>
                                         <div class="col-md-10">
                                             <img src="<?php echo $W['Banner2_en']; ?>" width="500px"/>
                                             <input type="file" class="form-control" name="Banner2_en" id="Banner2_en" />
                                         </div>
                                     </div>

                                     <div class="form-group">
                                         <label class="control-label col-md-2">Banner2 Link</label>
                                         <div class="col-md-10">
                                             <input type="text" class="form-control" name="Banner2Link_en" id="Banner2Link_en" value="<?php echo $W['Banner2Link_en']; ?>"/>

                                         </div>
                                     </div>

                                     <div class="form-group">
                                         <label class="control-label col-md-2">Banner2 İçerik</label>
                                         <div class="col-md-10">
                                             <textarea class="ckeditor" name="Content2" id="Content2"><?php echo $W['Yazi1_en']; ?></textarea>
                                         </div>
                                     </div>


                                 </div>
                              <!-- END FORM-->  
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
	$Title=$_POST['Title']; $Title_en=$_POST['Title_en']; $Title_ru=$_POST['Title_ru']; 
	$SiteName=$_POST['SiteName'];   
	$Description=$_POST['Description']; $Description_en=$_POST['Description_en']; 
	$Description_ru=$_POST['Description_ru'];
	$Keywords=$_POST['Keywords']; $Keywords_en=$_POST['Keywords_en']; $Keywords_ru=$_POST['Keywords_ru'];
	$Animasyon=$_POST['Animasyon'];
	$VideoYazi=$_POST['VideoYazi'];$VideoLink=$_POST['VideoLink'];
	$VideoYazi_en=$_POST['VideoYazi_en']; $VideoYazi_ru=$_POST['VideoYazi_ru'];
	$Banner1Link=$_POST['Banner1Link']; $Banner2Link=$_POST['Banner2Link'];
    $Banner1Link_en=$_POST['Banner1Link_en']; $Banner2Link_en=$_POST['Banner2Link_en'];
    $Banner1Link_ru=$_POST['Banner1Link_ru']; $Banner2Link_ru=$_POST['Banner2Link_ru'];

    $Yazi1=$_POST['Content']; $Yazi1_en=$_POST['Content2']; $Yazi1_ru=$_POST['Yazi1_ru'];
	$Yazi2=$_POST['Yazi2']; $Yazi2_en=$_POST['Yazi2_en']; $Yazi2_ru=$_POST['Yazi2_ru'];
	$Yazi3=$_POST['Yazi3']; $Yazi3_en=$_POST['Yazi3_en']; $Yazi3_ru=$_POST['Yazi3_ru'];
	$Yazi4=$_POST['Yazi4']; $Yazi4_en=$_POST['Yazi4_en']; $Yazi4_ru=$_POST['Yazi4_ru'];
	$Yazi5=$_POST['Yazi5']; $Yazi5_en=$_POST['Yazi5_en']; $Yazi5_ru=$_POST['Yazi5_ru'];
	$Yazi6=$_POST['Yazi6']; $Yazi6_en=$_POST['Yazi6_en']; $Yazi6_ru=$_POST['Yazi6_ru'];
	$Yazi7=$_POST['Yazi7']; $Yazi7_en=$_POST['Yazi7_en']; $Yazi7_ru=$_POST['Yazi7_ru'];
	$Yazi8=$_POST['Yazi8']; $Yazi8_en=$_POST['Yazi8_en']; $Yazi8_ru=$_POST['Yazi8_ru'];
	$Yazi9=$_POST['Yazi9']; $Yazi9_en=$_POST['Yazi9_en']; $Yazi9_ru=$_POST['Yazi9_ru'];
	$Yazi10=$_POST['Yazi10']; $Yazi10_en=$_POST['Yazi10_en']; $Yazi10_ru=$_POST['Yazi10_ru'];
	
    ##upload favicon##
    include('class/SimpleImage.php');

    if ($_FILES["Favicon"]["tmp_name"] > "")
    {
        if ($_FILES["Favicon"]["error"] > 0)
        {
            ?>
            <script language='javascript'>
                window.alert('Upload Sorunu.');
                window.close();
            </script>
            <?php
            die();
        }
        else
        {
            $ayir1=explode(".",$_FILES["Favicon"]["name"]);
            $ayirsayi1=count($ayir1);
            $sonek1=$ayir1[$ayirsayi1-1];
            if ($_FILES["Favicon"]["tmp_name"] > "") {
                $target_path1 = "./assets/img/imgcontent/";
                $_FILES['Favicon']['name']="favicon.".$sonek1;}
            $target_path1 = $target_path1 . basename( $_FILES['Favicon']['name']);
            move_uploaded_file($_FILES['Favicon']['tmp_name'], $target_path1);

            $image = new SimpleImage();
            $image->load($target_path1);
            if ($image->getWidth() > 50)
            {
                $image->resizeToWidth(50);
                $image->save($target_path1);
            }
        }
    }
    ##upload favicon##

    ##upload logo##

    if ($_FILES["Logo"]["tmp_name"] > "")
    {
        if ($_FILES["Logo"]["error"] > 0)
        {
            ?>
            <script language='javascript'>
                window.alert('Upload Sorunu.');
                window.close();
            </script>
            <?php
            die();
        }
        else
        {
            $ayir1L=explode(".",$_FILES["Logo"]["name"]);
            $ayirsayi1L=count($ayir1L);
            $sonek1L=$ayir1L[$ayirsayi1L-1];
            if ($_FILES["Logo"]["tmp_name"] > "") {
                $target_path1L = "./assets/img/imgcontent/";
                $_FILES['Logo']['name']="logo.".$sonek1L;}
            $target_path1L = $target_path1L . basename( $_FILES['Logo']['name']);
            move_uploaded_file($_FILES['Logo']['tmp_name'], $target_path1L);
        }
    }
    ##upload logo##

    ##upload banner1##
	if ($_FILES["Banner1"]["tmp_name"] > "")
	{
		if ($_FILES["Banner1"]["error"] > 0)
		{
			?>
			<script language='javascript'>
			window.alert('Upload Sorunu.');
			window.close();		
			</script>
			<?php
			die();
		}
		else
		{
			$ayir1=explode(".",$_FILES["Banner1"]["name"]);
			$ayirsayi1=count($ayir1);
			$sonek1=$ayir1[$ayirsayi1-1];
			if ($_FILES["Banner1"]["tmp_name"] > "") {
				$target_path2 = "./assets/img/imgcontent/";
				$_FILES['Banner1']['name']="Banner1.".$sonek1;}
			$target_path2 = $target_path2 . basename( $_FILES['Banner1']['name']); 
			move_uploaded_file($_FILES['Banner1']['tmp_name'], $target_path2);
			
			
			$image = new SimpleImage();
			$image->load($target_path2);
			if ($image->getWidth() > 1920)
			{
				$image->resizeToWidth(1920);
				$image->save($target_path2);
			}
		}
	} 
	##upload banner1##

	##upload banner2##
	if ($_FILES["Banner2"]["tmp_name"] > "")
	{
		if ($_FILES["Banner2"]["error"] > 0)
		{
			?>
			<script language='javascript'>
			window.alert('Upload Sorunu.');
			window.close();		
			</script>
			<?php
			die();
		}
		else
		{
			$ayir1=explode(".",$_FILES["Banner2"]["name"]);
			$ayirsayi1=count($ayir1);
			$sonek1=$ayir1[$ayirsayi1-1];
			if ($_FILES["Banner2"]["tmp_name"] > "") {
				$target_path3 = "./assets/img/imgcontent/";
				$_FILES['Banner2']['name']="Banner2.".$sonek1;}
			$target_path3 = $target_path3 . basename( $_FILES['Banner2']['name']); 
			move_uploaded_file($_FILES['Banner2']['tmp_name'], $target_path3);
			
			$image = new SimpleImage();
			$image->load($target_path3);
			if ($image->getWidth() > 1920)
			{
				$image->resizeToWidth(1920);
				$image->save($target_path3);
			}
		}
	} 
	##upload banner2##

    ##upload banner1 en##
    if ($_FILES["Banner1_en"]["tmp_name"] > "")
    {
        if ($_FILES["Banner1_en"]["error"] > 0)
        {
            ?>
            <script language='javascript'>
                window.alert('Upload Sorunu.');
                window.close();
            </script>
            <?php
            die();
        }
        else
        {
            $ayir1=explode(".",$_FILES["Banner1_en"]["name"]);
            $ayirsayi1=count($ayir1);
            $sonek1=$ayir1[$ayirsayi1-1];
            if ($_FILES["Banner1_en"]["tmp_name"] > "") {
                $target_path4 = "./assets/img/imgcontent/";
                $_FILES['Banner1_en']['name']="Banner1_en.".$sonek1;}
            $target_path4 = $target_path4 . basename( $_FILES['Banner1_en']['name']);
            move_uploaded_file($_FILES['Banner1_en']['tmp_name'], $target_path4);


            $image = new SimpleImage();
            $image->load($target_path4);
            if ($image->getWidth() > 1920)
            {
                $image->resizeToWidth(1920);
                $image->save($target_path4);
            }
        }
    }
    ##upload banner1 en##

    ##upload banner2 en##
    if ($_FILES["Banner2_en"]["tmp_name"] > "")
    {
        if ($_FILES["Banner2_en"]["error"] > 0)
        {
            ?>
            <script language='javascript'>
                window.alert('Upload Sorunu.');
                window.close();
            </script>
            <?php
            die();
        }
        else
        {
            $ayir1=explode(".",$_FILES["Banner2_en"]["name"]);
            $ayirsayi1=count($ayir1);
            $sonek1=$ayir1[$ayirsayi1-1];
            if ($_FILES["Banner2_en"]["tmp_name"] > "") {
                $target_path5 = "./assets/img/imgcontent/";
                $_FILES['Banner2_en']['name']="Banner2_en.".$sonek1;}
            $target_path5 = $target_path5 . basename( $_FILES['Banner2_en']['name']);
            move_uploaded_file($_FILES['Banner2_en']['tmp_name'], $target_path5);

            $image = new SimpleImage();
            $image->load($target_path5);
            if ($image->getWidth() > 1920)
            {
                $image->resizeToWidth(1920);
                $image->save($target_path5);
            }
        }
    }
    ##upload banner2 en##

    ##upload banner1 ru##
    if ($_FILES["Banner1_ru"]["tmp_name"] > "")
    {
        if ($_FILES["Banner1_ru"]["error"] > 0)
        {
            ?>
            <script language='javascript'>
                window.alert('Upload Sorunu.');
                window.close();
            </script>
            <?php
            die();
        }
        else
        {
            $ayir1=explode(".",$_FILES["Banner1_ru"]["name"]);
            $ayirsayi1=count($ayir1);
            $sonek1=$ayir1[$ayirsayi1-1];
            if ($_FILES["Banner1_ru"]["tmp_name"] > "") {
                $target_path6 = "./assets/img/imgcontent/";
                $_FILES['Banner1_ru']['name']="Banner1_ru.".$sonek1;}
            $target_path6 = $target_path6 . basename( $_FILES['Banner1_ru']['name']);
            move_uploaded_file($_FILES['Banner1_ru']['tmp_name'], $target_path6);


            $image = new SimpleImage();
            $image->load($target_path6);
            if ($image->getWidth() > 1920)
            {
                $image->resizeToWidth(1920);
                $image->save($target_path6);
            }
        }
    }
    ##upload banner1 ru##

    ##upload banner2 ru##
    if ($_FILES["Banner2_ru"]["tmp_name"] > "")
    {
        if ($_FILES["Banner2_ru"]["error"] > 0)
        {
            ?>
            <script language='javascript'>
                window.alert('Upload Sorunu.');
                window.close();
            </script>
            <?php
            die();
        }
        else
        {
            $ayir1=explode(".",$_FILES["Banner2_ru"]["name"]);
            $ayirsayi1=count($ayir1);
            $sonek1=$ayir1[$ayirsayi1-1];
            if ($_FILES["Banner2_ru"]["tmp_name"] > "") {
                $target_path7 = "./assets/img/imgcontent/";
                $_FILES['Banner2_ru']['name']="Banner2_ru.".$sonek1;}
            $target_path7 = $target_path7 . basename( $_FILES['Banner2_ru']['name']);
            move_uploaded_file($_FILES['Banner2_ru']['tmp_name'], $target_path7);

            $image = new SimpleImage();
            $image->load($target_path7);
            if ($image->getWidth() > 1920)
            {
                $image->resizeToWidth(1920);
                $image->save($target_path7);
            }
        }
    }
    ##upload banner2 ru##

    mysql_query("
	UPDATE sitesettings SET 
	Title='$Title',
	Title_en='$Title_en',
	Title_ru='$Title_ru',
	SiteName='$SiteName',
	Description='$Description',
	Description_en='$Description_en',
	Description_ru='$Description_ru',
	Keywords='$Keywords',
	Keywords_en='$Keywords_en',
	Keywords_ru='$Keywords_ru',
	Animasyon='$Animasyon',
	VideoYazi='$VideoYazi',
	VideoYazi_en='$VideoYazi_en',
	VideoLink='$VideoLink',
	VideoYazi_ru='$VideoYazi_ru',
	Yazi1='$Yazi1',
	Yazi1_en='$Yazi1_en',
	Yazi1_ru='$Yazi1_ru',
	Yazi2='$Yazi2',
	Yazi2_en='$Yazi2_en',
	Yazi2_ru='$Yazi2_ru',
	Yazi3='$Yazi3',
	Yazi3_en='$Yazi3_en',
	Yazi3_ru='$Yazi3_ru',
	Yazi4='$Yazi4',
	Yazi4_en='$Yazi4_en',
	Yazi4_ru='$Yazi4_ru',
	Yazi5='$Yazi5',
	Yazi5_en='$Yazi5_en',
	Yazi5_ru='$Yazi5_ru',
	Yazi6='$Yazi6',
	Yazi6_en='$Yazi6_en',
	Yazi6_ru='$Yazi6_ru',
	Yazi7='$Yazi7',
	Yazi7_en='$Yazi7_en',
	Yazi7_ru='$Yazi7_ru',
	Yazi8='$Yazi8',
	Yazi8_en='$Yazi8_en',
	Yazi8_ru='$Yazi8_ru',
	Yazi9='$Yazi9',
	Yazi9_en='$Yazi9_en',
	Yazi9_ru='$Yazi9_ru',
	Yazi10='$Yazi10',
	Yazi10_en='$Yazi10_en',
	Yazi10_ru='$Yazi10_ru',
	Favicon='$target_path1',
	Logo='$target_path1L',
	Banner1='$target_path2',
	Banner2='$target_path3',
	Banner1_en='$target_path4',
	Banner2_en='$target_path5',
	Banner1_ru='$target_path6',
	Banner2_ru='$target_path7',
	Banner1Link='$Banner1Link',
	Banner2Link='$Banner2Link',
	Banner1Link_en='$Banner1Link_en',
	Banner2Link_en='$Banner2Link_en',
	Banner1Link_ru='$Banner1Link_ru',
	Banner2Link_ru='$Banner2Link_ru',
	Date=NOW()
	WHERE id=1
	",$conn);

?>

<script language='javascript'>
document.location='index.php?q=baslangic_ayarlari';</script>

<?php 

}

?>