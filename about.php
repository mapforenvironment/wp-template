<?php /* Template Name: About */ ?>

<?php get_header(); ?>

<div class="headerpg" >
  <div class="row" >
  </div>
</div>

<div class="content" id="intro">
  <div class="row text-center wp2">
    <h1>Welcome to Map for Environment!</h1>
    <p>From space, the earth’s great forests and rivers still seem intact and flowing. The Congo Basin
rainforest straddles Africa extending across the continent, regulating the regional climate, providing
food and livelihoods, and home to thousands of species such as elephants and chimpanzees. Asia’s
great rivers – the Mekong, Brahmaputra, the Yangtze, etc – meander from the head waters of the
Himalayas before flowing down to the mouths of Vietnam Delta and the Bangladesh, providing water,
food, and energy to hundreds of millions of people.</p>
<p>Zoom in further, the threats to these great natural phenomena become apparent. Forests and rivers
face both seen and unseen dangers. Forests are strafed by logging roads, which cutt deep in intact
forest areas. The loggers extract valuable timber, feeding ever growing demand for tropical
hardwoods. They provide jobs for a few but when poorly managed, leave the forests vulnerable to
hunting and conversion to agriculture. Hot on their heals, comes industrial agriculture, converting the
degraded land into oil palm, cacoa, and eucalyptus plantations. Asia rivers are increasingly being
dammed to provide energy for rapidly cities across the region as well as diverting water to arid regions.
Many of these activities are visible from satellites but unmapped, and their scale and impacts
undocumented. This lack of transparency creates a culture of impunity that allows bad actors to go
unpunished and good actors to go unrecognized. Transparency creates a level playing field.</p>
  </div>

</div>


<div class="grey content" style="padding: 0px">
  <div class="wp2">
    <div class="large-8 columns" style="padding: 75px 60px">
      <h2>The goal</h2>
      <p></p>
      <p>The goal of Map for Environment is to make the invisible visible. We are quite literally aiming to put
logging roads, industrial agriculture, and dams on the map. The availability of high-resolution satellite
information, open data portals such as MapHubs and Global Forest Watch has placed an
unprecedented amount of environmental data in to public domain. OpenStreetMap – the crowdsourced
map of the world – has also built a global community of volunteers mapping the planet. The OSM
community has also pioneered crowd sourced mapping to support humanitarian organizations
responding to disasters such as the Nepal earthquake and the tsunami in the Philippines. Map for
Environment follows this model to map the unmapped but we focus on the humanitarian disaster
slowly unraveling in the world’s critical ecosystems.</p>
    </div>
    <div class="large-4 columns" style="background: url('<?php the_field('a1_image'); ?>');height: 500px;background-size:cover"><img src=""></div>
  </div>
</div>

<div class="content" style="padding: 0px">
  <div class="wp2">

    <div class="large-4 columns" style="background: url('<?php the_field('a2_image'); ?>');height: 500px;background-size:cover"><img src=""></div>
    <div class="large-8 columns" style="padding: 60px">
      <h2>How it works</h2>
      <p></p>
      <p>Map for Environment uses OpenStreepMap tools - combined with satellite imagery and location data of
known logging, industrial agriculture, dam locations – to create detailed maps of infrastructure, size, as
well as communities impacted. The information is mapped by volunteers who we teach how to use
OpenStreetMap to make maps of these activities. Mapped data is shared on OpenStreetMap and also
available on MapHubs – an open data repository where users can combine with other data to make
and publish interactive maps. The Map for Environment team uses both open data and expert advice
to direct efforts to dams, logging roads, and industrial agriculture plantations operating in high risk
areas. This is ensures that we make maps that have impact that will directly support advocates and
agencies on the ground hold operators to account for illegal and unsustainable practices.</p>
    </div>
  </div>
</div>

<div class="content" id="intro">
  <div class="row text-center wp2">
    <h1>Three initiatives</h1>
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

<?php get_footer(); ?>
