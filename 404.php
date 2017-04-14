<?php get_header(); ?>

	<div class="page-title">
		<h1>Not Found</h1>
	</div>
	<div class="content-area has-side-col">
		<div class="main-column">
			<h1 class="box-heading box-heading-main-col">Not Found</h1>
			<div class="box-content">

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

			</div>

			<?php the_posts_pagination(); ?>

		</div>

		<?php get_sidebar(); ?>

	</div>

<?php get_footer();
