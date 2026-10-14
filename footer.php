  <footer class="site-footer<?php echo is_front_page() ? '' : ' site-footer-subpage'; ?>">
    <div class="container footer-inner">
      <div><a class="footer-logo" href="<?php echo esc_url( nest_work_url( '' ) ); ?>">NEST WORK</a><p>自分らしく働ける、もうひとつの居場所。</p></div>
      <nav aria-label="フッターナビゲーション"><?php nest_work_navigation(); ?></nav>
    </div>
    <div class="container footer-bottom"><small>© NEST WORK</small><small>職業訓練の制作課題として制作した架空の施設サイトです。</small></div>
  </footer>
  <a class="back-to-top" href="#page-top" aria-label="ページ上部へ戻る"><span aria-hidden="true">↑</span></a>
<?php wp_footer(); ?>
</body>
</html>

