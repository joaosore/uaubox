<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package jd
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<!-- Google Tag Manager -->

<!-- End Google Tag Manager -->
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<!-- Google Tag Manager (noscript) -->

<!-- End Google Tag Manager (noscript) -->

<header>
    <nav class="container-fluid navbar navbar-expand-md">

      <div class="menu-mobile">
        <div class="bar top"></div>
        <div class="bar right"></div>
        <div class="bar left"></div>
        <div class="bar bottom"></div>
      </div>
      <div class="search-mobile">
        <form id="search">
          <input type="search">
        </form>
      </div>

      <div class="collapse navbar-collapse display-menu" id="conteudoNavbarSuportado">
        <ul class="navbar-nav menu-principal">
          <li class="nav-item active">
            <a class="nav-link" href="/">HOME</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://uaubox.com.br/#/" target="_blank">UAUBOX</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#conteudos">CONTEÚDOS</a>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link" href="#mais-lidas">MAIS LIDAS</a>
          </li> -->
          <li class="nav-item">
            <a class="nav-link" href="#fale-conosco">FALE CONOSCO</a>
          </li>
        </ul>
        <ul class="navbar-nav menu-secundario">
          <li class="search">
            <form id="search">
              <input type="search">
            </form>
          </li>
        </ul>
      </div>

    </nav>
	</header>

  <section id="logo" class="logo">
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-md-12">
          <div class="logo-background">
            <img src="<?php echo get_template_directory_uri() ?>/imgs/logo.svg">
          </div>
        </div>
      </div>
    </div>
  </section>
	
	<div id="barba-wrapper">