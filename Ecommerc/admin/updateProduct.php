<?php include "include/header.html"; ?>
<?php include "../database/config.php"; ?>
<?php include "../database/database.php"?>

<?php
$db = new database();
$productID = $_GET[p_id];
$query ="SELECT *FROM `products` WHERE product_id = :product_id";
$param = array(':product_id' => $productID);
$product = $db->getRow($query, $param);
?>

<div id="products">
    <form class="bookingForm" method="post" action="updateProduct.php">
        <label> Product Type</label>
    <br>
    <input type="text" name="ProductType" value=<?php echo $product['type_id']; ?> >
    <br>
    
     <label> Product Name</label>
    <br>
    <input type="text" name="ProductName" value=<?php echo $product['product_name']; ?> >
    <br>
    
     <label> Product Description </label>
    <br>
    <input type="text" name="ProductDes" value=<?php echo $product['product_desc']; ?> >
    <br>
    
     <label> Product Price</label>
     <br>
    <input type="number" name="ProductPrice" value=<?php echo $product['product_price']; ?>>
     <br>
    
     <label> Product Image</label>
     <br>
    <input type="file" name="ProductImage" value="Product Image">
     <br>
     <label> Submit your Info </label>
     <br>
    <input type="submit" name="submit" value="submit" >
     <br>
    </form>

</div>

<?php include "include/footer.html"; ?>
<?php 
    if(isset($_POST['submit'])){
    $db=new database();
        /*
    $ProductType =  $_POST['ProductType'];
    $ProductName =  $_POST['ProductName'];
    $ProductDes  =  $_POST['ProductDes'];
    $ProductPrice=  $_POST['ProductPrice'];
    //$ProductImage
    */
         //product_photo,
        //':ProductType'  =>$_POST['ProductType'],
    $query = "UPDATE `products`(product_name, product_price, product_desc)                          VALUES(:product_name, :product_price, :product_desc) WHERE product_id=:product_id";
        
    $productInfo = array(
                         ':product_id' => $productID,
                         ':ProductName'  =>$_POST['ProductName'],
                         ':ProductPrice' =>$_POST['ProductPrice'],
                         ':ProductDes'   =>$_POST['ProductDes']);
        
    $db->updateRow($query,$productInfo);
    }
?>
