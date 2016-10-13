<script src="js/jquery-3.1.1.min.js"></script>
<script src="js/fixed-header.js"></script>
<script src="js/hide_show_mainMenu.js"></script>
<body>
<? 
$actual = explode("/",strrev($_SERVER['REQUEST_URI']), -1);
$actual = strrev($actual[0]);
$menu = array("Inicio" => "home.php", "Galería" => "galeria.php", "Nosotros" => "nosotros.php", "Contacto" => "contacto.php");
?>
	<header>
		<div class="wrapper">
			<img src="http://localhost:8888/QDQmedia/img/logo_qdqmedia_grupo_solocal.png" alt="La agencia de marketing online de las pymes: QDQ media" class="logotipoQDQmedia">
			<nav class="main-nav">
				<div class="menu-toggle">
    				<div class="one"></div>
    				<div class="two"></div>
    				<div class="three"></div>
  				</div>
				<ul class="fadeInRight">
					<? foreach($menu as $nombre=>$archivo) {?>
  					<li><a href="<? echo $archivo; ?>" <? if ($actual == $archivo) echo "class=\"actual\""; ?>><? echo $nombre; ?></a></li>
  				<? } ?>
				</ul>
			</nav>
		</div>
	</header>