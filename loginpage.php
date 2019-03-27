<?php
require_once __DIR__.'./core/init.php';
?>
<!doctype html>
<html lang="en-US">
	<head>
		<title>tato</title>
		<meta charset="UTF-8" />
		<link rel="stylesheet" href="assets/css/font-awesome.css"/>
		<link rel="stylesheet" href="assets/css/login.css"/>
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <script src="assets/js/jquery.min.js" defer></script>
        <script src="assets/js/bootstrap.min.js" defer></script>
	</head>
	<!--Helvetica Neue-->
	
	<body>


    <div class="container-fluid">
		  <div class="row no-gutter">
		    <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image"></div>
		    <div class="col-md-8 col-lg-6">
		      <div class="login d-flex align-items-center py-5">
		        <div class="container">
		          <div class="row">
		            <div id="inputBoxes" class="col-md-9 col-lg-8 mx-auto">
                        <?php require_once "includes/login.php"; ?>
                        <a href="signuppage.php">First time?</a>
		            </div>
		          </div>
		        </div>
		      </div>
		    </div>
		  </div>
		</div>

</body>
</html>