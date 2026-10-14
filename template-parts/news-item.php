<li>
  <time datetime="<?php echo esc_attr( get_the_date( 'c' ) ); ?>"><?php echo esc_html( get_the_date( 'Y.m.d' ) ); ?></time>
  <span class="news-category"><?php $categories = get_the_category(); echo esc_html( $categories ? $categories[0]->name : 'お知らせ' ); ?></span>
  <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?> <span aria-hidden="true">→</span></a></h3>
</li>
