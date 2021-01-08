<?php
$sqlCat=@mysql_query("Select * from uyeler",$conn);
while($resf=@mysql_fetch_assoc($sqlCat))
{
    $pid=$resf['id'];
    $valuetext=$pid.";".$resf['Name'];
    ##selectedtext:
    if ($W['Customerid']==$pid)
    {
        $selectedtext=" selected ";
    }
    else
    {
        $selectedtext=" ";
    }
    ##selectedtext:
    echo "<option value='$valuetext'".$selectedtext.">".$resf['Name']."</option>";
}
?>