<?php
/*
Template Name:Sign up for individuals 
*/
?>
<?php require "vcnSignupIndividuals.php"; ?>

<?php get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">

			<?php
				$wpContactFormObj = new vcnForm();
				$wpContactFormObj->vcnHandleForm();
			?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>

