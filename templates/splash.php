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
		<div class="logo-wrapper">
			<?php $logo = get_field('logo'); ?>
			<img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>">
		</div>
	</body>
</html>
