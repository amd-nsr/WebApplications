<?php include"includes/header.html"; ?>
<?php include"config.php"; ?>
<?php include"database.php"; ?>
<?php 
$db=new database();
$query2="SELECT *FROM movie";
$row=$db->getRows($query2);
$i=0;
?>
            <div id="main">
                <?php while($i < sizeof($row)): ?>
                <div class="movie">
                    <a href="book.php">
                   <?php echo '<img src="data:image/jpeg;base64,'.base64_encode( $row[$i++]['image'] ).'" width="100%" height="100%" />'; ?>
                        </a>
                </div> <!-- endOfMovie-->
                    <?php endwhile;    ?>
            
            
            </div> <!-- endOfMain-->
<?php include"includes/footer.html"; ?>