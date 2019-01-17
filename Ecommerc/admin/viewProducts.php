<?php include "include/header.html"; ?>
<?php include "../database/config.php"; ?>
<?php include "../database/database.php"?>
<?php 
$db = new database();
$query ="SELECT *FROM `products`";
$product = $db->getRows($query);
$counter=0;
?>



<div class="products  text-center">
    <table class="main-color">
        <tr>
            <th>Product Type </th>
            <th>Product Name </th>
            <th>Product Description </th>
            <th>Product Price </th>
            <th>Product Image </th>
        </tr>
        <?php while($counter <= sizeof($product)): ?>
        <tr>
            <td><?php echo $product[$counter]['type_id']; ?></td>
            <td><?php echo $product[$counter]['product_name']; ?></td>
            <td><?php echo $product[$counter]['product_desc']; ?></td>
            <td><?php echo $product[$counter]['product_price']; ?> </td>
            <td><img src="../include/images/".<?php echo $product[$counter]['product_photo']; ?> ></td> 
            <td><a href=<?php echo"updateProduct.php?p_id=". $product[$counter]['type_id']; ?> > Update </a> </td>
            <td><a href=<?php echo"removeProduct.php?p_id=". $product[$counter]['type_id']; ?> > Remove </a> </td>
        </tr>
           <?php $counter++; endwhile; ?> 
    </table>

</div>
<?php include "include/footer.html"; ?>
