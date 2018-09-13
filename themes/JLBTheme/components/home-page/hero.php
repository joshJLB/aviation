<?php
/*
*
* hero.php
*
*/
?>

<?php
  // Hero Section Variables
  $hero_background = get_field('hero_background');
  // $hero_video = get_field('hero_video');
  // $hero_slider = get_field('hero_slider');
?>
<?php if (!$hero_video && !$hero_slider): ?>
  <section class="hero" style="background-image: url('<?php echo $hero_background['url']; ?>');" title="<?php echo $hero_background['alt']; ?>">
    <!-- Add Content Here for Static Background -->
      <div class="header-content">
          <a class="logo-container" href="<?php echo home_url(); ?>">
            <img class="logo" src="<?=get_field('header_logo', 'option'); ?>"/>
          </a>
      </div>
  <?php endif; ?>
</section>
