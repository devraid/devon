<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE HTML>
	<html lang="en">
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
	<div class="main rent-detail has-modal">
		<!-- HEADER / BEGIN -->
		<div class="header clearfix">
			<div class="top-bar">
				<ul class="languages">
					<li><a class="selected" href="#" title=""><span>ESP</span><span>ESP</span></a></li>
					<li><a href="#" title=""><span>ENG</span><span>ENG</span></a></li>
				</ul>
			</div>
			<div class="content">
				<a class="logo-link" href="<?php echo base_url(); ?>" title="">&nbsp;</a>
				<div class="mod-simple-form search-form">
					<form action="<?php echo base_url(); ?>alquiler" method="get">
						<fieldset>
							<div><input class="search text" type="text" name="q" value="" tabindex="1" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" placeholder="Provincia, ciudad..." />
							<div class="results"></div></div>
							<div><a class="send" href="#" title=""><span>Buscar</span><span>Buscar</span></a></div>
						</fieldset>
					</form>
				</div>
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
				
				<div class="wrapper clearfix">
					<div class="block right resume clearfix padded">
						<a class="add-to-favorite" href="#" title=""><span class="icon-heart">&nbsp;</span></a>
						<h1 class="title">Piso en calle Ágave, Santangelo, Benalmádena <span>&mdash; 12/07/18 12:30h</span></h1>
						<h2 class="subtitle"><span>600€/mes</span>85m | 2 hab | 1 baño</h2>
						<p class="extra">
							<a href="" title="">952 146 413<span class="icon-phone">&nbsp;</span></a>
							<a href="" title="">Reportar<span class="icon-bug">&nbsp;</span></a>
						</p>
					</div>
					<div class="block left">
						<div class="gallery">
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
								</ul>
							</div>
							<!-- MODULE / END -->
						</div>
						<div class="padded margined">
							<h1 class="title">Descripción</h1>
							<p class="text">Precioso piso de tres dormitorios en Santangelo Norte sin amueblar para larga temporada, con un porche y zona verde privativa espectacular de 70 metros cuadrados Precioso piso de tres dormitorios en Santangelo Norte sin amueblar para larga temporada, con un porche y zona verde privativa espectacular de 70 metros cuadrados Precioso piso de tres dormitorios en Santangelo Norte sin amueblar para larga temporada, con un porche y zona verde privativa espectacular <br /><br />Precioso piso de tres dormitorios en Santangelo Norte sin amueblar para larga temporada, con un porche y zona verde privativa espectacular de 70 metros cuadrados Precioso piso de tres dormitorios en Santangelo Norte sin amueblar para larga temporada, con un porche y zona verde privativa espectacular de 70 metros cuadrados Precioso piso de tres dormitorios en Santangelo Norte sin amueblar para larga temporada, con un porche y zona verde privativa espectacular <br /><br />Precioso piso de tres dormitorios en Santangelo Norte sin amueblar para larga temporada, con un porche y zona verde privativa espectacular de 70 metros cuadrados Precioso piso de tres dormitorios en Santangelo Norte sin amueblar para larga temporada, con un porche y zona verde privativa espectacular de 70 metros cuadrados Precioso piso de tres dormitorios en Santangelo Norte sin amueblar para larga temporada, con un porche y zona verde privativa espectacular</p>
						</div>
						<div class="padded margined">
							<h1 class="title">Equipamiento</h1>
							<p class="text">Precioso piso de tres dormitorios en Santangelo Norte sin amueblar para larga temporada, con un porche y zona verde privativa espectacular de 70 metros cuadrados Precioso piso de tres dormitorios en Santangelo Norte sin amueblar para larga temporada, con un porche y zona verde privativa espectacular de 70 metros cuadrados Precioso piso de tres dormitorios en Santangelo Norte sin amueblar para larga temporada, con un porche y zona verde privativa espectacular <br /><br />Precioso piso de tres dormitorios en Santangelo Norte sin amueblar para larga temporada, con un porche y zona verde privativa espectacular de 70 metros cuadrados Precioso piso de tres dormitorios en Santangelo Norte sin amueblar para larga temporada, con un porche y zona verde privativa espectacular de 70 metros cuadrados Precioso piso de tres dormitorios en Santangelo Norte sin amueblar para larga temporada, con un porche y zona verde privativa espectacular <br /><br />Precioso piso de tres dormitorios en Santangelo Norte sin amueblar para larga temporada, con un porche y zona verde privativa espectacular de 70 metros cuadrados Precioso piso de tres dormitorios en Santangelo Norte sin amueblar para larga temporada, con un porche y zona verde privativa espectacular de 70 metros cuadrados Precioso piso de tres dormitorios en Santangelo Norte sin amueblar para larga temporada, con un porche y zona verde privativa espectacular</p>
						</div>
						<div class="padded margined">
							<h1 class="title">Otros detalles</h1>
							<p class="text">Precioso piso de tres dormitorios en Santangelo Norte sin amueblar para larga temporada, con un porche y zona verde privativa espectacular de 70 metros cuadrados Precioso piso de tres dormitorios en Santangelo Norte sin amueblar para larga temporada, con un porche y zona verde privativa espectacular de 70 metros cuadrados Precioso piso de tres dormitorios en Santangelo Norte sin amueblar para larga temporada, con un porche y zona verde privativa espectacular <br /><br />Precioso piso de tres dormitorios en Santangelo Norte sin amueblar para larga temporada, con un porche y zona verde privativa espectacular de 70 metros cuadrados Precioso piso de tres dormitorios en Santangelo Norte sin amueblar para larga temporada, con un porche y zona verde privativa espectacular de 70 metros cuadrados Precioso piso de tres dormitorios en Santangelo Norte sin amueblar para larga temporada, con un porche y zona verde privativa espectacular <br /><br />Precioso piso de tres dormitorios en Santangelo Norte sin amueblar para larga temporada, con un porche y zona verde privativa espectacular de 70 metros cuadrados Precioso piso de tres dormitorios en Santangelo Norte sin amueblar para larga temporada, con un porche y zona verde privativa espectacular de 70 metros cuadrados Precioso piso de tres dormitorios en Santangelo Norte sin amueblar para larga temporada, con un porche y zona verde privativa espectacular</p>
						</div>
					</div>
					<div class="block right contact-form padded">
						<h1 class="title">Formulario de contacto</h1>
						<form action="/" method="get">
							<fieldset>
								<div><input type="text" name="cf_fullname" value="" tabindex="1" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" placeholder="Nombre completo" /></div>
								<div><input type="text" name="cf_email" value="" tabindex="2" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" placeholder="Email" /></div>
								<div><input type="text" name="cf_phone" value="" tabindex="3" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" placeholder="Teléfono" /></div>
							</fieldset>
						</form>
					</div>
					<div class="block right advert padded">
						<h1>Publicidad</h1>
						<img src="/qhabito/css/images/tmp/banner-300-250.jpg" width="300" height="250" alt="" />
					</div>
				</div>
				
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
		<!-- MODAL REPORT / BEGIN -->
		<div class="mod-modal report visible">
			<div class="wrap">
				<a class="close-button" href="#" title=""><span class="icon-close">&nbsp;</span></a>
				<div class="content">hi</div>
			</div>
		</div>
		<!-- MODAL REPORT  / END -->
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