<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title><?= $errcode ?></title>

	<link rel="stylesheet" href="<?= url(CSS . "animate.css") ?>">

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Quicksand:700" rel="stylesheet">

	<!-- Font Awesome Icon -->
	<link type="text/css" rel="stylesheet" href="<?= url(ERROR . "css/font-awesome.min.css") ?>" />

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="<?= url(ERROR . "css/style.css") ?>" />


</head>

<body>

	<div id="notfound">
		<div class="notfound">
			<div class="notfound-bg">
				<div></div>
				<div></div>
				<div></div>
			</div>
			<h1>oops!</h1>
			<h2>Error <?= $errcode ?> - page not found</h2>
			<a href="<?= url("") ?>">voltar</a>
			<h3>Contact us</h3>
			<div class="notfound-social">
				<a href="#"><i class="fa fa-facebook"></i></a>
				<a href="#"><i class="fa fa-twitter"></i></a>
				<a href="#"><i class="fa fa-instagram"></i></a>
				<a href="#"><i class="fa fa-google-plus"></i></a>
			</div>
		</>
	</div>

</body>

</html>
