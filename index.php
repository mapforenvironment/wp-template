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
    <h1>Initiatives</h1>
  </div>
</div>

<div class="work">
  <figure class="large-4 columns">
    <img src="<?php bloginfo('template_directory'); ?>/img/loggingroads.png" >

    <figcaption>
      <h2>Logging Roads</h2>
      <p>In partnership with Global Forest Watch, The award winning Logging Roads initiative
      (<a href="http://loggingroads.org">loggingroads.org</a>) aims to build a complete and dynamic map of all the world’s logging roads,
      particularly focused in the tropics. With the support of volunteers, Logging Roads has already mapped
      more than 30,000 roads with over 12,000 user edits in the Congo Basin. This data supports forest
      monitors identify violations by logging companies, encroachment into indigenous people’s territories,
      and risks to wildlife conservation.</a></p>
    </figcaption>
  </figure>
  <figure class="large-4 columns">
    <img src="<?php bloginfo('template_directory'); ?>/img/industrialagriculture.png" >
    <figcaption>
      <h2>Industrial Agriculture</h2>
      <p>Map for Environment aims to map all industrial agriculture operating in or near the tropics with a
        specific focus on oil palm in Indonesia and the Congo Basin. Oil palm plantations, in particular,have
        decimated rainforest in Sumatra and Borneo, creating conflicts with indigenous communities and
        clearing habitat for the endanger orangutan and tiger populations. But despite their enormous impact,
        very few plantations and their associated infrastructure such as mills have been mapped.</p>
    </figcaption>
  </figure>
  <figure class="large-4 columns">
    <img src="<?php bloginfo('template_directory'); ?>/img/asiadams.png" >
    <figcaption>
      <h2>Hydropower in Asia</h2>
      <p>Mapping hydropower dam sites and at risk areas upstream helps us understand the potential impact of new dams.</p>
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
