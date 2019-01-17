<!-------------------start log out script---------------------------------------------->
<?php

	session_start();
	session_destroy();
	header('location: index.php');
	
?>
<!-------------------end log out script---------------------------------------------->
