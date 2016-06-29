<?php

  if (!isset($_COOKIE["userid"])){
    setcookie("lastPage",$_SERVER['REQUEST_URI']);
    header("location:login.php");
    exit;
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
			<h1>會員專用頁</h1>
			<div>
			   <span>This page for member only.</span>
			</div>
		</form><!-- form -->
		<div class="button">
			<div class="button">
			<a href="index.php">回首頁</a>
		</div
		</div><!-- button -->
	</section><!-- content -->
</div><!-- container -->
</body>
    
        <script src="js/index.js"></script>

    
    
    
  </body>
</html>
