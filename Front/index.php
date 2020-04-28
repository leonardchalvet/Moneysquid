<?php 
session_start(); 
require_once 'check-connexion.php';

/*=================================
=            TRUSTPILOT           =
==================================*/

function dateDiff($date1, $date2){
	$diff = abs($date1 - $date2);
    $array = array();
    $tmp = $diff;
    $array['second'] = $tmp % 60;
    $tmp = floor( ($tmp - $array['second']) / 60 );
    $tmp = floor( ($tmp - $array['minute']) / 60 );
    $array['hour'] = $tmp % 24;
    $tmp = floor( ($tmp - $array['hour'])  / 24 );
    $array['day'] = $tmp;
    $tmp = floor( $array['day']  / 30.5 );
    $array['month'] = $tmp;
    $tmp = floor( $array['day']  / 365.25 );
    $array['year'] = $tmp;
    $retour = null;
    if($array['year'] >= 1) {
    	$retour = $array['year']. ' année(s)';
    }
    else if($array['month'] >= 1) {
    	$retour = $array['month']. ' mois';
    }
    else if($array['day'] >= 1) {
    	$retour = $array['day']. ' jour(s)';
    }
    else {
    	$retour = $array['hour']. ' heure(s)';;
    }
    return $retour;
}

function getJSON($url) {
	$ch = curl_init($url);
	curl_setopt($ch, CURLOPT_POSTFIELDS);
	curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$result = json_decode(curl_exec($ch));
	curl_close($ch);
	return $result;
}

$apiKey = '8N8IA85igAsDtjSKVWuN3XGzSGyxe5SX';
$numberOfReviews = getJSON('https://api.trustpilot.com/v1/business-units/50449f2700006400051a7265?apikey=' .$apiKey)->numberOfReviews->fiveStars;
$allReviews = getJSON('https://api.trustpilot.com/v1/business-units/50449f2700006400051a7265/reviews?apikey=' .$apiKey);

/*=====================================
=            END TRUSTPILOT           =
======================================*/

