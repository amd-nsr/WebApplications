
<!---------  ------------------------- conect to data base php  ------------------------- -----	
<?php 

				$DB_HOST="127.0.0.1";
				$DB_USERNAME="root";
				$DB_PASSWORD="mysql";
				$DB_NAME="webtask";

$conn = mysqli_connect($DB_HOST,$DB_USERNAME,$DB_PASSWORD,$DB_NAME);

if (mysqli_connect_errno())
    echo "Failed to connect to MySQL datbas webtask : " . mysqli_connect_error();

?>

<!---------  ------------------------- conect to data base php -----------      ------>
