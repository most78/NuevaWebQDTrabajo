<?php 
$page = isset($_GET['p']) ? $_GET['p'] : 'index'; 
switch($page) { 
    case 'about': 
        $title = 'About page';

        break; 
    case 'contact': 
        $title = 'Contact us page'; 
        break; 
    default: 
        $page = 'index'; 
        $title = 'Home page esto es una prueba en QDQmedia';
        $metaDescription = "Agencia de marketing online para pymes. El GRUPO QDQ, formado por QDQ MEDIA, TRAZADA y OPTIMIZACLICK ofrece servicios de agencia de marketing online para pymes";  
        break; 
} 
?>