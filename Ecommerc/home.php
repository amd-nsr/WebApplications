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

<!------------------------start user home page----------------------->

<div class="container main-color ">
<!------------------------start nav bars------------------------------>
            <nav >
              <ul >
		<a href="script-logout.php"><li>logout <i class="fas fa-sign-out-alt"></i></li></a>
				<li><?php echo $_SESSION['user_name'];?> <i class="far fa-user"></i></li>
				 <li><i class="fas fa-shopping-cart"></i> <sup><?php echo $_SESSION['count'];?></sup>cart</li>
                <li class="about">about us</li>
                <li >contact us</li>
                <li class="product">our products</li>
				</ul>
            </nav>
<!------------------------ end nav bars------------------------------->
<!------------------------start description dev----------------------->
        <div class="desc text-center">
            <h1>walker  men's ware </h1>
            <p>smart colection for men's ware  <br/>best choise  for men ,be styleish and choise walker </p>
         </div>
<!------------------------end description dev ----------------------->

</div>

<div class="container"> 
<!------------------------start about us dev ----------------------->
     <div class="about-us">
    
   					<img src="include/images/m1.jpg" class="imginf"/>
		 <div class="info">
                        <h2 >walker factocy sence 1997</h2>
                        <p>we start our work sence 1997 and develop ourselves to help you </p>
                        <p class="c1 hidden ">and we stand with you to achive your goal</p>
                        <span class="s1 spaninf main-color">read more</span>
                    </div><div class="info">
                        <h2 >walker factocy sence 1997</h2>
                        <p>we start our work sence 1997 and develop ourselves to help you </p>
                        <p class="c2 hidden ">and we stand with you to achive your goal</p>
                        <span class="s2 spaninf main-color">read more</span>
                    </div>
		
					 <img src="include/images/m2.png" class="imginf"/>
	</div>
          
<!-------------------------- end about us div  -------------------------------->

</div>
<!-------------------------- start products div  -------------------------------->

<div class="products">
<h1 >our collection </h1>
<div class="container">

   <!--nav >
              <ul >
						<li >jackets</li>
						<li>trousers</li>
						<li >suits</li>
						<li>Tshirts</li>
						<li >chemises</li>
						<li>all</li>
			  </ul>
            </nav-->
	     
<?php
$po="";
$query="select * from products";
$result=mysqli_query($conn,$query);	 
		if (!$result)
		{  die("not fond");
		};
		
					while($row=mysqli_fetch_assoc($result)):
						{
							$po=$row['product_photo'];
							$to=$row['product_name'];
							$do=$row['product_desc'];
							$ro=$row['product_price'];
                        }
                        ?>
/*
    echo "
	<form class='salepro  text-center probuy'  action='buycart.php' method='post'>
		<img class='imgpro' src=" 'include/images/'".$po."'/>
		<h5>$to</h5>
		<p>$do</p>          
		<span>$ <span>$ro</span></span>
			<input class='hidden' type='hidden' name='pname' value='$to' >
			<input class='hidden' type='hidden' name='price' value='$ro' >
		<button type='submit' class='buy' value='in' name='submit'>buy</button>
	</form>
	";
    */
	<form class='salepro  text-center probuy'  action='buycart.php' method='post'>
		<img class='imgpro' src="include/images".<?php echo $po; ?>/>
		<h5><?php echo $to; ?> </h5>
		<p><?php echo $to; ?></p>          
		<span>$ <span>$ro</span></span>
			<input class='hidden' type='hidden' name='pname' value='$to' >
			<input class='hidden' type='hidden' name='price' value='$ro' >
		<button type='submit' class='buy' value='in' name='submit'>buy</button>
	</form>						
						<?php endwhile; ?>

					
?>
  </div>
</div>
<!-------------------------- end products div  -------------------------------->
<div class="best">
<h1>our best product </h1>
<div class="container">  
<?php

$query="select * from products where product_price>=200 order by product_price limit 6 ";
$result=mysqli_query($conn,$query);	 
		if (!$result)
		{  
			die("not fond");
		};
		
					while($row=mysqli_fetch_assoc($result))
						{
							$po=$row['product_photo'];
							$to=$row['product_name'];
							$do=$row['product_desc'];
							$ro=$row['product_price'];
echo "
	<form class='salepro  text-center probuy'  action='buycart.php' method='post'>
		<img class='imgpro' src='$po'/>
		<h5>$to</h5>
		<p>$do</p>          
		<span>$ <span>$ro</span></span>
			<input class='hidden' type='hidden' name='pname' value='$to' >
			<input  class='hidden' type='hidden' name='price' value='$ro' >
		<button type='submit' class='buy' value='in' name='submit'>buy</button>
	</form>
	";
							
						};

?>

	</div>
</div>  
<!------------------------php extintion----------------------->
<?php  endif;?>
<?php if($_SESSION['user_id']==0) header('location:index.php'); ?>

<!------------------------end database connection----------------------->
<?php include('conectdbend.php'); ?>
<!------------------------ database connection----------------------->
<!---------------------------footer------------------------------->	
<?php include"include/footer.html"; ?>
<!---------------------------footer------------------------------->	
<!------------------------ end user home page ----------------------->