<?php get_header(); ?>

  <div class="wrapper">
    <div class="about">
    <?php if(have_posts()) : ?>
      <?php while(have_posts()) : the_post(); ?>
        <?php get_template_part('content'); ?>
    <?php endwhile; ?>
  <?php else : ?>
    <p><?php __('No Posts Found'); ?></p>
  <?php endif; ?>
  </div>
</div>


<?php get_footer(); ?>
