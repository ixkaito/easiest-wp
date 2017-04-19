<?php get_header(); ?>

	<div class="page-title">
		<h1>Not Found</h1>
	</div>

	<div class="content-area has-side-col">
		<div class="main-column">
			<h1 class="box-heading box-heading-main-col">Not Found</h1>
			<div class="box-content">

				<p>お探しのページは見つかりませんでした。</p>

			</div>

			<?php the_posts_pagination( array(
				'prev_text' => '<img class="arrow" src="' . get_theme_file_uri() . '/images/arrow-left.png" srcset="' . get_theme_file_uri() . '/images/arrow-left@2x.png 2x" alt="前へ">',
				'next_text' => '<img class="arrow" src="' . get_theme_file_uri() . '/images/arrow-right.png" srcset="' . get_theme_file_uri() . '/images/arrow-right@2x.png 2x" alt="次へ">',
			) ); ?>

		</div>

		<?php get_sidebar(); ?>

	</div>

<?php get_footer();
