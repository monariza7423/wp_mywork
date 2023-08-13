<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>My Work</title>
	<?php wp_head(); ?>
</head>
<body>
	<header>
		<div class="site-title">
			<a href="<?php echo esc_url(home_url('/')) ?>">
				<img src="<?php echo esc_url(get_theme_file_uri('img/logo.svg')) ?>" alt="my work">
			</a>
		</div>
		<nav>
			<ul>
				<li><a href="<?php echo esc_url(home_url('/about')) ?>">About</a></li>
				<li><a href="<?php echo esc_url(home_url('/category/works')) ?>">Works</a></li>
				<li><a href="<?php echo esc_url(home_url('/category/news')) ?>">News</a></li>
				<li><a href="<?php echo esc_url(home_url('/contact')) ?>">Contact</a></li>
			</ul>
		</nav>
	</header>