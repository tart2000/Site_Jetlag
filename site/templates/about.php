<?php snippet('header') ?>
<?php snippet('menu') ?>
<?php snippet('numbers') ?>

	<div class="container text content" role="main">
		<div class="row" id="about">
			<?php echo $page->text()->kirbytext() ?>
		</div>
	</div> <!-- // container -->

<?php snippet('footer') ?>