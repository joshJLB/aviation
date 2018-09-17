<?php 
    $title = $instance['title'];
    $phone = $instance['phone_text'];
    $location = $instance['location_text'];
    $email = $instance['email_text'];
    $string = get_field('address', 'option');
    $address = wp_strip_all_tags($string, true);
?>

<div class="contact-container">
    <h2><?=$title; ?></h2>
    <h4><?=get_field('contact_sub_title', 'option'); ?></h4>
    <div class="contact-icon-containers">
      <div class="contact-icon">
        <a href="tel:<?=get_field('phone', 'option'); ?>">
          <i class="fas fa-mobile-alt"></i>
          <p><?=$phone; ?></p>
        </a>
      </div>
      <div class="contact-icon">
        <a href="http://maps.google.com/?q=<?=$address; ?>" target="_blank">
          <i class="fas fa-map-marker-alt"></i>
          <p><?=$location; ?></p>
        </a>
      </div>
      <div class="contact-icon">
        <a href="mailto:<?=get_field('email', 'option'); ?>">
          <i class="fas fa-envelope"></i>
          <p><?=$email; ?></p>
        </a>
      </div>
    </div>
</div>