<?php include_once('includes/header.html'); ?>
<?php include_once('database.php'); ?>
<?php
$db=new database();
$q1="SELECT *FROM trainsandstations";
$stations = $db-> getRows($q1);

$q2="SELECT *FROM class";
$class = $db-> getRows($q2);
$count=0;
$asc=0;
$cc=0;
?>
				     <form id="trainsForm" action="trains.php" method="get">
                <table id="intbl" >
                    <tr>
                        <td><span>محطة القيام: </span></td>
                        <td>
                <select name="leave">
                     <?php while($count < sizeof($stations)): ?>
                    <option value="<?php echo $stations[$count]['Station'] ?> ">
                        <?php echo $stations[$count]['Station'] ?> 
                    </option>
                    <?php $count++; endwhile; ?>
                </select>
                            </td>
                        </tr>
                    <!-- end -->
                    
                    
                    
                    <tr>
                        <td><span>محطة الوصول: </span></td>
                        <td>
                <select name="arrive">
                    <?php while($asc< sizeof($stations)): ?>
                    <option value="<?php echo $stations[$asc]['Station']; ?> ">
                        <?php echo $stations[$asc]['Station']; ?> 
                    </option>
                    <?php $asc++; endwhile; ?>
                </select>
                            </td>
                        </tr>
                         <!-- end -->
                    
                        <tr>
                            <td><span> نوع القطار:</span></td>
                        <td>
                <select name="class">
                    <?php while($cc<sizeof($class)): ?>
                    <option value="<?php echo $class[$cc]['type']; ?>" >
                    <?php echo $class[$cc]['type']; ?>
                    </option>
                    <?php $cc++; endwhile; ?>
                </select>
                            </td>
                        </tr>
                <tr>
                      <td>
               <input class="in" type="submit" value="عرض القطارت">
                  </td>
                </tr>
                    </table>
            </form>

			<?php include_once('includes/footer.html'); ?>