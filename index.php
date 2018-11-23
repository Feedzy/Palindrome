<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V15</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="public/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="public/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="public/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="public/vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="public/vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="public/vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="public/vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="public/vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="public/css/util.css">
	<link rel="stylesheet" type="text/css" href="public/css/main.css">
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(public/images/bg-01.jpg);">
					<span class="login100-form-title-1">
						Palindrome
					</span>
				</div>

				<form class="login100-form validate-form" action="<?php $_SERVER['PHP_SELF'];?>" method="post">
					<div class="wrap-input100 validate-input m-b-26" data-validate="Veillez saisir un texte">
						<input class="input100" type="text" name="texte" placeholder="Saisissez Un texte ">
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" name="submit">
							Verifier
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	<script src="public/vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="public/vendor/animsition/js/animsition.min.js"></script>
	<script src="public/vendor/bootstrap/js/popper.js"></script>
	<script src="public/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="public/vendor/select2/select2.min.js"></script>
	<script src="public/vendor/daterangepicker/moment.min.js"></script>
	<script src="public/vendor/daterangepicker/daterangepicker.js"></script>
	<script src="publicvendor/countdowntime/countdowntime.js"></script>
	<script src="public/js/main.js"></script>

</body>
</html>
<?php
	if (isset($_POST['submit'])) 
	{
		$texte = $_POST['texte'];

		if ($texte != strrev($texte)) 
		{
			echo "
				<script>
					alert('Le texte est pas un palindrome');
				</script>
			";
		}
		else
		{
			echo "
				<script>
					alert('Le texte est un palindrome');
				</script>
			";
		}
	}
?>