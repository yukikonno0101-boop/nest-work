<?php get_header(); ?>
<main id="main">
  <section class="section container">
    <header><p class="eyebrow">NEWS</p><h1>お知らせ一覧</h1><p>NEST WORKからのお知らせをお届けします。</p></header>
    <?php if ( have_posts() ) : ?>
      <ul class="news-list">
        <?php while ( have_posts() ) : the_post(); ?>
          <?php get_template_part( 'template-parts/news-item' ); ?>
        <?php endwhile; ?>
      </ul>
      <?php the_posts_pagination( array( 'prev_text' => '前へ', 'next_text' => '次へ' ) ); ?>
    <?php else : ?>
      <p>お知らせはまだありません。</p>
    <?php endif; ?>
    <a class="text-link" href="<?php echo esc_url( home_url( '/' ) ); ?>">ホームに戻る →</a>
  </section>
</main>
<?php get_footer(); ?>
