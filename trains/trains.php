<?php include_once('includes/header.html'); ?>  
<?php include_once('database.php'); ?>
<?php
$db=new database();
/*
*   values test
*/
/*
echo $_GET['leave'];
echo $_GET['arrive'];
echo $_GET['class'];
*/

$q1="SELECT *FROM trainsandstations WHERE Station= :Station";
$leave= array(':Station'=>$_GET['leave']);
$leaveTrains= $db->getRows($q1,$leave);

$q2="SELECT *FROM trainsandstations WHERE Station= :Station AND Train_Number= :Train_Number";
for($i=0; $i<sizeof($leaveTrains); $i++)
{
    /*
    $trainNumbers[$i]=$leaveTrains[$i]['Train_Number'];
    echo $trainNumbers[$i]."<br>";
    */
    $arrive=array(':Station'=>$_GET['arrive'],':Train_Number'=>$leaveTrains[$i]['Train_Number']);
    $arriveTrains[$i]=$db->getRows($q2,$arrive);
    //echo $arriveTrains[$i][0]['Train_Number']."<br>";
    $leaveTime[$i]=$leaveTrains[$i]['Time'];
}

$count=0;

?>




			<table id="trains">
    <th>قطار</th><th>قيام</th><th>وصول</th><th>المدة</th><th>السرعة</th><th>الدرجة</th><th>يقف فى</th>
                <?php while($count < sizeof($arriveTrains)): ?>
    <tr>
        <td class="cell"> <?php echo $arriveTrains[$count][0]['Train_Number']; ?>      
        </td> 
        
        <td td class="cell"> <?php echo  $leaveTime[$count] ?>          
            
        </td> 
        
        <td td class="cell"><?php echo $arriveTrains[$count][0]['Time']; ?>              
        </td> 
        
        <td td class="cell"> 
            <?php echo (real)($arriveTrains[$count][0]['Time'] - $leaveTime[$count]) ;
            ?>  
        </td> 
        
        <td td class="cell"><?php 
            $sq="SELECT *FROM speed WHERE id=:id";
            $speed=array(':id'=>$arriveTrains[$count][0]['speed_id']);
            $tspeed=$db->getRow($sq,$speed);
            echo $tspeed['km'];
            ?>
        </td> 
        
        <td td class="cell">
            <?php
            $cq="SELECT *FROM class WHERE id=:id";
            $class=array(':id'=>$arriveTrains[$count][0]['class_id']);
            $tclass=$db->getRow($cq,$class);
            echo $tclass['type'];
            ?>
        </td> 
        
        
        <td class="cell">  
            <div class="line">
                <?php
            $lq="SELECT *FROM line WHERE id=:id";
            $line=array(':id'=>$arriveTrains[$count][0]['line_id']);
            $tline=$db->getRow($lq,$line);
            echo $tline['name'];
            ?>
              </div>
            <!--
                <img class="lineImg" width="50px" height="50px" onclick="line()" src="image/train.png"/>
            -->
        </td> 
    </tr>
                <?php $count++; endwhile; ?>

    
</table>
<?php include_once('includes/footer.html'); ?>