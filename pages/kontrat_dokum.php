<style>
    @media print {
        body * {
            visibility: hidden;
        }
        #section-to-print, #section-to-print * {
            visibility: visible;
        }
        #section-to-print {
            position: absolute;
            left: 0;
            top: 0;
        }
    }
</style>
<div align="center">
<button onclick="window.print()" style="font-size: 25px"><i class="icon-print"></i> YAZDIR</button>
</div>
<?php
$id = $_GET['id'];
$sql = sprintf("Select * from sozlesmeler where id='%s'",
    mysql_real_escape_string($id));
$q=mysql_query($sql,$conn);
$res=mysql_fetch_assoc($q);

if($res['Type'] == 'Kontrat'){
    $sqlkontrat = mysql_query('select * from sablonlar where id = 85');
}
else{
    $sqlkontrat = mysql_query('select * from sablonlar where id = 86');
}
$reskontrat = mysql_fetch_assoc($sqlkontrat);

$mulksahibisql = mysql_query('select * from uyeler where id = '.$res['Ownerid']);
$kiracisql = mysql_query('select * from uyeler where id = '.$res['Customerid']);

$mulksahibi = mysql_fetch_assoc($mulksahibisql);
$kiraci = mysql_fetch_assoc($kiracisql);

?>
<div class="page-content" id="section-to-print">

    <?php
    $dokum = str_replace('{adres}',$res['Adres'],$reskontrat['Content']);
    $dokum = str_replace('{mesken}',$res['Mesken'],$dokum);
    $dokum = str_replace('{mulksahibi}',$res['OwnerName'],$dokum);
    $dokum = str_replace('{mulksahibitc}',$mulksahibi['Tckn'],$dokum);
    $dokum = str_replace('{mulksahibiadres}',$mulksahibi['Adres'],$dokum);
    $dokum = str_replace('{kiraci}',$kiraci['Name'],$dokum);
    $dokum = str_replace('{kiracitc}',$kiraci['Tckn'],$dokum);
    $dokum = str_replace('{kiraciadres}',$kiraci['Adres'],$dokum);
    $dokum = str_replace('{tarih}',$res['Tarih'],$dokum);
    $dokum = str_replace('{sure}',$res['Sure'],$dokum);
    $dokum = str_replace('{toplambedel}',$res['Total'],$dokum);
    $dokum = str_replace('{aylikbedel}',$res['Total'] / 12,$dokum);
    $dokum = str_replace('{demirbas}',$res['Demirbas'],$dokum);
    $dokum = str_replace('{aciklama}',$res['Aciklama'],$dokum);

    echo $dokum;
    ?>
</div>

