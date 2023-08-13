<?php get_header(); ?>

<main>
  <div class="works wrapper">
    <h1 class="page-title">WORKS</h1>

    <?php if (have_posts()): ?>
      <ul class="list">
        <?php while(have_posts()): the_post(); ?>
          <li>
            <img src="<?php the_post_thumbnail_url('full'); ?>" alt="">
            <p class="title"><?php the_title(); ?></p>
            <div class="content">
              <p><?php the_content(); ?></p>
            </div>
          </li>
        <?php endwhile; ?>
      </ul>
    <?php endif; ?>
  </div>
</main>

<?php get_footer(); ?>