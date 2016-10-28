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
        $title = 'La agencia de marketing online de las pymes: QDQ media';
        $meta_Description = "Agencia de marketing online para pymes. El GRUPO QDQ, formado por QDQ MEDIA, TRAZADA y OPTIMIZACLICK ofrece servicios de agencia de marketing online para pymes";
        $meta_Keywords = "agencia, marketing, online, digital, pymes, empresa, servicios";
        $meta_og_Type= "company";
        $meta_og_Url= "https://www.qdqmedia.com";
        $meta_og_Title= "La agencia de marketing online de las pymes: QDQ media";
        $meta_og_Image="https://www.qdqmedia.com/img/qdqmedia_thumbnail.png";
        $meta_fb_Admins="100002336407261";
        $meta_og_description="Agencia de marketing online para pymes. El GRUPO QDQ, formado por QDQ MEDIA, TRAZADA y OPTIMIZACLICK ofrece servicios de agencia de marketing online para pymes";
        break; 
} 
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title><?php echo $title; ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1"/>
<meta name="Description" content="<?php echo $meta_Description; ?>"/>
<meta name="Keywords" content="<?php echo $meta_Keywords; ?>"/>
<meta name="google-site-verification" content="iocJ98JqF9ng4-2mAwJqPagA2LtCXPS2Oucc3IubxQ8"/>
<meta property="og:type" content="<?php echo $meta_og_Type; ?>"/>
<meta property="og:url" content="<?php echo $meta_og_Url; ?>"/>
<meta property="og:title" content="<?php echo $meta_og_Title; ?>" />
<meta property="og:image" content="<?php echo $meta_og_Image; ?>" />
<meta property="fb:admins" content="<?php echo $meta_fb_Admins; ?>"/>
<meta property="og:description" content="<?php echo $meta_og_description; ?>"/>
<link rel="shortcut icon" href="http://estaticos.qdq.com/premiumsw/img/favicon.png" type="image/x-icon">
<link rel="stylesheet" href="css/style.css">
<link href="https://fonts.googleapis.com/css?family=Muli:300,400|Oswald:300,400,700" rel="stylesheet">
<link rel="stylesheet" href="css/ionicons.min.css">
<link rel="stylesheet" type="text/css" href="css/animate.css" />
<link rel="stylesheet" href="css/animsition.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script type="text/javascript" src="js/fixed-header.js"></script>
<script type="text/javascript" src="js/hide_show_mainMenu.js"></script>
<script type="text/javascript" src="js/animation_elements.js"></script>
<script type="text/javascript" src="js/animateVisible.js"></script>
<script type="text/javascript" src="js/viewportchecker.js"></script>
<script type="text/javascript" src="js/animsition.min.js"></script>
<script type="text/javascript" src="js/pageTransition.js"></script>
</head>