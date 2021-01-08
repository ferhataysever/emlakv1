<?php
		@session_start();
		
		$User= $_SESSION['Username'];
		
		include("pages/connect.php");
		
		echo $_SESSION['login'];
		
		if(!$_SESSION['login']==1)
		{
?>
			<script language='javascript'>
			
 	               document.location='login.php';
            </script>
<?php

		}

?>
