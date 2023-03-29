<?php
session_start();
$_SESSION['isConnected']=false;
require_once 'layout/header.php';
require_once 'layout/navbar.php';

?>
 <?php
  if (isset($_GET['error'])) { ?>
    <div class="error">
      Une erreur est survenue : <?php echo getErrorMessage(intval($_GET['error'])); ?>
    </div>
  <?php } ?>

<div class="login">
		<h1> Please login to your account</h1>
		<br>
		<form method="post" action="auth.php">
			<div class="title">Username</div>
			<input class="full" type="text" name="username" placeholder="Username" required="true">
			<br>
			<div class="title">Password</div>
			<input class="full" type="password" name="pwd" placeholder="Password" required="true">
			<br>
			<br>
			<input class="btn-success btn-md full" type="submit" name="submit" value="Soumit">
			<a href="signup.php">Click to Signup</a>
			<br>
			<br>
		</form>

		<div class="language">
			<ul>
				<li>
					<a href="#">English</a>
				</li>
				<li>
					<a href="#">Français</a>
				</li>
				<li>
					<a href="#">中文</a>
				</li>
			</ul>
		</div>

		
	</div>
</body>
</html>