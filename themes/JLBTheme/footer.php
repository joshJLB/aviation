      <footer class="footer">
        <section class="footer-top">
          <div class="footer-one">
            <div class="footer-one-container1">
              <div class="footer-div-one"><?php wp_nav_menu( array( 'menu' => 'footer-one' ) ); ?></div>
              <div class="footer-div-two"><?php wp_nav_menu( array( 'menu' => 'footer-two' ) ); ?></div>
            </div>
            <div class="footer-one-image">
              <img src="<?=get_field('footer_logo', 'option'); ?>" alt="">
            </div>
            <div class="footer-one-container2">
              <div class="footer-div-four"><?php wp_nav_menu( array( 'menu' => 'footer-three' ) ); ?></div>
              <div class="footer-div-five">
                <?=get_field('address', 'option'); ?>
                <a href="tel:<?=get_field('phone', 'option'); ?>"><?=get_field('phone', 'option'); ?></a>
              </div>
            </div>
            <div class="footer-socials">
              <?php if(get_field('social_media', 'option')): ?>
              <?php while( have_rows('social_media', 'option') ): the_row();?>
                <a href="<?=get_sub_field('link_url'); ?>"><i class="fab fa-<?=get_sub_field('platform'); ?>"></i></a>
              <?php endwhile; ?>
              <?php endif; ?>
            </div>
          </div>
          <div class="footer-two">
            <p><?=get_field('footer_disclaimer', 'option'); ?></p>
          </div>
        </section>
        <section class="jlb">
          <p><a href="http://www.jlbworks.com/#latest-work">Web Design</a>, <a href="http://www.jlbworks.com/#services">Marketing</a> & <a href="http://www.jlbworks.com/#contact">Support</a> by <a href="http://www.jlbworks.com/#latest-work">JLB</a></p>
        </section>
        <?php wp_footer(); ?>
      </footer>
    </div> <!-- Closing Header Container -->
  </body>
</html>
