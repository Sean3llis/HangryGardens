<?php /* Template Name: Splash Page */ ?>

<?php wp_head(); ?>
<?php $image = get_field('splash_bg'); ?>
<html style="background: url('<?php echo $image['url']; ?>') no-repeat center center fixed;
	-webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  margin-top: 0px !important">
	<body style="background-color: transparent;">


	<div class="row">
		<div class="col-sm-12" style="height: 500px;">
			<div class="logo-wrapper">
				<?php $logo = get_field('logo'); ?>
				<img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>">
				<br/><div class="callout">
					<i class="fa fa-calendar"></i>
					<?php the_field('callout'); ?>
				</div>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>


	<div class="row">
		<div class="col-sm-12">
			<?php get_template_part('partials/gmap'); ?>
		</div>
		<div class="clearfix"></div>
	</div>



	<div class="row">
		<div class="col-sm-12">
			<?php get_template_part('partials/form', 'signup'); ?>
		</div>
		<div class="clearfix"></div>
	</div>


	<div class="row">
		<div class="col-sm-12">
			<?php get_footer(); ?>
		</div>
		<div class="clearfix"></div>
	</div>


	</body>
</html>
