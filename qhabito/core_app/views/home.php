<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$d = $dictionary;
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
		<script type="text/javascript" src="/qhabito/js/mod-map.js"></script>
	</head>
<body class="<?= $data['device']; ?>">
	<!-- MAIN / BEGIN -->
	<div class="main home">
		<!-- HEADER / BEGIN -->
		<div class="header clearfix">
			<div class="top-bar">
				<ul class="languages">
					<li><a <?= ($language === 'es' ? ' class="selected' : ''); ?> href="<?= base_url(); ?>inicio" title="" data-lang="es"><span>ESP</span><span>ESP</span></a></li>
					<li><a <?= ($language === 'en' ? ' class="selected' : ''); ?> href="<?= base_url(); ?>home" title="" data-lang="en"><span>ENG</span><span>ENG</span></a></li>
				</ul>
			</div>
			<div class="content">
				<a class="logo-link" href="<?= base_url(); ?>" title="">&nbsp;</a>
			</div>
		</div>
		<!-- HEADER / END -->
		<!-- MODULE / BEGIN -->
		<div class="mod-top-big-poster" style="background-image: url(/qhabito/css/images/image-0002.jpg);">
			<div class="mod-simple-form search-form">
				<form action="<?= base_url(); ?>alquiler" method="get">
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
				<div class="mod-map canvas">
					
					<!--
					<object class="country" id="country" data="/qhabito/tmp/map.svg" type="image/svg+xml"></object>
					-->
					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" width="700" height="500" viewBox="0 0 700 500">
						<?php foreach($provinces as $province): ?>
						<?= $province->svg; ?>
						<?php endforeach; ?>
					</svg>
				</div>
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