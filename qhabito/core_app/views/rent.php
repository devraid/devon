<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE HTML>
	<html lang="en">
	<head>
		<title>QHabito</title>
		<meta http-equiv="pragma" content="no-cache" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
	<div class="main rent">
		<!-- HEADER / BEGIN -->
		<div class="header clearfix">
			<div class="top-bar">
				<ul class="languages">
					<li><a class="selected" href="#" title=""><span>ESP</span><span>ESP</span></a></li>
					<li><a href="#" title=""><span>ENG</span><span>ENG</span></a></li>
				</ul>
			</div>
			<div class="content">
				<a class="logo-link" href="#" title="">&nbsp;</a>
			</div>
			<ul class="breadcrumb clearfix">
				<li><a href="/qhabito/" title=""><span class="text">Inicio</span><span class="arrow">&nbsp;</span></a></li>
				<li><a href="#" title=""><span class="text">Lorem ipsum</span><span class="arrow">&nbsp;</span></a></li>
				<li><a href="#" title=""><span class="text">Lorem ipsum</span><span class="arrow">&nbsp;</span></a></li>
				<li><a href="#" title=""><span class="text">Lorem ipsum dolor</span><span class="arrow">&nbsp;</span></a></li>
				<li><a class="selected" href="#" title=""><span class="text">Lorem ipsum sit amet</span></a></li>
			</ul>
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
				
				<div class="filters more active clearfix">
					<div class="wrapper clearfix">
						<ul class="mod-select bathrooms">
							<li><a href="#" title="">Baños<span class="arrow">&nbsp;</span></a></li>
							<li><a href="#" title="">1 ó más</a></li>
							<li><a href="#" title="">2 ó más</a></li>
							<li><a href="#" title="">3 ó más</a></li>
							<li><a href="#" title="">4 ó más</a></li>
						</ul>

						<ul class="mod-select-grid size-min">
							<li>
								<a href="#" title="">Tamaño Mín<span class="arrow">&nbsp;</span></a>
								<ul class="clearfix">
									<li><a href="#" title="">50m²</a></li>
									<li><a href="#" title="">60m²</a></li>
									<li><a href="#" title="">70m²</a></li>
									<li><a href="#" title="">80m²</a></li>
									<li><a href="#" title="">100m²</a></li>
									<li><a href="#" title="">120m²</a></li>
									<li><a href="#" title="">140m²</a></li>
									<li><a href="#" title="">160m²</a></li>
									<li><a href="#" title="">180m²</a></li>
									<li><a href="#" title="">200m²</a></li>
								</ul>
							</li>
						</ul>

						<ul class="mod-select-grid size-max">
							<li>
								<a href="#" title="">Tamaño Máx<span class="arrow">&nbsp;</span></a>
								<ul class="clearfix">
									<li><a href="#" title="">50m²</a></li>
									<li><a href="#" title="">60m²</a></li>
									<li><a href="#" title="">70m²</a></li>
									<li><a href="#" title="">80m²</a></li>
									<li><a href="#" title="">100m²</a></li>
									<li><a href="#" title="">120m²</a></li>
									<li><a href="#" title="">140m²</a></li>
									<li><a href="#" title="">160m²</a></li>
									<li><a href="#" title="">180m²</a></li>
									<li><a href="#" title="">200m²</a></li>
								</ul>
							</li>
						</ul>

						<ul class="mod-select equipment">
							<li><a href="#" title="">Equipamiento<span class="arrow">&nbsp;</span></a></li>
							<li><a href="#" title="">Amueblado</a></li>
							<li><a href="#" title="">Semiamueblado</a></li>
							<li><a href="#" title="">Sólo Cocina</a></li>
						</ul>

						<ul class="mod-select state">
							<li><a href="#" title="">Estado<span class="arrow">&nbsp;</span></a></li>
							<li><a href="#" title="">Nuevo</a></li>
							<li><a href="#" title="">Buen Estado</a></li>
							<li><a href="#" title="">A Reformar</a></li>
						</ul>

						<ul class="mod-select pets">
							<li><a href="#" title="">Mascotas<span class="arrow">&nbsp;</span></a></li>
							<li><a href="#" title="">Acepta</a></li>
							<li><a href="#" title="">No Acepta</a></li>
							<li><a href="#" title="">Acepta Gatos</a></li>
							<li><a href="#" title="">Acepta Perros</a></li>
						</ul>

						<ul class="mod-select level">
							<li><a href="#" title="">Planta<span class="arrow">&nbsp;</span></a></li>
							<li><a href="#" title="">Planta Baja</a></li>
							<li><a href="#" title="">Planta Intermedia</a></li>
							<li><a href="#" title="">Última Planta</a></li>
						</ul>
					
						<div class="mod-grid-tags-cloud clearfix">
							<h1>Otras Características:</h1>
							<ul class="clearfix">
								<li><a class="item" href="#" title="" data-ref="ascensor">Ascensor</a></li>
								<li><a class="item" href="#" title="" data-ref="accesible">Acceso para discapacitados</a></li>
								<li><a class="item" href="#" title="" data-ref="porteria">Portería</a></li>
								<li><a class="item" href="#" title="" data-ref="videoportero">Videoportero</a></li>
								<li><a class="item" href="#" title="" data-ref="lavanderia">Lavandería</a></li>
								<li><a class="item" href="#" title="" data-ref="gimnasio">Gimnasio</a></li>
								<li><a class="item" href="#" title="" data-ref="piscina">Piscina</a></li>
								<li><a class="item" href="#" title="" data-ref="trastero">Trastero</a></li>
								<li><a class="item" href="#" title="" data-ref="garaje-privado">Garaje privado</a></li>
								<li><a class="item" href="#" title="" data-ref="garaje-comunitario">Garaje comunitario</a></li>
								<li><a class="item" href="#" title="" data-ref="aire-acondicionado">Aire acondicionado</a></li>
								<li><a class="item" href="#" title="" data-ref="calefaccion-central">Calefacción central</a></li>
								<li><a class="item" href="#" title="" data-ref="comunidad-incluida">Comunidad incluida</a></li>
								<li><a class="item" href="#" title="" data-ref="balcon">Balcón</a></li>
								<li><a class="item" href="#" title="" data-ref="patio">Patio</a></li>
								<li><a class="item" href="#" title="" data-ref="terraza">Terraza</a></li>
								<li><a class="item" href="#" title="" data-ref="suelo-marmol">Suelos de marmol</a></li>
								<li><a class="item" href="#" title="" data-ref="parquet-tarima">Parquet o tarima</a></li>
								<li><a class="item" href="#" title="" data-ref="lavadora">Lavadora</a></li>
								<li><a class="item" href="#" title="" data-ref="secadora">Secadora</a></li>
								<li><a class="item" href="#" title="" data-ref="lavavajillas">Lavavajillas</a></li>
								<li><a class="item" href="#" title="" data-ref="horno">Horno</a></li>
								<li><a class="item" href="#" title="" data-ref="closet">Closet</a></li>
								<li><a class="item" href="#" title="" data-ref="armarios-empotrados">Armarios empotrados</a></li>
								<li><a class="item" href="#" title="" data-ref="jacuzzi">Jacuzzi</a></li>
								<li><a class="item" href="#" title="" data-ref="hidromasaje">Hidromasaje</a></li>
								<li><a class="item" href="#" title="" data-ref="cerca-farmacia">Cerca: Farmacia</a></li>
								<li><a class="item" href="#" title="" data-ref="cerca-supermercado">Cerca: Supermercado</a></li>
								<li><a class="item" href="#" title="" data-ref="cerca-parque-infantil">Cerca: Parque infantil</a></li>
								<li><a class="item" href="#" title="" data-ref="cerca-colegio">Cerca: Colegio</a></li>
								<li><a class="item" href="#" title="" data-ref="cerca-instituto">Cerca: Instituto</a></li>
								<li><a class="item" href="#" title="" data-ref="cerca-universidad">Cerca: Universidad</a></li>
								<li><a class="item" href="#" title="" data-ref="cerca-autobus">Cerca: Autobús</a></li>
								<li><a class="item" href="#" title="" data-ref="cerca-metro">Cerca: Metro</a></li>
								<li><a class="item" href="#" title="" data-ref="cerca-tren">Cerca: Tren</a></li>
							</ul>
						</div>
					</div>
				</div>
				
				<div class="filters clearfix">
					<ul class="mod-select-grid property">
						<li>
							<a href="#" title="">Tipo de Vivienda<span class="arrow">&nbsp;</span></a>
							<ul class="clearfix">
								<li><a href="#" title="">Piso</a></li>
								<li><a href="#" title="">Ático</a></li>
								<li><a href="#" title="">Dúplex</a></li>
								<li><a href="#" title="">Estudio</a></li>
								<li><a href="#" title="">Loft</a></li>
								<li><a href="#" title="">Casa o Chalet</a></li>
							</ul>
						</li>
					</ul>
					
					<ul class="mod-select rooms">
						<li><a href="#" title="">Habitaciones<span class="arrow">&nbsp;</span></a></li>
						<li><a href="#" title="">1 ó más</a></li>
						<li><a href="#" title="">2 ó más</a></li>
						<li><a href="#" title="">3 ó más</a></li>
						<li><a href="#" title="">4 ó más</a></li>
					</ul>
					
					<ul class="mod-select-grid price-min">
						<li>
							<a href="#" title="">Precio Mín<span class="arrow">&nbsp;</span></a>
							<ul class="clearfix">
								<li><a href="#" title="">300€</a></li>
								<li><a href="#" title="">350€</a></li>
								<li><a href="#" title="">400€</a></li>
								<li><a href="#" title="">450€</a></li>
								<li><a href="#" title="">500€</a></li>
								<li><a href="#" title="">550€</a></li>
								<li><a href="#" title="">600€</a></li>
								<li><a href="#" title="">650€</a></li>
								<li><a href="#" title="">700€</a></li>
								<li><a href="#" title="">750€</a></li>
							</ul>
						</li>
					</ul>
					
					<ul class="mod-select-grid price-max">
						<li>
							<a href="#" title="">Precio Máx<span class="arrow">&nbsp;</span></a>
							<ul class="clearfix">
								<li><a href="#" title="">300€</a></li>
								<li><a href="#" title="">350€</a></li>
								<li><a href="#" title="">400€</a></li>
								<li><a href="#" title="">450€</a></li>
								<li><a href="#" title="">500€</a></li>
								<li><a href="#" title="">550€</a></li>
								<li><a href="#" title="">600€</a></li>
								<li><a href="#" title="">650€</a></li>
								<li><a href="#" title="">700€</a></li>
								<li><a href="#" title="">750€</a></li>
							</ul>
						</li>
					</ul>
					
					<a class="more-filters selected" href="#" title=""><span>&nbsp;</span><span>&nbsp;</span></a>
					
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
					
					<ul class="mod-select order">
						<li><a href="#" title="">Ordenar<span class="arrow">&nbsp;</span></a></li>
						<li><a href="#" title=""><span>Lorem ipsum</span></a></li>
						<li><a href="#" title=""><span>Lorem ipsum</span></a></li>
						<li><a href="#" title=""><span>Lorem ipsum</span></a></li>
						<li><a href="#" title=""><span>Lorem ipsum</span></a></li>
						<li><a href="#" title=""><span>Lorem ipsum</span></a></li>
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
								<a class="add-to-favorite" href="#" title=""><span class="icon-heart">&nbsp;</span></a>
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
								<a class="add-to-favorite" href="#" title=""><span class="icon-heart">&nbsp;</span></a>
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
								<a class="add-to-favorite" href="#" title=""><span class="icon-heart">&nbsp;</span></a>
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
								<a class="add-to-favorite" href="#" title=""><span class="icon-heart">&nbsp;</span></a>
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
								<a class="add-to-favorite" href="#" title=""><span class="icon-heart">&nbsp;</span></a>
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
								<a class="add-to-favorite" href="#" title=""><span class="icon-heart">&nbsp;</span></a>
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
								<a class="add-to-favorite" href="#" title=""><span class="icon-heart">&nbsp;</span></a>
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