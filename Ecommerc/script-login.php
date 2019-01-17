<!------------------------start database connection----------------------->
<?php include('conectdbstart.php'); ?>
<!------------------------ database connection----------------------->

<!-------------------------------- start  php  login script  --------------------------->
<?php
session_start();
$_SESSION['user_id']=0;
 if(isset($_POST['submitt']))
	{
$username=$_POST['username'];
$upassword=$_POST['upassword'];
$query="select * from  users where user_name='". $username ."'and upassword='". $upassword ."'";
$result= mysqli_query($conn,$query);	 
		if ($result)
		{
$row=mysqli_fetch_assoc($result);
		$_SESSION['user_id']=$row['user_id'];
		$_SESSION['user_name']=$row['user_name'];
		$_SESSION['email']=$row['email'];	
		$_SESSION['user_roull']=$row['user_roull'];
			if($_SESSION['user_roull']=="admin")
			{
				header('location: admin/adminPanel.php');
			}
			else{
				header('location: home.php');
			}
		}
 
		else{ 
			header('location: index.php');
		}
 }
?>
<!-------------------------------- end  php  login script  --------------------------->
<!--------------------------------end database connection  ------------------------>
<?php include('conectdbend.php'); ?>	  
<!--------------------------------- database connection  ------------------------>	