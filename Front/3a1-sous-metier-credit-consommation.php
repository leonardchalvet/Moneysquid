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
	curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$result = json_decode(curl_exec($ch));
	curl_close($ch);
	return $result;
}

$apiKey = '8N8IA85igAsDtjSKVWuN3XGzSGyxe5SX';
$numberOfReviews = getJSON('https://api.trustpilot.com/v1/business-units/50449f2700006400051a7265?apikey=' .$apiKey)->numberOfReviews->fiveStars;
$allReviews = getJSON('https://api.trustpilot.com/v1/business-units/50449f2700006400051a7265/reviews?stars=5&perPage=8&apikey=' .$apiKey);

/*=====================================
=            END TRUSTPILOT           =
======================================*/

?>
<html>
	<head>

		<title>3a1 - Métier Crédit</title>

		<meta name="description" content="" />

		<meta http-equiv="content-type" content="text/html; charset=utf8" />

		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0,user-scalable=0"/>

		<link rel="stylesheet" type="text/css" href="style/css/style-common-page_sousmetier.css">

	</head>
	
	<body>

		<?php include('common-header.php') ?>

		<main>

			<section class="section-cover">
				<div class="wrapper">
					<h1>Prêt <em>immobilier</em></h1>
					<p class="desc">Comparez et obtenez le meilleur taux immobilier</p>
					<div class="container-comp">
						<div class="container-input">
							<div class="input">
								<div class="placeholder">Votre projet</div>
								<input type="text" readonly placeholder="1ere réponse formulaire">
								<svg class="icn-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 9 6">
									<use xlink:href="img/common/icn-arrow-1.svg#content"></use>
								</svg>
							</div>
							<div class="dropdown">
								<div class="container-el">
									<div class="el">
										<span class="link-text">
											Rachat de credit fonctionnaire
										</span>
										<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
											<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
										</svg>
									</div>
									<div class="el">
										<span class="link-text">
											Rachat de credit fonctionnaire
										</span>
										<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
											<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
										</svg>
									</div>
									<div class="el">
										<span class="link-text">
											Rachat de credit fonctionnaire
										</span>
										<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
											<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
										</svg>
									</div>
									<div class="el">
										<span class="link-text">
											Rachat de credit fonctionnaire
										</span>
										<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
											<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
										</svg>
									</div>
									<div class="el">
										<span class="link-text">
											Rachat de credit fonctionnaire
										</span>
										<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
											<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
										</svg>
									</div>
									<div class="el">
										<span class="link-text">
											Rachat de credit fonctionnaire
										</span>
										<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
											<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
										</svg>
									</div>
									<div class="el">
										<span class="link-text">
											Rachat de credit fonctionnaire
										</span>
										<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
											<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
										</svg>
									</div>
									<div class="el">
										<span class="link-text">
											Rachat de credit fonctionnaire
										</span>
										<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
											<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
										</svg>
									</div>
									<div class="el">
										<span class="link-text">
											Rachat de credit fonctionnaire
										</span>
										<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
											<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
										</svg>
									</div>
									<div class="el">
										<span class="link-text">
											Rachat de credit fonctionnaire
										</span>
										<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
											<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
										</svg>
									</div>
								</div>
							</div>
						</div>
						<div class="container-input">
							<div class="input">
								<div class="placeholder">Votre projet</div>
								<input type="text" readonly placeholder="2nd réponse formulaire">
								<svg class="icn-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 9 6">
									<use xlink:href="img/common/icn-arrow-1.svg#content"></use>
								</svg>
							</div>
							<div class="dropdown">
								<div class="container-el">
									<div class="el">
										<span class="link-text">
											Rachat de credit fonctionnaire
										</span>
										<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
											<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
										</svg>
									</div>
									<div class="el">
										<span class="link-text">
											Rachat de credit fonctionnaire
										</span>
										<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
											<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
										</svg>
									</div>
									<div class="el">
										<span class="link-text">
											Rachat de credit fonctionnaire
										</span>
										<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
											<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
										</svg>
									</div>
									<div class="el">
										<span class="link-text">
											Rachat de credit fonctionnaire
										</span>
										<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
											<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
										</svg>
									</div>
									<div class="el">
										<span class="link-text">
											Rachat de credit fonctionnaire
										</span>
										<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
											<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
										</svg>
									</div>
									<div class="el">
										<span class="link-text">
											Rachat de credit fonctionnaire
										</span>
										<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
											<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
										</svg>
									</div>
									<div class="el">
										<span class="link-text">
											Rachat de credit fonctionnaire
										</span>
										<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
											<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
										</svg>
									</div>
									<div class="el">
										<span class="link-text">
											Rachat de credit fonctionnaire
										</span>
										<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
											<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
										</svg>
									</div>
									<div class="el">
										<span class="link-text">
											Rachat de credit fonctionnaire
										</span>
										<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
											<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
										</svg>
									</div>
									<div class="el">
										<span class="link-text">
											Rachat de credit fonctionnaire
										</span>
										<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
											<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
										</svg>
									</div>
								</div>
							</div>
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
					<div class="container-trustpilot">
						<img src="img/footer/logo-strustpilot.svg" alt="">
						<div class="container-stars">
							<div class="star">
								<img src="img/footer/icn-star.svg" alt="">
							</div>
							<div class="star">
								<img src="img/footer/icn-star.svg" alt="">
							</div>
							<div class="star">
								<img src="img/footer/icn-star.svg" alt="">
							</div>
							<div class="star">
								<img src="img/footer/icn-star.svg" alt="">
							</div>
							<div class="star">
								<img src="img/footer/icn-star.svg" alt="">
							</div>
						</div>
						<p>
							<span>Trustpilot <em>4.8</em></span>
							<span><em>347</em> reviews</span>
						</p>
					</div>
					<nav>
						<ul>
							<li>
								<a href="">
									<span class="link-text">
										Simulation de Prêt Immobilier
									</span>
									<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
										<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
									</svg>
								</a>
							</li>
							<li>
								<a href="">
									<span class="link-text">
										Comparateur Crédit Immobilier
									</span>
									<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
										<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
									</svg>
								</a>
							</li>
							<li>
								<a href="">
									<span class="link-text">
										Calculette Prêt Immobilier
									</span>
									<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
										<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
									</svg>
								</a>
							</li>
							<li>
								<a href="">
									<span class="link-text">
										Prêt à taux Zéro
									</span>
									<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
										<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
									</svg>
								</a>
							</li>
							<li>
								<a href="">
									<span class="link-text">
										Taux Immobilier 2019
									</span>
									<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
										<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
									</svg>
								</a>
							</li>
							<li>
								<a href="">
									<span class="link-text">
										Courtier Immobilier
									</span>
									<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
										<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
									</svg>
								</a>
							</li>
						</ul>
					</nav>
					<img class="illu-1" src="img/common-section_cover:sousmetier/illu-1.svg" alt="">
				</div>
			</section>

			<section class="section-howitwork">
				<div class="wrapper">
					<h2>Comment ça marche ?</h2>
					<div class="container-el">
						<div class="el">
							<div class="icn">
								<img src="img/sousmetier/section-howitwork/icn-1.svg" alt="">
							</div>
							<p>
								Vous déposez votre demande
							</p>
						</div>
						<div class="el">
							<div class="icn">
								<img src="img/sousmetier/section-howitwork/icn-1.svg" alt="">
							</div>
							<p>
								Vous déposez votre demande
							</p>
						</div>
						<div class="el">
							<div class="icn">
								<img src="img/sousmetier/section-howitwork/icn-1.svg" alt="">
							</div>
							<p>
								Vous déposez votre demande
							</p>
						</div>
						<div class="el">
							<div class="icn">
								<img src="img/sousmetier/section-howitwork/icn-1.svg" alt="">
							</div>
							<p>
								Vous déposez votre demande
							</p>
						</div>
					</div>
				</div>
			</section>

			<section class="section-compare">
				<div class="wrapper">
					<h2>Pourquoi comparer les taux de crédit consommation ? </h2>
					<div class="container-el">
						<div class="el">
							<div class="icn">
								<img src="img/sousmetier/section-compare/icn-1.svg" alt="">
							</div>
							<p>Gratuit sans engagement</p>
						</div>
						<div class="el">
							<div class="icn">
								<img src="img/sousmetier/section-compare/icn-1.svg" alt="">
							</div>
							<p>Gratuit sans engagement</p>
						</div>
						<div class="el">
							<div class="icn">
								<img src="img/sousmetier/section-compare/icn-1.svg" alt="">
							</div>
							<p>Gratuit sans engagement</p>
						</div>
						<div class="el">
							<div class="icn">
								<img src="img/sousmetier/section-compare/icn-1.svg" alt="">
							</div>
							<p>Gratuit sans engagement</p>
						</div>
					</div>
					<div class="container-btn">
						<a href="" class="btn">
							<span class="btn-text">
								Je compare
							</span>
							<svg class="btn-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
								<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
							</svg>
							<span class="btn-tagline">
								Facile, gratuit et sans engagement
							</span>
						</a>
					</div>
				</div>
			</section>

			<section class="section-simulation">
				<div class="wrapper">
					<h2>Nos outils de simulations</h2>
					<div class="container-el">
						<div class="el">
							<div class="icn">
								<img src="img/sousmetier/section-simulation/icn-1.svg" alt="">
							</div>
							<p>
								Calcul<br>mensualité
							</p>
						</div>
						<div class="el">
							<div class="icn">
								<img src="img/sousmetier/section-simulation/icn-1.svg" alt="">
							</div>
							<p>
								Calcul<br>mensualité
							</p>
						</div>
						<div class="el">
							<div class="icn">
								<img src="img/sousmetier/section-simulation/icn-1.svg" alt="">
							</div>
							<p>
								Calcul<br>mensualité
							</p>
						</div>
					</div>
					<div class="banner">
						<h3>Jusqu’à <em>-0,5% d’économie</em> sur<br>le taux de votre crédit !</h3>
						<div class="container-btn">
							<a href="" class="btn">
								<span class="btn-text">
									Comparer gratuitement
								</span>
								<svg class="btn-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
									<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
								</svg>
								<span class="btn-tagline">
									Gratuit, facile et sans engagement !
								</span>
							</a>
						</div>
						<img class="path-1" src="img/sousmetier/section-simulation/path-1.svg" alt="">
					</div>
				</div>
			</section>

			<section class="section-knoweverything">
				<div class="wrapper">
					<h2>Tout savoir sur le Crédit consommation</h2>
					<div class="container">
						<div class="container-tab">
							<div class="tab style-active">
								<div class="icn">
									<img src="img/sousmetier/section-knoweverything/icn-1.svg" alt="">
								</div>
								<h3>Guide<br>prêt consommation</h3>
							</div>
							<div class="tab">
								<div class="icn">
									<img src="img/sousmetier/section-knoweverything/icn-1.svg" alt="">
								</div>
								<h3>Guide<br>prêt consommation</h3>
							</div>
							<div class="tab">
								<div class="icn">
									<img src="img/sousmetier/section-knoweverything/icn-1.svg" alt="">
								</div>
								<h3>Guide<br>prêt consommation</h3>
							</div>
							<div class="tab">
								<div class="icn">
									<img src="img/sousmetier/section-knoweverything/icn-1.svg" alt="">
								</div>
								<h3>Guide<br>prêt consommation</h3>
							</div>
						</div>
						<div class="content-tab">
							<div class="tab style-active">
								<ul>
									<li>
										<a href="">
											<span class="link-text">
												Définir votre projet immobilier
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
									<li>
										<a href="">
											<span class="link-text">
												Définir votre projet immobilier
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
									<li>
										<a href="">
											<span class="link-text">
												Définir votre projet immobilier
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
									<li>
										<a href="">
											<span class="link-text">
												Définir votre projet immobilier
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
									<li>
										<a href="">
											<span class="link-text">
												Définir votre projet immobilier
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
									<li>
										<a href="">
											<span class="link-text">
												Définir votre projet immobilier
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
									<li>
										<a href="">
											<span class="link-text">
												Définir votre projet immobilier
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
									<li>
										<a href="">
											<span class="link-text">
												Définir votre projet immobilier
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
									<li>
										<a href="">
											<span class="link-text">
												Définir votre projet immobilier
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
									<li>
										<a href="">
											<span class="link-text">
												Définir votre projet immobilier
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
									<li>
										<a href="">
											<span class="link-text">
												Définir votre projet immobilier
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
									<li>
										<a href="">
											<span class="link-text">
												Définir votre projet immobilier
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
								</ul>
							</div>
							<div class="tab">
								<ul>
									<li>
										<a href="">
											<span class="link-text">
												Définir votre projet immobilier
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
									<li>
										<a href="">
											<span class="link-text">
												Définir votre projet immobilier
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
									<li>
										<a href="">
											<span class="link-text">
												Définir votre projet immobilier
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
									<li>
										<a href="">
											<span class="link-text">
												Définir votre projet immobilier
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
									<li>
										<a href="">
											<span class="link-text">
												Définir votre projet immobilier
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
									<li>
										<a href="">
											<span class="link-text">
												Définir votre projet immobilier
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
									<li>
										<a href="">
											<span class="link-text">
												Définir votre projet immobilier
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
									<li>
										<a href="">
											<span class="link-text">
												Définir votre projet immobilier
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
									<li>
										<a href="">
											<span class="link-text">
												Définir votre projet immobilier
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
									<li>
										<a href="">
											<span class="link-text">
												Définir votre projet immobilier
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
									<li>
										<a href="">
											<span class="link-text">
												Définir votre projet immobilier
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
									<li>
										<a href="">
											<span class="link-text">
												Définir votre projet immobilier
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
								</ul>
							</div>
							<div class="tab">
								<ul>
									<li>
										<a href="">
											<span class="link-text">
												Définir votre projet immobilier
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
									<li>
										<a href="">
											<span class="link-text">
												Définir votre projet immobilier
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
									<li>
										<a href="">
											<span class="link-text">
												Définir votre projet immobilier
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
									<li>
										<a href="">
											<span class="link-text">
												Définir votre projet immobilier
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
									<li>
										<a href="">
											<span class="link-text">
												Définir votre projet immobilier
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
									<li>
										<a href="">
											<span class="link-text">
												Définir votre projet immobilier
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
									<li>
										<a href="">
											<span class="link-text">
												Définir votre projet immobilier
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
									<li>
										<a href="">
											<span class="link-text">
												Définir votre projet immobilier
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
									<li>
										<a href="">
											<span class="link-text">
												Définir votre projet immobilier
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
									<li>
										<a href="">
											<span class="link-text">
												Définir votre projet immobilier
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
									<li>
										<a href="">
											<span class="link-text">
												Définir votre projet immobilier
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
									<li>
										<a href="">
											<span class="link-text">
												Définir votre projet immobilier
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
								</ul>
							</div>
							<div class="tab">
								<ul>
									<li>
										<a href="">
											<span class="link-text">
												Définir votre projet immobilier
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
									<li>
										<a href="">
											<span class="link-text">
												Définir votre projet immobilier
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
									<li>
										<a href="">
											<span class="link-text">
												Définir votre projet immobilier
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
									<li>
										<a href="">
											<span class="link-text">
												Définir votre projet immobilier
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
									<li>
										<a href="">
											<span class="link-text">
												Définir votre projet immobilier
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
									<li>
										<a href="">
											<span class="link-text">
												Définir votre projet immobilier
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
									<li>
										<a href="">
											<span class="link-text">
												Définir votre projet immobilier
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
									<li>
										<a href="">
											<span class="link-text">
												Définir votre projet immobilier
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
									<li>
										<a href="">
											<span class="link-text">
												Définir votre projet immobilier
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
									<li>
										<a href="">
											<span class="link-text">
												Définir votre projet immobilier
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
									<li>
										<a href="">
											<span class="link-text">
												Définir votre projet immobilier
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
									<li>
										<a href="">
											<span class="link-text">
												Définir votre projet immobilier
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
					<div class="container-btn">
						<a href="" class="btn">
							<span class="btn-text">Voir tous les guides de prêt</span>
							<svg class="btn-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
								<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
							</svg>
						</a>
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
									<img src="img/common-section_actu/img-2.png" alt="">
								</div>
								<div class="container-text">
									<h4>
										<a href="#">Facebook Pay</a>
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
									<img src="img/common-section_actu/img-2.png" alt="">
								</div>
								<div class="container-text">
									<h4>
										<a href="#">Facebook Pay</a>
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
									<img src="img/common-section_actu/img-2.png" alt="">
								</div>
								<div class="container-text">
									<h4>
										<a href="#">Facebook Pay</a>
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
									<img src="img/common-section_actu/img-2.png" alt="">
								</div>
								<div class="container-text">
									<h4>
										<a href="#">Facebook Pay</a>
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
						Nous sollicitons l’ensemble de nos partenaires pour vous trouver la meilleure offre possible
					</h2>
					<p>
						Parcourez le marché en un clic. Simple, facile et sans stress trouvez l’offre qui vous convient 
					</p>
					<div class="data-img" data-img="img/common-section_partenaires/logo-CIC.svg;img/common-section_partenaires/logo-LCL.svg;img/common-section_partenaires/logo-CreditAgricole.svg;img/common-section_partenaires/logo-BNP.svg;img/common-section_partenaires/logo-CaisseEpargne.svg;img/common-section_partenaires/logo-CIC.svg;img/common-section_partenaires/logo-LCL.svg;img/common-section_partenaires/logo-CreditAgricole.svg;img/common-section_partenaires/logo-BNP.svg;img/common-section_partenaires/logo-CaisseEpargne.svg"></div>
					<div class="container-el">
						<div class="el">
							<img src="img/common-section_partenaires/logo-CIC.svg" alt="logo partenaire">
						</div>
						<div class="el">
							<img src="img/common-section_partenaires/logo-LCL.svg" alt="logo partenaire">
						</div>
						<div class="el">
							<img src="img/common-section_partenaires/logo-CreditAgricole.svg" alt="logo partenaire">
						</div>
						<div class="el">
							<img src="img/common-section_partenaires/logo-BNP.svg" alt="logo partenaire">
						</div>
						<div class="el">
							<img src="img/common-section_partenaires/logo-CaisseEpargne.svg" alt="logo partenaire">
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

			<section class="section-seo">
				<div class="wrapper">
					<div class="container-text">
						<h2>
							Texte Sous<br>métier SEO
						</h2>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Risus habitasse quis eget ipsum sed nunc massa. Erat blandit mauris pharetra pulvinar ridiculus posuere. In imperdiet velit dapibus a erat morbi elementum, integer orci. Tincidunt mauris sed quam consectetur nisl porta sit. In dictum vestibulum, duis mattis ultrices sed elementum pharetra. Laoreet risus nam mauris lorem purus. Adipiscing faucibus blandit urna massa et. Turpis morbi porta sit eu, ultricies. Ut amet metus, id nisl cursus urna.<br>
							<br>
							Id commodo risus enim, mi ipsum nunc. Ullamcorper commodo dolor, egestas eget dictumst tristique penatibus. Nisl nibh viverra ut eget id sed. Vitae dictum nullam at varius tempus. Commodo non porta felis consectetur et blandit lacus amet. Tellus tellus convallis gravida lorem eleifend et massa. Gravida a nisl nisl varius risus quisque augue facilisis. Turpis sollicitudin orci pretium, mauris amet euismod accumsan. Ullamcorper tristique ac sit enim mi risus amet id. At faucibus at urna, pretium in cursus ultrices mus. Sagittis, scelerisque dignissim vestibulum congue sem fringilla velit. Mauris vel nibh augue morbi consequat suspendisse ut nam. Tristique nisl nisi vitae nisi, condimentum imperdiet id nec sed.<br>
							<br>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Risus habitasse quis eget ipsum sed nunc massa. Erat blandit mauris pharetra pulvinar ridiculus posuere. In imperdiet velit dapibus a erat morbi elementum, integer orci. Tincidunt mauris sed quam consectetur nisl porta sit. In dictum vestibulum, duis mattis ultrices sed elementum pharetra. Laoreet risus nam mauris lorem purus. Adipiscing faucibus blandit urna massa et. Turpis morbi porta sit eu, ultricies. Ut amet metus, id nisl cursus urna.<br>
							<br>
							Id commodo risus enim, mi ipsum nunc. Ullamcorper commodo dolor, egestas eget dictumst tristique penatibus. Nisl nibh viverra ut eget id sed. Vitae dictum nullam at varius tempus. Commodo non porta felis consectetur et blandit lacus amet. Tellus tellus convallis gravida lorem eleifend et massa. Gravida a nisl nisl varius risus quisque augue facilisis. Turpis sollicitudin orci pretium, mauris amet euismod accumsan. Ullamcorper tristique ac sit enim mi risus amet id. At faucibus at urna, pretium in cursus ultrices mus. Sagittis, scelerisque dignissim vestibulum congue sem fringilla velit. Mauris vel nibh augue morbi consequat suspendisse ut nam. Tristique nisl nisi vitae nisi, condimentum imperdiet id nec sed.
						</p>
					</div>
					<div class="container-illu">
						<img src="img/sousmetier/section-seo/illu-1.svg" alt="">
						<a href="" class="btn">
							<span class="btn-text">Comparer gratuitement les crédits immobilier</span>
							<svg class="btn-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
								<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
							</svg>
						</a>
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

		<script type="text/javascript" src="script/minify/js-common-page_sousmetier-min.js"></script>
	</body>
</html>