    <div class="page-content">

        <!-- SAYFA BAŞI YARDIM KUTUSU-->
        <div class="alert alert-warning alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
            <strong>Yeni Kontrat/Sözleşme Girişi ;</strong> Bu menüden yeni bir kontrat/sözleşme ekleyebilirsiniz.
        </div>
        <!-- SAYFA BAŞI YARDIM KUTUSU-->

        <!-- BEGIN PAGE CONTENT-->
        <div class="row">
            <div class="col-md-12">
                <div class="tab-pane" id="site_settings">
                    <div class="portlet box green">
                        <div class="portlet-title">
                            <div class="caption"><i class="icon-edit"></i>Yeni Kontrat/Sözleşme Girişi</div>
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
                                        <label class="control-label col-md-2">Evrak Türü</label>
                                        <div class="col-md-10">
                                            <select class="form-control" name="Type" id="Type">
                                                <option value="Kontrat">Kontrat</option>
                                                <option value="Sozlesme">Sözleşme</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-md-2">Müşteri</label>
                                        <div class="col-md-10">
                                            <select class="form-control" name="Customer" id="Customer">
                                                <option value="0;Yok">Yok</option>
                                                <?php
                                                include "pages/get_uye.php";
                                                ?>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-md-2">Mülk Sahibi</label>
                                        <div class="col-md-10">
                                            <select class="form-control" name="Owner" id="Owner">
                                                <option value="0;Yok">Yok</option>
                                                <?php
                                                include "pages/get_uye.php";
                                                ?>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-md-2">Taşınmazın Bulunduğu Adres</label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control" name="Adres" id="Adres"/>
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label class="control-label col-md-2">Mesken Cinsi</label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control" name="Mesken" id="Mesken" value="Konut,İşyeri"/>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-md-2">Kiralama Süresi</label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control" name="Sure" id="Sure" value="1 YIL"/>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-md-2">Başlangıç Tarihi</label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control" name="Tarih" id="Tarih" value="<?php echo date('d-m-Y')?>"/>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-md-2">Demirbaşlar</label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control" name="Demirbas" id="Demirbas"/>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-md-2">Ek Açıklamalar</label>
                                        <div class="col-md-10">
                                            <textarea class="form-control" name="Aciklama"></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-md-2">Toplam Bedel</label>
                                        <div class="col-md-2">
                                            <input type="text" class="form-control" name="Total" id="Total"/>
                                        </div>
                                        <div class="col-md-2">
                                            <select id="Currency" name="Currency" class="form-control"><option value="TL">TL</option><option value="USD">USD</option><option value="EUR">EUR</option></select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-md-2">Durum</label>
                                        <div class="col-md-10">
                                            <select class="form-control" name="Status" id="Status">
                                                <option value="1">Aktif</option>
                                                <option value="0">Pasif</option>
                                            </select>
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
    $Type=$_POST['Type'];
    $Status=$_POST['Status'];
    $Total=$_POST['Total'];
    $Currency=$_POST['Currency'];
    $Adres=$_POST['Adres'];
    $Mesken=$_POST['Mesken'];
    $Sure=$_POST['Sure'];
    $Tarih=$_POST['Tarih'];
    $Demirbas=$_POST['Demirbas'];
    $Aciklama=$_POST['Aciklama'];

    $Customer=explode(";",$_POST['Customer']);
    $Customerid=$Customer[0];
    $CustomerName=$Customer[1];

    $Owner=explode(";",$_POST['Owner']);
    $Ownerid=$Owner[0];
    $OwnerName=$Owner[1];


    $Insert = mysql_query("
	INSERT INTO sozlesmeler
	(Type,Total,Status,Customerid,CustomerName,Ownerid,OwnerName,CrDate,Currency,Adres,Mesken,Sure,Tarih,Demirbas,Aciklama)
	VALUES
	('$Type','$Total','$Status','$Customerid','$CustomerName','$Ownerid','$OwnerName',NOW(),'$Currency','$Adres','$Mesken','$Sure','$Tarih','$Demirbas','$Aciklama')
	",$conn);

    if(!$Insert){
        die(mysql_error());
    }

    ?>

    <script language='javascript'>
        document.location='index.php?q=kontrat_listesi';</script>

    <?php

}

?>