<?php get_header(); ?>

<?php if (have_posts()) : ?>
	<section id="about" class="scrollspy-section padding-xlarge">
		<div class="container">
			<div class="row">

				<div class="col-md-12">

					<div class="section-header">
						<h2 class="section-title"><?php echo get_the_title(); ?></h2>
					</div>
				</div>

			</div>

			<div class="row">

				<?php
				// TODO: Add a check for making the single post full widght if there are no images
				?>

				<?php if (has_post_thumbnail()) : ?>

					<div class="col-md-6">
						<figure class="jarallax-keep-img">
							<?php the_post_thumbnail('post-thumbnail', ['class' => 'jarallax-img single-image', 'title' => 'Feature image']); ?>
						</figure>
					</div>
					<div class="col-md-6 description text-lead">
						<?php the_content(); ?>
					</div>
				<?php endif; ?>
			</div>

		</div>
	</section>

<?php endif; ?>

<?php // @TODO: Use for related posts later on 
?>
<section id="latest-blog" class="scrollspy-section bg-grey padding-large">
	<div class="container">

		<div class="row">

			<div class="col">

				<div class="section-header">
					<div class="title">
						<span>read our blog</span>
					</div>
					<h2 class="section-title">latest blog</h2>
				</div>
			</div>

		</div>

		<div class="row">
			<div class="col-md-12">

				<div class="post-grid">
					<div class="row">

						<div class="col-md-4">

							<article class="post-item">

								<figure>
									<a href="#" class="image-hvr-effect">
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/postimg1.jpg" alt="post" class="post-image">
									</a>
								</figure>

								<div class="post-content">
									<div class="meta-date">Mar 30, 2021</div>
									<h3 class="post-title"><a href="#">modern vibes bedrooms, todays trending
											design</a></h3>
									<p>Lectus molestie id enim ipsum. Netus sed cursus nibh iaculis ipsum turpis
										nulla blandit dui.</p>
								</div>
							</article>

						</div>

						<div class="col-md-4">

							<article class="post-item">
								<figure>
									<a href="#" class="image-hvr-effect">
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/postimg2.jpg" alt="post" class="post-image">
									</a>
								</figure>
								<div class="post-content">
									<div class="meta-date">Mar 29, 2021</div>
									<h3 class="post-title"><a href="#">How to make minimalist living rooms
											pop-out</a></h3>
									<p>Lectus molestie id enim ipsum. Netus sed cursus nibh iaculis ipsum turpis
										nulla blandit dui.</p>
								</div>
							</article>
						</div>

						<div class="col-md-4">
							<article class="post-item">
								<figure>
									<a href="#" class="image-hvr-effect">
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/postimg3.jpg" alt="post" class="post-image">
									</a>
								</figure>
								<div class="post-content">
									<div class="meta-date">Mar 27, 2021</div>
									<h3 class="post-title"><a href="#">how to make your resort that looks
											outstanding</a></h3>
									<p>Lectus molestie id enim ipsum. Netus sed cursus nibh iaculis ipsum turpis
										nulla blandit dui.</p>
								</div>
							</article>
						</div>

					</div>
				</div>

			</div>



		</div>

		<div class="row">
			<div class="col">

				<div class="btn-wrap align-center">
					<a href="#" class="btn btn-xlarge btn-accent btn-rounded">View all blog</a>
				</div>

			</div>
		</div>

	</div>
</section>

<?php get_footer(); ?>