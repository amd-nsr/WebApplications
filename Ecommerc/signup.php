<!---------------------------header------------------------------->	
<?php include"include/header.html"; ?>
<!---------------------------header------------------------------->






<!---------------------------  start login form ------------------------------->	
<form action="script-signup.php" method="post">
	<div class="cont">
	<h1>sign up for free </h1>
<input type="text" placeholder="user name" name="username" title="put username  only, please." required />
<input type="email" placeholder="email" name="email" title="put emial only, please." required />

<input  type="password" placeholder=" password"  name="upassword"  title="put password  only, please." required />
<input  type="password" placeholder=" re-password"  name="reupassword"  title="put password  only, please." required />
	<a href="index.php">log in</a>
	<button type="submit" class="button" name="submitt" value="insert">sign up</button>
	</div>
</form>
<!---------------------------  end login form ------------------------------->	



<!---------------------------footer------------------------------->	
<?php include"include/footer.html"; ?>
<!---------------------------footer------------------------------->	