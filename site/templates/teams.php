<?php snippet('header') ?>
<?php snippet('menu') ?>

	<div class="container text" role="main">
		<h1><?php echo $page->title()->html() ?></h1>
		<?php echo $page->text()->kirbytext() ?>
		<div class="row">
			<?php foreach ($page->children() as $t) : ?> 
				<div class="col-xs-6">
					<p>From <?php echo $t->from() ?></p>
					<h1><?php echo $t->title() ?></h1>
					<?php $thecover = $t->coverimage()->toFile(); ?>
					<div class="thumb-image">
						<?php echo thumb($thecover, array('width' => 250, 'height' => 250, 'crop' => true)); ?>
					</div>
					<?php echo $t->text()->kirbytext() ?>
				</div>
			<?php endforeach ?>
		</div>
	</div> <!-- // container -->

<?php snippet('footer') ?>