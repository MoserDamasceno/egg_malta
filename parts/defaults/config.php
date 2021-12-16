<?php
    $title = 'Laures Ronak | Boilerplate';
    $pagina = explode('/', $_SERVER['REQUEST_URI']);
    $classOnBody = 'p-inner';

    switch ($pagina[1]) {
        // Boilerplate
        case 'laures':
        case 'ronak':
        case 'lauresronak':
        case 'docs':
        case 'documentation':
            $file = '_boilerplate/sections.php';
            $title_page = 'Documentação - '.$title;
            break;

        // Home
        case '' :
        case 'home' :
            $file = 'page_home.php';
            $title_page = $title;
            $classOnBody = 'p-home';
            break;

        // pages
        case 'sobre' :
            $file = 'page_about.php';
            $title_page = 'Sobre - '.$title;
            $classOnBody = 'p-inner';
            break;
        case 'contato' :
            $file = 'page_contact.php';
            $title_page = 'Sobre - '.$title;
            $classOnBody = 'p-inner';
            break;
        case 'blog' :
            $file = 'page_blog.php';
            $title_page = 'Blog - '.$title;
            $classOnBody = 'p-inner';
            break;
        case 'bloginner' :
            $file = 'page_blogPost.php';
            $title_page = 'Blog | Título do artigo - '.$title;
            $classOnBody = 'p-inner';
            break;
        case 'contratar' :
            $file = 'page_buy.php';
            $title_page = 'Contratar - '.$title;
            $classOnBody = 'p-inner';
            break;
        case 'servicos' :
            $file = 'page_services.php';
            $title_page = 'Serviços - '.$title;
            $classOnBody = 'p-inner';
            break;
        case 'google-ads' :
            $file = 'page_service_googleAds.php';
            $title_page = 'Serviços - '.$title;
            $classOnBody = 'p-inner';
            break;
        case 'facebook-ads' :
            $file = 'page_service_googleAds.php';
            $title_page = 'Serviços - '.$title;
            $classOnBody = 'p-inner';
            break;
        case 'gestao-midias-sociais' :
            $file = 'page_service_googleAds.php';
            $title_page = 'Serviços - '.$title;
            $classOnBody = 'p-inner';
            break;
        case 'marketing-digital' :
            $file = 'page_service_googleAds.php';
            $title_page = 'Serviços - '.$title;
            $classOnBody = 'p-inner';
            break;

        // 404
        default :
            header("HTTP/1.0 404 Not Found");
            $file = 'page_404.php';
            $title_page = 'Página não encontrada - '.$title;
            break;
    }
?>