?>
<html>
	<head>

		<title>Title</title>

		<meta name="description" content="" />

		<meta http-equiv="content-type" content="text/html; charset=utf8" />

		
		<!--<meta name="viewport" content="width=device-width, initial-scale=1.0">-->

		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0,user-scalable=0"/>

		<link rel="stylesheet" type="text/css" href="style/css/home.css">

	</head>
	
	<body>

		<?php include('common-header.php') ?>

		<main>

			<section class="section-cover">
				
					<div class="wrapper">
						<h2>
							Comparez les meilleurs taux immobiliers, crédits et assurances
						</h2>
						<p class="text">
							Simple, facile, sans stress !
						</p>

						<div class="container-comp">
							<div class="container-input">
								<div class="input">
									<input type="text" placeholder="Que souhaitez-vous comparer ?">
									<svg class="icn-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 9 6">
										<use xlink:href="img/common/icn-arrow-1.svg#content"></use>
									</svg>
								</div>
								<a href="" class="btn">
									<span class="btn-text">
										Je compare
									</span>
									<svg class="btn-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
										<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
									</svg>
								</a>
								
							</div>
							<p class="tagline">
								Rapide, gratuit, sans engagement !
							</p>
							<div class="container-dropdown">
								<ul>
									<li>
										Crédit
									</li>
									<li>
										<a href="">
											<span class="link-text">
												Rachat de credit fonctionnaire
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
									<li>
										<a href="">
											<span class="link-text">
												Rachat de credit fonctionnaire
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
									<li>
										<a href="">
											<span class="link-text">
												Rachat de credit fonctionnaire
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
									<li>
										<a href="">
											<span class="link-text">
												Rachat de credit fonctionnaire
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
									<li>
										<a href="">
											<span class="link-text">
												Rachat de credit fonctionnaire
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
								</ul>
								<ul>
									<li>
										Crédit
									</li>
									<li>
										<a href="">
											<span class="link-text">
												Rachat de credit fonctionnaire
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
									<li>
										<a href="">
											<span class="link-text">
												Rachat de credit fonctionnaire
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
									<li>
										<a href="">
											<span class="link-text">
												Rachat de credit fonctionnaire
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
									<li>
										<a href="">
											<span class="link-text">
												Rachat de credit fonctionnaire
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
									<li>
										<a href="">
											<span class="link-text">
												Rachat de credit fonctionnaire
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
								</ul>
								<ul>
									<li>
										Crédit
									</li>
									<li>
										<a href="">
											<span class="link-text">
												Rachat de credit fonctionnaire
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
									<li>
										<a href="">
											<span class="link-text">
												Rachat de credit fonctionnaire
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
									<li>
										<a href="">
											<span class="link-text">
												Rachat de credit fonctionnaire
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
									<li>
										<a href="">
											<span class="link-text">
												Rachat de credit fonctionnaire
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
									<li>
										<a href="">
											<span class="link-text">
												Rachat de credit fonctionnaire
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
								</ul>
								<ul>
									<li>
										Crédit
									</li>
									<li>
										<a href="">
											<span class="link-text">
												Rachat de credit fonctionnaire
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
									<li>
										<a href="">
											<span class="link-text">
												Rachat de credit fonctionnaire
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
									<li>
										<a href="">
											<span class="link-text">
												Rachat de credit fonctionnaire
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
									<li>
										<a href="">
											<span class="link-text">
												Rachat de credit fonctionnaire
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
									<li>
										<a href="">
											<span class="link-text">
												Rachat de credit fonctionnaire
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
			</section>

			<section class="common-section_compare">
				<div class="wrapper">
					<div class="container-el">
						<div class="el">
							<div class="icn">
								<img src="img/common-section_compare/illu-1.svg" alt="">
							</div>
							<div class="text">
								<h3>
									<a class="title" href="#">
										Crédit <br>immobilier
									</a>
								</h3>
								<p class="text-1">
									Comparez les banques et obtenez le meilleur taux
								</p>
								<p class="text-2">
									A partir de 0,90%*
								</p>
								<svg class="arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
									<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
								</svg>
								<div class="btn toHref" data-href="#">
									<span class="btn-text">
										Je compare
									</span>
									<svg class="btn-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
										<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
									</svg>
								</div>
							</div>
						</div>
						<div class="el">
							<div class="icn">
								<img src="img/common-section_compare/illu-2.svg" alt="">
							</div>
							<div class="text">
								<h3>
									<a class="title" href="#">
										Crédit<br/>consommation
									</a>
								</h3>
								<p class="text-1">
									Obtenez le meilleur taux
								</p>
								<p class="text-2">
									A partir de 0,40%*
								</p>
								<svg class="arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
									<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
								</svg>
								<div class="btn toHref" data-href="#">
									<span class="btn-text">
										Je compare
									</span>
									<svg class="btn-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
										<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
									</svg>
								</div>
							</div>
						</div>
						<div class="el">
							<div class="icn">
								<img src="img/common-section_compare/illu-3.svg" alt="">
							</div>
							<div class="text">
								<h3>
									<a class="title" href="#">
										Regroupement<br/>de crédit
									</a>
								</h3>
								<p class="text-1">
									Sur vos mensualités
								</p>
								<p class="text-2">
									Jusqu’à-80%*
								</p>
								<svg class="arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
									<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
								</svg>
								<div class="btn toHref" data-href="#">
									<span class="btn-text">
										Je compare
									</span>
									<svg class="btn-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
										<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
									</svg>
								</div>
							</div>
						</div>
						<div class="el">
							<div class="icn">
								<img src="img/common-section_compare/illu-4.svg" alt="">
							</div>
							<div class="text">
								<h3>
									<a class="title" href="#">
										Crédit <br>immobilier
									</a>
								</h3>
								<p class="text-1">
									Comparez les banques et obtenez le meilleur taux
								</p>
								<p class="text-2">
									A partir de 0,90%*
								</p>
								<svg class="arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
									<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
								</svg>
								<div class="btn toHref" data-href="#">
									<span class="btn-text">
										Je compare
									</span>
									<svg class="btn-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
										<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
									</svg>
								</div>
							</div>
						</div>
						<div class="el">
							<div class="icn">
								<img src="img/common-section_compare/illu-5.svg" alt="">
							</div>
							<div class="text">
								<h3>
									<a class="title" href="#">
										Assurance<br/>emprunteur
									</a>
								</h3>
								<p class="text-1">
									Quelque soit votre profil
								</p>
								<p class="text-2">
									Économisez jusqu’à 33%*
								</p>
								<svg class="arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
									<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
								</svg>
								<div class="btn toHref" data-href="#">
									<span class="btn-text">
										Je compare
									</span>
									<svg class="btn-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
										<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
									</svg>
								</div>
							</div>
						</div>
						<div class="el">
							<div class="icn">
								<img src="img/common-section_compare/illu-6.svg" alt="">
							</div>
							<div class="text">
								<h3>
									<a class="title" href="#">
										Assurance<br/>Auto
									</a>
								</h3>
								<p class="text-1">
									Économisez
								</p>
								<p class="text-2">
									Jusqu’à 235€*
								</p>
								<svg class="arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
									<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
								</svg>
								<div class="btn toHref" data-href="#">
									<span class="btn-text">
										Je compare
									</span>
									<svg class="btn-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
										<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
									</svg>
								</div>
							</div>
						</div>
						<div class="el">
							<div class="icn">
								<img src="img/common-section_compare/illu-7.svg" alt="">
							</div>
							<div class="text">
								<h3>
									<a class="title" href="#">
										Crédit<br/>Professionnel
									</a>
								</h3>
								<p class="text-1">
									Obtenez le meilleur taux
								</p>
								<p class="text-2">
									À partir de 0,40%*
								</p>
								<svg class="arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
									<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
								</svg>
								<div class="btn toHref" data-href="#">
									<span class="btn-text">
										Je compare
									</span>
									<svg class="btn-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
										<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
									</svg>
								</div>
							</div>
						</div>
					</div>
					<div class="container-btn">
						<a href="" class="btn">
							<span class="btn-text">Nos autres services</span>
							<svg class="btn-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
								<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
							</svg>
						</a>
					</div>
				</div>
			</section>

			<section class="common-section_why">
				<div class="wrapper">
					<div class="container-img">
						<img src="img/common-section_why/img.png" alt="">
						<svg class="path" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 447 403">
							<use xlink:href="img/common-section_why/img-path.svg#content"></use>
						</svg>
					</div>
					<div class="container-text">
						<h2>
							Pourquoi choisir <em>Moneysquid ?</em>
						</h2>
						<div class="container-el">
							<div class="el">
								<div class="icn">
									<img src="img/common-section_why/icn-1.svg" alt="">
								</div>
								<h5>
									Courtier independant
								</h5>
							</div>
							<div class="el">
								<div class="icn">
									<img src="img/common-section_why/icn-1.svg" alt="">
								</div>
								<h5>
									Courtier independant
								</h5>
							</div>
							<div class="el">
								<div class="icn">
									<img src="img/common-section_why/icn-1.svg" alt="">
								</div>
								<h5>
									Courtier independant
								</h5>
							</div>
							<div class="el">
								<div class="icn">
									<img src="img/common-section_why/icn-1.svg" alt="">
								</div>
								<h5>
									Courtier independant
								</h5>
							</div>
							<div class="el">
								<div class="icn">
									<img src="img/common-section_why/icn-1.svg" alt="">
								</div>
								<h5>
									Courtier independant
								</h5>
							</div>
							<div class="el">
								<div class="icn">
									<img src="img/common-section_why/icn-1.svg" alt="">
								</div>
								<h5>
									Courtier independant
								</h5>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section class="common-section_actu">
				<div class="wrapper">
					<h2>
						<a href="#">Les actualités</a>
					</h2>
					<div class="container-el">
						<div class="el">
							<div class="content toHref" data-href="#">
								<div class="cover">
									<img src="img/common-section_actu/img-1.png" alt="">
								</div>
								<div class="container-text">
									<h4>
										<a href="#">Les Francais</a>
									</h4>
									<p>
										Ut reprehenderit consectetur ipsum aliquip ea do voluptate enim do magna. Laborum est id magna exercitation est deserunt sit. 
									</p>
									<div class="link">
										<span class="link-text">
											Lire la suite
										</span>
										<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
											<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
										</svg>
									</div>
								</div>
							</div>
						</div>
						<div class="el">
							<div class="content toHref" data-href="#">
								<div class="cover">
									<img src="img/common-section_actu/img-1.png" alt="">
								</div>
								<div class="container-text">
									<h4>
										<a href="#">Les Francais</a>
									</h4>
									<p>
										Ut reprehenderit consectetur ipsum aliquip ea do voluptate enim do magna. Laborum est id magna exercitation est deserunt sit. 
									</p>
									<div class="link">
										<span class="link-text">
											Lire la suite
										</span>
										<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
											<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
										</svg>
									</div>
								</div>
							</div>
						</div>
						<div class="el">
							<div class="content toHref" data-href="#">
								<div class="cover">
									<img src="img/common-section_actu/img-1.png" alt="">
								</div>
								<div class="container-text">
									<h4>
										<a href="#">Les Francais</a>
									</h4>
									<p>
										Ut reprehenderit consectetur ipsum aliquip ea do voluptate enim do magna. Laborum est id magna exercitation est deserunt sit. 
									</p>
									<div class="link">
										<span class="link-text">
											Lire la suite
										</span>
										<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
											<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
										</svg>
									</div>
								</div>
							</div>
						</div>
						<div class="el">
							<div class="content toHref" data-href="#">
								<div class="cover">
									<img src="img/common-section_actu/img-1.png" alt="">
								</div>
								<div class="container-text">
									<h4>
										<a href="#">Les Francais</a>
									</h4>
									<p>
										Ut reprehenderit consectetur ipsum aliquip ea do voluptate enim do magna. Laborum est id magna exercitation est deserunt sit. 
									</p>
									<div class="link">
										<span class="link-text">
											Lire la suite
										</span>
										<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
											<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
										</svg>
									</div>
								</div>
							</div>
						</div>
						<div class="el">
							<div class="content toHref" data-href="#">
								<div class="cover">
									<img src="img/common-section_actu/img-1.png" alt="">
								</div>
								<div class="container-text">
									<h4>
										<a href="#">Les Francais</a>
									</h4>
									<p>
										Ut reprehenderit consectetur ipsum aliquip ea do voluptate enim do magna. Laborum est id magna exercitation est deserunt sit. 
									</p>
									<div class="link">
										<span class="link-text">
											Lire la suite
										</span>
										<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
											<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
										</svg>
									</div>
								</div>
							</div>
						</div>
						<div class="el">
							<div class="content toHref" data-href="#">
								<div class="cover">
									<img src="img/common-section_actu/img-1.png" alt="">
								</div>
								<div class="container-text">
									<h4>
										<a href="#">Les Francais</a>
									</h4>
									<p>
										Ut reprehenderit consectetur ipsum aliquip ea do voluptate enim do magna. Laborum est id magna exercitation est deserunt sit. 
									</p>
									<div class="link">
										<span class="link-text">
											Lire la suite
										</span>
										<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
											<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
										</svg>
									</div>
								</div>
							</div>
						</div>
						<div class="el">
							<div class="content toHref" data-href="#">
								<div class="cover">
									<img src="img/common-section_actu/img-1.png" alt="">
								</div>
								<div class="container-text">
									<h4>
										<a href="#">Les Francais</a>
									</h4>
									<p>
										Ut reprehenderit consectetur ipsum aliquip ea do voluptate enim do magna. Laborum est id magna exercitation est deserunt sit. 
									</p>
									<div class="link">
										<span class="link-text">
											Lire la suite
										</span>
										<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
											<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
										</svg>
									</div>
								</div>
							</div>
						</div>
						<div class="el">
							<div class="content toHref" data-href="#">
								<div class="cover">
									<img src="img/common-section_actu/img-1.png" alt="">
								</div>
								<div class="container-text">
									<h4>
										<a href="#">Les Francais</a>
									</h4>
									<p>
										Ut reprehenderit consectetur ipsum aliquip ea do voluptate enim do magna. Laborum est id magna exercitation est deserunt sit. 
									</p>
									<div class="link">
										<span class="link-text">
											Lire la suite
										</span>
										<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
											<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
										</svg>
									</div>
								</div>
							</div>
						</div>
						<div class="el">
							<div class="content toHref" data-href="#">
								<div class="cover">
									<img src="img/common-section_actu/img-1.png" alt="">
								</div>
								<div class="container-text">
									<h4>
										<a href="#">Les Francais</a>
									</h4>
									<p>
										Ut reprehenderit consectetur ipsum aliquip ea do voluptate enim do magna. Laborum est id magna exercitation est deserunt sit. 
									</p>
									<div class="link">
										<span class="link-text">
											Lire la suite
										</span>
										<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
											<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
										</svg>
									</div>
								</div>
							</div>
						</div>
						<div class="el">
							<div class="content toHref" data-href="#">
								<div class="cover">
									<img src="img/common-section_actu/img-1.png" alt="">
								</div>
								<div class="container-text">
									<h4>
										<a href="#">Les Francais</a>
									</h4>
									<p>
										Ut reprehenderit consectetur ipsum aliquip ea do voluptate enim do magna. Laborum est id magna exercitation est deserunt sit. 
									</p>
									<div class="link">
										<span class="link-text">
											Lire la suite
										</span>
										<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
											<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
										</svg>
									</div>
								</div>
							</div>
						</div>
						<div class="el">
							<div class="content toHref" data-href="#">
								<div class="cover">
									<img src="img/common-section_actu/img-1.png" alt="">
								</div>
								<div class="container-text">
									<h4>
										<a href="#">Les Francais</a>
									</h4>
									<p>
										Ut reprehenderit consectetur ipsum aliquip ea do voluptate enim do magna. Laborum est id magna exercitation est deserunt sit. 
									</p>
									<div class="link">
										<span class="link-text">
											Lire la suite
										</span>
										<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
											<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
										</svg>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="container-nav">
						<div class="nav">
							<svg class="nav-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
								<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
							</svg>
						</div>
						<div class="nav">
							<svg class="nav-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
								<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
							</svg>
						</div>

						<div class="btn toHref" data-href="">
							<span class="btn-text">Voir tous les avis clients</span>
							<svg class="btn-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
								<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
							</svg>
						</div>
					</div>
				</div>
			</section>

			<section class="common-section_trustpilot">
				<div class="wrapper">
					<h2>
						Nos clients nous adorent
					</h2>
					<div class="container-el">
						<div class="el">
							<div class="title">Excellent</div>
							<div class="container-stars">
								<div class="star">
									<img src="img/common-section_trustpilot/icn-star.svg" alt="">
								</div>
								<div class="star">
									<img src="img/common-section_trustpilot/icn-star.svg" alt="">
								</div>
								<div class="star">
									<img src="img/common-section_trustpilot/icn-star.svg" alt="">
								</div>
								<div class="star">
									<img src="img/common-section_trustpilot/icn-star.svg" alt="">
								</div>
								<div class="star">
									<img src="img/common-section_trustpilot/icn-star.svg" alt="">
								</div>
							</div>
							<p>
								Sur la base de <a href=""><?php echo($numberOfReviews); ?> avis</a>
							</p>
							<a href="" class="logo">
								<img src="img/common-section_trustpilot/logo-strustpilot.svg" alt="">
							</a>
						</div>
						<?php foreach($allReviews->reviews as $review) { 
							if($review->stars == 5) { ?>
								<div class="el">
									<div class="head">
										<div class="container-stars">
											<?php for($i = 0 ; $i < $review->stars ; $i++) { ?>
												<div class="star">
													<img src="img/common-section_trustpilot/icn-star.svg" alt="">
												</div>
											<?php } ?>
										</div>
										<div class="time"><?php echo('Il y a ' .dateDiff(time(), strtotime($review->createdAt))); ?></div>
									</div>
									<div class="text">
										<div class="title"><?php echo($review->title); ?></div>
										<p><?php echo($review->text); ?></p>
										<div class="name">
											<?php echo($review->consumer->displayName); ?>
										</div>
									</div>
								</div>
						<?php } } ?>
					</div>
					<div class="container-nav">
						<div class="nav">
							<svg class="nav-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
								<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
							</svg>
						</div>
						<div class="nav">
							<svg class="nav-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
								<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
							</svg>
						</div>
						<a href="" class="btn">
							<span class="btn-text">Voir tous les avis clients</span>
							<svg class="btn-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
								<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
							</svg>
						</a>
					</div>
				</div>
			</section>

			<section class="common-secton_humans">
				<div class="wrapper">
					<div class="container-img">
						<img src="img/common-section_humans/img-1.png" alt="">
						<svg class="path" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 447 403">
							<use xlink:href="img/common-section_why/img-path.svg#content"></use>
						</svg>
					</div>
					<div class="container-text">
						<h2>
							100 % digital,<br>
							100 % humain
						</h2>
						<p>
							Avec MoneySquid, ce sont des humains qui vous accompagnent tout au long de la réalisation de votre projet. Grâce à nous, plus besoin de passer des heures à la recherche du meilleur taux. Nos équipes d’experts s’engagent à vous dénicher l’offre la plus adaptée à vos besoins, tout en restant à votre écoute. C’est sans stress, facile et gratuit. Avec nous, la recherche d’un crédit n’aura jamais été aussi simple.
						</p>
					</div>
				</div>
			</section>

			<section class="common-section_partenaires">
				<div class="wrapper">
					<h2>
						Nous sollicitons l’ensemble de nos partenaires pour vous trouver le meilleur financement possible 
					</h2>
					<p>
						Parcourez le marché en un clic. Simple, facile et sans stress trouvez l’offre qui vous convient 
					</p>
					<div class="container-el">
						<div class="el">
							<img src="img/common-section_partenaires/logo-CIC.svg" alt="">
						</div>
						<div class="el">
							<img src="img/common-section_partenaires/logo-LCL.svg" alt="">
						</div>
						<div class="el">
							<img src="img/common-section_partenaires/logo-CreditAgricole.svg" alt="">
						</div>
						<div class="el">
							<img src="img/common-section_partenaires/logo-BNP.svg" alt="">
						</div>
						<div class="el">
							<img src="img/common-section_partenaires/logo-CaisseEpargne.svg" alt="">
						</div>
					</div>
					<div class="container-btn">
						<a href="" class="btn">
							<span class="btn-text">
								Voir tous nos partenaires
							</span>
							<svg class="btn-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
								<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
							</svg>
						</a>
					</div>
				</div>
			</section>

			<section class="common-section_makedifferent">
				<div class="wrapper">
					<h2>Ce qui nous différencie </h2>
					<div class="container">
						<div class="container-comp">
							<div class="col">
								<h3>Ce qui se passe ailleurs</h3>
								<div class="container-el">
									<div class="el">
										<div class="icn">
											<img src="img/common-section_makedifferent/icn-cross.svg" alt="">
										</div>
										<p>
											<em>Les sites de comparaison</em>
											sont avant tout des collecteurs de données. Ils ne proposent qu'une mise en relation avec un fournisseur.
										</p>
									</div>
									<div class="el">
										<div class="icn">
											<img src="img/common-section_makedifferent/icn-cross.svg" alt="">
										</div>
										<p>
											<em>Les sites de comparaison</em>
											sont avant tout des collecteurs de données. Ils ne proposent qu'une mise en relation avec un fournisseur.
										</p>
									</div>
									<div class="el">
										<div class="icn">
											<img src="img/common-section_makedifferent/icn-cross.svg" alt="">
										</div>
										<p>
											<em>Les sites de comparaison</em>
											sont avant tout des collecteurs de données. Ils ne proposent qu'une mise en relation avec un fournisseur.
										</p>
									</div>
								</div>
							</div>
							<div class="col">
								<img class="logo" src="img/common/logo-moneysquid-white.svg" alt="">
								<div class="container-el">
									<div class="el">
										<div class="icn">
											<img src="img/common-section_makedifferent/icn-check.svg" alt="">
										</div>
										<p>
											<em>Les sites de comparaison</em>
											sont avant tout des collecteurs de données. Ils ne proposent qu'une mise en relation avec un fournisseur.
										</p>
									</div>
									<div class="el">
										<div class="icn">
											<img src="img/common-section_makedifferent/icn-check.svg" alt="">
										</div>
										<p>
											<em>Les sites de comparaison</em>
											sont avant tout des collecteurs de données. Ils ne proposent qu'une mise en relation avec un fournisseur.
										</p>
									</div>
									<div class="el">
										<div class="icn">
											<img src="img/common-section_makedifferent/icn-check.svg" alt="">
										</div>
										<p>
											<em>Les sites de comparaison</em>
											sont avant tout des collecteurs de données. Ils ne proposent qu'une mise en relation avec un fournisseur.
										</p>
									</div>
								</div>
							</div>
						</div>
						<img class="path-1" src="img/common-section_makedifferent/path-1.svg" alt="">
						<img class="path-2" src="img/common-section_makedifferent/path-2.svg" alt="">
					</div>
				</div>
			</section>

			<section class="common-section_quotes">
				<div class="wrapper">
					<h2>
						<a href="#">Ils parlent de nous</a>
					</h2>
					<div class="container-el">
						<div class="el toHref" data-href="#">
							<span class="content">
								
								<div class="logo">
									<img src="img/common-section_quotes/logo-lefigaro.svg" alt="">
								</div>
								<div class="text">
									<h3><a href="#">Nom Article</a></h3>
									<q>
										Can you imagine what we will be downloading in another twenty years? I mean who would have
									</q>
								</div>
								<div class="link">
									<span class="link-text">
										Lire la suite
									</span>
									<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
										<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
									</svg>
								</div>

							</span>
						</div>
						<div class="el toHref" data-href="#">
							<span class="content">
								
								<div class="logo">
									<img src="img/common-section_quotes/logo-lefigaro.svg" alt="">
								</div>
								<div class="text">
									<h3><a href="#">Nom Article</a></h3>
									<q>
										Can you imagine what we will be downloading in another twenty years? I mean who would have
									</q>
								</div>
								<div class="link">
									<span class="link-text">
										Lire la suite
									</span>
									<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
										<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
									</svg>
								</div>

							</span>
						</div>
						<div class="el toHref" data-href="#">
							<span class="content">
								
								<div class="logo">
									<img src="img/common-section_quotes/logo-lefigaro.svg" alt="">
								</div>
								<div class="text">
									<h3><a href="#">Nom Article</a></h3>
									<q>
										Can you imagine what we will be downloading in another twenty years? I mean who would have
									</q>
								</div>
								<div class="link">
									<span class="link-text">
										Lire la suite
									</span>
									<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
										<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
									</svg>
								</div>

							</span>
						</div>
						<div class="el toHref" data-href="#">
							<span class="content">
								
								<div class="logo">
									<img src="img/common-section_quotes/logo-lefigaro.svg" alt="">
								</div>
								<div class="text">
									<h3><a href="#">Nom Article</a></h3>
									<q>
										Can you imagine what we will be downloading in another twenty years? I mean who would have
									</q>
								</div>
								<div class="link">
									<span class="link-text">
										Lire la suite
									</span>
									<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
										<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
									</svg>
								</div>

							</span>
						</div>
						<div class="el toHref" data-href="#">
							<span class="content">
								
								<div class="logo">
									<img src="img/common-section_quotes/logo-lefigaro.svg" alt="">
								</div>
								<div class="text">
									<h3><a href="#">Nom Article</a></h3>
									<q>
										Can you imagine what we will be downloading in another twenty years? I mean who would have
									</q>
								</div>
								<div class="link">
									<span class="link-text">
										Lire la suite
									</span>
									<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
										<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
									</svg>
								</div>

							</span>
						</div>
						<div class="el toHref" data-href="#">
							<span class="content">
								
								<div class="logo">
									<img src="img/common-section_quotes/logo-lefigaro.svg" alt="">
								</div>
								<div class="text">
									<h3><a href="#">Nom Article</a></h3>
									<q>
										Can you imagine what we will be downloading in another twenty years? I mean who would have
									</q>
								</div>
								<div class="link">
									<span class="link-text">
										Lire la suite
									</span>
									<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
										<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
									</svg>
								</div>

							</span>
						</div>
						<div class="el toHref" data-href="#">
							<span class="content">
								
								<div class="logo">
									<img src="img/common-section_quotes/logo-lefigaro.svg" alt="">
								</div>
								<div class="text">
									<h3><a href="#">Nom Article</a></h3>
									<q>
										Can you imagine what we will be downloading in another twenty years? I mean who would have
									</q>
								</div>
								<div class="link">
									<span class="link-text">
										Lire la suite
									</span>
									<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
										<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
									</svg>
								</div>

							</span>
						</div>
						<div class="el toHref" data-href="#">
							<span class="content">
								
								<div class="logo">
									<img src="img/common-section_quotes/logo-lefigaro.svg" alt="">
								</div>
								<div class="text">
									<h3><a href="#">Nom Article</a></h3>
									<q>
										Can you imagine what we will be downloading in another twenty years? I mean who would have
									</q>
								</div>
								<div class="link">
									<span class="link-text">
										Lire la suite
									</span>
									<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
										<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
									</svg>
								</div>

							</span>
						</div>
						<div class="el toHref" data-href="#">
							<span class="content">
								
								<div class="logo">
									<img src="img/common-section_quotes/logo-lefigaro.svg" alt="">
								</div>
								<div class="text">
									<h3><a href="#">Nom Article</a></h3>
									<q>
										Can you imagine what we will be downloading in another twenty years? I mean who would have
									</q>
								</div>
								<div class="link">
									<span class="link-text">
										Lire la suite
									</span>
									<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
										<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
									</svg>
								</div>

							</span>
						</div>
						<div class="el toHref" data-href="#">
							<span class="content">
								
								<div class="logo">
									<img src="img/common-section_quotes/logo-lefigaro.svg" alt="">
								</div>
								<div class="text">
									<h3><a href="#">Nom Article</a></h3>
									<q>
										Can you imagine what we will be downloading in another twenty years? I mean who would have
									</q>
								</div>
								<div class="link">
									<span class="link-text">
										Lire la suite
									</span>
									<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
										<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
									</svg>
								</div>

							</span>
						</div>
						<div class="el toHref" data-href="#">
							<span class="content">
								
								<div class="logo">
									<img src="img/common-section_quotes/logo-lefigaro.svg" alt="">
								</div>
								<div class="text">
									<h3><a href="#">Nom Article</a></h3>
									<q>
										Can you imagine what we will be downloading in another twenty years? I mean who would have
									</q>
								</div>
								<div class="link">
									<span class="link-text">
										Lire la suite
									</span>
									<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
										<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
									</svg>
								</div>

							</span>
						</div>
					</div>
					<div class="container-nav">
						<div class="nav">
							<svg class="nav-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
								<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
							</svg>
						</div>
						<div class="nav">
							<svg class="nav-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
								<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
							</svg>
						</div>

						<div data-href="#" class="btn toHref">
							<span class="btn-text">Voir tous les avis clients</span>
							<svg class="btn-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
								<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
							</svg>
						</div>
					</div>
				</div>
			</section>

			<section class="common-section_sousmetiers">
				<h2>Nos sous métiers</h2>
				<div class="container">
					<div class="wrapper">
						
						<div class="container-slider">
							<div class="container-el">
								<div class="el">
									<div class="illu">
										<img src="img/common-section_sousmetier/illu-1.svg" alt="">
									</div>
									<div class="text">
										<h3><a href="#">Prêt immobilier</a></h3>
										<p>
											Courtier en crédit immobilier, Bourse des Crédits peut vous accompagner pour l’obtention de votre financement immobilier.  En véritable expert, nous pouvons comparer les banques en prêt immobilier qui opèrent en France, afin de vous obtenir le meilleur taux et les conditions de crédits les plus avantageuses.<br>
											<br>
											Reconnue parmi les entreprises les plus innovantes de son secteur, Bourse des Crédits vous accompagne également dans la négociation de votre emprunt immobilier.<br>
											<br>
											Nos outils de simulation et comparaison de crédit, vous permettend d’avoir accès aux meilleurs taux de prêts du marché et de faire votre demande de crédit en ligne qui sera relayée à tous nos partenaires organismes de crédit.
										</p>
										<div class="btn toHref" data-href="#">
											<span class="btn-text">
												Comparer gratuitement les crédits immobilier
											</span>
											<svg class="btn-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</div>
									</div>
								</div>
								
							</div>
						</div>
						<div class="container-line">
							<div class="line"></div>
						</div>
					</div>
				</div>
			</section>

			<section class="common-section_autremetiers">
				<div class="wrapper">
					<h2>Nos autres métiers</h2>
					<div class="container-section">
						<div class="section">
							<div class="icn">
								<img src="img/common-section_autremetiers/icn-1.svg" alt="">
							</div>
							<div class="text">
								<div class="title">
									<h3>Crédit</h3>
									<div class="container-status">
										<div class="line"></div>
										<div class="line"></div>
									</div>
								</div>
								<ul>
									<li>
										<a href="">
											<span class="link-text">
												Rachat de credit fonctionnaire
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
									<li>
										<a href="">
											<span class="link-text">
												Rachat de credit fonctionnaire
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
									<li>
										<a href="">
											<span class="link-text">
												Rachat de credit fonctionnaire
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
									<li>
										<a href="">
											<span class="link-text">
												Rachat de credit fonctionnaire
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
									<li>
										<a href="">
											<span class="link-text">
												Rachat de credit fonctionnaire
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
									<li>
										<a href="">
											<span class="link-text">
												Rachat de credit fonctionnaire
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
									<li>
										<a href="">
											<span class="link-text">
												Rachat de credit fonctionnaire
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
									<li>
										<a href="">
											<span class="link-text">
												Rachat de credit fonctionnaire
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
									<li>
										<a href="">
											<span class="link-text">
												Rachat de credit fonctionnaire
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
									<li>
										<a href="">
											<span class="link-text">
												Rachat de credit fonctionnaire
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
									<li>
										<a href="">
											<span class="link-text">
												Rachat de credit fonctionnaire
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
								</ul>
							</div>
						</div>
						<div class="section">
							<div class="icn">
								<img src="img/common-section_autremetiers/icn-1.svg" alt="">
							</div>
							<div class="text">
								<div class="title">
									<h3>Crédit</h3>
									<div class="container-status">
										<div class="line"></div>
										<div class="line"></div>
									</div>
								</div>
								<ul>
									<li>
										<a href="">
											<span class="link-text">
												Rachat de credit fonctionnaire
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
									<li>
										<a href="">
											<span class="link-text">
												Rachat de credit fonctionnaire
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
									<li>
										<a href="">
											<span class="link-text">
												Rachat de credit fonctionnaire
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
									<li>
										<a href="">
											<span class="link-text">
												Rachat de credit fonctionnaire
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
									<li>
										<a href="">
											<span class="link-text">
												Rachat de credit fonctionnaire
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
									<li>
										<a href="">
											<span class="link-text">
												Rachat de credit fonctionnaire
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
									<li>
										<a href="">
											<span class="link-text">
												Rachat de credit fonctionnaire
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
									<li>
										<a href="">
											<span class="link-text">
												Rachat de credit fonctionnaire
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
									<li>
										<a href="">
											<span class="link-text">
												Rachat de credit fonctionnaire
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
									<li>
										<a href="">
											<span class="link-text">
												Rachat de credit fonctionnaire
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
									<li>
										<a href="">
											<span class="link-text">
												Rachat de credit fonctionnaire
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
								</ul>
							</div>
						</div>
						<div class="section">
							<div class="icn">
								<img src="img/common-section_autremetiers/icn-1.svg" alt="">
							</div>
							<div class="text">
								<div class="title">
									<h3>Crédit</h3>
									<div class="container-status">
										<div class="line"></div>
										<div class="line"></div>
									</div>
								</div>
								<ul>
									<li>
										<a href="">
											<span class="link-text">
												Rachat de credit fonctionnaire
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
									<li>
										<a href="">
											<span class="link-text">
												Rachat de credit fonctionnaire
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
									<li>
										<a href="">
											<span class="link-text">
												Rachat de credit fonctionnaire
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
									<li>
										<a href="">
											<span class="link-text">
												Rachat de credit fonctionnaire
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
									<li>
										<a href="">
											<span class="link-text">
												Rachat de credit fonctionnaire
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
									<li>
										<a href="">
											<span class="link-text">
												Rachat de credit fonctionnaire
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
									<li>
										<a href="">
											<span class="link-text">
												Rachat de credit fonctionnaire
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
									<li>
										<a href="">
											<span class="link-text">
												Rachat de credit fonctionnaire
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
									<li>
										<a href="">
											<span class="link-text">
												Rachat de credit fonctionnaire
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
									<li>
										<a href="">
											<span class="link-text">
												Rachat de credit fonctionnaire
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
									<li>
										<a href="">
											<span class="link-text">
												Rachat de credit fonctionnaire
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
								</ul>
							</div>
						</div>
						<div class="section">
							<div class="icn">
								<img src="img/common-section_autremetiers/icn-1.svg" alt="">
							</div>
							<div class="text">
								<div class="title">
									<h3>Crédit</h3>
									<div class="container-status">
										<div class="line"></div>
										<div class="line"></div>
									</div>
								</div>
								<ul>
									<li>
										<a href="">
											<span class="link-text">
												Rachat de credit fonctionnaire
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
									<li>
										<a href="">
											<span class="link-text">
												Rachat de credit fonctionnaire
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
									<li>
										<a href="">
											<span class="link-text">
												Rachat de credit fonctionnaire
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
									<li>
										<a href="">
											<span class="link-text">
												Rachat de credit fonctionnaire
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
									<li>
										<a href="">
											<span class="link-text">
												Rachat de credit fonctionnaire
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
									<li>
										<a href="">
											<span class="link-text">
												Rachat de credit fonctionnaire
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
									<li>
										<a href="">
											<span class="link-text">
												Rachat de credit fonctionnaire
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
									<li>
										<a href="">
											<span class="link-text">
												Rachat de credit fonctionnaire
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
									<li>
										<a href="">
											<span class="link-text">
												Rachat de credit fonctionnaire
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
									<li>
										<a href="">
											<span class="link-text">
												Rachat de credit fonctionnaire
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
									<li>
										<a href="">
											<span class="link-text">
												Rachat de credit fonctionnaire
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
								</ul>
							</div>
						</div>
						<div class="section">
							<div class="icn">
								<img src="img/common-section_autremetiers/icn-1.svg" alt="">
							</div>
							<div class="text">
								<div class="title">
									<h3>Crédit</h3>
									<div class="container-status">
										<div class="line"></div>
										<div class="line"></div>
									</div>
								</div>
								<ul>
									<li>
										<a href="">
											<span class="link-text">
												Rachat de credit fonctionnaire
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
									<li>
										<a href="">
											<span class="link-text">
												Rachat de credit fonctionnaire
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
									<li>
										<a href="">
											<span class="link-text">
												Rachat de credit fonctionnaire
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
									<li>
										<a href="">
											<span class="link-text">
												Rachat de credit fonctionnaire
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
									<li>
										<a href="">
											<span class="link-text">
												Rachat de credit fonctionnaire
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
									<li>
										<a href="">
											<span class="link-text">
												Rachat de credit fonctionnaire
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
									<li>
										<a href="">
											<span class="link-text">
												Rachat de credit fonctionnaire
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
									<li>
										<a href="">
											<span class="link-text">
												Rachat de credit fonctionnaire
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
									<li>
										<a href="">
											<span class="link-text">
												Rachat de credit fonctionnaire
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
									<li>
										<a href="">
											<span class="link-text">
												Rachat de credit fonctionnaire
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
									<li>
										<a href="">
											<span class="link-text">
												Rachat de credit fonctionnaire
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section class="common-section_newsletter">
				<div class="wrapper">
					<h2>
						Inscrivez vous à la Newsletter hebdomadaire
					</h2>
					<div class="container">
						<p>
							Inscrivez-vous gratuitement à notre Newsletter et recevez une fois par semaine nos conseils, astuces et offres flash. 
						</p>
						<div class="container-input">
							<input type="text" placeholder="Votre email">
							<a href="" class="btn">
								<span class="btn-text">
									Je m'inscris
								</span>
								<svg class="btn-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
									<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
								</svg>
							</a>
						</div>
						<div class="container-cg">
							<input type="checkbox">
							<p>
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Risus habitasse quis eget ipsum sed nunc massa. Erat blandit mauris pharetra pulvinar ridiculus posuere. 
							</p>
						</div>
					</div>
				</div>
			</section>
			
		</main>

		<?php include('common-footer.php') ?>

		<script type="text/javascript" src="script/minify/index-min.js"></script>
	</body>
</html>