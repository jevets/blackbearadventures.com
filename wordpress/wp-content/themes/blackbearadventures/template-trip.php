<?php 
/**
 * Template Name: Trip Template
 */
?>


<div class="container">
  <div class="row">

    <?php get_template_part('templates/page-header') ?>

    <div class="col-sm-8">
      <h2>Overview</h2>

      <?php if (get_field('trip_lead_paragraph')): ?>
      <p class="lead"><?php the_field('trip_lead_paragraph') ?></p>
      <?php endif ?>

      <?php if (get_field('trip_overview')): ?>
      <?php the_field('trip_overview') ?>
      <?php endif ?>

      <hr />

      <div class="row">
          <div class="col-sm-4">
            <?php if (get_field('tour_mileage')): ?>
              <h4>Tour Mileage</h4>
              <p class="lead"><span class="label label-primary label-pad"><span class="glyphicon glyphicon-road"></span> <?php the_field('tour_mileage') ?> Miles</span></p>
            <?php endif ?>
          </div>
          <div class="col-sm-4">
            <?php if (get_field('trip_length_days') && get_field('trip_length_nights')): ?>
              <h4>Trip Length</h4>
              <p class="lead"><span class="label label-primary label-pad"><span class="glyphicon glyphicon-time"></span> <?php the_field('trip_length_days') ?> Days/<?php the_field('trip_length_nights') ?> Nights</span></p>
            <?php endif ?>
          </div>
          <div class="col-sm-4">
            <?php if (get_field('trip_origin_location')): ?>
              <h4>Trip Begins</h4>
              <p class="lead"><span class="label label-primary label-pad"><span class="glyphicon glyphicon-map-marker"></span> <?php the_field('trip_origin_location') ?></span></p>
            <?php endif ?>
          </div>
      </div>

      <hr>

      <?php get_template_part('templates/share-this') ?>
    </div>

    <div class="col-sm-4 sidebar">
      <div class="well">
        <h3>Cost</h3>

        <?php if (get_field('trip_cost_double')): ?>
        <p><span class="price">$<?php the_field('trip_cost_double') ?></span><br>
        Double Occupancy</p>
        <?php endif ?>

        <?php if (get_field('trip_cost_single')): ?>
        <p><span class="price">$<?php the_field('trip_cost_single') ?></span><br>
        Single Occupancy</p>
        <?php endif ?>

        <hr />

        <?php if (get_field('trip_deposit')): ?>
        <h4>Deposit Required</h4>
        <p><span class="price">$<?php the_field('trip_deposit') ?></span><br>
        Per person with the remainder due 60 days before the tour start date.</p>
        <hr />
        <?php endif ?>

        <h3><span class="glyphicon glyphicon-calendar"></span> 2014 Dates</h3>
        <h4>June 13-22</h4>
        <hr>
        <p class=""><a class="btn btn-success btn-xl btn-block btn-lg" role="button" href="/reserve/">Sign Up Now &raquo;</a></p>
        <p class="hidden-print"><button class="btn btn-large btn-default btn-block" onClick="window.print()"><span class="glyphicon glyphicon-print"></span> Print Complete Tour Itinerary</button></p>
      </div>
    </div>

  </div>
</div>



