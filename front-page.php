<?php get_header(); ?>

	<div class="hero"></div>
	<div class="content-area has-side-col">
		<div class="main-column">

			<?php for ( $i = 1; $i <= 5; $i++ ) : ?>

				<?php if ( get_theme_mod( 'front_page_content_' . $i ) ) : ?>

					<?php
					$post = get_post( get_theme_mod( 'front_page_content_' . $i ) );
					setup_postdata( $post );
					?>

					<h1 class="box-heading box-heading-main-col"><?php the_title(); ?></h1>
					<div class="box-content">

						<?php
						$blog_posts_page_id = get_the_ID();

						if ( $blog_posts_page_id === (int) get_option( 'page_for_posts' ) ) :
						?>

							<?php if ( have_posts() ) : ?>

								<ul class="archive">

									<?php while ( have_posts() ) : ?>

									<?php the_post(); ?>

										<li class="item-archive">
											<div class="time-and-thumb-archive">
												<time class="pub-date" datetime="<?php echo get_the_date( DATE_W3C ); ?>"><?php echo get_the_date(); ?></time>
												<?php if ( has_post_thumbnail() ) : ?>
													<p class="thumb thumb-archive"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'easiestwp-thumbnail' ); ?></a></p>
												<?php endif; ?>
											</div>
											<div class="data-archive">
												<p class="list-categories-archive"><?php the_category( ', ' ); ?></p>
												<h2 class="title-archive"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
												<p class="list-tags-archive"><?php the_tags(); ?></p>
											</div>
										</li>

									<?php endwhile; ?>

								</ul>

							<?php else : ?>

								<p>投稿がありません。</p>

							<?php endif; ?>

						<?php else : ?>

							<?php the_content(); ?>

						<?php endif; ?>

					</div>

				<?php endif; ?>

			<?php endfor; ?>

			<?php wp_reset_postdata(); ?>

			<?php the_posts_pagination( array(
				'prev_text' => '<img class="arrow" src="' . get_theme_file_uri() . '/images/arrow-left.png" srcset="' . get_theme_file_uri() . '/images/arrow-left@2x.png 2x" alt="前へ">',
				'next_text' => '<img class="arrow" src="' . get_theme_file_uri() . '/images/arrow-right.png" srcset="' . get_theme_file_uri() . '/images/arrow-right@2x.png 2x" alt="次へ">',
			) ); ?>

		</div>

		<?php get_sidebar(); ?>

	</div>

<?php get_footer();
