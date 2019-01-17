<?php include "include/header.html"; ?>
<?php include "../database/config.php"; ?>
<?php include "../database/database.php"?>

<?php
$db = new database();
$productID = $_GET[p_id];
$query ="DELETE FROM `products` WHERE product_id = :product_id";
$param = array('product_id' => $productID);
$result = $db->deleteRow($query, $param);
if($result)
    echo "Delete  Done";
else
    echo "No Delete";
?>


<?php include "include/footer.html"; ?>