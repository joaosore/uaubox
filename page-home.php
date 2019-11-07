<?php
/**
 * 
 * Template Name: Home
 *
 * @package jd
 *
 */

get_header(); 

?>

<div class="barba-container" data-namespace="pagehome">
	<div id="body-class" <?php body_class(); ?>></div>

  <section id="home" class="home">
    <div class="owl-carousel owl-theme">
      <?php foreach(get_banners() as $item) { ?>
        <div class="home-background item" style="background-image: url(<?php echo $item->img ?>);">
          <div class="home-box">
            <div class="box">
              <h1><?php echo $item->titulo ?></h1>
              <?php echo $item->descricao ?>
              <a href="<?php echo $item->botao['url'] ?>" target="<?php echo $item->botao['target'] ?>">
                <span><?php echo $item->botao['title'] ?></span>
              </a>
            </div>
          </div>
        </div>
      <?php } ?>
    </div>
  </section>

  <section id="conteudos" class="conteudos">
    <div class="conteudos-titulo">
      <p><span>ÚLTIMAS NOTICIAS</span></p>
    </div>
    <div class="noticias-box">
      
    </div>
    <div class="botao-conteudos">
      <span>AS MAIS ANTIGAS</span>
    </div>
  </section>

  <!-- <section id="mais-lidas" class="mais-lidas">
    <div class="mais-lidas-titulo">
      <p><span>AS MAIS LIDAS</span></p>
    </div>
    <div class="noticias-mais-lidas-box">
      <div class="noticia-mais-lidas">
        <div class="noticia-mais-lidas-box-image">
          <img src="<?php echo get_template_directory_uri() ?>/imgs/skin.svg" alt="noticia-mais-lidas-1">
          <div class="noticia-mais-lidas-box">
            <span>PELE</span>
            <h2>5 MELHORES PRODUTOS PARA CUIDADOS COM A PELE</h2>
            <p>Saiba quais são os melhores produtos para cuidado com a sua pele</p>
            <a>
              <span>LEIA MAIS</span>
            </a>
          </div>
        </div>
      </div>
      <div class="noticia-mais-lidas">
        <div class="noticia-mais-lidas-box-image">
          <img src="<?php echo get_template_directory_uri() ?>/imgs/skin.svg" alt="noticia-mais-lidas-2">
          <div class="noticia-mais-lidas-box">
            <span>MAQUIAGEM</span>
            <h2>OLHO ESFUMADO ARRASADOR</h2>
            <p>Não sabe que make usar na sexta a noite? Veja esse tutorial!</p>
            <a>
              <span>LEIA MAIS</span>
            </a>
          </div>
        </div>
      </div>
      <div class="noticia-mais-lidas">
        <div class="noticia-mais-lidas-box-image">
          <img src="<?php echo get_template_directory_uri() ?>/imgs/skin.svg" alt="noticia-mais-lidas-3">
          <div class="noticia-mais-lidas-box">
            <span>CABELO</span>
            <h2>CUIDADO DOS FIOS NO VERÃO</h2>
            <p>Saiba o que fazer para não danificar os fios no calor</p>
            <a>
              <span>LEIA MAIS</span>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="botao-mais-lidas">
      <a>
        <span>AS MAIS ANTIGAS</span>
      </a>
    </div>
  </section> -->

  <section id="fale-conosco" class="fale-conosco">
    <div class="box-texto">
      <h3>SEJA A PRIMEIRA A SABER DAS NOSSAS NOVIDADES</h3>
      <p>CADASTRE NA NOSSA NEWSLETTER</p>
    </div>
    <div class="box-cadastro">
      <input type="text" class="nome" placeholder="NOME">
      <input type="text" class="email" placeholder="E-MAIL">
      <a>
        <span>CADASTRAR</span>
      </a>
    </div>
  </section>
	
</div>
<?php 

get_footer();