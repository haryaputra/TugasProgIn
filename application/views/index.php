<!DOCTYPE HTML>
<!--
	Astral 2.5 by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Readme</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400" rel="stylesheet" />
		<script src="./js/jquery.min.js"></script>
		<script src="./js/config.js"></script>
		<script src="./js/skel.min.js"></script>
		<noscript>
			<link rel="stylesheet" href="./css/skel-noscript.css" />
			<link rel="stylesheet" href="./css/style.css" />
			<link rel="stylesheet" href="./css/style-desktop.css" />
			<link rel="stylesheet" href="./css/noscript.css" />
		</noscript>
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><link rel="stylesheet" href="css/ie8.css" /><![endif]-->
	</head>
	<body class="homepage">

		<!-- Wrapper-->
			<div id="wrapper">
				
				<!-- Nav -->
					<nav id="nav">
						<a href="#me" class="fa fa-home active"><span>Home</span></a>
						<a href="#koran" class="fa fa-folder"><span>Koran</span></a>
						<a href="#majalah" class="fa fa-folder"><span>Majalah</span></a>
						<a href="#buku" class="fa fa-folder"><span>Buku</span></a>
					</nav>

				<!-- Main -->
					<div id="main">
						
						<!-- ReadMe -->
							<article id="me" class="panel">
								<header>
									<h1>Readme</h1>
									<span class="byline">By<li>M Harya Putra 18211011</li><li>Divo Afifartama 18211053</li></span>
								</header>
								<a href="#koran" class="jumplink pic">
									<span class="jumplink arrow fa fa-chevron-right"></span>
								</a>
							</article>

						<!-- Koran --> 
							<article id="koran" class="panel">
								<header>
									<h2>Koran</h2>
								</header>
								<p>
									Data koran disimpan dalam bentuk file xml yang berada pada folder "data".
								</p>
								<p>
								<b>URI</b> yang digunakan dalam <b>penampilan seluruh data koran</b> dalam bentuk <b>xml</b> adalah <a href="./index.php/search/korans">"/tp/index.php/search/korans/"</a>
								</p>
								<p>
								<b>URI</b> yang digunakan dalam <b>penampilan spesifik data koran </b>berdasarkan <b>ID nomor 15</b> dalam bentuk <b>xml</b> adalah <a href="./index.php/search/koran/id/15/format/xml">"/tp/index.php/search/koran/id/15/format/xml"</a>
								</p>
								<p>
								<b>Output</b> dapat di<b>variasi</b>kan menjadi output dengan <b>format xml, json,</b> maupun <b>html</b> yang dapat di atur pada <b>bagian akhir URI</b> dengan format default xml (tanpa penulisan "format/...").
								<ul>Contoh <b>penampilan seluruh data koran</b> dalam bentuk <b>JSON</b><li><a href="./index.php/search/korans/format/json">"/tp/index.php/search/korans/format/json"</a></li></ul>
								</p>
								<a href="#majalah" class="jumplink pic">
									next to section majalah <span class="jumplink arrow fa fa-chevron-right"></span>
								</a>
							</article>

						<!-- Majalah --> 
							<article id="majalah" class="panel">
								<header>
									<h2>Majalah</h2>
								</header>
								<p>
									Data majalah disimpan dalam bentuk file csv yang berada pada folder "data".
								</p>
								<p>
								<b>URI</b> yang digunakan dalam <b>penampilan seluruh data majalah</b> dalam bentuk <b>xml</b> adalah <a href="./index.php/search/majalahs">"/tp/index.php/search/majalahs/"</a>
								</p>
								<p>
								<b>URI</b> yang digunakan dalam <b>penampilan spesifik data majalah </b>berdasarkan <b>ID nomor 7</b> dalam bentuk <b>xml</b> adalah <a href="./index.php/search/majalah/id/7/format/xml">"/tp/index.php/search/majalah/id/7/format/xml"</a>
								</p>
								<p>
								<b>Output</b> dapat di<b>variasi</b>kan menjadi output dengan <b>format xml, json, javascript, csv, plain</b> maupun <b>html</b> yang dapat di atur pada <b>bagian akhir URI</b> dengan format default xml (tanpa penulisan "format/...").
								<ul>Contoh <b>penampilan seluruh data majalah</b> dalam bentuk <b>JSON</b><li><a href="./index.php/search/majalahs/format/json">"/tp/index.php/search/majalahs/format/json"</a></li></ul>
								</p>
								<a href="#buku" class="jumplink pic">
									next to section buku <span class="jumplink arrow fa fa-chevron-right"></span>
								</a>
							</article>

						<!-- Buku --> 
							<article id="buku" class="panel">
								<header>
									<h2>Buku</h2>
								</header>
								<p>
									Data buku disimpan dalam bentuk file sql yang berada pada folder "data". Oleh karena itu diasumsikan file sql telah di import kedalam database pada server.
								</p>
								<p>
								<b>URI</b> yang digunakan dalam <b>penampilan seluruh data buku</b> dalam bentuk <b>xml</b> adalah <a href="./index.php/search/bukus">"/tp/index.php/search/bukus/"</a>
								</p>
								<p>
								<b>URI</b> yang digunakan dalam <b>penampilan spesifik data buku</b>berdasarkan <b>ID nomor 3</b> dalam bentuk <b>xml</b> adalah <a href="./index.php/search/buku/id/3/format/xml">"/tp/index.php/search/buku/id/3/format/xml"</a>
								</p>
								<p>
								<b>Output</b> dapat di<b>variasi</b>kan menjadi output dengan <b>format xml, json,</b> maupun <b>html</b> yang dapat di atur pada <b>bagian akhir URI</b> dengan format default xml (tanpa penulisan "format/...").
								<ul>Contoh <b>penampilan seluruh data buku</b> dalam bentuk <b>JSON</b><li><a href="./index.php/search/bukus/format/json">"/tp/index.php/search/bukus/format/json"</a></li></ul>
								</p>
								<a href="#home" class="jumplink pic">
									back to home <span class="jumplink arrow fa fa-chevron-right"></span>
								</a>
							</article>

					</div>
		
				<!-- Footer -->
					<div id="footer">
						<ul class="links">
							<li>&copy; HaryaPutra</li>
							<li>Design : <a href="http://html5up.net/">HTML5 UP</a></li>
						</ul>
					</div>
		
			</div>

	</body>
</html>