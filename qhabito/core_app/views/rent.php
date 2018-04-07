<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$dictionary = array(
	'es' => array(
		'test' => 'test'
	),
	'en' => array(
		'test' => 'test'
	)
);
?>
<!DOCTYPE HTML>
	<html lang="<?php echo $language; ?>">
	<head>
		<title>QHabito</title>
		<meta http-equiv="pragma" content="no-cache" />
		<meta http-equiv="cache-Control" content="no-cache, no-store, must-revalidate, max-age=0" />
		<meta http-equiv="expires" content="Tue, 01 Jan 1980 1:00:00 GMT" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="csrf" content="<?php echo $csrf_exp; ?>" />
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
<body class="<?php echo $data['device']; ?>">
	<!-- MAIN / BEGIN -->
	<div class="main rent main-grid">
		<!-- HEADER / BEGIN -->
		<div class="header clearfix">
			<div class="top-bar">
				<ul class="languages">
					<li><a class="selected" href="#" title=""><span>ESP</span><span>ESP</span></a></li>
					<li><a href="#" title=""><span>ENG</span><span>ENG</span></a></li>
				</ul>
			</div>
			<div class="content clearfix">
				<a class="logo-link" href="<?php echo base_url(); ?>" title="">&nbsp;</a>
				<div class="mod-simple-form search-form">
					<form action="<?php echo base_url(); ?>alquiler" method="get">
						<fieldset>
							<div><input class="search text" type="text" name="q" value="" tabindex="1" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" placeholder="Provincia, ciudad..." />
							<div class="results"></div></div>
							<div><a class="send" href="#" title=""><span>Buscar</span><span>Buscar</span><i class="icon-search">&nbsp;</i></a></div>
						</fieldset>
					</form>
				</div>
			</div>
			<?php if(sizeof($data['location']) > 0): ?>
			<ul class="breadcrumb clearfix">
				<li><a href="<?php echo base_url(); ?>" title=""><span class="text">Inicio</span><span class="arrow">&nbsp;</span></a></li>
				<?php foreach($data['location'] as $location): ?>
				<li><a href="<?php echo base_url().$location['slug']; ?>" title=""><span class="text"><?php echo $location['name']; ?></span><span class="arrow">&nbsp;</span></a></li>
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
						<h1>Filtros aplicados:</h1>
					</div>
				</div>
				
				<div class="filters more clearfix">
					<div class="wrapper clearfix">
					
						<ul class="mod-select-grid property" data-ref="property">
							<li>
								<a href="#" title="">Tipo de Vivienda<span class="arrow">&nbsp;</span></a>
								<ul class="clearfix">
									<li><a href="#" title="" data-ref="property" data-filter="" data-value="Tipo de Vivienda">Indiferente</a></li>
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
								<a href="#" title="">Precio Mín<span class="arrow">&nbsp;</span></a>
								<ul class="clearfix">
									<li><a href="#" title="" data-ref="price-min" data-filter="" data-value="Precio Mín">Indiferente</a></li>
									<li><a href="#" title="" data-ref="price-min" data-filter="precio-min-300" data-value="Mín., 300€">300€</a></li>
									<li><a href="#" title="" data-ref="price-min" data-filter="precio-min-350" data-value="Mín., 350€">350€</a></li>
									<li><a href="#" title="" data-ref="price-min" data-filter="precio-min-400" data-value="Mín., 400€">400€</a></li>
									<li><a href="#" title="" data-ref="price-min" data-filter="precio-min-450" data-value="Mín., 450€">450€</a></li>
									<li><a href="#" title="" data-ref="price-min" data-filter="precio-min-500" data-value="Mín., 500€">500€</a></li>
									<li><a href="#" title="" data-ref="price-min" data-filter="precio-min-550" data-value="Mín., 550€">550€</a></li>
									<li><a href="#" title="" data-ref="price-min" data-filter="precio-min-600" data-value="Mín., 600€">600€</a></li>
									<li><a href="#" title="" data-ref="price-min" data-filter="precio-min-650" data-value="Mín., 650€">650€</a></li>
									<li><a href="#" title="" data-ref="price-min" data-filter="precio-min-700" data-value="Mín., 700€">700€</a></li>
									<li><a href="#" title="" data-ref="price-min" data-filter="precio-min-750" data-value="Mín., 750€">750€</a></li>
								</ul>
							</li>
						</ul>
					
						<ul class="mod-select-grid price-max" data-ref="price-max">
							<li>
								<a href="#" title="">Precio Máx<span class="arrow">&nbsp;</span></a>
								<ul class="clearfix">
									<li><a href="#" title="" data-ref="price-max" data-filter="" data-value="Precio Máx">Indiferente</a></li>
									<li><a href="#" title="" data-ref="price-max" data-filter="precio-max-300" data-value="Máx., 300€">300€</a></li>
									<li><a href="#" title="" data-ref="price-max" data-filter="precio-max-350" data-value="Máx., 350€">350€</a></li>
									<li><a href="#" title="" data-ref="price-max" data-filter="precio-max-400" data-value="Máx., 400€">400€</a></li>
									<li><a href="#" title="" data-ref="price-max" data-filter="precio-max-450" data-value="Máx., 450€">450€</a></li>
									<li><a href="#" title="" data-ref="price-max" data-filter="precio-max-500" data-value="Máx., 500€">500€</a></li>
									<li><a href="#" title="" data-ref="price-max" data-filter="precio-max-550" data-value="Máx., 550€">550€</a></li>
									<li><a href="#" title="" data-ref="price-max" data-filter="precio-max-600" data-value="Máx., 600€">600€</a></li>
									<li><a href="#" title="" data-ref="price-max" data-filter="precio-max-650" data-value="Máx., 650€">650€</a></li>
									<li><a href="#" title="" data-ref="price-max" data-filter="precio-max-700" data-value="Máx., 700€">700€</a></li>
									<li><a href="#" title="" data-ref="price-max" data-filter="precio-max-750" data-value="Máx., 750€">750€</a></li>
								</ul>
							</li>
						</ul>
						
						<ul class="mod-select-grid size-min" data-ref="size-min">
							<li>
								<a href="#" title="">Tamaño Mín<span class="arrow">&nbsp;</span></a>
								<ul class="clearfix">
									<li><a href="#" title="" data-ref="size-min" data-filter="" data-value="Tamaño Mín">Indiferente</a></li>
									<li><a href="#" title="" data-ref="size-min" data-filter="tamano-min-50" data-value="Mín., 50m²">50m²</a></li>
									<li><a href="#" title="" data-ref="size-min" data-filter="tamano-min-60" data-value="Mín., 60m²">60m²</a></li>
									<li><a href="#" title="" data-ref="size-min" data-filter="tamano-min-70" data-value="Mín., 70m²">70m²</a></li>
									<li><a href="#" title="" data-ref="size-min" data-filter="tamano-min-80" data-value="Mín., 80m²">80m²</a></li>
									<li><a href="#" title="" data-ref="size-min" data-filter="tamano-min-100" data-value="Mín., 100m²">100m²</a></li>
									<li><a href="#" title="" data-ref="size-min" data-filter="tamano-min-120" data-value="Mín., 120m²">120m²</a></li>
									<li><a href="#" title="" data-ref="size-min" data-filter="tamano-min-140" data-value="Mín., 140m²">140m²</a></li>
									<li><a href="#" title="" data-ref="size-min" data-filter="tamano-min-160" data-value="Mín., 160m²">160m²</a></li>
									<li><a href="#" title="" data-ref="size-min" data-filter="tamano-min-180" data-value="Mín., 180m²">180m²</a></li>
									<li><a href="#" title="" data-ref="size-min" data-filter="tamano-min-200" data-value="Mín., 200m²">200m²</a></li>
								</ul>
							</li>
						</ul>
						
						<ul class="mod-select-grid size-max" data-ref="size-max">
							<li>
								<a href="#" title="">Tamaño Máx<span class="arrow">&nbsp;</span></a>
								<ul class="clearfix">
									<li><a href="#" title="" data-ref="size-max" data-filter="" data-value="Tamaño Máx">Indiferente</a></li>
									<li><a href="#" title="" data-ref="size-max" data-filter="tamano-max-50" data-value="Máx., 50m²">50m²</a></li>
									<li><a href="#" title="" data-ref="size-max" data-filter="tamano-max-60" data-value="Máx., 60m²">60m²</a></li>
									<li><a href="#" title="" data-ref="size-max" data-filter="tamano-max-70" data-value="Máx., 70m²">70m²</a></li>
									<li><a href="#" title="" data-ref="size-max" data-filter="tamano-max-80" data-value="Máx., 80m²">80m²</a></li>
									<li><a href="#" title="" data-ref="size-max" data-filter="tamano-max-100" data-value="Máx., 100m²">100m²</a></li>
									<li><a href="#" title="" data-ref="size-max" data-filter="tamano-max-120" data-value="Máx., 120m²">120m²</a></li>
									<li><a href="#" title="" data-ref="size-max" data-filter="tamano-max-140" data-value="Máx., 140m²">140m²</a></li>
									<li><a href="#" title="" data-ref="size-max" data-filter="tamano-max-160" data-value="Máx., 160m²">160m²</a></li>
									<li><a href="#" title="" data-ref="size-max" data-filter="tamano-max-180" data-value="Máx., 180m²">180m²</a></li>
									<li><a href="#" title="" data-ref="size-max" data-filter="tamano-max-200" data-value="Máx., 200m²">200m²</a></li>
								</ul>
							</li>
						</ul>
						
						<ul class="mod-select rooms" data-ref="rooms">
							<li><a href="#" title="">Habitaciones<span class="arrow">&nbsp;</span></a></li>
							<li><a href="#" title="" data-ref="rooms" data-filter="" data-value="Habitaciones">Indiferente</a></li>
							<li><a href="#" title="" data-ref="rooms" data-filter="habitaciones-1-o-mas" data-value="1 ó más habitaciones">1 ó más</a></li>
							<li><a href="#" title="" data-ref="rooms" data-filter="habitaciones-2-o-mas" data-value="2 ó más habitaciones">2 ó más</a></li>
							<li><a href="#" title="" data-ref="rooms" data-filter="habitaciones-3-o-mas" data-value="3 ó más habitaciones">3 ó más</a></li>
							<li><a href="#" title="" data-ref="rooms" data-filter="habitaciones-4-o-mas" data-value="4 ó más habitaciones">4 ó más</a></li>
						</ul>
						
						<ul class="mod-select bathrooms" data-ref="bathrooms">
							<li><a href="#" title="">Baños<span class="arrow">&nbsp;</span></a></li>
							<li><a href="#" title="" data-ref="bathrooms" data-filter="" data-value="Baños">Indiferente</a></li>
							<li><a href="#" title="" data-ref="bathrooms" data-filter="banos-1-o-mas" data-value="1 ó más baños">1 ó más</a></li>
							<li><a href="#" title="" data-ref="bathrooms" data-filter="banos-2-o-mas" data-value="2 ó más baños">2 ó más</a></li>
							<li><a href="#" title="" data-ref="bathrooms" data-filter="banos-3-o-mas" data-value="3 ó más baños">3 ó más</a></li>
							<li><a href="#" title="" data-ref="bathrooms" data-filter="banos-4-o-mas" data-value="4 ó más baños">4 ó más</a></li>
						</ul>
						
						<ul class="mod-select equipment" data-ref="equipment">
							<li><a href="#" title="">Equipamiento<span class="arrow">&nbsp;</span></a></li>
							<li><a href="#" title="" data-ref="equipment" data-filter="" data-value="Equipamiento">Indiferente</a></li>
							<li><a href="#" title="" data-ref="equipment" data-filter="amueblado" data-value="">Amueblado</a></li>
							<li><a href="#" title="" data-ref="equipment" data-filter="sin-amueblar" data-value="">Sin amueblar</a></li>
							<li><a href="#" title="" data-ref="equipment" data-filter="semiamueblado" data-value="">Semimueblado</a></li>
							<li><a href="#" title="" data-ref="equipment" data-filter="solo-cocina" data-value="">Sólo cocina equipada</a></li>
						</ul>

						<ul class="mod-select state" data-ref="state">
							<li><a href="#" title="">Estado<span class="arrow">&nbsp;</span></a></li>
							<li><a href="#" title="" data-ref="state" data-filter="" data-value="Estado">Indiferente</a></li>
							<li><a href="#" title="" data-ref="state" data-filter="como-nuevo" data-value="">Como nuevo</a></li>
							<li><a href="#" title="" data-ref="state" data-filter="buen-estado" data-value="">Buen estado</a></li>
							<li><a href="#" title="" data-ref="state" data-filter="obra-nueva" data-value="">Obra nueva</a></li>
							<li><a href="#" title="" data-ref="state" data-filter="a-reformar" data-value="">A reformar</a></li>
						</ul>

						<ul class="mod-select pets" data-ref="pets">
							<li><a href="#" title="">Mascotas<span class="arrow">&nbsp;</span></a></li>
							<li><a href="#" title="" data-ref="pets" data-filter="" data-value="Mascotas">Indiferente</a></li>
							<li><a href="#" title="" data-ref="pets" data-filter="mascotas" data-value="Acepta mascotas">Acepta</a></li>
							<li><a href="#" title="" data-ref="pets" data-filter="no-mascotas" data-value="No acepta mascotas">No acepta</a></li>
							<li><a href="#" title="" data-ref="pets" data-filter="solo-gatos" data-value="Sólo acepta gatos">Acepta gatos</a></li>
							<li><a href="#" title="" data-ref="pets" data-filter="solo-perros" data-value="Sólo acepta perros">Acepta perros</a></li>
						</ul>

						<ul class="mod-select level" data-ref="level">
							<li><a href="#" title="">Planta<span class="arrow">&nbsp;</span></a></li>
							<li><a href="#" title="" data-ref="level" data-filter="" data-value="Planta">Indiferente</a></li>
							<li><a href="#" title="" data-ref="level" data-filter="sotano" data-value="">Sótano</a></li>
							<li><a href="#" title="" data-ref="level" data-filter="planta-baja" data-value="">Planta baja</a></li>
							<li><a href="#" title="" data-ref="level" data-filter="entreplanta" data-value="">Entreplanta</a></li>
							<li><a href="#" title="" data-ref="level" data-filter="planta-intermedia" data-value="">Planta intermedia</a></li>
							<li><a href="#" title="" data-ref="level" data-filter="ultima-planta" data-value="">Última planta</a></li>
						</ul>
					
						<div class="mod-grid-tags-cloud clearfix">
							<h1>Otras Características:</h1>
							<ul class="clearfix">
								<li><a class="item" href="#" title="" data-ref="extra" data-filter="ascensor">Ascensor</a></li>
								<li><a class="item" href="#" title="" data-ref="extra" data-filter="accesible">Acceso para discapacitados</a></li>
								<li><a class="item" href="#" title="" data-ref="extra" data-filter="porteria">Portería</a></li>
								<li><a class="item" href="#" title="" data-ref="extra" data-filter="videoportero">Videoportero</a></li>
								<li><a class="item" href="#" title="" data-ref="extra" data-filter="lavanderia">Lavandería</a></li>
								<li><a class="item" href="#" title="" data-ref="extra" data-filter="gimnasio">Gimnasio</a></li>
								<li><a class="item" href="#" title="" data-ref="extra" data-filter="piscina">Piscina</a></li>
								<li><a class="item" href="#" title="" data-ref="extra" data-filter="trastero">Trastero</a></li>
								<li><a class="item" href="#" title="" data-ref="extra" data-filter="garaje-privado">Garaje privado</a></li>
								<li><a class="item" href="#" title="" data-ref="extra" data-filter="garaje-comunitario">Garaje comunitario</a></li>
								<li><a class="item" href="#" title="" data-ref="extra" data-filter="aire-acondicionado">Aire acondicionado</a></li>
								<li><a class="item" href="#" title="" data-ref="extra" data-filter="calefaccion-central">Calefacción central</a></li>
								<li><a class="item" href="#" title="" data-ref="extra" data-filter="comunidad-incluida">Comunidad incluida</a></li>
								<li><a class="item" href="#" title="" data-ref="extra" data-filter="balcon">Balcón</a></li>
								<li><a class="item" href="#" title="" data-ref="extra" data-filter="patio">Patio</a></li>
								<li><a class="item" href="#" title="" data-ref="extra" data-filter="terraza">Terraza</a></li>
								<li><a class="item" href="#" title="" data-ref="extra" data-filter="suelo-marmol">Suelos de marmol</a></li>
								<li><a class="item" href="#" title="" data-ref="extra" data-filter="parquet-tarima">Parquet o tarima</a></li>
								<li><a class="item" href="#" title="" data-ref="extra" data-filter="lavadora">Lavadora</a></li>
								<li><a class="item" href="#" title="" data-ref="extra" data-filter="secadora">Secadora</a></li>
								<li><a class="item" href="#" title="" data-ref="extra" data-filter="lavavajillas">Lavavajillas</a></li>
								<li><a class="item" href="#" title="" data-ref="extra" data-filter="horno">Horno</a></li>
								<li><a class="item" href="#" title="" data-ref="extra" data-filter="closet">Closet</a></li>
								<li><a class="item" href="#" title="" data-ref="extra" data-filter="armarios-empotrados">Armarios empotrados</a></li>
								<li><a class="item" href="#" title="" data-ref="extra" data-filter="jacuzzi">Jacuzzi</a></li>
								<li><a class="item" href="#" title="" data-ref="extra" data-filter="hidromasaje">Hidromasaje</a></li>
								<li><a class="item" href="#" title="" data-ref="extra" data-filter="cerca-farmacia">Cerca: Farmacia</a></li>
								<li><a class="item" href="#" title="" data-ref="extra" data-filter="cerca-supermercado">Cerca: Supermercado</a></li>
								<li><a class="item" href="#" title="" data-ref="extra" data-filter="cerca-parque-infantil">Cerca: Parque infantil</a></li>
								<li><a class="item" href="#" title="" data-ref="extra" data-filter="cerca-colegio">Cerca: Colegio</a></li>
								<li><a class="item" href="#" title="" data-ref="extra" data-filter="cerca-instituto">Cerca: Instituto</a></li>
								<li><a class="item" href="#" title="" data-ref="extra" data-filter="cerca-universidad">Cerca: Universidad</a></li>
								<li><a class="item" href="#" title="" data-ref="extra" data-filter="cerca-autobus">Cerca: Autobús</a></li>
								<li><a class="item" href="#" title="" data-ref="extra" data-filter="cerca-metro">Cerca: Metro</a></li>
								<li><a class="item" href="#" title="" data-ref="extra" data-filter="cerca-tren">Cerca: Tren</a></li>
							</ul>
						</div>
					</div>
				</div>
				
				<div class="filters clearfix">
					<ul class="mod-select-grid property" data-ref="property">
						<li>
							<a href="#" title="">Tipo de Vivienda<span class="arrow">&nbsp;</span></a>
							<ul class="clearfix">
								<li><a href="#" title="" data-ref="property" data-filter="" data-value="Tipo de Vivienda">Indiferente</a></li>
								<li><a href="#" title="" data-ref="property" data-filter="piso" data-value="">Piso</a></li>
								<li><a href="#" title="" data-ref="property" data-filter="atico" data-value="">Ático</a></li>
								<li><a href="#" title="" data-ref="property" data-filter="duplex" data-value="">Dúplex</a></li>
								<li><a href="#" title="" data-ref="property" data-filter="estudio" data-value="">Estudio</a></li>
								<li><a href="#" title="" data-ref="property" data-filter="loft" data-value="">Loft</a></li>
								<li><a href="#" title="" data-ref="property" data-filter="casa-o-chalet" data-value="">Casa o Chalet</a></li>
							</ul>
						</li>
					</ul>
					
					<ul class="mod-select rooms" data-ref="rooms">
						<li><a href="#" title="">Habitaciones<span class="arrow">&nbsp;</span></a></li>
						<li><a href="#" title="" data-ref="rooms" data-filter="" data-value="Habitaciones">Indiferente</a></li>
						<li><a href="#" title="" data-ref="rooms" data-filter="habitaciones-1-o-mas" data-value="1 ó más habitaciones">1 ó más</a></li>
						<li><a href="#" title="" data-ref="rooms" data-filter="habitaciones-2-o-mas" data-value="2 ó más habitaciones">2 ó más</a></li>
						<li><a href="#" title="" data-ref="rooms" data-filter="habitaciones-3-o-mas" data-value="3 ó más habitaciones">3 ó más</a></li>
						<li><a href="#" title="" data-ref="rooms" data-filter="habitaciones-4-o-mas" data-value="4 ó más habitaciones">4 ó más</a></li>
					</ul>
					
					<ul class="mod-select-grid price-min" data-ref="price-min">
						<li>
							<a href="#" title="">Precio Mín<span class="arrow">&nbsp;</span></a>
							<ul class="clearfix">
								<li><a href="#" title="" data-ref="price-min" data-filter="" data-value="Precio Mín">Indiferente</a></li>
								<li><a href="#" title="" data-ref="price-min" data-filter="precio-min-300" data-value="Mín., 300€">300€</a></li>
								<li><a href="#" title="" data-ref="price-min" data-filter="precio-min-350" data-value="Mín., 350€">350€</a></li>
								<li><a href="#" title="" data-ref="price-min" data-filter="precio-min-400" data-value="Mín., 400€">400€</a></li>
								<li><a href="#" title="" data-ref="price-min" data-filter="precio-min-450" data-value="Mín., 450€">450€</a></li>
								<li><a href="#" title="" data-ref="price-min" data-filter="precio-min-500" data-value="Mín., 500€">500€</a></li>
								<li><a href="#" title="" data-ref="price-min" data-filter="precio-min-550" data-value="Mín., 550€">550€</a></li>
								<li><a href="#" title="" data-ref="price-min" data-filter="precio-min-600" data-value="Mín., 600€">600€</a></li>
								<li><a href="#" title="" data-ref="price-min" data-filter="precio-min-650" data-value="Mín., 650€">650€</a></li>
								<li><a href="#" title="" data-ref="price-min" data-filter="precio-min-700" data-value="Mín., 700€">700€</a></li>
								<li><a href="#" title="" data-ref="price-min" data-filter="precio-min-750" data-value="Mín., 750€">750€</a></li>
							</ul>
						</li>
					</ul>
					
					<ul class="mod-select-grid price-max" data-ref="price-max">
						<li>
							<a href="#" title="">Precio Máx<span class="arrow">&nbsp;</span></a>
							<ul class="clearfix">
								<li><a href="#" title="" data-ref="price-max" data-filter="" data-value="Precio Máx">Indiferente</a></li>
								<li><a href="#" title="" data-ref="price-max" data-filter="precio-max-300" data-value="Máx., 300€">300€</a></li>
								<li><a href="#" title="" data-ref="price-max" data-filter="precio-max-350" data-value="Máx., 350€">350€</a></li>
								<li><a href="#" title="" data-ref="price-max" data-filter="precio-max-400" data-value="Máx., 400€">400€</a></li>
								<li><a href="#" title="" data-ref="price-max" data-filter="precio-max-450" data-value="Máx., 450€">450€</a></li>
								<li><a href="#" title="" data-ref="price-max" data-filter="precio-max-500" data-value="Máx., 500€">500€</a></li>
								<li><a href="#" title="" data-ref="price-max" data-filter="precio-max-550" data-value="Máx., 550€">550€</a></li>
								<li><a href="#" title="" data-ref="price-max" data-filter="precio-max-600" data-value="Máx., 600€">600€</a></li>
								<li><a href="#" title="" data-ref="price-max" data-filter="precio-max-650" data-value="Máx., 650€">650€</a></li>
								<li><a href="#" title="" data-ref="price-max" data-filter="precio-max-700" data-value="Máx., 700€">700€</a></li>
								<li><a href="#" title="" data-ref="price-max" data-filter="precio-max-750" data-value="Máx., 750€">750€</a></li>
							</ul>
						</li>
					</ul>
					
					<a class="more-filters" href="#" title=""><span>&nbsp;</span><span>&nbsp;</span></a>
					
					<ul class="list-type">
						<?php $selected = ($data['list_type'] === 'grid') ? ' selected' : ''; ?>
						<li>
							<a class="icon-grid<?php echo $selected; ?>" href="#" title="">
								<span>&nbsp;</span>
								<span>&nbsp;</span>
								<span>&nbsp;</span>
							</a>
						</li>
						<?php $selected = ($data['list_type'] === 'list') ? ' selected' : ''; ?>
						<li>
							<a class="icon-list<?php echo $selected; ?>" href="#" title="">
								<span>&nbsp;</span>
								<span>&nbsp;</span>
								<span>&nbsp;</span>
							</a>
						</li>
					</ul>
					
					<ul class="mod-select order" data-ref="order">
						<li><a href="#" title="">Relevancia<span class="arrow">&nbsp;</span></a></li>
						<li><a href="#" title="" data-ref="order" data-filter="" data-value="">Relevancia</a></li>
						<li><a href="#" title="" data-ref="order" data-filter="orden-recientes" data-value="">Más recientes</a></li>
						<li><a href="#" title="" data-ref="order" data-filter="orden-antiguos" data-value="">Más antiguos</a></li>
						<li><a href="#" title="" data-ref="order" data-filter="orden-menor-precio" data-value="">Menor precio</a></li>
						<li><a href="#" title="" data-ref="order" data-filter="orden-mayor-precio" data-value="">Mayor precio</a></li>
						<li><a href="#" title="" data-ref="order" data-filter="orden-a-z" data-value="">A - Z</a></li>
						<li><a href="#" title="" data-ref="order" data-filter="orden-z-a" data-value="">Z - A</a></li>
					</ul>
				</div>
				
				<!-- MODULE / BEGIN -->
				<div class="mod-grid <?php echo $data['list_type']; ?>">
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
								<h2 class="subtitle"><span>600€/mes</span>85m | 2 hab | 1 baño</h2>
								<p class="description">Precioso piso de tres dormitorios en Santangelo Norte sin amueblar para larga temporada, con un porche y zona verde privativa espectacular de 70 metros cuadrados Precioso piso de tres dormitorios en Santangelo Norte sin amueblar para larga temporada, con un porche y zona verde privativa espectacular de 70 metros cuadrados Precioso piso de tres dormitorios en Santangelo Norte sin amueblar para larga temporada, con un porche y zona verde privativa espectacular...</p>
							</div>
							<div class="contact-view clearfix">
								<p class="contact">
									<a href="" title="">952 146 413<span class="icon-phone">&nbsp;</span></a>
									<a href="" title="">Contactar<span class="icon-mail">&nbsp;</span></a>
								</p>
								<a class="view" href="/qhabito/alquiler/detalle" title=""><span>Ver en detalle</span><span>Ver en detalle</span></a>
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
								<h2 class="subtitle"><span>600€/mes</span>85m | 2 hab | 1 baño</h2>
								<p class="description">Precioso piso de tres dormitorios en Santangelo Norte sin amueblar para larga temporada, con un porche y zona verde privativa espectacular de 70 metros cuadrados ...</p>
							</div>
							<div class="contact-view clearfix">
								<p class="contact">
									<a href="" title="">952 146 413<span class="icon-phone">&nbsp;</span></a>
									<a href="" title="">Contactar<span class="icon-mail">&nbsp;</span></a>
								</p>
								<a class="view" href="/qhabito/alquiler/detalle" title=""><span>Ver en detalle</span><span>Ver en detalle</span></a>
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
								<h2 class="subtitle"><span>600€/mes</span>85m | 2 hab | 1 baño</h2>
								<p class="description">Precioso piso de tres dormitorios en Santangelo Norte sin amueblar para larga temporada, con un porche y zona verde privativa espectacular de 70 metros cuadrados ...</p>
							</div>
							<div class="contact-view clearfix">
								<p class="contact">
									<a href="" title="">952 146 413<span class="icon-phone">&nbsp;</span></a>
									<a href="" title="">Contactar<span class="icon-mail">&nbsp;</span></a>
								</p>
								<a class="view" href="/qhabito/alquiler/detalle" title=""><span>Ver en detalle</span><span>Ver en detalle</span></a>
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
								<h2 class="subtitle"><span>600€/mes</span>85m | 2 hab | 1 baño</h2>
								<p class="description">Precioso piso de tres dormitorios en Santangelo Norte sin amueblar para larga temporada, con un porche y zona verde privativa espectacular de 70 metros cuadrados ...</p>
							</div>
							<div class="contact-view clearfix">
								<p class="contact">
									<a href="" title="">952 146 413<span class="icon-phone">&nbsp;</span></a>
									<a href="" title="">Contactar<span class="icon-mail">&nbsp;</span></a>
								</p>
								<a class="view" href="/qhabito/alquiler/detalle" title=""><span>Ver en detalle</span><span>Ver en detalle</span></a>
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
								<h2 class="subtitle"><span>600€/mes</span>85m | 2 hab | 1 baño</h2>
								<p class="description">Precioso piso de tres dormitorios en Santangelo Norte sin amueblar para larga temporada, con un porche y zona verde privativa espectacular de 70 metros cuadrados ...</p>
							</div>
							<div class="contact-view clearfix">
								<p class="contact">
									<a href="" title="">952 146 413<span class="icon-phone">&nbsp;</span></a>
									<a href="" title="">Contactar<span class="icon-mail">&nbsp;</span></a>
								</p>
								<a class="view" href="/qhabito/alquiler/detalle" title=""><span>Ver en detalle</span><span>Ver en detalle</span></a>
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
								<h2 class="subtitle"><span>600€/mes</span>85m | 2 hab | 1 baño</h2>
								<p class="description">Precioso piso de tres dormitorios en Santangelo Norte sin amueblar para larga temporada, con un porche y zona verde privativa espectacular de 70 metros cuadrados ...</p>
							</div>
							<div class="contact-view clearfix">
								<p class="contact">
									<a href="" title="">952 146 413<span class="icon-phone">&nbsp;</span></a>
									<a href="" title="">Contactar<span class="icon-mail">&nbsp;</span></a>
								</p>
								<a class="view" href="/qhabito/alquiler/detalle" title=""><span>Ver en detalle</span><span>Ver en detalle</span></a>
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
								<h2 class="subtitle"><span>600€/mes</span>85m | 2 hab | 1 baño</h2>
								<p class="description">Precioso piso de tres dormitorios en Santangelo Norte sin amueblar para larga temporada, con un porche y zona verde privativa espectacular de 70 metros cuadrados ...</p>
							</div>
							<div class="contact-view clearfix">
								<p class="contact">
									<a href="" title="">952 146 413<span class="icon-phone">&nbsp;</span></a>
									<a href="" title="">Contactar<span class="icon-mail">&nbsp;</span></a>
								</p>
								<a class="view" href="/qhabito/alquiler/detalle" title=""><span>Ver en detalle</span><span>Ver en detalle</span></a>
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
					<li><a href="#" title=""><span>Inicio</span><span>Inicio</span></a></li>
					<li><a href="#" title=""><span>Alquiler</span><span>Alquiler</span></a></li>
					<li><a href="#" title=""><span>Compra</span><span>Compra</span></a></li>
					<li><a href="#" title=""><span>Venta</span><span>Venta</span></a></li>
					<li><a href="#" title=""><span>Vacacional</span><span>Vacacional</span></a></li>
				</ul>
				<ul class="secondary clearfix">
					<li><h1>Esenciales</h1>
						<ul>
							<li><a href="#" title="">Area de Usuarios</a></li>
							<li><a href="#" title="">Preguntas Frecuentes</a></li>
							<li><a href="#" title="">Mapa del Sitio</a></li>
							<li><a href="#" title="">Contactar</a></li>
						</ul>
					</li>
					<li><h1>QHabito</h1>
						<ul>
							<li><a href="#" title="">Sobre Nosotros</a></li>
							<li><a href="#" title="">Publicidad</a></li>
							<li><a href="#" title="">Condiciones Generales</a></li>
							<li><a href="#" title="">Política de Privacidad</a></li>
						</ul>
					</li>
				</ul>
				<div class="mod-simple-form clearfix">
					<h1>Newsletter</h1>
					<form action="/newsletter" method="get">
						<fieldset>
							<div><input class="text" type="text" name="q" value="" tabindex="1" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" placeholder="Email" /></div>
							<div><a class="send" href="#" title=""><span>Enviar</span><span>Enviar</span></a></div>
						</fieldset>
					</form>
				</div>
				<div class="bottom-text clearfix"><p>&copy; 2018 QHabito LTD. All Rights Reserved.</p></div>
			</div>
		</div>
		<!-- FOOTER / END -->
	</div>
	<!-- MAIN / END -->
	<!-- COOKIES / BEGIN -->
	<div class="cookies">
		<p>
			Usamos cookies para ofrecer una experiencia más personalizada. <a href="#" title=""><span>Más información &gt;</span></a>
		</p>
		<a class="button" href="#" title=""><span>Cerrar</span><span>Cerrar</span></a>
	</div>
	<!-- COOKIES / END -->
</body>
</html>