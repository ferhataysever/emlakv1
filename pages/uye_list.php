<?php
$sql=mysql_query("Select * from uyeler order by Status",$conn);		
$sqlSayi=mysql_fetch_assoc(mysql_query("Select COUNT(*) as Uyesay from uyeler",$conn));	
?> 
<script type="text/javascript">

	function UyeSil(id) {
	
	var ans = confirm("Bu üyeyi silmek istediğinize emin misiniz ? ");
	
	if (ans == true) {
	
	window.location.href='pages/delete_uye.php?id=' + id; 
	}
	
	}

</script>

<div class="page-content">

    <!-- SAYFA BAŞI YARDIM KUTUSU-->
  	<div class="alert alert-warning alert-dismissable">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
    <strong>Üye Listesi; </strong> Kayıtları düzenleyebilir, silebilir ve yeni kayıt ekleyebilirsiniz.
    </div>
    <!-- SAYFA BAŞI YARDIM KUTUSU-->

         <!-- BEGIN PAGE CONTENT-->
         <div class="row">
            <div class="col-md-12">
               <!-- BEGIN EXAMPLE TABLE PORTLET-->
               <div class="portlet box green">
                  <div class="portlet-title">
                     <div class="caption"><i class="icon-reorder"></i>
                     Üye Listesi (Toplam <?php echo $sqlSayi['Uyesay'];?> Kayıt)
                     </div>
                     <div class="tools">
                        <a href="javascript:;" class="collapse"></a>
                        <a href="#portlet-config" data-toggle="modal" class="config"></a>
                     </div>
                  </div>
                  <div class="portlet-body">
                      <div class="table-toolbar">
                          <div class="btn-group">
                              <a href="index.php?q=yeni_uye">
                                  <button id="sample_editable_1_new" class="btn green">
                                      Yeni Ekle <i class="icon-plus"></i>
                                  </button>
                              </a>
                          </div>
                      </div>

                     <table class="table table-striped table-hover table-bordered" id="sample_editable_1">
                        <thead>
                           <tr>
                              <th width="20%">Ad Soyad</th>
                              <th width="20%">E-posta</th>
                              <th width="15%">Telefon</th>
                              <th width="20%">Adres</th>
                              <th width="15%">Şehir</th>
                              <th width="15%" colspan="2">İşlemler</th>

                           </tr>
                        </thead>
                        
                        <tbody>
						<?php
                        while($res=@mysql_fetch_assoc($sql)) 
						{	
						?>
                        
                           <tr>
                              <td><?php echo $res['Name'];?></td>
                              <td><?php echo $res['Email'];?></td>
                              <td><?php echo $res['Gsmno'];?></td>
                               <td><?php echo $res['Adres'];?></td>
                               <td><?php echo $res['Sehir'];?></td>
                              <td><a class="btn btn-sm red" href="#" onClick="UyeSil(<?php echo $res['id'];?>);"><i class="icon-remove"></i> Sil</a></td>
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
</div>