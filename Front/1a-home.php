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
<!DOCTYPE html>
<html>
	<head>

		<title>Title</title>

		<meta name="description" content="" />

		<meta name="robots" content="noindex">
		<meta name="googlebot" content="noindex">

		<meta http-equiv="content-type" content="text/html; charset=utf8" />

		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0,user-scalable=0"/>

		<link rel="stylesheet" type="text/css" href="style/css/style-page_home.css">

	</head>
	
	<body>

		<?php include('common-header.php') ?>

		<main>

			<section class="section-cover">
				
					<div class="wrapper">
						<h2>
							Comparez les <em>meilleurs taux</em> immobiliers, crédits et assurances
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
												<span>
													Crédit Immobilier
												</span>
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
									<li>
										<a href="">
											<span class="link-text">
												<span>
													Crédit Consommation
												</span>
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
									<li>
										<a href="">
											<span class="link-text">
												<span>
													Rachat de Crédit
												</span>
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
									<li>
										<a href="">
											<span class="link-text">
												<span>
													Crédit Professionnel
												</span>
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
								</ul>
								<ul>
									<li>
										Assurance
									</li>
									<li>
										<a href="">
											<span class="link-text">
												<span>
													Crédit Immobilier
												</span>
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
									<li>
										<a href="">
											<span class="link-text">
												<span>
													Crédit Consommation
												</span>
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
									<li>
										<a href="">
											<span class="link-text">
												<span>
													Rachat de Crédit
												</span>
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
									<li>
										<a href="">
											<span class="link-text">
												<span>
													Crédit Professionnel
												</span>
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
									<li>
										<a href="">
											<span class="link-text">
												<span>
													Crédit Immobilier
												</span>
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
									<li>
										<a href="">
											<span class="link-text">
												<span>
													Crédit Consommation
												</span>
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
									<li>
										<a href="">
											<span class="link-text">
												<span>
													Rachat de Crédit
												</span>
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
									<li>
										<a href="">
											<span class="link-text">
												<span>
													Crédit Professionnel
												</span>
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
									<li>
										<a href="">
											<span class="link-text">
												<span>
													Crédit Immobilier
												</span>
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
									<li>
										<a href="">
											<span class="link-text">
												<span>
													Crédit Consommation
												</span>
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
									<li>
										<a href="">
											<span class="link-text">
												<span>
													Rachat de Crédit
												</span>
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
									<li>
										<a href="">
											<span class="link-text">
												<span>
													Crédit Professionnel
												</span>
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
								</ul>
								<ul>
									<li>
										Banques
									</li>
									<li>
										<a href="">
											<span class="link-text">
												<span>
													Crédit Immobilier
												</span>
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
									<li>
										<a href="">
											<span class="link-text">
												<span>
													Crédit Consommation
												</span>
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
								</ul>
								<ul>
									<li>
										Patrimoine
									</li>
									<li>
										<a href="">
											<span class="link-text">
												<span>
													Crédit Immobilier
												</span>
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
									<li>
										<a href="">
											<span class="link-text">
												<span>
													Crédit Consommation
												</span>
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
									<li>
										<a href="">
											<span class="link-text">
												<span>
													Crédit Consommation
												</span>
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
								</ul>
								<ul>
									<li>
										Énergie
									</li>
									<li>
										<a href="">
											<span class="link-text">
												<span>
													Crédit Immobilier
												</span>
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
									<li>
										<a href="">
											<span class="link-text">
												<span>
													Crédit Consommation
												</span>
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

			<section class="common-section_cta_compare">
					<div class="wrapper">
						<a href="" class="btn">
							<span class="btn-text">
								Je compare
							</span>
							<svg class="btn-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
								<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
							</svg>
						</a>
						<p class="tagline">
							Rapide, gratuit, sans engagement !
						</p>
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
									Obtenez le meilleur taux
								</p>
								<p class="text-2">
									A partir de 0,90 %*
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
										Crédit <br/>consommation
									</a>
								</h3>
								<p class="text-1">
									Financez votre projet
								</p>
								<p class="text-2">
									A partir de 0,50 %*
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
										Regroupement <br/>de crédit
									</a>
								</h3>
								<p class="text-1">
									Baissez vos mensualités
								</p>
								<p class="text-2">
									Jusqu’à -80 %*
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
										Assurance <br>emprunteur
									</a>
								</h3>
								<p class="text-1">
									Selon votre profil
								</p>
								<p class="text-2">
									Economisez jusqu’à 15.000 €*
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
										Assurance <br/>auto
									</a>
								</h3>
								<p class="text-1">
									Devis immédiat
								</p>
								<p class="text-2">
									Economisez jusqu'à 235 €*
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
										Assurance <br>habitation
									</a>
								</h3>
								<p class="text-1">
									Assuré en 2 min
								</p>
								<p class="text-2">
									Economisez jusqu’à 200 €*
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
										Crédit <br/>professionnel
									</a>
								</h3>
								<p class="text-1">
									Financez votre projet
								</p>
								<p class="text-2">
									Avec nos experts<br/>&nbsp
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
									<img src="img/common-section_why/icn-2.svg" alt="">
								</div>
								<h5>
									Français
								</h5>
							</div>
							<div class="el">
								<div class="icn">
									<img src="img/common-section_why/icn-3.svg" alt="">
								</div>
								<h5>
									Gratuit sans engagement
								</h5>
							</div>
							<div class="el">
								<div class="icn">
									<img src="img/common-section_why/icn-4.svg" alt="">
								</div>
								<h5>
									Protection des données
								</h5>
							</div>
							<div class="el">
								<div class="icn">
									<img src="img/common-section_why/icn-5.svg" alt="">
								</div>
								<h5>
									Expert
								</h5>
							</div>
							<div class="el">
								<div class="icn">
									<img src="img/common-section_why/icn-6.svg" alt="">
								</div>
								<h5>
									Récompensé
								</h5>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section class="common-section_actu">
				<div class="wrapper">
					<h2>
						<a href="#">Actualités crédit et assurance</a>
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
											<span>
												Lire la suite
											</span>
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
												<span>
													Lire la suite
												</span>
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
											<span>
												Lire la suite
											</span>
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
											<span>
												Lire la suite
											</span>
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
											<span>
												Lire la suite
											</span>
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
											<span>
												Lire la suite
											</span>
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
											<span>
												Lire la suite
											</span>
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
											<span>
												Lire la suite
											</span>
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
							<span class="btn-text">Voir toutes nos actualités</span>
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
											<em>Votre banque</em>
											ne compare pas. Cette dernière vous propose uniquement ses offres.
										</p>
									</div>
									<div class="el">
										<div class="icn">
											<img src="img/common-section_makedifferent/icn-cross.svg" alt="">
										</div>
										<p>
											<em>Les courtiers traditionnels</em>
											appliquent des frais de dossier et imposent un rendez-vous physique. Les démarches sont souvent plus fastidieuses
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
											<em>Nous explorons + de 350 offres*</em> 
											pour vous trouver la meilleure proposition du marché. Puis, on s’occupe de tout sans que vous n’ayez à bouger de votre canapé.
										</p>
									</div>
									<div class="el">
										<div class="icn">
											<img src="img/common-section_makedifferent/icn-check.svg" alt="">
										</div>
										<p>
											<em>Nous sommes indépendants et impartiaux.</em>
											Nous avons conçu de nouveaux services que vous ne trouverez nulle part ailleurs.
										</p>
									</div>
									<div class="el">
										<div class="icn">
											<img src="img/common-section_makedifferent/icn-check.svg" alt="">
										</div>
										<p>
											<em>Nous sommes gratuits, rapides et en ligne.</em>
											Par chat, téléphone ou en rendez-vous physique, c’est vous qui choisissez ! 
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
										<span>
											Lire la suite
										</span>
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
									<img src="img/common-section_quotes/logo-lexpress.svg" alt="">
								</div>
								<div class="text">
									<h3><a href="#">Nom Article</a></h3>
									<q>
										In today’s net-savvy world it has become common for any business to have a website which they use mostly for advertising their products and services.
									</q>
								</div>
								<div class="link">
									<span class="link-text">
										<span>
											Lire la suite
										</span>
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
									<img src="img/common-section_quotes/logo-leparisien.svg" alt="">
								</div>
								<div class="text">
									<h3><a href="#">Nom Article</a></h3>
									<q>
										Despite growth of the Internet over the past seven years, the use of toll-free phone numbers in television advertising continues
									</q>
								</div>
								<div class="link">
									<span class="link-text">
										<span>
											Lire la suite
										</span>
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
										<span>
											Lire la suite
										</span>
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
										<span>
											Lire la suite
										</span>
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
										<span>
											Lire la suite
										</span>
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
										<span>
											Lire la suite
										</span>
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
										<span>
											Lire la suite
										</span>
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
										<span>
											Lire la suite
										</span>
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
										<span>
											Lire la suite
										</span>
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
										<span>
											Lire la suite
										</span>
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
							<span class="btn-text">Voir toutes nos retombées presse</span>
							<svg class="btn-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
								<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
							</svg>
						</div>
					</div>
				</div>
			</section>

			<section class="common-section_sousmetiers">
				<h2>Nos autres services</h2>
				<div class="container">
					<div class="wrapper">
						
						<div class="container-slider">
							<div class="container-el">
								<div class="el">
							        <div class="content">
								        <div class="illu">
											<img src="img/common-section_sousmetier/illu-1.svg" alt="">
										</div>
										<div class="text">
											<h3><a href="#">Prêt immobilier</a></h3>
											<p>
												Courtier en crédit immobilier, Bourse des Crédits peut vous accompagner pour l’obtention de votre financement immobilier.  En véritable expert, nous pouvons comparer les banques en prêt immobilier qui opèrent en France, afin de vous obtenir le meilleur taux et les conditions de crédits les plus avantageuses.<br><br>
												Reconnue parmi les entreprises les plus innovantes de son secteur, Bourse des Crédits vous accompagne également dans la négociation de votre emprunt immobilier.<br><br>
												Nos outils de simulation et comparaison de crédit, vous permettend d’avoir accès aux meilleurs taux de prêts du marché et de faire votre demande de crédit en ligne qui sera relayée à tous nos partenaires organismes de crédit.
											</p>
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
								<div class="el">
							        <div class="content">
								        <div class="illu">
											<img src="img/common-section_sousmetier/illu-2.svg" alt="">
										</div>
										<div class="text">
											<h3><a href="#">Crédit consommation</a></h3>
											<p>
												Courtier en crédit immobilier, Bourse des Crédits peut vous accompagner pour l’obtention de votre financement immobilier.  En véritable expert, nous pouvons comparer les banques en prêt immobilier qui opèrent en France, afin de vous obtenir le meilleur taux et les conditions de crédits les plus avantageuses.<br><br>
												Reconnue parmi les entreprises les plus innovantes de son secteur, Bourse des Crédits vous accompagne également dans la négociation de votre emprunt immobilier.<br><br>
												Nos outils de simulation et comparaison de crédit, vous permettend d’avoir accès aux meilleurs taux de prêts du marché et de faire votre demande de crédit en ligne qui sera relayée à tous nos partenaires organismes de crédit.
											</p>
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
								<div class="el">
							        <div class="content">
								        <div class="illu">
											<img src="img/common-section_sousmetier/illu-3.svg" alt="">
										</div>
										<div class="text">
											<h3><a href="#">Rachat de crédits</a></h3>
											<p>
												Courtier en crédit immobilier, Bourse des Crédits peut vous accompagner pour l’obtention de votre financement immobilier.  En véritable expert, nous pouvons comparer les banques en prêt immobilier qui opèrent en France, afin de vous obtenir le meilleur taux et les conditions de crédits les plus avantageuses.<br><br>
												Reconnue parmi les entreprises les plus innovantes de son secteur, Bourse des Crédits vous accompagne également dans la négociation de votre emprunt immobilier.<br><br>
												Nos outils de simulation et comparaison de crédit, vous permettend d’avoir accès aux meilleurs taux de prêts du marché et de faire votre demande de crédit en ligne qui sera relayée à tous nos partenaires organismes de crédit.
											</p>
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
								<div class="el">
							        <div class="content">
								        <div class="illu">
											<img src="img/common-section_sousmetier/illu-4.svg" alt="">
										</div>
										<div class="text">
											<h3><a href="#">Crédit professionnel</a></h3>
											<p>
												Courtier en crédit immobilier, Bourse des Crédits peut vous accompagner pour l’obtention de votre financement immobilier.  En véritable expert, nous pouvons comparer les banques en prêt immobilier qui opèrent en France, afin de vous obtenir le meilleur taux et les conditions de crédits les plus avantageuses.<br><br>
												Reconnue parmi les entreprises les plus innovantes de son secteur, Bourse des Crédits vous accompagne également dans la négociation de votre emprunt immobilier.<br><br>
												Nos outils de simulation et comparaison de crédit, vous permettend d’avoir accès aux meilleurs taux de prêts du marché et de faire votre demande de crédit en ligne qui sera relayée à tous nos partenaires organismes de crédit.
											</p>
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
								<div class="el">
							        <div class="content">
								        <div class="illu">
											<img src="img/common-section_sousmetier/illu-5.svg" alt="">
										</div>
										<div class="text">
											<h3><a href="#">Assurance animaux</a></h3>
											<p>
												Courtier en crédit immobilier, Bourse des Crédits peut vous accompagner pour l’obtention de votre financement immobilier.  En véritable expert, nous pouvons comparer les banques en prêt immobilier qui opèrent en France, afin de vous obtenir le meilleur taux et les conditions de crédits les plus avantageuses.<br><br>
												Reconnue parmi les entreprises les plus innovantes de son secteur, Bourse des Crédits vous accompagne également dans la négociation de votre emprunt immobilier.<br><br>
												Nos outils de simulation et comparaison de crédit, vous permettend d’avoir accès aux meilleurs taux de prêts du marché et de faire votre demande de crédit en ligne qui sera relayée à tous nos partenaires organismes de crédit.
											</p>
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
								<div class="el">
							        <div class="content">
								        <div class="illu">
											<img src="img/common-section_sousmetier/illu-6.svg" alt="">
										</div>
										<div class="text">
											<h3><a href="#">Assurance auto</a></h3>
											<p>
												Courtier en crédit immobilier, Bourse des Crédits peut vous accompagner pour l’obtention de votre financement immobilier.  En véritable expert, nous pouvons comparer les banques en prêt immobilier qui opèrent en France, afin de vous obtenir le meilleur taux et les conditions de crédits les plus avantageuses.<br><br>
												Reconnue parmi les entreprises les plus innovantes de son secteur, Bourse des Crédits vous accompagne également dans la négociation de votre emprunt immobilier.<br><br>
												Nos outils de simulation et comparaison de crédit, vous permettend d’avoir accès aux meilleurs taux de prêts du marché et de faire votre demande de crédit en ligne qui sera relayée à tous nos partenaires organismes de crédit.
											</p>
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
								<div class="el">
							        <div class="content">
								        <div class="illu">
											<img src="img/common-section_sousmetier/illu-7.svg" alt="">
										</div>
										<div class="text">
											<h3><a href="#">Assurance emprunteur</a></h3>
											<p>
												Courtier en crédit immobilier, Bourse des Crédits peut vous accompagner pour l’obtention de votre financement immobilier.  En véritable expert, nous pouvons comparer les banques en prêt immobilier qui opèrent en France, afin de vous obtenir le meilleur taux et les conditions de crédits les plus avantageuses.<br><br>
												Reconnue parmi les entreprises les plus innovantes de son secteur, Bourse des Crédits vous accompagne également dans la négociation de votre emprunt immobilier.<br><br>
												Nos outils de simulation et comparaison de crédit, vous permettend d’avoir accès aux meilleurs taux de prêts du marché et de faire votre demande de crédit en ligne qui sera relayée à tous nos partenaires organismes de crédit.
											</p>
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
								<div class="el">
							        <div class="content">
								        <div class="illu">
											<img src="img/common-section_sousmetier/illu-8.svg" alt="">
										</div>
										<div class="text">
											<h3><a href="#">Assurance décès</a></h3>
											<p>
												Courtier en crédit immobilier, Bourse des Crédits peut vous accompagner pour l’obtention de votre financement immobilier.  En véritable expert, nous pouvons comparer les banques en prêt immobilier qui opèrent en France, afin de vous obtenir le meilleur taux et les conditions de crédits les plus avantageuses.<br><br>
												Reconnue parmi les entreprises les plus innovantes de son secteur, Bourse des Crédits vous accompagne également dans la négociation de votre emprunt immobilier.<br><br>
												Nos outils de simulation et comparaison de crédit, vous permettend d’avoir accès aux meilleurs taux de prêts du marché et de faire votre demande de crédit en ligne qui sera relayée à tous nos partenaires organismes de crédit.
											</p>
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
								<div class="el">
							        <div class="content">
								        <div class="illu">
											<img src="img/common-section_sousmetier/illu-9.svg" alt="">
										</div>
										<div class="text">
											<h3><a href="#">Assurance habitation</a></h3>
											<p>
												Courtier en crédit immobilier, Bourse des Crédits peut vous accompagner pour l’obtention de votre financement immobilier.  En véritable expert, nous pouvons comparer les banques en prêt immobilier qui opèrent en France, afin de vous obtenir le meilleur taux et les conditions de crédits les plus avantageuses.<br><br>
												Reconnue parmi les entreprises les plus innovantes de son secteur, Bourse des Crédits vous accompagne également dans la négociation de votre emprunt immobilier.<br><br>
												Nos outils de simulation et comparaison de crédit, vous permettend d’avoir accès aux meilleurs taux de prêts du marché et de faire votre demande de crédit en ligne qui sera relayée à tous nos partenaires organismes de crédit.
											</p>
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
								<div class="el">
							        <div class="content">
								        <div class="illu">
											<img src="img/common-section_sousmetier/illu-10.svg" alt="">
										</div>
										<div class="text">
											<h3><a href="#">Assurance loyer impayé</a></h3>
											<p>
												Courtier en crédit immobilier, Bourse des Crédits peut vous accompagner pour l’obtention de votre financement immobilier.  En véritable expert, nous pouvons comparer les banques en prêt immobilier qui opèrent en France, afin de vous obtenir le meilleur taux et les conditions de crédits les plus avantageuses.<br><br>
												Reconnue parmi les entreprises les plus innovantes de son secteur, Bourse des Crédits vous accompagne également dans la négociation de votre emprunt immobilier.<br><br>
												Nos outils de simulation et comparaison de crédit, vous permettend d’avoir accès aux meilleurs taux de prêts du marché et de faire votre demande de crédit en ligne qui sera relayée à tous nos partenaires organismes de crédit.
											</p>
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
								<div class="el">
							        <div class="content">
								        <div class="illu">
											<img src="img/common-section_sousmetier/illu-11.svg" alt="">
										</div>
										<div class="text">
											<h3><a href="#">Assurance moto</a></h3>
											<p>
												Courtier en crédit immobilier, Bourse des Crédits peut vous accompagner pour l’obtention de votre financement immobilier.  En véritable expert, nous pouvons comparer les banques en prêt immobilier qui opèrent en France, afin de vous obtenir le meilleur taux et les conditions de crédits les plus avantageuses.<br><br>
												Reconnue parmi les entreprises les plus innovantes de son secteur, Bourse des Crédits vous accompagne également dans la négociation de votre emprunt immobilier.<br><br>
												Nos outils de simulation et comparaison de crédit, vous permettend d’avoir accès aux meilleurs taux de prêts du marché et de faire votre demande de crédit en ligne qui sera relayée à tous nos partenaires organismes de crédit.
											</p>
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
								<div class="el">
							        <div class="content">
								        <div class="illu">
											<img src="img/common-section_sousmetier/illu-12.svg" alt="">
										</div>
										<div class="text">
											<h3><a href="#">Assurance obsèque</a></h3>
											<p>
												Courtier en crédit immobilier, Bourse des Crédits peut vous accompagner pour l’obtention de votre financement immobilier.  En véritable expert, nous pouvons comparer les banques en prêt immobilier qui opèrent en France, afin de vous obtenir le meilleur taux et les conditions de crédits les plus avantageuses.<br><br>
												Reconnue parmi les entreprises les plus innovantes de son secteur, Bourse des Crédits vous accompagne également dans la négociation de votre emprunt immobilier.<br><br>
												Nos outils de simulation et comparaison de crédit, vous permettend d’avoir accès aux meilleurs taux de prêts du marché et de faire votre demande de crédit en ligne qui sera relayée à tous nos partenaires organismes de crédit.
											</p>
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
								<div class="el">
							        <div class="content">
								        <div class="illu">
											<img src="img/common-section_sousmetier/illu-13.svg" alt="">
										</div>
										<div class="text">
											<h3><a href="#">Assurance prévoyance</a></h3>
											<p>
												Courtier en crédit immobilier, Bourse des Crédits peut vous accompagner pour l’obtention de votre financement immobilier.  En véritable expert, nous pouvons comparer les banques en prêt immobilier qui opèrent en France, afin de vous obtenir le meilleur taux et les conditions de crédits les plus avantageuses.<br><br>
												Reconnue parmi les entreprises les plus innovantes de son secteur, Bourse des Crédits vous accompagne également dans la négociation de votre emprunt immobilier.<br><br>
												Nos outils de simulation et comparaison de crédit, vous permettend d’avoir accès aux meilleurs taux de prêts du marché et de faire votre demande de crédit en ligne qui sera relayée à tous nos partenaires organismes de crédit.
											</p>
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
								<div class="el">
							        <div class="content">
								        <div class="illu">
											<img src="img/common-section_sousmetier/illu-14.svg" alt="">
										</div>
										<div class="text">
											<h3><a href="#">Assurance scolaire</a></h3>
											<p>
												Courtier en crédit immobilier, Bourse des Crédits peut vous accompagner pour l’obtention de votre financement immobilier.  En véritable expert, nous pouvons comparer les banques en prêt immobilier qui opèrent en France, afin de vous obtenir le meilleur taux et les conditions de crédits les plus avantageuses.<br><br>
												Reconnue parmi les entreprises les plus innovantes de son secteur, Bourse des Crédits vous accompagne également dans la négociation de votre emprunt immobilier.<br><br>
												Nos outils de simulation et comparaison de crédit, vous permettend d’avoir accès aux meilleurs taux de prêts du marché et de faire votre demande de crédit en ligne qui sera relayée à tous nos partenaires organismes de crédit.
											</p>
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
								<div class="el">
							        <div class="content">
								        <div class="illu">
											<img src="img/common-section_sousmetier/illu-15.svg" alt="">
										</div>
										<div class="text">
											<h3><a href="#">Assurance voyage</a></h3>
											<p>
												Courtier en crédit immobilier, Bourse des Crédits peut vous accompagner pour l’obtention de votre financement immobilier.  En véritable expert, nous pouvons comparer les banques en prêt immobilier qui opèrent en France, afin de vous obtenir le meilleur taux et les conditions de crédits les plus avantageuses.<br><br>
												Reconnue parmi les entreprises les plus innovantes de son secteur, Bourse des Crédits vous accompagne également dans la négociation de votre emprunt immobilier.<br><br>
												Nos outils de simulation et comparaison de crédit, vous permettend d’avoir accès aux meilleurs taux de prêts du marché et de faire votre demande de crédit en ligne qui sera relayée à tous nos partenaires organismes de crédit.
											</p>
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
								<div class="el">
							        <div class="content">
								        <div class="illu">
											<img src="img/common-section_sousmetier/illu-16.svg" alt="">
										</div>
										<div class="text">
											<h3><a href="#">Mutuelle santé</a></h3>
											<p>
												Courtier en crédit immobilier, Bourse des Crédits peut vous accompagner pour l’obtention de votre financement immobilier.  En véritable expert, nous pouvons comparer les banques en prêt immobilier qui opèrent en France, afin de vous obtenir le meilleur taux et les conditions de crédits les plus avantageuses.<br><br>
												Reconnue parmi les entreprises les plus innovantes de son secteur, Bourse des Crédits vous accompagne également dans la négociation de votre emprunt immobilier.<br><br>
												Nos outils de simulation et comparaison de crédit, vous permettend d’avoir accès aux meilleurs taux de prêts du marché et de faire votre demande de crédit en ligne qui sera relayée à tous nos partenaires organismes de crédit.
											</p>
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
								<div class="el">
							        <div class="content">
								        <div class="illu">
											<img src="img/common-section_sousmetier/illu-26.svg" alt="">
										</div>
										<div class="text">
											<h3><a href="#">Assurance vie</a></h3>
											<p>
												Courtier en crédit immobilier, Bourse des Crédits peut vous accompagner pour l’obtention de votre financement immobilier.  En véritable expert, nous pouvons comparer les banques en prêt immobilier qui opèrent en France, afin de vous obtenir le meilleur taux et les conditions de crédits les plus avantageuses.<br><br>
												Reconnue parmi les entreprises les plus innovantes de son secteur, Bourse des Crédits vous accompagne également dans la négociation de votre emprunt immobilier.<br><br>
												Nos outils de simulation et comparaison de crédit, vous permettend d’avoir accès aux meilleurs taux de prêts du marché et de faire votre demande de crédit en ligne qui sera relayée à tous nos partenaires organismes de crédit.
											</p>
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
								<div class="el">
							        <div class="content">
								        <div class="illu">
											<img src="img/common-section_sousmetier/illu-17.svg" alt="">
										</div>
										<div class="text">
											<h3><a href="#">Défiscalisation</a></h3>
											<p>
												Courtier en crédit immobilier, Bourse des Crédits peut vous accompagner pour l’obtention de votre financement immobilier.  En véritable expert, nous pouvons comparer les banques en prêt immobilier qui opèrent en France, afin de vous obtenir le meilleur taux et les conditions de crédits les plus avantageuses.<br><br>
												Reconnue parmi les entreprises les plus innovantes de son secteur, Bourse des Crédits vous accompagne également dans la négociation de votre emprunt immobilier.<br><br>
												Nos outils de simulation et comparaison de crédit, vous permettend d’avoir accès aux meilleurs taux de prêts du marché et de faire votre demande de crédit en ligne qui sera relayée à tous nos partenaires organismes de crédit.
											</p>
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
								<div class="el">
							        <div class="content">
								        <div class="illu">
											<img src="img/common-section_sousmetier/illu-18.svg" alt="">
										</div>
										<div class="text">
											<h3><a href="#">SCPI</a></h3>
											<p>
												Courtier en crédit immobilier, Bourse des Crédits peut vous accompagner pour l’obtention de votre financement immobilier.  En véritable expert, nous pouvons comparer les banques en prêt immobilier qui opèrent en France, afin de vous obtenir le meilleur taux et les conditions de crédits les plus avantageuses.<br><br>
												Reconnue parmi les entreprises les plus innovantes de son secteur, Bourse des Crédits vous accompagne également dans la négociation de votre emprunt immobilier.<br><br>
												Nos outils de simulation et comparaison de crédit, vous permettend d’avoir accès aux meilleurs taux de prêts du marché et de faire votre demande de crédit en ligne qui sera relayée à tous nos partenaires organismes de crédit.
											</p>
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
								<div class="el">
							        <div class="content">
								        <div class="illu">
											<img src="img/common-section_sousmetier/illu-19.svg" alt="">
										</div>
										<div class="text">
											<h3><a href="#">Banque en ligne</a></h3>
											<p>
												Courtier en crédit immobilier, Bourse des Crédits peut vous accompagner pour l’obtention de votre financement immobilier.  En véritable expert, nous pouvons comparer les banques en prêt immobilier qui opèrent en France, afin de vous obtenir le meilleur taux et les conditions de crédits les plus avantageuses.<br><br>
												Reconnue parmi les entreprises les plus innovantes de son secteur, Bourse des Crédits vous accompagne également dans la négociation de votre emprunt immobilier.<br><br>
												Nos outils de simulation et comparaison de crédit, vous permettend d’avoir accès aux meilleurs taux de prêts du marché et de faire votre demande de crédit en ligne qui sera relayée à tous nos partenaires organismes de crédit.
											</p>
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
								<div class="el">
							        <div class="content">
								        <div class="illu">
											<img src="img/common-section_sousmetier/illu-20.svg" alt="">
										</div>
										<div class="text">
											<h3><a href="#">Banque en ligne professionnelle</a></h3>
											<p>
												Courtier en crédit immobilier, Bourse des Crédits peut vous accompagner pour l’obtention de votre financement immobilier.  En véritable expert, nous pouvons comparer les banques en prêt immobilier qui opèrent en France, afin de vous obtenir le meilleur taux et les conditions de crédits les plus avantageuses.<br><br>
												Reconnue parmi les entreprises les plus innovantes de son secteur, Bourse des Crédits vous accompagne également dans la négociation de votre emprunt immobilier.<br><br>
												Nos outils de simulation et comparaison de crédit, vous permettend d’avoir accès aux meilleurs taux de prêts du marché et de faire votre demande de crédit en ligne qui sera relayée à tous nos partenaires organismes de crédit.
											</p>
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
								<div class="el">
							        <div class="content">
								        <div class="illu">
											<img src="img/common-section_sousmetier/illu-21.svg" alt="">
										</div>
										<div class="text">
											<h3><a href="#">Bourse</a></h3>
											<p>
												Courtier en crédit immobilier, Bourse des Crédits peut vous accompagner pour l’obtention de votre financement immobilier.  En véritable expert, nous pouvons comparer les banques en prêt immobilier qui opèrent en France, afin de vous obtenir le meilleur taux et les conditions de crédits les plus avantageuses.<br><br>
												Reconnue parmi les entreprises les plus innovantes de son secteur, Bourse des Crédits vous accompagne également dans la négociation de votre emprunt immobilier.<br><br>
												Nos outils de simulation et comparaison de crédit, vous permettend d’avoir accès aux meilleurs taux de prêts du marché et de faire votre demande de crédit en ligne qui sera relayée à tous nos partenaires organismes de crédit.
											</p>
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
								<div class="el">
							        <div class="content">
								        <div class="illu">
											<img src="img/common-section_sousmetier/illu-22.svg" alt="">
										</div>
										<div class="text">
											<h3><a href="#">Livret d’épargne</a></h3>
											<p>
												Courtier en crédit immobilier, Bourse des Crédits peut vous accompagner pour l’obtention de votre financement immobilier.  En véritable expert, nous pouvons comparer les banques en prêt immobilier qui opèrent en France, afin de vous obtenir le meilleur taux et les conditions de crédits les plus avantageuses.<br><br>
												Reconnue parmi les entreprises les plus innovantes de son secteur, Bourse des Crédits vous accompagne également dans la négociation de votre emprunt immobilier.<br><br>
												Nos outils de simulation et comparaison de crédit, vous permettend d’avoir accès aux meilleurs taux de prêts du marché et de faire votre demande de crédit en ligne qui sera relayée à tous nos partenaires organismes de crédit.
											</p>
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
								<div class="el">
							        <div class="content">
								        <div class="illu">
											<img src="img/common-section_sousmetier/illu-23.svg" alt="">
										</div>
										<div class="text">
											<h3><a href="#">PEA (plan d’épargne en action)</a></h3>
											<p>
												Courtier en crédit immobilier, Bourse des Crédits peut vous accompagner pour l’obtention de votre financement immobilier.  En véritable expert, nous pouvons comparer les banques en prêt immobilier qui opèrent en France, afin de vous obtenir le meilleur taux et les conditions de crédits les plus avantageuses.<br><br>
												Reconnue parmi les entreprises les plus innovantes de son secteur, Bourse des Crédits vous accompagne également dans la négociation de votre emprunt immobilier.<br><br>
												Nos outils de simulation et comparaison de crédit, vous permettend d’avoir accès aux meilleurs taux de prêts du marché et de faire votre demande de crédit en ligne qui sera relayée à tous nos partenaires organismes de crédit.
											</p>
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
								<div class="el">
							        <div class="content">
								        <div class="illu">
											<img src="img/common-section_sousmetier/illu-24.svg" alt="">
										</div>
										<div class="text">
											<h3><a href="#">Électricité</a></h3>
											<p>
												Courtier en crédit immobilier, Bourse des Crédits peut vous accompagner pour l’obtention de votre financement immobilier.  En véritable expert, nous pouvons comparer les banques en prêt immobilier qui opèrent en France, afin de vous obtenir le meilleur taux et les conditions de crédits les plus avantageuses.<br><br>
												Reconnue parmi les entreprises les plus innovantes de son secteur, Bourse des Crédits vous accompagne également dans la négociation de votre emprunt immobilier.<br><br>
												Nos outils de simulation et comparaison de crédit, vous permettend d’avoir accès aux meilleurs taux de prêts du marché et de faire votre demande de crédit en ligne qui sera relayée à tous nos partenaires organismes de crédit.
											</p>
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
								<div class="el">
							        <div class="content">
								        <div class="illu">
											<img src="img/common-section_sousmetier/illu-25.svg" alt="">
										</div>
										<div class="text">
											<h3><a href="#">Gaz</a></h3>
											<p>
												Courtier en crédit immobilier, Bourse des Crédits peut vous accompagner pour l’obtention de votre financement immobilier.  En véritable expert, nous pouvons comparer les banques en prêt immobilier qui opèrent en France, afin de vous obtenir le meilleur taux et les conditions de crédits les plus avantageuses.<br><br>
												Reconnue parmi les entreprises les plus innovantes de son secteur, Bourse des Crédits vous accompagne également dans la négociation de votre emprunt immobilier.<br><br>
												Nos outils de simulation et comparaison de crédit, vous permettend d’avoir accès aux meilleurs taux de prêts du marché et de faire votre demande de crédit en ligne qui sera relayée à tous nos partenaires organismes de crédit.
											</p>
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
												<span>
													Rachat de credit fonctionnaire
												</span>
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
									<li>
										<a href="">
											<span class="link-text">
												<span>
													Comparateur rachat de crédit
												</span>
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
									<li>
										<a href="">
											<span class="link-text">
												<span>
													Rachat de crédit en ligne
												</span>
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
									<li>
										<a href="">
											<span class="link-text">
												<span>
													Courtier crédit immobilier
												</span>
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
									<li>
										<a href="">
											<span class="link-text">
												<span>
													Crédit conso en ligne
												</span>
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
									<li>
										<a href="">
											<span class="link-text">
												<span>
													Meilleur taux rachat de crédit conso
												</span>
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
									<li>
										<a href="">
											<span class="link-text">
												<span>
													Crédit immobilier en ligne
												</span>
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
									<li>
										<a href="">
											<span class="link-text">
												<span>
													Crédit immobilier fonctionnaire
												</span>
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
									<li>
										<a href="">
											<span class="link-text">
												<span>
													Calculette rachat de crédit
												</span>
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
									<li>
										<a href="">
											<span class="link-text">
												<span>
													Crédit conso rapide
												</span>
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
									<li>
										<a href="">
											<span class="link-text">
												<span>
													Crédit immobilier taux
												</span>
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
									<li>
										<a href="">
											<span class="link-text">
												<span>
													Rachat de crédit surendettement
												</span>
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
								<img src="img/common-section_autremetiers/icn-2.svg" alt="">
							</div>
							<div class="text">
								<div class="title">
									<h3>Assurance</h3>
									<div class="container-status">
										<div class="line"></div>
										<div class="line"></div>
									</div>
								</div>
								<ul>
									<li>
										<a href="">
											<span class="link-text">
												<span>
													Assurance auto en ligne
												</span>
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
									<li>
										<a href="">
											<span class="link-text">
												<span>
													Résiliation assurance auto
												</span>
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
									<li>
										<a href="">
											<span class="link-text">
												<span>
													Assurance habitation locataire
												</span>
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
									<li>
										<a href="">
											<span class="link-text">
												<span>
													Assurance auto jeune conducteur
												</span>
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
									<li>
										<a href="">
											<span class="link-text">
												<span>
													Assurance auto en ligne immédiate
												</span>
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
									<li>
										<a href="">
											<span class="link-text">
												<span>
													Assurance habitation colocation
												</span>
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
									<li>
										<a href="">
											<span class="link-text">
												<span>
													Meilleure assurance auto
												</span>
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
									<li>
										<a href="">
											<span class="link-text">
												<span>
													Assurance multirisque habitation
												</span>
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
									<li>
										<a href="">
											<span class="link-text">
												<span>
													Assurance moto en ligne
												</span>
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
									<li>
										<a href="">
											<span class="link-text">
												<span>
													Assurance habitation étudiant
												</span>
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
									<li>
										<a href="">
											<span class="link-text">
												<span>
													Meilleure assurance habitation
												</span>
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
									<li>
										<a href="">
											<span class="link-text">
												<span>
													Meilleure assurance moto
												</span>
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
								<img src="img/common-section_autremetiers/icn-3.svg" alt="">
							</div>
							<div class="text">
								<div class="title">
									<h3>Banque</h3>
									<div class="container-status">
										<div class="line"></div>
										<div class="line"></div>
									</div>
								</div>
								<ul>
									<li>
										<a href="">
											<span class="link-text">
												<span>
													Quelle banque en ligne choisir
												</span>
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
									<li>
										<a href="">
											<span class="link-text">
												<span>
													Ouvrir un compte en banque en ligne
												</span>
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
									<li>
										<a href="">
											<span class="link-text">
												<span>
													Banque en ligne pro EURL
												</span>
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
									<li>
										<a href="">
											<span class="link-text">
												<span>
													Offre banque en ligne
												</span>
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
									<li>
										<a href="">
											<span class="link-text">
												<span>
													Banque en ligne compte pro gratuit
												</span>
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
									<li>
										<a href="">
											<span class="link-text">
												<span>
													Banque pro en ligne SARL
												</span>
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
									<li>
										<a href="">
											<span class="link-text">
												<span>
													Banque en ligne sans dépôt
												</span>
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
									<li>
										<a href="">
											<span class="link-text">
												<span>
													Meilleur banque en ligne pro
												</span>
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
									<li>
										<a href="">
											<span class="link-text">
												<span>
													Classement banque en ligne
												</span>
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
									<li>
										<a href="">
											<span class="link-text">
												<span>
													Banque en ligne avec chéquier
												</span>
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
									<li>
										<a href="">
											<span class="link-text">
												<span>
													Ouverture compte pro banque en ligne
												</span>
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
									<li>
										<a href="">
											<span class="link-text">
												<span>
													Banque en ligne sans justificatif
												</span>
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
								<img src="img/common-section_autremetiers/icn-4.svg" alt="">
							</div>
							<div class="text">
								<div class="title">
									<h3>Patrimoine</h3>
									<div class="container-status">
										<div class="line"></div>
										<div class="line"></div>
									</div>
								</div>
								<ul>
									<li>
										<a href="">
											<span class="link-text">
												<span>
													Assurance vie en ligne
												</span>
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
									<li>
										<a href="">
											<span class="link-text">
												<span>
													Comparatif assurance vie
												</span>
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
									<li>
										<a href="">
											<span class="link-text">
												<span>
													Fiscalité SCPI
												</span>
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
									<li>
										<a href="">
											<span class="link-text">
												<span>
													Prélèvements sociaux assurance vie
												</span>
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
									<li>
										<a href="">
											<span class="link-text">
												<span>
													SCPI assurance vie
												</span>
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
									<li>
										<a href="">
											<span class="link-text">
												<span>
													Investir 10000 euros SCPI
												</span>
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
									<li>
										<a href="">
											<span class="link-text">
												<span>
													Contrat assurance vie
												</span>
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
									<li>
										<a href="">
											<span class="link-text">
												<span>
													Simulation SCPI
												</span>
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
									<li>
										<a href="">
											<span class="link-text">
												<span>
													Défiscalisation assurance vie
												</span>
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
									<li>
										<a href="">
											<span class="link-text">
												<span>
													Abattement assurance vie
												</span>
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
									<li>
										<a href="">
											<span class="link-text">
												<span>
													SCPI investissement
												</span>
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
									<li>
										<a href="">
											<span class="link-text">
												<span>
													Défiscaliser dans l’ancien
												</span>
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
								<img src="img/common-section_autremetiers/icn-5.svg" alt="">
							</div>
							<div class="text">
								<div class="title">
									<h3>Épargne</h3>
									<div class="container-status">
										<div class="line"></div>
										<div class="line"></div>
									</div>
								</div>
								<ul>
									<li>
										<a href="">
											<span class="link-text">
												<span>
													Montant maximum livret A
												</span>
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
									<li>
										<a href="">
											<span class="link-text">
												<span>
													Transfert livret A
												</span>
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
									<li>
										<a href="">
											<span class="link-text">
												<span>
													Courtier en bourse
												</span>
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
									<li>
										<a href="">
											<span class="link-text">
												<span>
													Taux livret jeune
												</span>
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
									<li>
										<a href="">
											<span class="link-text">
												<span>
													Super livret
												</span>
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
									<li>
										<a href="">
											<span class="link-text">
												<span>
													PEA jeune
												</span>
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
									<li>
										<a href="">
											<span class="link-text">
												<span>
													Compte sur livret
												</span>
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
									<li>
										<a href="">
											<span class="link-text">
												<span>
													Action bourse
												</span>
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
									<li>
										<a href="">
											<span class="link-text">
												<span>
													Meilleur PEA
												</span>
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
									<li>
										<a href="">
											<span class="link-text">
												<span>
													Livret jeune taux
												</span>
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
									<li>
										<a href="">
											<span class="link-text">
												<span>
													Bourse bitcoin
												</span>
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
									<li>
										<a href="">
											<span class="link-text">
												<span>
													Meilleur site bourse
												</span>
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
								<img src="img/common-section_autremetiers/icn-6.svg" alt="">
							</div>
							<div class="text">
								<div class="title">
									<h3>Énergie</h3>
									<div class="container-status">
										<div class="line"></div>
										<div class="line"></div>
									</div>
								</div>
								<ul>
									<li>
										<a href="">
											<span class="link-text">
												<span>
													Changer de fournisseur d’électricité
												</span>
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
									<li>
										<a href="">
											<span class="link-text">
												<span>
													Fournisseur électricité le moins cher
												</span>
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
									<li>
										<a href="">
											<span class="link-text">
												<span>
													Prix de l’électricité
												</span>
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
									<li>
										<a href="">
											<span class="link-text">
												<span>
													Gaz moins cher
												</span>
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
									<li>
										<a href="">
											<span class="link-text">
												<span>
													Meilleur fournisseur gaz
												</span>
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
									<li>
										<a href="">
											<span class="link-text">
												<span>Électricité et gaz</span>
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
									<li>
										<a href="">
											<span class="link-text">
												<span>Fournisseur gaz de ville</span>
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
									<li>
										<a href="">
											<span class="link-text">
												<span>Compteur gaz</span>
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
									<li>
										<a href="">
											<span class="link-text">
												<span>Déménagement électricité</span>
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
									<li>
										<a href="">
											<span class="link-text">
												<span>Comparateur gaz</span>
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
									<li>
										<a href="">
											<span class="link-text">
												<span>Tarif gaz</span>
											</span>
											<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
												<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
											</svg>
										</a>
									</li>
									<li>
										<a href="">
											<span class="link-text">
												<span>Changement compteur électrique</span>
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

			<section class="common-section_faq">
				<img class="path-1" src="img/common-section_cover:metiers/path-1.svg" alt="">
				<img class="path-2" src="img/common-section_cover:metiers/path-2.svg" alt="">
				<div class="wrapper">
					<h2>Les réponses à toutes vos questions</h2>
					<div class="container-el">
						<div class="el">
							<div class="row">
								<div class="question">
									<div class="icn">🏠</div>
									<span>Je suis titulaire d’un Épargne Logement. Comment puis-je utiliser mes droits à prêt, dans le cadre d’une acquisition immobilière ?</span>
								</div>
								<svg class="arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
									<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
								</svg>
							</div>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Risus habitasse quis eget ipsum sed nunc massa. Erat blandit mauris pharetra pulvinar ridiculus posuere. In imperdiet velit dapibus a erat morbi elementum, integer orci. Tincidunt mauris sed quam consectetur nisl porta sit. In dictum vestibulum, duis mattis ultrices sed elementum pharetra. Laoreet risus nam mauris lorem purus. Adipiscing faucibus blandit urna massa et. Turpis morbi porta sit eu, ultricies. Ut amet metus, id nisl cursus urna.
							</p>
							<a class="link" href="#">
								<span class="link-text">
									<span>
										Lire la suite
									</span>
								</span>
								<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
									<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
								</svg>
							</a>
						</div>
						<div class="el">
							<div class="row">
								<div class="question">
									<div class="icn">💼</div>
									<span>Puis-je bénéficier d'un crédit si je suis retraité ? Au chômage ? Etudiant, intérimaire ou en CDD ? Fiché Banque de France ?</span>
								</div>
								<svg class="arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
									<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
								</svg>
							</div>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Risus habitasse quis eget ipsum sed nunc massa. Erat blandit mauris pharetra pulvinar ridiculus posuere. In imperdiet velit dapibus a erat morbi elementum, integer orci. Tincidunt mauris sed quam consectetur nisl porta sit. In dictum vestibulum, duis mattis ultrices sed elementum pharetra. Laoreet risus nam mauris lorem purus. Adipiscing faucibus blandit urna massa et. Turpis morbi porta sit eu, ultricies. Ut amet metus, id nisl cursus urna.
							</p>
							<a class="link" href="#">
								<span class="link-text">
									<span>
										Lire la suite
									</span>
								</span>
								<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
									<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
								</svg>
							</a>
						</div>
						<div class="el">
							<div class="row">
								<div class="question">
									<div class="icn">📄</div>
									<span>Comment puis-je utiliser mes droits à prêt, dans le cadre d’une acquisition immobilière ?</span>
								</div>
								<svg class="arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
									<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
								</svg>
							</div>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Risus habitasse quis eget ipsum sed nunc massa. Erat blandit mauris pharetra pulvinar ridiculus posuere. In imperdiet velit dapibus a erat morbi elementum, integer orci. Tincidunt mauris sed quam consectetur nisl porta sit. In dictum vestibulum, duis mattis ultrices sed elementum pharetra. Laoreet risus nam mauris lorem purus. Adipiscing faucibus blandit urna massa et. Turpis morbi porta sit eu, ultricies. Ut amet metus, id nisl cursus urna.
							</p>
							<a class="link" href="#">
								<span class="link-text">
									<span>
										Lire la suite
									</span>
								</span>
								<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
									<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
								</svg>
							</a>
						</div>
						<div class="el">
							<div class="row">
								<div class="question">
									<div class="icn">🔥</div>
									<span>L'assurance emprunteur est-elle obligatoire ?</span>
								</div>
								<svg class="arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
									<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
								</svg>
							</div>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Risus habitasse quis eget ipsum sed nunc massa. Erat blandit mauris pharetra pulvinar ridiculus posuere. In imperdiet velit dapibus a erat morbi elementum, integer orci. Tincidunt mauris sed quam consectetur nisl porta sit. In dictum vestibulum, duis mattis ultrices sed elementum pharetra. Laoreet risus nam mauris lorem purus. Adipiscing faucibus blandit urna massa et. Turpis morbi porta sit eu, ultricies. Ut amet metus, id nisl cursus urna.
							</p>
							<a class="link" href="#">
								<span class="link-text">
									<span>
										Lire la suite
									</span>
								</span>
								<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
									<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
								</svg>
							</a>
						</div>
						<div class="el">
							<div class="row">
								<div class="question">
									<div class="icn">🚘</div>
									<span>À quoi sert une assurance pour un crédit à la consommation ?</span>
								</div>
								<svg class="arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
									<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
								</svg>
							</div>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Risus habitasse quis eget ipsum sed nunc massa. Erat blandit mauris pharetra pulvinar ridiculus posuere. In imperdiet velit dapibus a erat morbi elementum, integer orci. Tincidunt mauris sed quam consectetur nisl porta sit. In dictum vestibulum, duis mattis ultrices sed elementum pharetra. Laoreet risus nam mauris lorem purus. Adipiscing faucibus blandit urna massa et. Turpis morbi porta sit eu, ultricies. Ut amet metus, id nisl cursus urna.
							</p>
							<a class="link" href="#">
								<span class="link-text">
									<span>
										Lire la suite
									</span>
								</span>
								<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
									<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
								</svg>
							</a>
						</div>
						<div class="el">
							<div class="row">
								<div class="question">
									<div class="icn">🏠</div>
									<span>Comment s'appréhende la durée d'indemnisation prévue au contrat d'assurance perte d'emploi souscrite avec un crédit immobilier ?</span>
								</div>
								<svg class="arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
									<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
								</svg>
							</div>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Risus habitasse quis eget ipsum sed nunc massa. Erat blandit mauris pharetra pulvinar ridiculus posuere. In imperdiet velit dapibus a erat morbi elementum, integer orci. Tincidunt mauris sed quam consectetur nisl porta sit. In dictum vestibulum, duis mattis ultrices sed elementum pharetra. Laoreet risus nam mauris lorem purus. Adipiscing faucibus blandit urna massa et. Turpis morbi porta sit eu, ultricies. Ut amet metus, id nisl cursus urna.
							</p>
							<a class="link" href="#">
								<span class="link-text">
									<span>
										Lire la suite
									</span>
								</span>
								<svg class="link-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 10">
									<use xlink:href="img/common/icn-arrow-2.svg#content"></use>
								</svg>
							</a>
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

		<script type="text/javascript" src="script/minify/js-page_home-min.js"></script>
	</body>
</html>