<?
@session_start();
include("connect.php");	
if ($_SESSION['Username']=='' || !$_GET['id']) {?>
<script language="javascript">
document.location="../index.php?q=uye_listesi";
</script><? die();}
$id=$_GET['id'];
$sorgu = sprintf("delete from uyeler where id='%s'",
mysql_real_escape_string($id));
$q=mysql_query($sorgu,$conn);

if ($q) { 		?>
<script language="javascript">
window.alert('Üye Silindi');
document.location="../index.php?q=uye_listesi";
</script>
<? 
} 
?>