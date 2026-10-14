<?php get_header(); ?>
<main id="main">
  <section class="section container">
    <?php if ( have_posts() ) : ?>
      <?php while ( have_posts() ) : the_post(); ?>
        <article <?php post_class(); ?>>
          <h1><?php the_title(); ?></h1>
          <?php the_content(); ?>
        </article>
      <?php endwhile; ?>
      <?php the_posts_pagination(); ?>
    <?php else : ?>
      <h1>ページが見つかりません</h1>
      <p>お探しのページは見つかりませんでした。</p>
      <a class="text-link" href="<?php echo esc_url( home_url( '/' ) ); ?>">ホームへ戻る →</a>
    <?php endif; ?>
  </section>
</main>
<?php get_footer(); ?>
