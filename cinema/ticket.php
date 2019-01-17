<?php include"includes/header.html"; ?>
<?php include"config.php"; ?>
<?php include"database.php"; ?>
<?php 
$query="INSERT INTO customer(FName,LName,credit,phone,email)
        VALUES(:FName, :LName, :credit, :phone, :email)";
$form=array(':FName' => $_POST['custFName'],
            ':LName' => $_POST['custLName'],
            ':credit'=> $_POST['custCreditNumber'],
            ':phone' => $_POST['custPhone'],
            ':email' => $_POST['custEmail']);
$db=new database();
$result=$db->insertRow($query,$form);
if($result>0)
    echo"<h2>Congratulations ^_^ ... Here Are Your Ticket</h2>";
else
    echo"<h2>OPS ... Unexpected Somthing</h2>";
?>
<?php
$query="SELECT *FROM customer";
$row=$db->getRows($query);
?>
<h1 class="title"> Ticket Information </h1>
<h2> First Name :</h2>
    <h4><?php echo $row[sizeof($row)-1]['FName'] ?></h4>
<h2> last Name :</h2>
    <h4><?php echo $row[sizeof($row)-1]['LName'] ?></h4>
<h2> Date :</h2>
    <h4>9/5/2018</h4>
<h2> Time :</h2>
    <h4>3:30 PM</h4>
<h2> ID :</h2>
    <h4>332</h4>
<?php include"includes/footer.html"; ?>