<?php include "include/header.html"; ?>
<?php include "../database/config.php"; ?>
<?php include "../database/database.php"?>
<?php include('../conectdbstart.php'); ?>

<?php 
session_start(); 
if($_SESSION['user_id']>=1 && $_SESSION['user_roull']=='admin'):
?>
<div class="container">
      <nav >
              <ul >
				
		<a href="script-logout.php"><li>logout <i class="fas fa-sign-out-alt"></i></li></a>
		<li><?php echo $_SESSION['user_name'];?> <i class="far fa-user"></i></li>
		<a href="home.php"><li>home <i class="fas fa-home"></i></li></a>
                 
				</ul>
            </nav>
	
<h1>wellcom in admin page : <span<?php echo $_SESSION['user_name'];?></span></h1>


<div id="pan" class="salepro text-center" style="height:300px;">
<a href="viewProducts.php"><img src="images/ViewProductIcon.png" class="imgpro" ></a>
<h3>show products </h3>
</div>
<div class="salepro text-center" style="height:300px;">
<a href="addProduct.php"><img src="images/AddProductIcon.png" class="imgpro" ></a>
	<h3>add product </h3>
	</div>
</div>
</br>
<!------------------------php extintion----------------------->
<?php  endif;?>
<?php if($_SESSION['user_roull']!='admin') header('location: ../home.php'); ?>

<!------------------------end database connection----------------------->
<?php include('../conectdbend.php'); ?>
<!------------------------ database connection----------------------->
<?php include "include/footer.html"; ?>