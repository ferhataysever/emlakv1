<?php
$sayfada = 25; // sayfada gösterilecek içerik miktarını belirtiyoruz.

$sorgu = mysql_query('SELECT COUNT(*) AS toplam FROM sozlesmeler');
$sonuc = mysql_fetch_assoc($sorgu);
$toplam_icerik = $sonuc['toplam'];

$toplam_sayfa = ceil($toplam_icerik / $sayfada);

// eğer sayfa girilmemişse 1 varsayalım.
$sayfa = isset($_GET['sayfa']) ? (int) $_GET['sayfa'] : 1;

// eğer 1'den küçük bir sayfa sayısı girildiyse 1 yapalım.
if($sayfa < 1) $sayfa = 1;

// toplam sayfa sayımızdan fazla yazılırsa en son sayfayı varsayalım.
if($sayfa > $toplam_sayfa) $sayfa = $toplam_sayfa;
// kaçıncı içerikten başlanacağını ifade edecek limit değeri.
$limit = ($sayfa - 1) * $sayfada;

$sql=mysql_query("Select * from sozlesmeler order by id LIMIT " . $limit . ", " . $sayfada);

?>
<script type="text/javascript">

    function KontratSil(id) {

        var ans = confirm("Bu kontratı/sözleşmeyi silmek istediğinize emin misiniz ? ");

        if (ans == true) {

            window.location.href='pages/delete_kontrat.php?id=' + id;
        }

    }

</script>

<div class="page-content">

    <!-- SAYFA BAŞI YARDIM KUTUSU-->
    <div class="alert alert-warning alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
        <strong>Kontrat/Sözleşme Listesi; </strong> Kayıtları düzenleyebilir, silebilir ve yeni ürünler ekleyebilirsiniz.
    </div>
    <!-- SAYFA BAŞI YARDIM KUTUSU-->

    <!-- BEGIN PAGE CONTENT-->
    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN EXAMPLE TABLE PORTLET-->
            <div class="portlet box green">
                <div class="portlet-title">
                    <div class="caption"><i class="icon-reorder"></i>
                        Kontrat/Sözleşme Listesi
                    </div>
                    <div class="tools">
                        <a href="javascript:;" class="collapse"></a>
                        <a href="#portlet-config" data-toggle="modal" class="config"></a>
                    </div>
                </div>
                <div class="portlet-body">
                    <div class="table-toolbar">
                        <div class="btn-group">
                            <a href="index.php?q=yeni_kontrat">
                                <button id="sample_editable_1_new" class="btn green">
                                    Yeni Ekle <i class="icon-plus"></i>
                                </button>
                            </a>
                        </div>
                    </div>

                    <table class="table table-striped table-hover table-bordered" id="sample_editable_1">
                        <thead>
                        <tr>
                            <th width="15%">Tarih</th>
                            <th width="40%">Taraflar</th>
                            <th width="10%">Evrak Türü</th>
                            <th width="15%">Toplam Bedel</th>
                            <th width="20%" colspan="3">İşlemler</th>

                        </tr>
                        </thead>

                        <tbody>
                        <?php
                        while($res=@mysql_fetch_assoc($sql))
                        {
                            ?>

                            <tr>
                                <td><?php echo date('d-m-Y H:i',strtotime($res['CrDate']));?></td>
                                <td><?php echo $res['CustomerName'];?> | <?php echo $res['OwnerName'];?></td>
                                <td><?php echo $res['Type'];?></td>
                                <td><?php echo $res['Total'];?></td>
                                <td><a class="btn btn-sm blue" target="_blank" href="?q=kontrat_dokum&id=<?php echo $res['id'];?>"><i class="icon-print"></i> Çıktı Al</a></td>
                                <td><a class="btn btn-sm green" href="?q=kontrat_duzenle&id=<?php echo $res['id'];?>"><i class="icon-edit"></i> Düzenle</a></td>
                                <td><a class="btn btn-sm red" href="#" onClick="KontratSil(<?php echo $res['id'];?>);"><i class="icon-remove"></i> Sil</a></td>
                            </tr>

                            <?php
                        }
                        ?>

                        </tbody>
                    </table>
                </div>
            </div>
            <!-- END EXAMPLE TABLE PORTLET-->
        </div>
    </div>
    <!-- END PAGE CONTENT -->

    <?php
    // yukarıdan geldiği varsayılan değişkenler:
    // $toplam_sayfa ve $sayfa

    $sayfa_goster = 11; // gösterilecek sayfa sayısı

    $en_az_orta = ceil($sayfa_goster/2);
    $en_fazla_orta = ($toplam_sayfa+1) - $en_az_orta;

    $sayfa_orta = $sayfa;
    if($sayfa_orta < $en_az_orta) $sayfa_orta = $en_az_orta;
    if($sayfa_orta > $en_fazla_orta) $sayfa_orta = $en_fazla_orta;

    $sol_sayfalar = round($sayfa_orta - (($sayfa_goster-1) / 2));
    $sag_sayfalar = round((($sayfa_goster-1) / 2) + $sayfa_orta);

    if($sol_sayfalar < 1) $sol_sayfalar = 1;
    if($sag_sayfalar > $toplam_sayfa) $sag_sayfalar = $toplam_sayfa;

    if($sayfa != 1) echo ' <a href="?q=kontrat_listesi&sayfa=1">&lt;&lt;İlk sayfa</a> ';
    if($sayfa != 1) echo ' <a href="?q=kontrat_listesi&sayfa='.($sayfa-1).'">&lt;Önceki</a> ';

    for($s = $sol_sayfalar; $s <= $sag_sayfalar; $s++) {
        if($sayfa == $s) {
            echo '[' . $s . '] ';
        } else {
            echo '<a href="?q=kontrat_listesi&sayfa='.$s.'">'.$s.'</a> ';
        }
    }

    if($sayfa != $toplam_sayfa) echo ' <a href="?q=kontrat_listesi&sayfa='.($sayfa+1).'">Sonraki&gt;</a> ';
    if($sayfa != $toplam_sayfa) echo ' <a href="?q=kontrat_listesi&sayfa='.$toplam_sayfa.'">Son sayfa&gt;&gt</a>';

    ?>
</div>