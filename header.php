<script src="js/jquery-3.1.1.min.js"></script>
<script src="js/fixed-header.js"></script>
<script src="js/hide_show_mainMenu.js"></script>
<body>
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
					 					   <li><a <?php if ($sw=="inicio") { ?>class="marcado"<?php } ?> href="#" title="Inicio">Inicio</a></li>
  					      <li><a <?php if ($sw=="contacto") { ?>class="marcado"<?php } ?> href="contacto.html" title="Contacto">Contacto</a></li>
  					         <li><a <?php if ($sw=="blog") { ?>class="marcado"<?php } ?> href="contacto.html" title="blog">blog</a></li>
  				  
				</ul>
			</nav>
		</div>
	</header>