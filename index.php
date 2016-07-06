<?php /* Template Name: Homepage */ ?>

<?php get_header(); ?>

<a href="#whatismoabi" class="scroll fa fa-angle-down arrow" id="whatismoabi"></a>
<div class="header" >
  <div class="row" >
    <div class="large-12 columns text-center">
      <h1 class="animated fadeInDown" id="intro"><?php the_field('main_title'); ?></h1>
      <h2 class="animated fadeInDown"><?php the_field('main_subline'); ?></h2>
      <a href="/about"><button class="animated fadeInDown"> Learn More</button></a>
    </div>
  </div>
</div>

<div class="dark" >
  <div class="row wp1">
    <h1><?php the_field('second_main'); ?></h1>
    <p class="headline"><?php the_field('second_p'); ?></p>
    <a href="https://tasks.mapforenvironment.org"><button class="animated fadeInDown"> Start Mapping</button></a>
    </div>
  </div>

</div>


<div class="content">
  <div class="row text-center wp2">
    <h1>Projects</h1>
    <p class="headline">Map for Environment...<a href="mailto:info@mapforenvironment.org">get in touch!</a> </p>
  </div>
</div>

<div class="work">

  <figure class="large-4 columns">
    <img src="<?php bloginfo('template_directory'); ?>/img/moabi.jpg" >
    <a href="http://rdc.moabi.org/en/" target="_blank"><figcaption>
      <h3>A collaborative mapping initiative to monitor natural resources in DRC and strengthen REDD+ safeguards</h3>
    </figcaption></a>
  </figure>
  <figure class="large-4 columns">
    <img src="<?php bloginfo('template_directory'); ?>/img/logging.jpg" >
    <a href="http://loggingroads.org/" target="_blank"><figcaption>
      <h3>A joint initiative with the World Resource Institute to map all the logging roads in the Congo Basin using crowdsourcing</h3>
    </figcaption></a>
  </figure>
  <figure class="large-4 columns">
    <img src="<?php bloginfo('template_directory'); ?>/img/maphubs.jpg" >
    <a href="https://maphubs.com" target="_blank"><figcaption>
      <h3>A home for the world's open map data and an easy tool for making and sharing maps</h3>
    </figcaption></a>
  </figure>

</div>

<div class="content">
  <div class="row text-center wp2">
  <a href="/portfolio"><button>View More</button></a>
  </div>
</div>

<div class="content">
  <div class="row text-center wp2">
    <h1>News</h1>
    <p class="headline">Latest news about Map for Environment</p>
  </div>
</div>
<div class="news">

  <?php query_posts('cat=1&posts_per_page=3'); if (have_posts()) : while (have_posts()) : the_post(); ?>

        <div class="large-4 columns">
            <a href="<?php the_permalink() ?>">
              <section>
                <h3><?php the_title(); ?></h3>
                <span><p><?php the_time('F jS, Y') ?></p></span>
                <p><?php the_excerpt(); ?></p>
              </section>
            </a>

         </div>

        <?php endwhile; else: ?>

  <p>Sorry, no posts to list</p>

<?php endif; ?>
  <div class="large-12 columns text-center" style="padding-top:60px;">
  <a href="/news"><button>View More</button></a>
  </div>

</div>

<?php get_footer(); ?>