<!-- TABS -->
<div class="container">
    <div class="row">
        <ul class="nav nav-tabs">

            <?php if (get_field('trip_gallery')): ?>
              <li class="active"><a href="#photos" data-toggle="tab">Tour Image Gallery</a></li>
            <?php endif ?>

            <?php if (count(get_field('trip_itinerary'))): ?>
              <li><a href="#intinerary" data-toggle="tab">Itinerary</a></li>
            <?php endif ?>

            <?php if (get_field('included')): ?>
              <li><a href="#included" data-toggle="tab">What's Included</a></li>
            <?php endif ?>

            <?php if (get_field('points_of_interest')): ?>
              <li><a href="#interest" data-toggle="tab">Points of Interest</a></li>
            <?php endif ?>
        </ul>
    </div>


    <!-- Tab panes -->
    <div class="tab-content">

      <?php if ($images = get_field('trip_gallery')): ?>
        <div class="tab-pane active" id="photos">
          <h2><?php the_title() ?> Tour Gallery</h2>
          <div class="hidden-print">
            <div class="row">
            <?php foreach ($images as $image): ?>
              <div class="col-xs-12 col-sm-2">
                <div class="gallery-item">
                  <a href="<?php echo $image['url'] ?>">
                    <img src="<?php echo $image['sizes']['thumbnail'] ?>" class="img-responsive" alt="">
                  </a>
                </div>
              </div>
            <?php endforeach ?>
            </div>
          </div>
          <p class="visible-print">For trip photos of the Blue Ridge Parkway Tour, please visit <a href="<?php the_permalink() ?>"><?php the_permalink() ?></a>
        </div><!-- #gallery -->
      <?php endif ?>


      <?php if($days = get_field('trip_itinerary')): ?>
        <div class="tab-pane" id="intinerary">
          <h2>Itinerary</h2>
          <?php foreach ($days as $day): ?>
            <div class="row">
              <div class="col-sm-6">
                <h3><span class="label label-primary">Day <?php echo $day['day'] ?></span> <?php echo $day['title'] ?></h3>
                <div class="itinerary-day-description">
                  <?php echo $day['description'] ?>
                </div>
              </div>
              <div class="col-sm-2">
                <h4><span class="glyphicon glyphicon-cutlery"></span> Meals</h4>
                <?php if (in_array('breakfast', $day['meals'])): ?>
                  <p><span class="label label-default">Breakfast</span></p>
                <?php endif ?>
                <?php if (in_array('lunch', $day['meals'])): ?>
                  <p><span class="label label-default">Lunch</span></p>
                <?php endif ?>
                <?php if(in_array('dinner', $day['meals'])): ?>
                  <p><span class="label label-default">Dinner</span></p>
                <?php endif ?>
              </div>
              <div class="col-sm-2">
                <h4><span class="glyphicon glyphicon-road"></span> Mileage</h4>
                <span class="label label-default"><?php echo $day['mileage'] ?> Miles</span>
              </div>
              <div class="col-sm-2">
                <h4><span class="glyphicon glyphicon-home"></span> Stay</h4>
                <p>
                  <?php if ($day['lodging_name']): ?>

                    <?php if ($day['lodging_link']): ?>
                      <a href="<?php echo $day['lodging_link'] ?>" target="_blank">
                    <?php endif ?>

                    <?php if (count($day['lodging_image'])): ?>
                      <img src="<?php echo $day['lodging_image']['sizes']['thumbnail'] ?>" class="img-responsive hidden-print" alt="<?php echo $day['lodging_name'] ?>">
                      <br>
                    <?php endif ?>
                  
                    <?php echo $day['lodging_name'] ?> 

                    <?php if ($day['lodging_link']): ?>
                      <span class="glyphicon glyphicon-new-window"></span></a>
                    <?php endif ?>

                  <?php endif ?>
                </p>
              </div>
            </div>
            <hr />
          <?php endforeach ?>

        </div><!-- #itinerary -->
      <?php endif ?>

      <?php if ($included = get_field('included')): ?>
        <div class="tab-pane" id="included">
          <h2>Included in the Trip Price</h2>
          <?php foreach ($included as $section): ?>
            <h3><?php echo $section['title'] ?></h3>
            <?php echo $section['content'] ?>
          <?php endforeach ?>
          
          <?php if ($not_included = get_field('not_included')): ?>
            <h2>Not Included</h2>
            <?php the_field('not_included') ?>
          <?php endif ?>
        </div><!-- #included -->
      <?php endif ?>

      <?php if (get_field('points_of_interest')): ?>
        <div class="tab-pane" id="interest">
          <h2>Points of Interest</h2>
          <?php the_field('points_of_interest') ?>
        </div><!-- #interest -->
      <?php endif ?>

    </div>
</div>
<!-- TABS -->
