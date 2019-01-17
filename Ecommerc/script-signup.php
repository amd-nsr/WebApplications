<!------------------------start database connection----------------->
<?php include('conectdbstart.php'); ?>
<!-------------------------------- start  php  login script  --------->

<!----------------------start  php signup script -------------------->			
<?php


	if(isset($_POST['submitt']) && $_POST['upassword']==$_POST['reupassword'] )
	{
		
$username=$_POST['username'];
$email=$_POST['email'];
$upassword=$_POST['upassword'];		
$query="select user_id from users where user_name='". $username ."'";
$result=mysqli_query($conn,$query);
$row=mysqli_fetch_assoc($result);
		
		if($row['user_id']>0){
			echo "user name is orady exists";
		}else{
$que="insert into users(user_name,email,upassword) values('". $username ."','". $email ."' ,'". $upassword ."')";
		$res=mysqli_query($conn,$que);
		if($res){
			header('location: index.php');
		}else{ 
				echo "data not insert";
		}
	}
	}else{
		header('location: signup.php');
	}
	
?>
<!--------------end  php signup script  ----------------------------->	
<!-------------------------------- end  php  login script  ---------->
<?php include('conectdbend.php'); ?>	  
 <!---------  ------------------------end database connection  -------->
