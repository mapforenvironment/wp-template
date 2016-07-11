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

<div class="dark" >
  <div class="row wp1">
    <h1><?php the_field('second_main'); ?></h1>
    <p class="headline"><?php the_field('second_p'); ?></p>
    <a href="https://tasks.mapforenvironment.org"><button class="animated fadeInDown">Start Mapping</button></a>
    </div>
  </div>
</div>

<div class="content">
  <div class="row text-center wp2">
    <h1>Projects</h1>
  </div>
</div>

<div class="work">
  <figure class="large-4 columns">
    <img src="<?php bloginfo('template_directory'); ?>/img/loggingroads.png" >

    <figcaption>
      <h2>Logging Roads</h2>
      <h3>Logging roads are both an indicator of past forest degradation and future risk of deforestation.</h3>
    </figcaption>
  </figure>
  <figure class="large-4 columns">
    <img src="<?php bloginfo('template_directory'); ?>/img/industrialagriculture.png" >
    <figcaption>
      <h2>Industrial Agriculture</h2>
      <h3>Industrial agricultural such as palm oil is a significant driver of deforestation. Mapping recent activity in Malaysia and Indonsia will help us understand similar patterns emerging in Africa and South America.</h3>
    </figcaption>
  </figure>
  <figure class="large-4 columns">
    <img src="<?php bloginfo('template_directory'); ?>/img/asiadams.png" >
    <figcaption>
      <h2>Hydropower in Asia</h2>
      <h3>Mapping hydropower dam sites and at risk areas upstream helps us understand the potential impact of new dams.</h3>
    </figcaption>
  </figure>

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
