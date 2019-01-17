<?php include_once('config.php'); ?>
<?php include_once('database.php'); ?>

<?php

$db = new database();
/*
$query="INSERT INTO seat (customerId,movieId,seatNumber)
    VALUES (:customerId, :movieId, :seatNumber)";
$values=array(':customerId' => '6',':movieId' =>'6',':seatNumber'=>'6');
$db->insertRow($query,$values);
*/
?>
<?php

//$val=array(':id'=>'1');

//echo count($row);

?>
<?php
$query2="SELECT *FROM movie";
$row=$db->getRows($query2);
$i=0;
?>
<?php
while($i < sizeof($row)){
//echo print[$i++]['image'];
    echo '<img src="data:image/jpeg;base64,'.base64_encode( $row[$i++]['image'] ).'" />';
}
?>

<?php
/*
$servername = "localhost";
$username = "root";
$password = "mysql";
$dbname = "cinema";

 $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // prepare sql and bind parameters
    $stmt = $conn->prepare("INSERT INTO seat (customerId,movieId,seatNumber)
    VALUES (:customerId, :movieId, :seatNumber)");
    $stmt->bindParam(':customerId', $c);
    $stmt->bindParam(':movieId', $m);
    $stmt->bindParam(':seatNumber', $s);
*/
 // insert a row
/*
    $c = "3";
    $m = "3";
    $s = "3";
    */
/*
$values=array(':customerId' => "5", ':movieId' => "5", ':seatNumber' => "5");
    $stmt->execute($values);
    */

?>


















