<div class="page-content">

    <!-- SAYFA BAŞI YARDIM KUTUSU-->
    <div class="alert alert-warning alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
        <strong>Yeni Üye Girişi ;</strong> Bu menüden yeni bir üye ekleyebilirsiniz.
    </div>
    <!-- SAYFA BAŞI YARDIM KUTUSU-->

    <!-- BEGIN PAGE CONTENT-->
    <div class="row">
        <div class="col-md-12">
            <div class="tab-pane" id="site_settings">
                <div class="portlet box green">
                    <div class="portlet-title">
                        <div class="caption"><i class="icon-edit"></i>Yeni Üye Girişi</div>
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
                                    <label class="control-label col-md-2">Ad Soyad</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" name="Name" id="Name"/>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-2">Email</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" name="Email" id="Email"/>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-2">Gsm No</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" name="Gsmno" id="Gsmno"/>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-2">Adres</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" name="Adres" id="Adres"/>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-2">Sehir</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" name="Sehir" id="Sehir"/>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-2">Tc Kimlik No</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" name="TcNo" id="TcNo"/>
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
    $Name=$_POST['Name'];
    $Email=$_POST['Email'];
    $Gsmno=$_POST['Gsmno'];
    $Adres=$_POST['Adres'];
    $Sehir=$_POST['Sehir'];
    $TcNo=$_POST['TcNo'];

    $Insert = mysql_query("
	INSERT INTO uyeler
	(Name,Email,Gsmno,Adres,Sehir,Tckn)
	VALUES
	('$Name','$Email','$Gsmno','$Adres','$Sehir','$TcNo')
	",$conn);

    if(!$Insert){
        die(mysql_error());
    }

    ?>

    <script language='javascript'>
        document.location='index.php?q=uye_listesi';</script>

    <?php

}

?>