<?php
$userName = "Guest";
if (isset($_COOKIE['userid'])){
  $userName = $_COOKIE['userid'];
}

?>

<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Login form using HTML5 and CSS3</title>
    
        <link rel="stylesheet" href="css/style.css">

  </head>

  <body>

    <body>
<div class="container">
	<section id="content">
		<form>
			<h1>Login Form</h1>
			<div>
			    <?php if (!isset($_COOKIE["userid"])):?>
			    <button type="button" onclick="self.location.href='login.php'" >登入</button>
			    <?php else: ?>
			    <button type="button" onclick="self.location.href='login.php?logout=1'" >登出</button>
			    <?php endif?>
			    <button type="button" onclick="self.location.href='secret.php'">會員專用頁</button>
			    
			</div>
		</form><!-- form -->
		<div class="button">
			<span>Hello! <?php echo $userName?></span>
		</div><!-- button -->
	</section><!-- content -->
</div><!-- container -->
</body>
    
        <script src="js/index.js"></script>

  </body>
</html>
