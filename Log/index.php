<html>
	<head>

		<title>Moneysquid - Login</title>

		<meta name="description" content="" />

		<meta http-equiv="content-type" content="text/html; charset=utf8" />

		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<link rel="stylesheet" type="text/css" href="style/css/login.css">

	</head>
	
	<body>

		<main>

			<form class="container-login" method="post" action="connexion.php">
				<div class="wrapper">
					<div class="logo">
						<img src="img/logo.svg" alt="">
					</div>

					<div class="container-input">
						<div class="input">
							<div class="name">Username</div>
							<input type="text" placeholder="Username" name="username">
						</div>
						<div class="input">
							<div class="name">Mot de passe</div>
							<input type="password" placeholder="Mot de passe" name="password">
						</div>
					</div>
					<div class="container-btn">
						<button>
							<span class="content">
								<span>Se Connecter</span>
								<img src="img/arrow.svg" alt="">
							</span>
						</button>
					</div>
				</div>
			</form>
			
		</main>

		<script type="text/javascript" src="script/minify/index-min.js"></script>
	</body>
</html>