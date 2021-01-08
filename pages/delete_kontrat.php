<?
@session_start();
include("connect.php");
if ($_SESSION['Username']=='' || !$_GET['id']) {?>
    <script language="javascript">
        document.location="../index.php?q=kontrat_listesi";
    </script><? die();}
$id=$_GET['id'];
$silsorgu = sprintf("delete from sozlesmeler where id='%s'",
    mysql_real_escape_string($id));
$q=mysql_query($silsorgu,$conn);

if ($q) { 		?>
    <script language="javascript">
        window.alert('Evrak Silindi');
        document.location="../index.php?q=kontrat_listesi";
    </script>
    <?
}
?>