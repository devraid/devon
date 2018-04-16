<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$d = $dictionary;
?>
<!DOCTYPE HTML>
	<html lang="<?= $language; ?>">
	<head>
		<title>QHabito</title>
		<meta http-equiv="pragma" content="no-cache" />
		<meta http-equiv="cache-Control" content="no-cache, no-store, must-revalidate, max-age=0" />
		<meta http-equiv="expires" content="Tue, 01 Jan 1980 1:00:00 GMT" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="csrf" content="<?= $csrf_exp; ?>" />
		<meta name="author" content="WirexMedia.com" />
		<meta charset="utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<meta name="robots" content="index,follow" />
		<meta name="viewport" content="width=device-width, user-scalable=no" />
		<meta name="theme-color" content="#16487B" />
		<meta name="msapplication-navbutton-color" content="#16487B" />
		<meta name="apple-mobile-web-app-capable" content="yes" />
		<meta name="format-detection" content="telephone=no">
		<!--
		<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
		<link rel="shortcut icon" href="/favicon.ico" />
		<link rel="manifest" href="/manifest.json">
		-->
		<link href="/qhabito/css/application.css" media="screen" rel="stylesheet" type="text/css" />
		
		<script type="text/javascript" src="/qhabito/js/jquery-3.3.1.min.js"></script>
		<script type="text/javascript" src="/qhabito/js/slick.min.js"></script>
		<script type="text/javascript" src="/qhabito/js/common.js"></script>
		<script type="text/javascript" src="/qhabito/js/rent.js"></script>
	</head>
