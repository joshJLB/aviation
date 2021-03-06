<?php
/*
  Template Name: Home Page
  front-page.php
*/
get_header(); ?>

<main id="home">

  <?php get_template_part('components/home-page/hero'); ?>
  <!-- Or, nah -->

  <!-- Continue Sections -->

  <section class="one">
    <div class="one-container">
      <div class="tab-container">
        <?php
          $count = 0; 
          $count2 = 0;
        ?>
        <ul class="nav nav-tabs" role="tablist">

        <?php if(get_field('one_repeater')): ?>
        <?php while( have_rows('one_repeater') ): the_row(); ?>

          <?php 
            $count++;
          ?>
            <li class="nav-item">
              <a class="nav-link <?php if($count == 1) { echo 'active'; }; ?>" data-toggle="tab" href="#tab-<?php echo $count; ?>" role="tab">
                <?=get_sub_field('one_tab_title'); ?>
              </a>
            </li>
          <?php endwhile; ?>
          <?php endif; ?>
        </ul>

        <div class="tab-content">
        
          <?php if(get_field('one_repeater')): ?>
          <?php while( have_rows('one_repeater') ): the_row(); ?>
            
            <?php
              $count2++;
            ?>

            <div class="tab-pane <?php if($count2 == 1) { echo 'active'; }; ?>" id="tab-<?php echo $count2; ?>" role="tabpanel">
              <div class="content-holder">
                <h2><?=get_sub_field('one_content_title'); ?></h2>
                <p><?=get_sub_field('one_content_body'); ?></p>
                <a href="<?=get_sub_field('one_link_url'); ?>"><?=get_sub_field('one_link_text'); ?></a>
              </div>
            </div>
          <?php endwhile; ?>
          <?php endif; ?>
        </div>
    </div>
  </section>
  
  <section class="two">
    <div class="two-container">
      <div class="two-left" style="background-image: url(<?=get_field('two_image'); ?>);">
        <img class="two-owner-image" src="<?=get_field('two_owner_image'); ?>" alt="">
      </div>
      <div class="two-right">
        <h2><?=get_field('two_title'); ?></h2>
        <?=get_field('two_content'); ?>
        <p class="two-owner-text">
          <?=get_field('two_owner'); ?>
          <img class="two-signature" src="<?=get_field('two_signature'); ?>" alt="">
        </p>
      </div>
    </div>
  </section>

  <section class="three">
    <div class="three-container">
      <div class="three-left">
        <h2><?=get_field('three_title'); ?></h2>
        <div class="three-content">
          <?php if(get_field('three_repeater')): ?>
          <?php while( have_rows('three_repeater') ): the_row();?>
            <div class="slide">
              <i class="fal fa-angle-right"></i><p><?=get_sub_field('repeater_item'); ?></p>
            </div>
          <?php endwhile; ?>
          <?php endif; ?>
        </div>
        <div class="three-link">
          <a href="<?=get_field('three_link_url'); ?>"><?=get_field('three_link_text'); ?></a>
          <i class="fal fa-angle-right three-link-arrow"></i>
        </div>
      </div>
      <div class="three-right" style="background-image: url(<?=get_field('three_image'); ?>);">
        <div class="overlay2"></div>
      </div> 
    </div>
  </section>

  <section class="four">
    <div class="four-container" style="background-image: url(<?=get_field('four_image'); ?>);">
      <h2><?=get_field('four_title'); ?></h2>
      <p><?=get_field('four_content'); ?></p>
    </div>
  </section>

</main>

<?php get_footer();
