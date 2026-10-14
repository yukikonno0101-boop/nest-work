<?php get_header(); ?>
<main id="main">
  <?php while ( have_posts() ) : the_post(); ?>
    <?php if ( trim( get_the_content() ) ) : ?>
      <?php the_content(); ?>
    <?php else : ?>
      <section class="section container"><h1><?php the_title(); ?></h1></section>
    <?php endif; ?>
  <?php endwhile; ?>
</main>
<?php get_footer(); ?>
