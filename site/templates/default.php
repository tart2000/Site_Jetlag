<?php snippet('header') ?>
<?php snippet('menu') ?>
<?php snippet('numbers') ?>

	<div class="container text content" role="main">
		<h1><?php echo $page->title()->html() ?></h1>
		<?php echo $page->text()->kirbytext() ?>
	</div> <!-- // container -->

<?php snippet('footer') ?>