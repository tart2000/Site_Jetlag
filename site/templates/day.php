<?php snippet('header') ?>
<?php snippet('menu') ?>

	<div class="container-fluid">
		<!-- banners -->
		<h1><?php echo $page->title() ?></h1>
	</div> <!-- // container -->

	<div class="container" role="main">
		<div class="row">
			<?php foreach ($page->children() as $post) : ?>
			<div class="col-xs-6">
				<h1><?php echo $post->title()->html() ?></h1>
				<?php echo $post->text()->kirbytext() ?>
			</div>
			<?php endforeach ?>
		</div>
	</div> <!-- // container -->

	<div class="container-fluid">
		<?php if ($page->hasNextVisible()) : ?>
			<h1><a href="<?php echo $page->nextVisible()->url() ?>"><?php echo $page->nextVisible()->title() ?></a></h1>
		<?php else : ?>
			<h1>Coming soon</h1>
		<?php endif ?>
	</div> <!-- // container -->

<?php snippet('footer') ?>