<?php include "include/header.html"; ?>
<?php include "../database/config.php"; ?>
<?php include "../database/database.php"?>
<?php 
$db = new database();
$query = "SELECT *FROM `types`";
$type = $db->getRows($query);
$counter = 0;

?>


<div id="products">
    <form class="bookingForm" method="post" action="addProduct.php" enctype="multipart/form-data">
		<div class="cont">
			
        <h3 style=" display:inline;"> Product Type :</h3>
    
        <select size="1">
                <?php while($counter < sizeof($type)): ?>
            <option name="typeID" value= "<?php echo $type[$counter]['type_id']; ?>" > 
                <?php echo $type[$counter]['type_name']; ?> 
            </option>
                <?php $counter++; endwhile; ?>
        </select>
    
			<h1> </h1>
  
    <input type="text" name="ProductName" placeholder="Product Name" >
   
    
     
    <input type="text" name="ProductDes" placeholder="Product Description " >
   
    
    
    <input type="number" name="ProductPrice" min="1" placeholder="$ Product Price">

    
    
    <input type="file" name="file"  placeholder ="Product Image">
     
    
    <input type="submit" name="submit" class ="button" value="submit" >
     
			</div>
    </form>

</div>
<?php include "include/footer.html"; ?>

<?php
$db = new database();
$statusMsg = '';
// File upload path
$targetDir = "../include/images/";
$fileName = basename($_FILES["file"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

$path = $targetDir.$fileName;

if(isset($_POST["submit"]) && !empty($_FILES["file"]["name"])){
    // Allow certain file formats
    $allowTypes = array('jpg','png','jpeg','gif','pdf');
    if(in_array($fileType, $allowTypes)){
        // Upload file to server
        if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
            echo $fileName;
            // Insert image file name into database
            
$query = "INSERT INTO `products`(   type_id,
                                    product_name,
                                    product_photo,
                                    product_price,
                                    product_desc) VALUES(
                                   :type_id,
                                   :product_name,
                                   :product_photo,
                                   :product_price,
                                   :product_desc)";
        
    $productInfo = array(
                         ':type_id'       =>$_POST['typeID'],
                         ':product_name'  =>$_POST['ProductName'],
                         ':product_photo' =>$path,
                         ':product_price' =>$_POST['ProductPrice'],
                         ':product_desc'  =>$_POST['ProductDes']);
            
                $result = $db->insertRow($query,$productInfo);
                if($result > 0){
                $statusMsg = "The file ".$fileName. " has been uploaded successfully.";
            }else{
                $statusMsg = "File upload failed, please try again.";
            } 
        }else{
            $statusMsg = "Sorry, there was an error uploading your file.";
        }
    }else{
        $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
    }
}else{
    $statusMsg = 'Please select a file to upload.';
}
// Display status message
echo $statusMsg;
//var_dump($productInfo);
?>




