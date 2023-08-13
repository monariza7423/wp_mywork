<?php get_header(); ?>

<main>
  <div class="single wrapper">
    <h1 class="article-title"><?php the_title(); ?></h1>
    <p class="time"><?php the_time('Y.m.d'); ?></p>
    <div class="content pc_display">
      <?php the_content(); ?>
    </div>
    <a href="<?php echo esc_url(home_url('/category/news')) ?>" class="link">一覧に戻る</a>
  </div>
</main>

<?php get_footer(); ?>