<?php /* Template Name: Homepage */ ?>

<?php get_header(); ?>

<a href="#contribute" class="scroll fa fa-angle-down arrow" id="contribute"></a>
<div class="header" >
  <div class="row" >
    <div class="large-12 columns text-center">
      <h1 class="animated fadeInDown" id="intro"><?php the_field('main_title'); ?></h1>
      <h2 class="animated fadeInDown"><?php the_field('main_subline'); ?></h2>
      <a href="/about"><button class="animated fadeInDown"> Learn More</button></a>
    </div>
  </div>
  <div class="header-source">Source: Mapbox Satellite</div>
</div>



<div class="content">
  <div class="row text-center wp2">
    <h1>Initiatives</h1>
    <p class="headline">Our goal is to make the invisible visible. We are quite literally aiming to put
logging roads, industrial agriculture, dams, and fracking on the map.</p>
  </div>
</div>

<div class="work">
  <figure class="large-3 columns">
    <a href="http://loggingroads.org">
    <img src="<?php bloginfo('template_directory'); ?>/img/loggingroads.png" >

    <figcaption>
      <h2>Logging Roads</h2>
      <p>Help build a complete map of logging roads in the world's remaining rainforests</p>
    </figcaption>

    </a>
  </figure>
  <figure class="large-3 columns">
    <a href="/agriculture">
      <img src="<?php bloginfo('template_directory'); ?>/img/industrialagriculture.png" >
      <figcaption>
        <h2>Industrial Agriculture</h2>
        <p>Map the impact of industrial agriculture on Congo Basin and Indonesian rainforests</p>
      </figcaption>
    </a>
  </figure>
  <figure class="large-3 columns">
    <a href="/hydropower">
      <img src="<?php bloginfo('template_directory'); ?>/img/asiadams.png" >
      <figcaption>
        <h2>Hydropower in Asia</h2>
        <p>Mapping hydropower existing and planned dams on Asia's great rivers</p>
      </figcaption>
    </a>
  </figure>
  <figure class="large-3 columns">
    <a href="/fracking">
      <img src="<?php bloginfo('template_directory'); ?>/img/fracking.png" >
      <figcaption>
        <h2>Fracking</h2>
        <p>Mapping the boom of hydraulic fracturing gas exploration sites in the U.S.</p>
      </figcaption>
    </a>
  </figure>
</div>

<div class="dark" >
  <div class="row wp1">
    <h1><?php the_field('second_main'); ?></h1>
    <p class="headline"><?php the_field('second_p'); ?></p>
    <div class="large-3 columns">
      <a href="https://loggingroads.org"><button class="animated fadeInDown">Map Logging Roads</button></a>
    </div>
    <div class="large-3 columns">
      <a href="https://tasks.mapforenvironment.org"><button class="animated fadeInDown">Map Agriculture</button></a>
    </div>
    <div class="large-3 columns">
      <a href="https://tasks.mapforenvironment.org"><button class="animated fadeInDown">Map Hydropower</button></a>
    </div>
    <div class="large-3 columns">
      <a href="https://tasks.mapforenvironment.org"><button class="animated fadeInDown">Map Fracking</button></a>
    </div>
    <p>See our <a href="/get-started">Get Started</a> page for more information</p>
  </div>
  <div class="row wp1" style="padding-top: 15px;">
    <h1>How can I help?</h1>
    <p>Host a mapping party, tell us about other areas to map, or become a partner. Questions? <a class="beacon-open">Send us a message.</a></p>
  </div>
</div>

<div class="content">
  <div class="row text-center wp2">
    <h1>News</h1>
    <p class="headline">Latest News from Map for Environment</p>
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
