<?php /* Template Name: Billboard */ ?>

<?php wp_head(); ?>
<?php $image = get_field('splash_bg'); ?>
<html style="background: url('<?php echo $image['url']; ?>') no-repeat center center fixed;
	-webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  margin-top: 0px !important">
	<body style="background-color: transparent;">
		<div class="logo-wrapper">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; endif; ?>
		</div>

		<?php get_template_part('partials/form', 'signup'); ?>

	</body>
</html>
