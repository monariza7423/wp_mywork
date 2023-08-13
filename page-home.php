<?php get_header(); ?>

<div class="main-visual">
  
</div>

<div class="wrapper">
  <div class="home-works">
    <h2 class="section-title">Works</h2>
    <nav>
      <ul>
      <?php $args = array(
          'category_name' => 'works',
          'posts_per_page' => 3,
        );
      ?>
        <?php $posts = get_posts($args); ?>
        <?php foreach($posts as $post): ?>
          <?php setup_postdata($post); ?>
        <li><img src="<?php the_post_thumbnail_url('full'); ?>" alt=""></li>
        <?php endforeach; ?>
        <?php wp_reset_postdata(); ?>
      </ul>
    </nav>
    <a href="<?php echo esc_url(home_url('/category/works')) ?>" class="link">See more</a>
  </div>
  <div class="home-news">
    <h2 class="section-title">News</h2>
    <dl>
      <?php $args = array (
          'category_name' => 'news',
          'posts_per_page' => 5,
        );
      ?>
      <?php $posts = get_posts($args); ?>
      <?php foreach($posts as $post): ?>
        <?php setup_postdata($post); ?>
      <dt><?php the_time('Y.m.d'); ?></dt>
      <dd><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></dd>
      <?php endforeach; ?>
      <?php wp_reset_postdata(); ?>
    </dl>
    <a href="<?php echo esc_url(home_url('/category/news')) ?>" class="link">see more</a>
  </div>
</div>

<?php get_footer(); ?>
