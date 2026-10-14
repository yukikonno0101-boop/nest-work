<?php get_header(); ?>
  <main id="main">
    <section class="hero container" aria-labelledby="hero-title">
      <div class="hero-copy">
        <p class="eyebrow">A PLACE TO WORK. A PLACE TO BE.</p>
        <h1 id="hero-title">自分らしく働ける、<br>もうひとつの居場所。</h1>
        <p class="hero-description">仕事にも、勉強にも。<br>心地よく集中できるワークスペース。</p>
        <a class="button" href="<?php echo esc_url( nest_work_url( 'facilities/' ) ); ?>">施設・設備を見る <span aria-hidden="true">→</span></a>
      </div>
      <figure class="hero-photo" role="img" aria-label="NEST WORKの明るいワークスペースと利用風景"><img class="is-active" src="<?php echo esc_url( get_theme_file_uri( 'images/coworking-daylight.webp' ) ); ?>" alt="" width="1122" height="1402" fetchpriority="high"><img src="<?php echo esc_url( get_theme_file_uri( 'images/hero-focus.webp' ) ); ?>" alt="" width="1120" height="1400"><img src="<?php echo esc_url( get_theme_file_uri( 'images/hero-life.webp' ) ); ?>" alt="" width="1120" height="1400"></figure>
    </section>
    <section class="section concept section-tint" aria-labelledby="concept-title">
      <div class="container home-flow-layout">
        <div><p class="eyebrow">01 / CONCEPT</p><h2 id="concept-title">仕事も勉強も、<br>自分らしいスタイルで。</h2><div class="section-copy concept-copy"><p>自宅とは少し違う環境で、目の前のことに向き合う。<br>働き方や過ごし方に合わせて選べる場所を目指します。</p><p>NEST WORKは、会社員、フリーランス、学生など、幅広い方が仕事や学びに取り組めるコワーキングスペースです。</p></div></div>
        <img src="<?php echo esc_url( get_theme_file_uri( 'images/people-work.webp' ) ); ?>" alt="明るい共有デスクで仕事や勉強に取り組む利用者" width="1400" height="933" loading="lazy">
      </div>
    </section>
    <section class="section container" aria-labelledby="features-title">
      <p class="eyebrow">02 / FEATURES</p><h2 id="features-title">心地よく過ごすための、3つの視点。</h2>
      <div class="features-grid">
        <article class="feature-card"><div class="feature-media"><img class="feature-photo" src="<?php echo esc_url( get_theme_file_uri( 'images/workspace-window.webp' ) ); ?>" alt="自然光の入る窓際のデスク" width="1200" height="800" loading="lazy"></div><div class="feature-body"><h3 class="numbered-heading"><span class="section-number">01</span><span>集中できる環境</span></h3><p>仕事や学習に向き合える、落ち着いた空間。</p><a class="text-link" href="<?php echo esc_url( nest_work_url( 'facilities/' ) ); ?>">施設・設備を見る →</a></div></article>
        <article class="feature-card"><div class="feature-media"><img class="feature-photo" src="<?php echo esc_url( get_theme_file_uri( 'images/meeting-wide.webp' ) ); ?>" alt="打ち合わせに使える会議室" width="1200" height="800" loading="lazy"></div><div class="feature-body"><h3 class="numbered-heading"><span class="section-number">02</span><span>選べる使い方</span></h3><p>利用頻度や目的に合わせて、プランを比較。</p><a class="text-link" href="<?php echo esc_url( nest_work_url( 'plans/' ) ); ?>">料金・プランを見る →</a></div></article>
        <article class="feature-card"><div class="feature-media"><img class="feature-photo" src="<?php echo esc_url( get_theme_file_uri( 'images/lounge-reading.webp' ) ); ?>" alt="ひと息つけるラウンジの読書スペース" width="1200" height="800" loading="lazy"></div><div class="feature-body"><h3 class="numbered-heading"><span class="section-number">03</span><span>気軽に立ち寄れる場所</span></h3><p>初めての方にも分かりやすい利用案内。</p><a class="text-link" href="<?php echo esc_url( nest_work_url( 'access/' ) ); ?>">アクセス・FAQを見る →</a></div></article>
      </div>
    </section>
    <section class="section section-tint" aria-labelledby="facilities-title"><div class="container space-row"><img src="<?php echo esc_url( get_theme_file_uri( 'images/lounge.webp' ) ); ?>" alt="自然光が入る明るいラウンジ" width="1200" height="800" loading="lazy"><div><p class="eyebrow">03 / SPACE &amp; FACILITIES</p><h2 id="facilities-title">自分に合う空間を見つける。</h2><p>集中できるワークスペースから、ひと息つけるラウンジまで。目的や気分に合わせて、心地よい場所を選べます。</p><a class="text-link" href="<?php echo esc_url( nest_work_url( 'facilities/' ) ); ?>">施設・設備を見る →</a></div></div></section>
    <section class="section container" aria-labelledby="plans-title"><p class="eyebrow">04 / PLANS &amp; PRICING</p><h2 id="plans-title">あなたのペースに合ったプランを。</h2><p class="sample-notice">表示料金はすべて税込です。</p><div class="pricing-grid"><article class="pricing-card"><p class="eyebrow">DROP-IN</p><h3>ドロップイン</h3><p class="plan-subtitle">必要なときに、必要なだけ。</p><p class="plan-price">550<span>円 / 時間</span></p><p class="plan-cap">1日上限 2,200円</p><ul><li>1時間単位で利用</li><li>月の利用日数に制限なし</li><li>まず試してみたい方に</li></ul></article><article class="pricing-card"><p class="eyebrow">MONTHLY LIGHT</p><h3>月額ライト</h3><p class="plan-subtitle">週に数回、自分の場所を。</p><p class="plan-price">8,800<span>円 / 月</span></p><p class="plan-cap">月8日まで利用可能</p><ul><li>利用日の時間制限なし</li><li>9日目以降はドロップイン料金</li><li>仕事や勉強の習慣づくりに</li></ul></article><article class="pricing-card"><p class="eyebrow">MONTHLY FULL</p><h3>月額フルタイム</h3><p class="plan-subtitle">毎日の仕事に、心地よい拠点を。</p><p class="plan-price">16,500<span>円 / 月</span></p><p class="plan-cap">月の利用日数に制限なし</p><ul><li>利用日の時間制限なし</li><li>営業時間内いつでも利用</li><li>日常的に利用したい方に</li></ul></article></div><a class="text-link" href="<?php echo esc_url( nest_work_url( 'plans/' ) ); ?>">料金・プランを見る →</a></section>
    <section class="section section-tint" aria-labelledby="flow-title"><div class="container home-flow-layout"><div><p class="eyebrow">05 / HOW TO USE</p><h2 id="flow-title">初めてのご利用について。</h2><p>プランを選び、受付で使い方をご確認いただいたら、お好きな席へ。初めての方にも分かりやすくご案内します。</p><a class="text-link" href="<?php echo esc_url( nest_work_url( 'access/' ) ); ?>">よくある質問へ →</a></div><img src="<?php echo esc_url( get_theme_file_uri( 'images/people-lounge.webp' ) ); ?>" alt="ラウンジで休憩しながら和やかに会話する利用者" width="1400" height="933" loading="lazy"></div></section>
    <section class="section container" aria-labelledby="news-title"><p class="eyebrow">06 / NEWS</p><h2 id="news-title">お知らせ</h2>
      
      <?php
      $news = new WP_Query( array( 'post_type' => 'post', 'posts_per_page' => 3, 'ignore_sticky_posts' => true ) );
      if ( $news->have_posts() ) : ?>
      <ul class="news-list">
        <?php while ( $news->have_posts() ) : $news->the_post(); ?>
        <?php get_template_part( 'template-parts/news-item' ); ?>
        <?php endwhile; ?>
      </ul>
      <?php else : ?><p>お知らせはまだありません。</p><?php endif; wp_reset_postdata(); ?><a class="text-link" href="<?php echo esc_url( nest_work_url( 'news/' ) ); ?>">お知らせ一覧を見る →</a></section>
    <section class="access-banner" aria-labelledby="access-title"><div class="container split-layout"><div><p class="eyebrow">07 / ACCESS</p><h2 id="access-title">あなたの次の居場所に。</h2><p>アクセス情報と、初めての方のよくある質問をご案内します。</p></div><a class="button button-light" href="<?php echo esc_url( nest_work_url( 'access/' ) ); ?>">アクセス・FAQを見る →</a></div></section>
  </main>
<?php get_footer(); ?>
