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
	</head>
<body class="<?php echo $data['device']; ?>">
	<!-- MAIN / BEGIN -->
	<div class="main home">
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
			</div>
		</div>
		<!-- HEADER / END -->
		<!-- MODULE / BEGIN -->
		<div class="mod-top-big-poster" style="background-image: url(/qhabito/css/images/image-0002.jpg);">
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
		<!-- MODULE / END -->
		<!-- CONTENT / BEGIN -->
		<div class="content">
			<div class="wrap">
				<!-- TBD -->
			</div>
		</div>
		<!-- CONTENT / END -->
		<!-- FOOTER / BEGIN -->
		<div class="footer clearfix">
			<div class="wrap">
				<ul class="primary clearfix">
					<li><a href="#" title=""><span>Inicio</span><span>Inicio</span></a></li>
					<li><a href="/qhabito/alquiler" title=""><span>Alquiler</span><span>Alquiler</span></a></li>
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