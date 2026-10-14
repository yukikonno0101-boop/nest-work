<?php get_header(); ?>
<main id="main">
  <?php while ( have_posts() ) : the_post(); ?>
    <article class="section container news-article">
      <header>
        <p class="eyebrow">NEWS</p>
        <div class="news-meta"><time datetime="<?php echo esc_attr( get_the_date( 'c' ) ); ?>"><?php echo esc_html( get_the_date( 'Y.m.d' ) ); ?></time><span class="news-category"><?php $categories = get_the_category(); echo esc_html( $categories ? $categories[0]->name : 'お知らせ' ); ?></span></div>
        <h1><?php the_title(); ?></h1>
      </header>
      <div class="news-body">
        <?php the_content(); ?>
        <?php wp_link_pages(); ?>
      </div>
      <a class="text-link" href="<?php echo esc_url( nest_work_url( 'news/' ) ); ?>">お知らせ一覧に戻る →</a>
    </article>
  <?php endwhile; ?>
</main>
<?php get_footer(); ?>
