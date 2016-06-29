<?php

// 如果點擊登出
if (isset($_GET["logout"])){
  setcookie("userid",$_POST["txtUserName"],time()-3600);
  header("location:index.php");
  exit;
}


if (isset($_POST["btnOK"])){
  if ($_POST["txtUserName"]!=""){
    setcookie("userid",$_POST["txtUserName"]);
    
    if (isset($_COOKIE['lastPage'])) {
      header("location:".$_COOKIE['lastPage']);
      setcookie("lastPage",$_SERVER['REQUEST_URI'],time()-3600);
    }
    else {
      header("location:index.php");
    }
    
    exit;
  }
}



?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>Login form using HTML5 and CSS3</title>

	<link rel="stylesheet" href="css/style.css">

</head>

<body>

	<body>
		<div class="container">
			<section id="content">
				<form method="post">
					<h1>Login Form</h1>
					<div>
						<input name="txtUserName" type="text" placeholder="Username" required="" id="username" />
					</div>
					<div>
						<input name="txtPassword" type="password" placeholder="Password" required="" id="password" />
					</div>
					<div>
						<input type="submit" name="btnOK" id="btnOK" value="Log in" />
						<input type="reset" value="重設" />
						<button class="goHome" onclick="self.location.href='index.php'">回首頁</button

					</div>
				</form>
				<!-- form -->
			</section>
			<!-- content -->
		</div>
		<!-- container -->
	</body>

	<script src="js/index.js"></script>

</body>

</html>
