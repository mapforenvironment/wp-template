<?php /* Template Name: GetStarted */ ?>

<?php get_header(); ?>

<div class="headerpg" >
  <div class="row" >
  </div>
</div>

<div class="content" style="padding-top: 0px; padding-bottom: 20px;">
  <div class="row text-center wp2">
    <h1>Get Started</h1>
    <p>To start mapping you will need an OpenStreetMap account and a quick introduction in how to map in OpenStreetMap.</p>
  </div>
</div>
<div class="content" style="padding-top: 0px; padding-bottom: 30px;">
  <div class="row wp2">
    <p> Here are some some tutorials to help you get started:</p>
    <ul>
      <li>Logging Roads Tutorial: <a href="http://loggingroads.org/tutorial/" target="_blank">http://loggingroads.org/tutorial/</a></li>
      <li>Learn OSM Beginner Guide: <a href="http://learnosm.org/en/beginner/start-osm/" target="_blank">http://learnosm.org/en/beginner/start-osm/</a></li>
      <li>MapGive - Learn to Map: <a href="http://mapgive.state.gov/learn-to-map/" target="_blank">http://mapgive.state.gov/learn-to-map/</a></li>
      <li>Missing Maps - How to Contribute: <a href="http://www.missingmaps.org/contribute/#beginner" target="_blank">http://www.missingmaps.org/contribute/#beginner</a></li>
    </ul>
    <p>Additional Resources:</p>
    <ul>
      <li>Learn OSM: <a href="http://learnosm.org/" target="_blank">http://learnosm.org</a></li>
      <li>OpenStreetMap Wiki: <a href="http://wiki.openstreetmap.org/wiki/Main_Page" target="_blank">http://wiki.openstreetmap.org/wiki/Main_Page</a></li>
    </ul>
  </div>
</div>
<div class="content" style="padding-top: 0px; padding-bottom: 0px;">
  <div class="row text-center wp2" style="margin: auto;">
    <button class="beacon-open">Have a Question?</button>
  </div>
</div>

<div class="dark" >
  <div class="row wp1">
    <h1>Ready to Map?</h1>
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

  </div>
  <div class="row wp1" style="padding-top: 15px;">
    <h1>How can I help?</h1>
    <p>Host a mapping party, tell us about other areas to map, or become a partner. Questions? <a class="beacon-open">Send us a message.</a></p>
  </div>
</div>


<?php get_footer(); ?>