<body class="<?= $data['device']; ?>">
	<!-- MAIN / BEGIN -->
	<div class="main rent main-grid">
		<!-- HEADER / BEGIN -->
		<div class="header clearfix">
			<div class="top-bar">
				<ul class="languages">
					<li><a <?= ($language === 'es' ? ' class="selected' : ''); ?> href="<?= base_url(); ?>inicio" title="" data-lang="es"><span>ESP</span><span>ESP</span></a></li>
					<li><a <?= ($language === 'en' ? ' class="selected' : ''); ?> href="<?= base_url(); ?>home" title="" data-lang="en"><span>ENG</span><span>ENG</span></a></li>
				</ul>
			</div>
			<div class="content clearfix">
				<a class="logo-link" href="<?= base_url(); ?>" title="">&nbsp;</a>
				<div class="mod-simple-form search-form">
					<form action="<?= base_url(); ?>alquiler" method="get">
						<fieldset>
							<div><input class="search text" type="text" name="q" value="" tabindex="1" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" placeholder="<?= $d['search_placeholder']; ?>" />
							<div class="results"></div></div>
							<div><a class="send" href="#" title=""><span><?= $d['search']; ?></span><span><?= $d['search']; ?></span><i class="icon-search">&nbsp;</i></a></div>
						</fieldset>
					</form>
				</div>
			</div>
			<?php if(sizeof($data['location']) > 0): ?>
			<ul class="breadcrumb clearfix">
				<li><a href="<?= base_url(); ?>" title=""><span class="text"><?= $d['home']; ?></span><span class="arrow">&nbsp;</span></a></li>
				<?php foreach($data['location'] as $location): ?>
				<li><a href="<?= base_url().$location['slug']; ?>" title=""><span class="text"><?= $location['name']; ?></span><span class="arrow">&nbsp;</span></a></li>
				<?php endforeach; ?>
			</ul>
			<?php endif; ?>
		</div>
		<!-- HEADER / END -->
		<!-- CONTENT / BEGIN -->
		<div class="content">
			<div class="wrap">
				
				<div class="filters selection mod-tags-cloud clearfix">
					<div class="wrapper clearfix">
						<h1><?= $d['applied_filters']; ?>:</h1>
					</div>
				</div>
				
				<div class="filters more clearfix">
					<div class="wrapper clearfix">
					
						<ul class="mod-select-grid property" data-ref="property">
							<li>
								<a href="#" title="">Tipo de Vivienda<span class="arrow">&nbsp;</span></a>
								<ul class="clearfix">
									<li><a href="#" title="" data-ref="property" data-filter="" data-value="Tipo de Vivienda"><?= $d['any']; ?></a></li>
									<li><a href="#" title="" data-ref="property" data-filter="piso" data-value="">Piso</a></li>
									<li><a href="#" title="" data-ref="property" data-filter="atico" data-value="">Ático</a></li>
									<li><a href="#" title="" data-ref="property" data-filter="duplex" data-value="">Dúplex</a></li>
									<li><a href="#" title="" data-ref="property" data-filter="estudio" data-value="">Estudio</a></li>
									<li><a href="#" title="" data-ref="property" data-filter="loft" data-value="">Loft</a></li>
									<li><a href="#" title="" data-ref="property" data-filter="casa-o-chalet" data-value="">Casa o Chalet</a></li>
								</ul>
							</li>
						</ul>
						
						<ul class="mod-select-grid price-min" data-ref="price-min">
							<li>
								<a href="#" title=""><?= $d['price']; ?> <?= $d['min']; ?><span class="arrow">&nbsp;</span></a>
								<ul class="clearfix">
									<li><a href="#" title="" data-ref="price-min" data-filter="" data-value="<?= $d['price']; ?> <?= $d['min']; ?>"><?= $d['any']; ?></a></li>
									<li><a href="#" title="" data-ref="price-min" data-filter="precio-min-300" data-value="<?= $d['min']; ?>., 300€">300€</a></li>
									<li><a href="#" title="" data-ref="price-min" data-filter="precio-min-350" data-value="<?= $d['min']; ?>., 350€">350€</a></li>
									<li><a href="#" title="" data-ref="price-min" data-filter="precio-min-400" data-value="<?= $d['min']; ?>., 400€">400€</a></li>
									<li><a href="#" title="" data-ref="price-min" data-filter="precio-min-450" data-value="<?= $d['min']; ?>., 450€">450€</a></li>
									<li><a href="#" title="" data-ref="price-min" data-filter="precio-min-500" data-value="<?= $d['min']; ?>., 500€">500€</a></li>
									<li><a href="#" title="" data-ref="price-min" data-filter="precio-min-550" data-value="<?= $d['min']; ?>., 550€">550€</a></li>
									<li><a href="#" title="" data-ref="price-min" data-filter="precio-min-600" data-value="<?= $d['min']; ?>., 600€">600€</a></li>
									<li><a href="#" title="" data-ref="price-min" data-filter="precio-min-650" data-value="<?= $d['min']; ?>., 650€">650€</a></li>
									<li><a href="#" title="" data-ref="price-min" data-filter="precio-min-700" data-value="<?= $d['min']; ?>., 700€">700€</a></li>
									<li><a href="#" title="" data-ref="price-min" data-filter="precio-min-750" data-value="<?= $d['min']; ?>., 750€">750€</a></li>
								</ul>
							</li>
						</ul>
					
						<ul class="mod-select-grid price-max" data-ref="price-max">
							<li>
								<a href="#" title=""><?= $d['price']; ?> <?= $d['max']; ?><span class="arrow">&nbsp;</span></a>
								<ul class="clearfix">
									<li><a href="#" title="" data-ref="price-max" data-filter="" data-value="<?= $d['price']; ?> <?= $d['max']; ?>"><?= $d['any']; ?></a></li>
									<li><a href="#" title="" data-ref="price-max" data-filter="precio-max-300" data-value="<?= $d['max']; ?>., 300€">300€</a></li>
									<li><a href="#" title="" data-ref="price-max" data-filter="precio-max-350" data-value="<?= $d['max']; ?>., 350€">350€</a></li>
									<li><a href="#" title="" data-ref="price-max" data-filter="precio-max-400" data-value="<?= $d['max']; ?>., 400€">400€</a></li>
									<li><a href="#" title="" data-ref="price-max" data-filter="precio-max-450" data-value="<?= $d['max']; ?>., 450€">450€</a></li>
									<li><a href="#" title="" data-ref="price-max" data-filter="precio-max-500" data-value="<?= $d['max']; ?>., 500€">500€</a></li>
									<li><a href="#" title="" data-ref="price-max" data-filter="precio-max-550" data-value="<?= $d['max']; ?>., 550€">550€</a></li>
									<li><a href="#" title="" data-ref="price-max" data-filter="precio-max-600" data-value="<?= $d['max']; ?>., 600€">600€</a></li>
									<li><a href="#" title="" data-ref="price-max" data-filter="precio-max-650" data-value="<?= $d['max']; ?>., 650€">650€</a></li>
									<li><a href="#" title="" data-ref="price-max" data-filter="precio-max-700" data-value="<?= $d['max']; ?>., 700€">700€</a></li>
									<li><a href="#" title="" data-ref="price-max" data-filter="precio-max-750" data-value="<?= $d['max']; ?>., 750€">750€</a></li>
								</ul>
							</li>
						</ul>
						
						<ul class="mod-select-grid size-min" data-ref="size-min">
							<li>
								<a href="#" title=""><?= $d['size']; ?> <?= $d['min']; ?><span class="arrow">&nbsp;</span></a>
								<ul class="clearfix">
									<li><a href="#" title="" data-ref="size-min" data-filter="" data-value="<?= $d['size']; ?> <?= $d['min']; ?>"><?= $d['any']; ?></a></li>
									<li><a href="#" title="" data-ref="size-min" data-filter="tamano-min-50" data-value="<?= $d['min']; ?>., 50m²">50m²</a></li>
									<li><a href="#" title="" data-ref="size-min" data-filter="tamano-min-60" data-value="<?= $d['min']; ?>., 60m²">60m²</a></li>
									<li><a href="#" title="" data-ref="size-min" data-filter="tamano-min-70" data-value="<?= $d['min']; ?>., 70m²">70m²</a></li>
									<li><a href="#" title="" data-ref="size-min" data-filter="tamano-min-80" data-value="<?= $d['min']; ?>., 80m²">80m²</a></li>
									<li><a href="#" title="" data-ref="size-min" data-filter="tamano-min-100" data-value="<?= $d['min']; ?>., 100m²">100m²</a></li>
									<li><a href="#" title="" data-ref="size-min" data-filter="tamano-min-120" data-value="<?= $d['min']; ?>., 120m²">120m²</a></li>
									<li><a href="#" title="" data-ref="size-min" data-filter="tamano-min-140" data-value="<?= $d['min']; ?>., 140m²">140m²</a></li>
									<li><a href="#" title="" data-ref="size-min" data-filter="tamano-min-160" data-value="<?= $d['min']; ?>., 160m²">160m²</a></li>
									<li><a href="#" title="" data-ref="size-min" data-filter="tamano-min-180" data-value="<?= $d['min']; ?>., 180m²">180m²</a></li>
									<li><a href="#" title="" data-ref="size-min" data-filter="tamano-min-200" data-value="<?= $d['min']; ?>., 200m²">200m²</a></li>
								</ul>
							</li>
						</ul>
						
						<ul class="mod-select-grid size-max" data-ref="size-max">
							<li>
								<a href="#" title=""><?= $d['size']; ?> <?= $d['max']; ?><span class="arrow">&nbsp;</span></a>
								<ul class="clearfix">
									<li><a href="#" title="" data-ref="size-max" data-filter="" data-value="<?= $d['size']; ?> <?= $d['max']; ?>"><?= $d['any']; ?></a></li>
									<li><a href="#" title="" data-ref="size-max" data-filter="tamano-max-50" data-value="<?= $d['max']; ?>., 50m²">50m²</a></li>
									<li><a href="#" title="" data-ref="size-max" data-filter="tamano-max-60" data-value="<?= $d['max']; ?>., 60m²">60m²</a></li>
									<li><a href="#" title="" data-ref="size-max" data-filter="tamano-max-70" data-value="<?= $d['max']; ?>., 70m²">70m²</a></li>
									<li><a href="#" title="" data-ref="size-max" data-filter="tamano-max-80" data-value="<?= $d['max']; ?>., 80m²">80m²</a></li>
									<li><a href="#" title="" data-ref="size-max" data-filter="tamano-max-100" data-value="<?= $d['max']; ?>., 100m²">100m²</a></li>
									<li><a href="#" title="" data-ref="size-max" data-filter="tamano-max-120" data-value="<?= $d['max']; ?>., 120m²">120m²</a></li>
									<li><a href="#" title="" data-ref="size-max" data-filter="tamano-max-140" data-value="<?= $d['max']; ?>., 140m²">140m²</a></li>
									<li><a href="#" title="" data-ref="size-max" data-filter="tamano-max-160" data-value="<?= $d['max']; ?>., 160m²">160m²</a></li>
									<li><a href="#" title="" data-ref="size-max" data-filter="tamano-max-180" data-value="<?= $d['max']; ?>., 180m²">180m²</a></li>
									<li><a href="#" title="" data-ref="size-max" data-filter="tamano-max-200" data-value="<?= $d['max']; ?>., 200m²">200m²</a></li>
								</ul>
							</li>
						</ul>
						
						<ul class="mod-select rooms" data-ref="rooms">
							<li><a href="#" title=""><?= $d['rooms']; ?><span class="arrow">&nbsp;</span></a></li>
							<li><a href="#" title="" data-ref="rooms" data-filter="" data-value="<?= $d['rooms']; ?>"><?= $d['any']; ?></a></li>
							<li><a href="#" title="" data-ref="rooms" data-filter="habitaciones-1-o-mas" data-value="1 <?= $d['or_more']; ?> <?= $d['rooms']; ?>">1 <?= $d['or_more']; ?></a></li>
							<li><a href="#" title="" data-ref="rooms" data-filter="habitaciones-2-o-mas" data-value="2 <?= $d['or_more']; ?> <?= $d['rooms']; ?>">2 <?= $d['or_more']; ?></a></li>
							<li><a href="#" title="" data-ref="rooms" data-filter="habitaciones-3-o-mas" data-value="3 <?= $d['or_more']; ?> <?= $d['rooms']; ?>">3 <?= $d['or_more']; ?></a></li>
							<li><a href="#" title="" data-ref="rooms" data-filter="habitaciones-4-o-mas" data-value="4 <?= $d['or_more']; ?> <?= $d['rooms']; ?>">4 <?= $d['or_more']; ?></a></li>
						</ul>
						
						<ul class="mod-select bathrooms" data-ref="bathrooms">
							<li><a href="#" title=""><?= $d['bathroom']; ?>s<span class="arrow">&nbsp;</span></a></li>
							<li><a href="#" title="" data-ref="bathrooms" data-filter="" data-value="<?= $d['bathroom']; ?>s"><?= $d['any']; ?></a></li>
							<li><a href="#" title="" data-ref="bathrooms" data-filter="banos-1-o-mas" data-value="1 <?= $d['or_more']; ?> <?= $d['bathroom']; ?>s">1 <?= $d['or_more']; ?></a></li>
							<li><a href="#" title="" data-ref="bathrooms" data-filter="banos-2-o-mas" data-value="2 <?= $d['or_more']; ?> <?= $d['bathroom']; ?>s">2 <?= $d['or_more']; ?></a></li>
							<li><a href="#" title="" data-ref="bathrooms" data-filter="banos-3-o-mas" data-value="3 <?= $d['or_more']; ?> <?= $d['bathroom']; ?>s">3 <?= $d['or_more']; ?></a></li>
							<li><a href="#" title="" data-ref="bathrooms" data-filter="banos-4-o-mas" data-value="4 <?= $d['or_more']; ?> <?= $d['bathroom']; ?>s">4 <?= $d['or_more']; ?></a></li>
						</ul>
						
						<ul class="mod-select equipment" data-ref="equipment">
							<li><a href="#" title=""><?= $d['equipment']; ?><span class="arrow">&nbsp;</span></a></li>
							<li><a href="#" title="" data-ref="equipment" data-filter="" data-value="<?= $d['equipment']; ?>"><?= $d['any']; ?></a></li>
							<li><a href="#" title="" data-ref="equipment" data-filter="amueblado" data-value=""><?= $d['furnished']; ?></a></li>
							<li><a href="#" title="" data-ref="equipment" data-filter="sin-amueblar" data-value=""><?= $d['unfurnished']; ?></a></li>
							<li><a href="#" title="" data-ref="equipment" data-filter="semiamueblado" data-value=""><?= $d['semifurnished']; ?></a></li>
							<li><a href="#" title="" data-ref="equipment" data-filter="solo-cocina" data-value=""><?= $d['equipped_kitchen']; ?></a></li>
						</ul>

						<ul class="mod-select condition" data-ref="condition">
							<li><a href="#" title=""><?= $d['condition']; ?><span class="arrow">&nbsp;</span></a></li>
							<li><a href="#" title="" data-ref="state" data-filter="" data-value="Condición"><?= $d['any']; ?></a></li>
							<li><a href="#" title="" data-ref="state" data-filter="como-nuevo" data-value=""><?= $d['as_new']; ?></a></li>
							<li><a href="#" title="" data-ref="state" data-filter="buen-estado" data-value=""><?= $d['good_condition']; ?></a></li>
							<li><a href="#" title="" data-ref="state" data-filter="obra-nueva" data-value=""><?= $d['new_construction']; ?></a></li>
							<li><a href="#" title="" data-ref="state" data-filter="a-reformar" data-value=""><?= $d['to_be_reformed']; ?></a></li>
						</ul>

						<ul class="mod-select pets" data-ref="pets">
							<li><a href="#" title=""><?= $d['pets']; ?><span class="arrow">&nbsp;</span></a></li>
							<li><a href="#" title="" data-ref="pets" data-filter="" data-value="Mascotas"><?= $d['any']; ?></a></li>
							<li><a href="#" title="" data-ref="pets" data-filter="mascotas" data-value=""><?= $d['pets_ok']; ?></a></li>
							<li><a href="#" title="" data-ref="pets" data-filter="no-mascotas" data-value=""><?= $d['no_pets']; ?></a></li>
							<li><a href="#" title="" data-ref="pets" data-filter="solo-gatos" data-value=""><?= $d['only_cats']; ?></a></li>
							<li><a href="#" title="" data-ref="pets" data-filter="solo-perros" data-value=""><?= $d['only_dogs']; ?></a></li>
						</ul>

						<ul class="mod-select level" data-ref="level">
							<li><a href="#" title=""><?= $d['level_floor']; ?><span class="arrow">&nbsp;</span></a></li>
							<li><a href="#" title="" data-ref="level" data-filter="" data-value="Planta"><?= $d['any']; ?></a></li>
							<li><a href="#" title="" data-ref="level" data-filter="sotano" data-value=""><?= $d['basement']; ?></a></li>
							<li><a href="#" title="" data-ref="level" data-filter="planta-baja" data-value=""><?= $d['ground_floor']; ?></a></li>
							<li><a href="#" title="" data-ref="level" data-filter="entreplanta" data-value=""><?= $d['mezzanine']; ?></a></li>
							<li><a href="#" title="" data-ref="level" data-filter="planta-intermedia" data-value=""><?= $d['intermediate_floor']; ?></a></li>
							<li><a href="#" title="" data-ref="level" data-filter="ultima-planta" data-value=""><?= $d['top_floor']; ?></a></li>
						</ul>
					
						<div class="mod-grid-tags-cloud clearfix">
							<h1><?= $d['other_features']; ?>:</h1>
							<ul class="clearfix">
								<li><a class="item" href="#" title="" data-ref="extra" data-filter="ascensor"><?= $d['elevator']; ?></a></li>
								<li><a class="item" href="#" title="" data-ref="extra" data-filter="accesible"><?= $d['elevator']; ?></a></li>
								<li><a class="item" href="#" title="" data-ref="extra" data-filter="porteria"><?= $d['reception']; ?></a></li>
								<li><a class="item" href="#" title="" data-ref="extra" data-filter="videoportero"><?= $d['door_station']; ?></a></li>
								<li><a class="item" href="#" title="" data-ref="extra" data-filter="lavanderia"><?= $d['laundry']; ?></a></li>
								<li><a class="item" href="#" title="" data-ref="extra" data-filter="gimnasio"><?= $d['fitness_center']; ?></a></li>
								<li><a class="item" href="#" title="" data-ref="extra" data-filter="piscina"><?= $d['pool']; ?></a></li>
								<li><a class="item" href="#" title="" data-ref="extra" data-filter="trastero"><?= $d['storage_room']; ?></a></li>
								<li><a class="item" href="#" title="" data-ref="extra" data-filter="garaje-privado"><?= $d['private_garage']; ?></a></li>
								<li><a class="item" href="#" title="" data-ref="extra" data-filter="garaje-comunitario"><?= $d['community_garage']; ?></a></li>
								<li><a class="item" href="#" title="" data-ref="extra" data-filter="aire-acondicionado"><?= $d['air_conditioner']; ?></a></li>
								<li><a class="item" href="#" title="" data-ref="extra" data-filter="calefaccion-central"><?= $d['central_heating']; ?></a></li>
								<li><a class="item" href="#" title="" data-ref="extra" data-filter="comunidad-incluida"><?= $d['community_fees']; ?></a></li>
								<li><a class="item" href="#" title="" data-ref="extra" data-filter="jardin"><?= $d['garden']; ?></a></li>
								<li><a class="item" href="#" title="" data-ref="extra" data-filter="balcon"><?= $d['balcony']; ?></a></li>
								<li><a class="item" href="#" title="" data-ref="extra" data-filter="terraza"><?= $d['terrace']; ?></a></li>
								<li><a class="item" href="#" title="" data-ref="extra" data-filter="suelo-marmol"><?= $d['marble_floors']; ?></a></li>
								<li><a class="item" href="#" title="" data-ref="extra" data-filter="parquet-tarima"><?= $d['wooden_floors']; ?></a></li>
								<li><a class="item" href="#" title="" data-ref="extra" data-filter="lavadora"><?= $d['washing_machine']; ?></a></li>
								<li><a class="item" href="#" title="" data-ref="extra" data-filter="secadora"><?= $d['dryer']; ?></a></li>
								<li><a class="item" href="#" title="" data-ref="extra" data-filter="lavavajillas"><?= $d['dishwasher']; ?></a></li>
								<li><a class="item" href="#" title="" data-ref="extra" data-filter="horno"><?= $d['oven']; ?></a></li>
								<li><a class="item" href="#" title="" data-ref="extra" data-filter="closet"><?= $d['closet']; ?></a></li>
								<li><a class="item" href="#" title="" data-ref="extra" data-filter="armarios-empotrados"><?= $d['fitted_wardrobes']; ?></a></li>
								<li><a class="item" href="#" title="" data-ref="extra" data-filter="jacuzzi"><?= $d['jacuzzi']; ?></a></li>
								<li><a class="item" href="#" title="" data-ref="extra" data-filter="hidromasaje"><?= $d['hydromassage']; ?></a></li>
								<li><a class="item" href="#" title="" data-ref="extra" data-filter="cerca-farmacia"><?= $d['nearby_pharmacy']; ?></a></li>
								<li><a class="item" href="#" title="" data-ref="extra" data-filter="cerca-supermercado"><?= $d['nearby_supermarket']; ?></a></li>
								<li><a class="item" href="#" title="" data-ref="extra" data-filter="cerca-parque-infantil"><?= $d['nearby_playground']; ?></a></li>
								<li><a class="item" href="#" title="" data-ref="extra" data-filter="cerca-colegio"><?= $d['nearby_school']; ?></a></li>
								<li><a class="item" href="#" title="" data-ref="extra" data-filter="cerca-instituto"><?= $d['nearby_high_school']; ?></a></li>
								<li><a class="item" href="#" title="" data-ref="extra" data-filter="cerca-universidad"><?= $d['nearby_university']; ?></a></li>
								<li><a class="item" href="#" title="" data-ref="extra" data-filter="cerca-autobus"><?= $d['nearby_bus']; ?></a></li>
								<li><a class="item" href="#" title="" data-ref="extra" data-filter="cerca-metro"><?= $d['nearby_subway']; ?></a></li>
								<li><a class="item" href="#" title="" data-ref="extra" data-filter="cerca-tren"><?= $d['nearby_train']; ?></a></li>
							</ul>
						</div>
					</div>
				</div>
				
				<div class="filters clearfix">
					<ul class="mod-select-grid property" data-ref="property">
						<li>
							<a href="#" title=""><?= $d['housing_type']; ?><span class="arrow">&nbsp;</span></a>
							<ul class="clearfix">
								<li><a href="#" title="" data-ref="property" data-filter="" data-value="<?= $d['housing_type']; ?>"><?= $d['any']; ?></a></li>
								<li><a href="#" title="" data-ref="property" data-filter="piso" data-value=""><?= $d['flat']; ?></a></li>
								<li><a href="#" title="" data-ref="property" data-filter="atico" data-value=""><?= $d['penthouse']; ?></a></li>
								<li><a href="#" title="" data-ref="property" data-filter="duplex" data-value=""><?= $d['duplex']; ?></a></li>
								<li><a href="#" title="" data-ref="property" data-filter="estudio" data-value=""><?= $d['studio']; ?></a></li>
								<li><a href="#" title="" data-ref="property" data-filter="loft" data-value=""><?= $d['loft']; ?></a></li>
								<li><a href="#" title="" data-ref="property" data-filter="casa-o-chalet" data-value=""><?= $d['house_or_chalet']; ?></a></li>
							</ul>
						</li>
					</ul>
					
					<ul class="mod-select rooms" data-ref="rooms">
						<li><a href="#" title=""><?= $d['rooms']; ?><span class="arrow">&nbsp;</span></a></li>
						<li><a href="#" title="" data-ref="rooms" data-filter="" data-value="<?= $d['rooms']; ?>"><?= $d['any']; ?></a></li>
						<li><a href="#" title="" data-ref="rooms" data-filter="habitaciones-1-o-mas" data-value="1 <?= $d['or_more']; ?> <?= $d['rooms']; ?>">1 <?= $d['or_more']; ?></a></li>
						<li><a href="#" title="" data-ref="rooms" data-filter="habitaciones-2-o-mas" data-value="2 <?= $d['or_more']; ?> <?= $d['rooms']; ?>">2 <?= $d['or_more']; ?></a></li>
						<li><a href="#" title="" data-ref="rooms" data-filter="habitaciones-3-o-mas" data-value="3 <?= $d['or_more']; ?> <?= $d['rooms']; ?>">3 <?= $d['or_more']; ?></a></li>
						<li><a href="#" title="" data-ref="rooms" data-filter="habitaciones-4-o-mas" data-value="4 <?= $d['or_more']; ?> <?= $d['rooms']; ?>">4 <?= $d['or_more']; ?></a></li>
					</ul>
					
					<ul class="mod-select-grid price-min" data-ref="price-min">
						<li>
							<a href="#" title=""><?= $d['price']; ?> <?= $d['min']; ?><span class="arrow">&nbsp;</span></a>
							<ul class="clearfix">
								<li><a href="#" title="" data-ref="price-min" data-filter="" data-value="<?= $d['price']; ?> <?= $d['min']; ?>"><?= $d['any']; ?></a></li>
								<li><a href="#" title="" data-ref="price-min" data-filter="precio-min-300" data-value="<?= $d['min']; ?>., 300€">300€</a></li>
								<li><a href="#" title="" data-ref="price-min" data-filter="precio-min-350" data-value="<?= $d['min']; ?>., 350€">350€</a></li>
								<li><a href="#" title="" data-ref="price-min" data-filter="precio-min-400" data-value="<?= $d['min']; ?>., 400€">400€</a></li>
								<li><a href="#" title="" data-ref="price-min" data-filter="precio-min-450" data-value="<?= $d['min']; ?>., 450€">450€</a></li>
								<li><a href="#" title="" data-ref="price-min" data-filter="precio-min-500" data-value="<?= $d['min']; ?>., 500€">500€</a></li>
								<li><a href="#" title="" data-ref="price-min" data-filter="precio-min-550" data-value="<?= $d['min']; ?>., 550€">550€</a></li>
								<li><a href="#" title="" data-ref="price-min" data-filter="precio-min-600" data-value="<?= $d['min']; ?>., 600€">600€</a></li>
								<li><a href="#" title="" data-ref="price-min" data-filter="precio-min-650" data-value="<?= $d['min']; ?>., 650€">650€</a></li>
								<li><a href="#" title="" data-ref="price-min" data-filter="precio-min-700" data-value="<?= $d['min']; ?>., 700€">700€</a></li>
								<li><a href="#" title="" data-ref="price-min" data-filter="precio-min-750" data-value="<?= $d['min']; ?>., 750€">750€</a></li>
							</ul>
						</li>
					</ul>
					
					<ul class="mod-select-grid price-max" data-ref="price-max">
						<li>
							<a href="#" title=""><?= $d['price']; ?> <?= $d['max']; ?><span class="arrow">&nbsp;</span></a>
							<ul class="clearfix">
								<li><a href="#" title="" data-ref="price-max" data-filter="" data-value="<?= $d['price']; ?> <?= $d['max']; ?>"><?= $d['any']; ?></a></li>
								<li><a href="#" title="" data-ref="price-max" data-filter="precio-max-300" data-value="<?= $d['max']; ?>., 300€">300€</a></li>
								<li><a href="#" title="" data-ref="price-max" data-filter="precio-max-350" data-value="<?= $d['max']; ?>., 350€">350€</a></li>
								<li><a href="#" title="" data-ref="price-max" data-filter="precio-max-400" data-value="<?= $d['max']; ?>., 400€">400€</a></li>
								<li><a href="#" title="" data-ref="price-max" data-filter="precio-max-450" data-value="<?= $d['max']; ?>., 450€">450€</a></li>
								<li><a href="#" title="" data-ref="price-max" data-filter="precio-max-500" data-value="<?= $d['max']; ?>., 500€">500€</a></li>
								<li><a href="#" title="" data-ref="price-max" data-filter="precio-max-550" data-value="<?= $d['max']; ?>., 550€">550€</a></li>
								<li><a href="#" title="" data-ref="price-max" data-filter="precio-max-600" data-value="<?= $d['max']; ?>., 600€">600€</a></li>
								<li><a href="#" title="" data-ref="price-max" data-filter="precio-max-650" data-value="<?= $d['max']; ?>., 650€">650€</a></li>
								<li><a href="#" title="" data-ref="price-max" data-filter="precio-max-700" data-value="<?= $d['max']; ?>., 700€">700€</a></li>
								<li><a href="#" title="" data-ref="price-max" data-filter="precio-max-750" data-value="<?= $d['max']; ?>., 750€">750€</a></li>
							</ul>
						</li>
					</ul>
					
					<a class="more-filters" href="#" title=""><span>&nbsp;</span><span>&nbsp;</span></a>
					
					<ul class="list-type">
						<?php $selected = ($data['list_type'] === 'grid') ? ' selected' : ''; ?>
						<li>
							<a class="icon-grid<?= $selected; ?>" href="#" title="">
								<span>&nbsp;</span>
								<span>&nbsp;</span>
								<span>&nbsp;</span>
							</a>
						</li>
						<?php $selected = ($data['list_type'] === 'list') ? ' selected' : ''; ?>
						<li>
							<a class="icon-list<?= $selected; ?>" href="#" title="">
								<span>&nbsp;</span>
								<span>&nbsp;</span>
								<span>&nbsp;</span>
							</a>
						</li>
					</ul>
					
					<ul class="mod-select order" data-ref="order">
						<li><a href="#" title=""><?= $d['relevance']; ?><span class="arrow">&nbsp;</span></a></li>
						<li><a href="#" title="" data-ref="order" data-filter="" data-value=""><?= $d['relevance']; ?></a></li>
						<li><a href="#" title="" data-ref="order" data-filter="orden-recientes" data-value=""><?= $d['most_recent']; ?></a></li>
						<li><a href="#" title="" data-ref="order" data-filter="orden-antiguos" data-value=""><?= $d['oldest_first']; ?></a></li>
						<li><a href="#" title="" data-ref="order" data-filter="orden-menor-precio" data-value=""><?= $d['lowest_price']; ?></a></li>
						<li><a href="#" title="" data-ref="order" data-filter="orden-mayor-<?= $d['price']; ?>" data-value=""><?= $d['highest_price']; ?></a></li>
						<li><a href="#" title="" data-ref="order" data-filter="orden-a-z" data-value="">A - Z</a></li>
						<li><a href="#" title="" data-ref="order" data-filter="orden-z-a" data-value="">Z - A</a></li>
					</ul>
				</div>
				
				<!-- MODULE / BEGIN -->
				<div class="mod-grid <?= $data['list_type']; ?>">
					<div class="item">
						<div class="wrapper">
							<!-- MODULE / BEGIN -->
							<div class="mod-slider-thumbs clearfix">
								<ul class="slider">
									<li class="slide" style="background-image:url('/qhabito/css/images/tmp/image-0001.jpg');">&nbsp;</li>
									<li class="slide" style="background-image:url('/qhabito/css/images/tmp/image-0002.jpg');">&nbsp;</li>
									<li class="slide" style="background-image:url('/qhabito/css/images/tmp/image-0003.jpg');">&nbsp;</li>
									<li class="slide" style="background-image:url('/qhabito/css/images/tmp/image-0004.jpg');">&nbsp;</li>
									<li class="slide" style="background-image:url('/qhabito/css/images/tmp/image-0005.jpg');">&nbsp;</li>
									<li class="slide" style="background-image:url('/qhabito/css/images/tmp/image-0006.jpg');">&nbsp;</li>
									<li class="slide" style="background-image:url('/qhabito/css/images/tmp/image-0007.jpg');">&nbsp;</li>
									<li class="slide" style="background-image:url('/qhabito/css/images/tmp/image-0001.jpg');">&nbsp;</li>
									<li class="slide" style="background-image:url('/qhabito/css/images/tmp/image-0002.jpg');">&nbsp;</li>
									<li class="slide" style="background-image:url('/qhabito/css/images/tmp/image-0003.jpg');">&nbsp;</li>
									<li class="slide" style="background-image:url('/qhabito/css/images/tmp/image-0004.jpg');">&nbsp;</li>
									<li class="slide" style="background-image:url('/qhabito/css/images/tmp/image-0005.jpg');">&nbsp;</li>
									<li class="slide" style="background-image:url('/qhabito/css/images/tmp/image-0006.jpg');">&nbsp;</li>
									<li class="slide" style="background-image:url('/qhabito/css/images/tmp/image-0007.jpg');">&nbsp;</li>
									<li class="slide" style="background-image:url('/qhabito/css/images/tmp/image-0007.jpg');">&nbsp;</li>
								</ul>
								<ul class="thumbs clearfix">
									<li style="background-image:url('/qhabito/css/images/tmp/image-0001.jpg');"><a class="selected" href="#" title="" data-index="0"><span>&nbsp;</span></a></li>
									<li style="background-image:url('/qhabito/css/images/tmp/image-0002.jpg');"><a href="#" title="" data-index="1"><span>&nbsp;</span></a></li>
									<li style="background-image:url('/qhabito/css/images/tmp/image-0003.jpg');"><a href="#" title="" data-index="2"><span>&nbsp;</span></a></li>
									<li style="background-image:url('/qhabito/css/images/tmp/image-0004.jpg');"><a href="#" title="" data-index="3"><span>&nbsp;</span></a></li>
									<li style="background-image:url('/qhabito/css/images/tmp/image-0005.jpg');"><a href="#" title="" data-index="4"><span>&nbsp;</span></a></li>
									<li style="background-image:url('/qhabito/css/images/tmp/image-0006.jpg');"><a href="#" title="" data-index="5"><span>&nbsp;</span></a></li>
									<li style="background-image:url('/qhabito/css/images/tmp/image-0007.jpg');"><a href="#" title="" data-index="6"><span>&nbsp;</span></a></li>
									<li style="background-image:url('/qhabito/css/images/tmp/image-0001.jpg');"><a href="#" title="" data-index="7"><span>&nbsp;</span></a></li>
									<li style="background-image:url('/qhabito/css/images/tmp/image-0002.jpg');"><a href="#" title="" data-index="8"><span>&nbsp;</span></a></li>
									<li style="background-image:url('/qhabito/css/images/tmp/image-0003.jpg');"><a href="#" title="" data-index="9"><span>&nbsp;</span></a></li>
									<li style="background-image:url('/qhabito/css/images/tmp/image-0004.jpg');"><a href="#" title="" data-index="10"><span>&nbsp;</span></a></li>
									<li style="background-image:url('/qhabito/css/images/tmp/image-0005.jpg');"><a href="#" title="" data-index="11"><span>&nbsp;</span></a></li>
									<li style="background-image:url('/qhabito/css/images/tmp/image-0006.jpg');"><a href="#" title="" data-index="12"><span>&nbsp;</span></a></li>
									<li style="background-image:url('/qhabito/css/images/tmp/image-0007.jpg');"><a href="#" title="" data-index="13"><span>&nbsp;</span></a></li>
									<li style="background-image:url('/qhabito/css/images/tmp/image-0007.jpg');"><a href="#" title="" data-index="14"><span>&nbsp;</span></a></li>
									<li><a class="view" href="/qhabito/alquiler/detalle" title=""><span>&nbsp;</span><span>&nbsp;</span></a></li>
								</ul>
							</div>
							<!-- MODULE / END -->
							<div class="details">
								<a class="add-to-favorite" href="/qhabito/favoritos" title=""><span class="icon-heart">&nbsp;</span></a>
								<h1 class="title"><a href="/qhabito/alquiler/detalle" title="">Piso en calle Ágave, Santangelo, Benalmádena <span>&mdash; 12/07/18 12:30h</span></a></h1>
								<h2 class="subtitle"><span>600€/<?= $d['month']; ?></span>85m | 2 <?= $d['room']; ?>s | 1 <?= $d['bathroom']; ?>s</h2>
								<p class="description">Precioso piso de tres dormitorios en Santangelo Norte sin amueblar para larga temporada, con un porche y zona verde privativa espectacular de 70 metros cuadrados Precioso piso de tres dormitorios en Santangelo Norte sin amueblar para larga temporada, con un porche y zona verde privativa espectacular de 70 metros cuadrados Precioso piso de tres dormitorios en Santangelo Norte sin amueblar para larga temporada, con un porche y zona verde privativa espectacular...</p>
							</div>
							<div class="contact-view clearfix">
								<p class="contact">
									<a href="" title="">952 146 413<span class="icon-phone">&nbsp;</span></a>
									<a href="" title=""><?= $d['contact']; ?><span class="icon-mail">&nbsp;</span></a>
								</p>
								<a class="view" href="/qhabito/alquiler/detalle" title=""><span><?= $d['view_in_detail']; ?></span><span><?= $d['view_in_detail']; ?></span></a>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="wrapper">
							<!-- MODULE / BEGIN -->
							<div class="mod-slider-thumbs clearfix">
								<ul class="slider">
									<li class="slide" style="background-image:url('/qhabito/css/images/tmp/image-0001.jpg');">&nbsp;</li>
									<li class="slide" style="background-image:url('/qhabito/css/images/tmp/image-0002.jpg');">&nbsp;</li>
									<li class="slide" style="background-image:url('/qhabito/css/images/tmp/image-0003.jpg');">&nbsp;</li>
									<li class="slide" style="background-image:url('/qhabito/css/images/tmp/image-0004.jpg');">&nbsp;</li>
									<li class="slide" style="background-image:url('/qhabito/css/images/tmp/image-0005.jpg');">&nbsp;</li>
									<li class="slide" style="background-image:url('/qhabito/css/images/tmp/image-0006.jpg');">&nbsp;</li>
									<li class="slide" style="background-image:url('/qhabito/css/images/tmp/image-0007.jpg');">&nbsp;</li>
								</ul>
								<ul class="thumbs">
									<li style="background-image:url('/qhabito/css/images/tmp/image-0001.jpg');"><a class="selected" href="#" title="" data-index="0"><span>&nbsp;</span></a></li>
									<li style="background-image:url('/qhabito/css/images/tmp/image-0002.jpg');"><a href="#" title="" data-index="1"><span>&nbsp;</span></a></li>
									<li style="background-image:url('/qhabito/css/images/tmp/image-0003.jpg');"><a href="#" title="" data-index="2"><span>&nbsp;</span></a></li>
									<li style="background-image:url('/qhabito/css/images/tmp/image-0004.jpg');"><a href="#" title="" data-index="3"><span>&nbsp;</span></a></li>
									<li style="background-image:url('/qhabito/css/images/tmp/image-0005.jpg');"><a href="#" title="" data-index="4"><span>&nbsp;</span></a></li>
									<li style="background-image:url('/qhabito/css/images/tmp/image-0006.jpg');"><a href="#" title="" data-index="5"><span>&nbsp;</span></a></li>
									<li style="background-image:url('/qhabito/css/images/tmp/image-0007.jpg');"><a href="#" title="" data-index="6"><span>&nbsp;</span></a></li>
									<li><a class="view" href="/qhabito/alquiler/detalle" title=""><span>&nbsp;</span><span>&nbsp;</span></a></li>
								</ul>
							</div>
							<!-- MODULE / END -->
							<div class="details">
								<a class="add-to-favorite" href="/qhabito/favoritos" title=""><span class="icon-heart-empty">&nbsp;</span></a>
								<h1 class="title"><a href="/qhabito/alquiler/detalle" title="">Piso en calle tamarindos, 7, Solymar - Puerto Marina, Benalmádena <span>&mdash; 12/07/18 12:30h</span></a></h1>
								<h2 class="subtitle"><span>600€/<?= $d['month']; ?></span>85m | 2 <?= $d['room']; ?>s | 1 <?= $d['bathroom']; ?>s</h2>
								<p class="description">Precioso piso de tres dormitorios en Santangelo Norte sin amueblar para larga temporada, con un porche y zona verde privativa espectacular de 70 metros cuadrados ...</p>
							</div>
							<div class="contact-view clearfix">
								<p class="contact">
									<a href="" title="">952 146 413<span class="icon-phone">&nbsp;</span></a>
									<a href="" title=""><?= $d['contact']; ?><span class="icon-mail">&nbsp;</span></a>
								</p>
								<a class="view" href="/qhabito/alquiler/detalle" title=""><span><?= $d['view_in_detail']; ?></span><span><?= $d['view_in_detail']; ?></span></a>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="wrapper">
							<!-- MODULE / BEGIN -->
							<div class="mod-slider-thumbs clearfix">
								<ul class="slider">
									<li class="slide" style="background-image:url('/qhabito/css/images/tmp/image-0001.jpg');">&nbsp;</li>
									<li class="slide" style="background-image:url('/qhabito/css/images/tmp/image-0002.jpg');">&nbsp;</li>
									<li class="slide" style="background-image:url('/qhabito/css/images/tmp/image-0003.jpg');">&nbsp;</li>
									<li class="slide" style="background-image:url('/qhabito/css/images/tmp/image-0004.jpg');">&nbsp;</li>
									<li class="slide" style="background-image:url('/qhabito/css/images/tmp/image-0005.jpg');">&nbsp;</li>
									<li class="slide" style="background-image:url('/qhabito/css/images/tmp/image-0006.jpg');">&nbsp;</li>
									<li class="slide" style="background-image:url('/qhabito/css/images/tmp/image-0007.jpg');">&nbsp;</li>
								</ul>
								<ul class="thumbs">
									<li style="background-image:url('/qhabito/css/images/tmp/image-0001.jpg');"><a class="selected" href="#" title="" data-index="0"><span>&nbsp;</span></a></li>
									<li style="background-image:url('/qhabito/css/images/tmp/image-0002.jpg');"><a href="#" title="" data-index="1"><span>&nbsp;</span></a></li>
									<li style="background-image:url('/qhabito/css/images/tmp/image-0003.jpg');"><a href="#" title="" data-index="2"><span>&nbsp;</span></a></li>
									<li style="background-image:url('/qhabito/css/images/tmp/image-0004.jpg');"><a href="#" title="" data-index="3"><span>&nbsp;</span></a></li>
									<li style="background-image:url('/qhabito/css/images/tmp/image-0005.jpg');"><a href="#" title="" data-index="4"><span>&nbsp;</span></a></li>
									<li style="background-image:url('/qhabito/css/images/tmp/image-0006.jpg');"><a href="#" title="" data-index="5"><span>&nbsp;</span></a></li>
									<li style="background-image:url('/qhabito/css/images/tmp/image-0007.jpg');"><a href="#" title="" data-index="6"><span>&nbsp;</span></a></li>
									<li><a class="view" href="/qhabito/alquiler/detalle" title=""><span>&nbsp;</span><span>&nbsp;</span></a></li>
								</ul>
							</div>
							<!-- MODULE / END -->
							<div class="details">
								<a class="add-to-favorite" href="/qhabito/favoritos" title=""><span class="icon-heart-empty">&nbsp;</span></a>
								<h1 class="title"><a href="/qhabito/alquiler/detalle" title="">Piso en avenida antonio machado, 100, Benalmádena Costa - Parque de la Paloma, Benalmádena <span>&mdash; 12/07/18 12:30h</span></a></h1>
								<h2 class="subtitle"><span>600€/<?= $d['month']; ?></span>85m | 2 <?= $d['room']; ?>s | 1 <?= $d['bathroom']; ?>s</h2>
								<p class="description">Precioso piso de tres dormitorios en Santangelo Norte sin amueblar para larga temporada, con un porche y zona verde privativa espectacular de 70 metros cuadrados ...</p>
							</div>
							<div class="contact-view clearfix">
								<p class="contact">
									<a href="" title="">952 146 413<span class="icon-phone">&nbsp;</span></a>
									<a href="" title=""><?= $d['contact']; ?><span class="icon-mail">&nbsp;</span></a>
								</p>
								<a class="view" href="/qhabito/alquiler/detalle" title=""><span><?= $d['view_in_detail']; ?></span><span><?= $d['view_in_detail']; ?></span></a>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="wrapper">
							<!-- MODULE / BEGIN -->
							<div class="mod-slider-thumbs clearfix">
								<ul class="slider">
									<li class="slide" style="background-image:url('/qhabito/css/images/tmp/image-0001.jpg');">&nbsp;</li>
									<li class="slide" style="background-image:url('/qhabito/css/images/tmp/image-0002.jpg');">&nbsp;</li>
									<li class="slide" style="background-image:url('/qhabito/css/images/tmp/image-0003.jpg');">&nbsp;</li>
									<li class="slide" style="background-image:url('/qhabito/css/images/tmp/image-0004.jpg');">&nbsp;</li>
									<li class="slide" style="background-image:url('/qhabito/css/images/tmp/image-0005.jpg');">&nbsp;</li>
									<li class="slide" style="background-image:url('/qhabito/css/images/tmp/image-0006.jpg');">&nbsp;</li>
									<li class="slide" style="background-image:url('/qhabito/css/images/tmp/image-0007.jpg');">&nbsp;</li>
								</ul>
								<ul class="thumbs">
									<li style="background-image:url('/qhabito/css/images/tmp/image-0001.jpg');"><a class="selected" href="#" title="" data-index="0"><span>&nbsp;</span></a></li>
									<li style="background-image:url('/qhabito/css/images/tmp/image-0002.jpg');"><a href="#" title="" data-index="1"><span>&nbsp;</span></a></li>
									<li style="background-image:url('/qhabito/css/images/tmp/image-0003.jpg');"><a href="#" title="" data-index="2"><span>&nbsp;</span></a></li>
									<li style="background-image:url('/qhabito/css/images/tmp/image-0004.jpg');"><a href="#" title="" data-index="3"><span>&nbsp;</span></a></li>
									<li style="background-image:url('/qhabito/css/images/tmp/image-0005.jpg');"><a href="#" title="" data-index="4"><span>&nbsp;</span></a></li>
									<li style="background-image:url('/qhabito/css/images/tmp/image-0006.jpg');"><a href="#" title="" data-index="5"><span>&nbsp;</span></a></li>
									<li style="background-image:url('/qhabito/css/images/tmp/image-0007.jpg');"><a href="#" title="" data-index="6"><span>&nbsp;</span></a></li>
									<li><a class="view" href="/qhabito/alquiler/detalle" title=""><span>&nbsp;</span><span>&nbsp;</span></a></li>
								</ul>
							</div>
							<!-- MODULE / END -->
							<div class="details">
								<a class="add-to-favorite" href="/qhabito/favoritos" title=""><span class="icon-heart-empty">&nbsp;</span></a>
								<h1 class="title"><a href="/qhabito/alquiler/detalle" title="">Piso en calle Ágave, Santangelo, Benalmádena <span>&mdash; 12/07/18 12:30h</span></a></h1>
								<h2 class="subtitle"><span>600€/<?= $d['month']; ?></span>85m | 2 <?= $d['room']; ?>s | 1 <?= $d['bathroom']; ?>s</h2>
								<p class="description">Precioso piso de tres dormitorios en Santangelo Norte sin amueblar para larga temporada, con un porche y zona verde privativa espectacular de 70 metros cuadrados ...</p>
							</div>
							<div class="contact-view clearfix">
								<p class="contact">
									<a href="" title="">952 146 413<span class="icon-phone">&nbsp;</span></a>
									<a href="" title=""><?= $d['contact']; ?><span class="icon-mail">&nbsp;</span></a>
								</p>
								<a class="view" href="/qhabito/alquiler/detalle" title=""><span><?= $d['view_in_detail']; ?></span><span><?= $d['view_in_detail']; ?></span></a>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="wrapper">
							<!-- MODULE / BEGIN -->
							<div class="mod-slider-thumbs clearfix">
								<ul class="slider">
									<li class="slide" style="background-image:url('/qhabito/css/images/tmp/image-0001.jpg');">&nbsp;</li>
									<li class="slide" style="background-image:url('/qhabito/css/images/tmp/image-0002.jpg');">&nbsp;</li>
									<li class="slide" style="background-image:url('/qhabito/css/images/tmp/image-0003.jpg');">&nbsp;</li>
									<li class="slide" style="background-image:url('/qhabito/css/images/tmp/image-0004.jpg');">&nbsp;</li>
									<li class="slide" style="background-image:url('/qhabito/css/images/tmp/image-0005.jpg');">&nbsp;</li>
									<li class="slide" style="background-image:url('/qhabito/css/images/tmp/image-0006.jpg');">&nbsp;</li>
									<li class="slide" style="background-image:url('/qhabito/css/images/tmp/image-0007.jpg');">&nbsp;</li>
								</ul>
								<ul class="thumbs">
									<li style="background-image:url('/qhabito/css/images/tmp/image-0001.jpg');"><a class="selected" href="#" title="" data-index="0"><span>&nbsp;</span></a></li>
									<li style="background-image:url('/qhabito/css/images/tmp/image-0002.jpg');"><a href="#" title="" data-index="1"><span>&nbsp;</span></a></li>
									<li style="background-image:url('/qhabito/css/images/tmp/image-0003.jpg');"><a href="#" title="" data-index="2"><span>&nbsp;</span></a></li>
									<li style="background-image:url('/qhabito/css/images/tmp/image-0004.jpg');"><a href="#" title="" data-index="3"><span>&nbsp;</span></a></li>
									<li style="background-image:url('/qhabito/css/images/tmp/image-0005.jpg');"><a href="#" title="" data-index="4"><span>&nbsp;</span></a></li>
									<li style="background-image:url('/qhabito/css/images/tmp/image-0006.jpg');"><a href="#" title="" data-index="5"><span>&nbsp;</span></a></li>
									<li style="background-image:url('/qhabito/css/images/tmp/image-0007.jpg');"><a href="#" title="" data-index="6"><span>&nbsp;</span></a></li>
									<li><a class="view" href="/qhabito/alquiler/detalle" title=""><span>&nbsp;</span><span>&nbsp;</span></a></li>
								</ul>
							</div>
							<!-- MODULE / END -->
							<div class="details">
								<a class="add-to-favorite" href="/qhabito/favoritos" title=""><span class="icon-heart-empty">&nbsp;</span></a>
								<h1 class="title"><a href="/qhabito/alquiler/detalle" title="">Piso en calle Ágave, Santangelo, Benalmádena <span>&mdash; 12/07/18 12:30h</span></a></h1>
								<h2 class="subtitle"><span>600€/<?= $d['month']; ?></span>85m | 2 <?= $d['room']; ?>s | 1 <?= $d['bathroom']; ?>s</h2>
								<p class="description">Precioso piso de tres dormitorios en Santangelo Norte sin amueblar para larga temporada, con un porche y zona verde privativa espectacular de 70 metros cuadrados ...</p>
							</div>
							<div class="contact-view clearfix">
								<p class="contact">
									<a href="" title="">952 146 413<span class="icon-phone">&nbsp;</span></a>
									<a href="" title=""><?= $d['contact']; ?><span class="icon-mail">&nbsp;</span></a>
								</p>
								<a class="view" href="/qhabito/alquiler/detalle" title=""><span><?= $d['view_in_detail']; ?></span><span><?= $d['view_in_detail']; ?></span></a>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="wrapper">
							<!-- MODULE / BEGIN -->
							<div class="mod-slider-thumbs clearfix">
								<ul class="slider">
									<li class="slide" style="background-image:url('/qhabito/css/images/tmp/image-0001.jpg');">&nbsp;</li>
									<li class="slide" style="background-image:url('/qhabito/css/images/tmp/image-0002.jpg');">&nbsp;</li>
									<li class="slide" style="background-image:url('/qhabito/css/images/tmp/image-0003.jpg');">&nbsp;</li>
									<li class="slide" style="background-image:url('/qhabito/css/images/tmp/image-0004.jpg');">&nbsp;</li>
									<li class="slide" style="background-image:url('/qhabito/css/images/tmp/image-0005.jpg');">&nbsp;</li>
									<li class="slide" style="background-image:url('/qhabito/css/images/tmp/image-0006.jpg');">&nbsp;</li>
									<li class="slide" style="background-image:url('/qhabito/css/images/tmp/image-0007.jpg');">&nbsp;</li>
								</ul>
								<ul class="thumbs">
									<li style="background-image:url('/qhabito/css/images/tmp/image-0001.jpg');"><a class="selected" href="#" title="" data-index="0"><span>&nbsp;</span></a></li>
									<li style="background-image:url('/qhabito/css/images/tmp/image-0002.jpg');"><a href="#" title="" data-index="1"><span>&nbsp;</span></a></li>
									<li style="background-image:url('/qhabito/css/images/tmp/image-0003.jpg');"><a href="#" title="" data-index="2"><span>&nbsp;</span></a></li>
									<li style="background-image:url('/qhabito/css/images/tmp/image-0004.jpg');"><a href="#" title="" data-index="3"><span>&nbsp;</span></a></li>
									<li style="background-image:url('/qhabito/css/images/tmp/image-0005.jpg');"><a href="#" title="" data-index="4"><span>&nbsp;</span></a></li>
									<li style="background-image:url('/qhabito/css/images/tmp/image-0006.jpg');"><a href="#" title="" data-index="5"><span>&nbsp;</span></a></li>
									<li style="background-image:url('/qhabito/css/images/tmp/image-0007.jpg');"><a href="#" title="" data-index="6"><span>&nbsp;</span></a></li>
									<li><a class="view" href="/qhabito/alquiler/detalle" title=""><span>&nbsp;</span><span>&nbsp;</span></a></li>
								</ul>
							</div>
							<!-- MODULE / END -->
							<div class="details">
								<a class="add-to-favorite" href="/qhabito/favoritos" title=""><span class="icon-heart-empty">&nbsp;</span></a>
								<h1 class="title"><a href="/qhabito/alquiler/detalle" title="">Piso en calle Ágave, Santangelo, Benalmádena <span>&mdash; 12/07/18 12:30h</span></a></h1>
								<h2 class="subtitle"><span>600€/<?= $d['month']; ?></span>85m | 2 <?= $d['room']; ?>s | 1 <?= $d['bathroom']; ?>s</h2>
								<p class="description">Precioso piso de tres dormitorios en Santangelo Norte sin amueblar para larga temporada, con un porche y zona verde privativa espectacular de 70 metros cuadrados ...</p>
							</div>
							<div class="contact-view clearfix">
								<p class="contact">
									<a href="" title="">952 146 413<span class="icon-phone">&nbsp;</span></a>
									<a href="" title=""><?= $d['contact']; ?><span class="icon-mail">&nbsp;</span></a>
								</p>
								<a class="view" href="/qhabito/alquiler/detalle" title=""><span><?= $d['view_in_detail']; ?></span><span><?= $d['view_in_detail']; ?></span></a>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="wrapper">
							<!-- MODULE / BEGIN -->
							<div class="mod-slider-thumbs clearfix">
								<ul class="slider">
									<li class="slide" style="background-image:url('/qhabito/css/images/tmp/image-0001.jpg');">&nbsp;</li>
									<li class="slide" style="background-image:url('/qhabito/css/images/tmp/image-0002.jpg');">&nbsp;</li>
									<li class="slide" style="background-image:url('/qhabito/css/images/tmp/image-0003.jpg');">&nbsp;</li>
									<li class="slide" style="background-image:url('/qhabito/css/images/tmp/image-0004.jpg');">&nbsp;</li>
									<li class="slide" style="background-image:url('/qhabito/css/images/tmp/image-0005.jpg');">&nbsp;</li>
									<li class="slide" style="background-image:url('/qhabito/css/images/tmp/image-0006.jpg');">&nbsp;</li>
									<li class="slide" style="background-image:url('/qhabito/css/images/tmp/image-0007.jpg');">&nbsp;</li>
								</ul>
								<ul class="thumbs">
									<li style="background-image:url('/qhabito/css/images/tmp/image-0001.jpg');"><a class="selected" href="#" title="" data-index="0"><span>&nbsp;</span></a></li>
									<li style="background-image:url('/qhabito/css/images/tmp/image-0002.jpg');"><a href="#" title="" data-index="1"><span>&nbsp;</span></a></li>
									<li style="background-image:url('/qhabito/css/images/tmp/image-0003.jpg');"><a href="#" title="" data-index="2"><span>&nbsp;</span></a></li>
									<li style="background-image:url('/qhabito/css/images/tmp/image-0004.jpg');"><a href="#" title="" data-index="3"><span>&nbsp;</span></a></li>
									<li style="background-image:url('/qhabito/css/images/tmp/image-0005.jpg');"><a href="#" title="" data-index="4"><span>&nbsp;</span></a></li>
									<li style="background-image:url('/qhabito/css/images/tmp/image-0006.jpg');"><a href="#" title="" data-index="5"><span>&nbsp;</span></a></li>
									<li style="background-image:url('/qhabito/css/images/tmp/image-0007.jpg');"><a href="#" title="" data-index="6"><span>&nbsp;</span></a></li>
									<li><a class="view" href="/qhabito/alquiler/detalle" title=""><span>&nbsp;</span><span>&nbsp;</span></a></li>
								</ul>
							</div>
							<!-- MODULE / END -->
							<div class="details">
								<a class="add-to-favorite" href="/qhabito/favoritos" title=""><span class="icon-heart-empty">&nbsp;</span></a>
								<h1 class="title"><a href="/qhabito/alquiler/detalle" title="">Piso en calle Ágave, Santangelo, Benalmádena <span>&mdash; 12/07/18 12:30h</span></a></h1>
								<h2 class="subtitle"><span>600€/<?= $d['month']; ?></span>85m | 2 <?= $d['room']; ?>s | 1 <?= $d['bathroom']; ?>s</h2>
								<p class="description">Precioso piso de tres dormitorios en Santangelo Norte sin amueblar para larga temporada, con un porche y zona verde privativa espectacular de 70 metros cuadrados ...</p>
							</div>
							<div class="contact-view clearfix">
								<p class="contact">
									<a href="" title="">952 146 413<span class="icon-phone">&nbsp;</span></a>
									<a href="" title=""><?= $d['contact']; ?><span class="icon-mail">&nbsp;</span></a>
								</p>
								<a class="view" href="/qhabito/alquiler/detalle" title=""><span><?= $d['view_in_detail']; ?></span><span><?= $d['view_in_detail']; ?></span></a>
							</div>
						</div>
					</div>
				</div>
				<!-- MODULE / END -->
				
			</div>
		</div>
		<!-- CONTENT / END -->
		<!-- FOOTER / BEGIN -->
		<div class="footer clearfix">
			<div class="wrap">
				<ul class="primary clearfix">
					<li><a href="#" title=""><span><?= $d['home']; ?></span><span><?= $d['home']; ?></span></a></li>
					<li><a href="#" title=""><span><?= $d['rent']; ?></span><span><?= $d['rent']; ?></span></a></li>
					<li><a href="#" title=""><span><?= $d['vacational']; ?></span><span><?= $d['vacational']; ?></span></a></li>
					<li><a href="#" title=""><span><?= $d['buy']; ?></span><span><?= $d['buy']; ?></span></a></li>
				</ul>
				<ul class="secondary clearfix">
					<li><h1><?= $d['essentials']; ?></h1>
						<ul>
							<li><a href="#" title=""><?= $d['users_area']; ?></a></li>
							<li><a href="#" title=""><?= $d['faqs']; ?></a></li>
							<li><a href="#" title=""><?= $d['sitemap']; ?></a></li>
							<li><a href="#" title=""><?= $d['contact']; ?></a></li>
						</ul>
					</li>
					<li><h1>QHabito</h1>
						<ul>
							<li><a href="#" title=""><?= $d['about_us']; ?></a></li>
							<li><a href="#" title=""><?= $d['advertising']; ?></a></li>
							<li><a href="#" title=""><?= $d['general_conditions']; ?></a></li>
							<li><a href="#" title=""><?= $d['privacy_policy']; ?></a></li>
						</ul>
					</li>
				</ul>
				<div class="mod-simple-form clearfix">
					<h1><?= $d['newsletter']; ?></h1>
					<form action="/newsletter" method="get">
						<fieldset>
							<div><input class="text" type="text" name="q" value="" tabindex="1" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" placeholder="<?= $d['email']; ?>" /></div>
							<div><a class="send" href="#" title=""><span><?= $d['send']; ?></span><span><?= $d['send']; ?></span></a></div>
						</fieldset>
					</form>
				</div>
				<div class="bottom-text clearfix"><p>&copy; 2018 QHabito LTD. <?= $d['all_rights_reserved']; ?>.</p></div>
			</div>
		</div>
		<!-- FOOTER / END -->
	</div>
	<!-- MAIN / END -->
	<!-- COOKIES / BEGIN -->
	<div class="cookies">
		<p>
			<?= $d['cookies_msg']; ?>. <a href="#" title=""><span><?= $d['more_info']; ?> &gt;</span></a>
		</p>
		<a class="button" href="#" title=""><span><?= $d['close']; ?></span><span><?= $d['close']; ?></span></a>
	</div>
	<!-- COOKIES / END -->
</body>
</html>