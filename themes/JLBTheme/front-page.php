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
  
</main>

<?php get_footer();
