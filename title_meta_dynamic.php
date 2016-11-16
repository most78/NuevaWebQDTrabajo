<?php
global $page;
switch($page) { 
    case 'webStep': 
        $title = 'La web de empresa que se adapta al comportamiento de tus usuarios.';
        $metaDescription = '¿Necesitas una web para tu empresa? QDQ media te ofrece una web orientada 100% a la conversión ¡Llámanos!';
        $metaKeywords = 'web empresa';
        break; 
    case 'ofertas':
        $title = 'Los servicios de marketing online que necesita tu negocio: QDQ media';
        $metaDescription = "¿Qué quieres para tu negocio? Te ofrecemos todos los servicios de   marketing online que necesita tu negocio. ¡Llámanos!";
        $metaKeywords = "servicios marketing online"; 
        break;
    case 'email':
        $title = "Correo empresarial: gestiona tu actividad desde cualquier dispositivo.";
        $metaDescription = "Correo empresarial: haz que tus comunicaciones formen parte de tu imagen de marca. ¡Entra en QDQ media y consulta precios!";
        $metaKeywords = "correo empresarial";
        break; 
    default: 
        $page = 'home.php'; 
        $title = 'La agencia de marketing online de las pymes: QDQ media';
        $metaDescription = "¿Buscas una agencia de marketing online ? Enterate de nuestra oferta: posicionamiento SEO, gestión de campañas, contenidos digitales y... ¡mucho más!
        ";
        $metaKeywords = "agencia marketing online";  
        break; 
} 
?>