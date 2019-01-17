<!------------------------start database connection----------------------->
<?php include('conectdbstart.php'); ?>
<!------------------------ database connection----------------------->

<?php 
session_start(); 
if($_SESSION['user_id']>=1):
?>
<!---------------------------header------------------------------------------------>	
<?php include"include/header.html"; ?>
<!---------------------------header---------------------------------------------->


<div class="container"> 
 <nav >
	<ul >
	    <a href="script-logout.php"><li>logout <i class="fas fa-sign-out-alt"></i></li></a>
		<li><?php echo $_SESSION['user_name'];?> <i class="far fa-user"></i></li>
		<li><sup><?php echo $_SESSION['count'];?></sup><i class="fas fa-shopping-cart"></i> cart</li>
	</ul>
</nav>
</div>

<?php if(isset($_POST['submitt']))
 {
	
	$quant=$_POST['quant'];
	$tprice=$_SESSION['price'] * $quant;
	
$query="insert into cart(u_id,p_name, p_price, quant ,t_price) values('". $_SESSION['user_id'] ."','". $_SESSION['pname'] ."','". $_SESSION['price'] ."','". $quant ."','". $tprice ."');";
$result=mysqli_query($conn,$query);
	$_SESSION['count']=$_SESSION['count']+1;
	 header("location: home.php");
 };
 ?>
<?php 

 if(isset($_POST['submit']))
 {
$_SESSION['count']=1;
$_SESSION['pname']=$_POST['pname'];
$_SESSION['price']=$_POST['price'];
	
	
 
?>

<!---------------------------  start login form ------------------------------->	
<form action="buycart.php" method="post">
	<div class="cont">
	<h1>buy cart</h1>
<lable ><?php echo $_SESSION['pname'];?></lable>
<lable><?php echo "$ ".$_SESSION['price']; ?> </lable>
<input type="number" placeholder="number's peces" name="quant" title="number, please." required min="1" max="12"/>
	<button type="submit" class="button" name="submitt" value="insert">shopping</button>

	</div>
</form>


<?php }; ?>

<!---------------------------  end login form ------------------------------->	
 
<!------------------------php extintion----------------------->
<?php  endif;?>
<?php if($_SESSION['user_id']==0) header('location:index.php'); ?>

<!------------------------end database connection----------------------->
<?php include('conectdbend.php'); ?>
<!------------------------ database connection----------------------->
<!---------------------------footer------------------------------->	
<?php include"include/footer.html"; ?>
<!---------------------------footer------------------------------->	