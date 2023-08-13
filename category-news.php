<?php get_header(); ?>

<main>
  <div class="news wrapper">
    <h2 class="page-title">NEWS</h2>

    <?php if(have_posts()): ?>
    <dl>
      <?php while(have_posts()):the_post(); ?>
        <dt><?php the_time('Y.m.d'); ?></dt>
        <dd>
          <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </dd>
      <?php endwhile; ?>
    </dl>
    <?php endif; ?>

    <div class="pagination">
      <?php the_posts_pagination(
        array(
          'prev_text' => '前へ',
          'next_text' => '次へ',
        )
      ); ?>
    </div>
  </div>
</main>

<?php get_footer(); ?>