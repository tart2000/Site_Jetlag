<?php snippet('header') ?>
<?php snippet('menu') ?>
<?php snippet('numbers') ?>

	<div class="container text content" role="main">
		<?php echo $page->text()->kirbytext() ?>
		<div class="row mt">
			<?php $counter = 1 ?>
			<?php foreach ($page->children() as $t) : ?> 
				<div class="col-xs-6 <?php e($counter == '2','right') ?>">
					<span class="from">From <?php echo $t->from() ?></span>
					<h2><?php echo $t->title() ?></h2>
					<?php $thecover = $t->coverimage()->toFile(); ?>
					<div class="thumb-image">
						<?php echo thumb($thecover, array('width' => 250, 'height' => 250, 'crop' => true)); ?>
					</div>
					<?php echo $t->text()->kirbytext() ?>
				</div>
				<?php $counter++ ?>
			<?php endforeach ?>
		</div>
	</div> <!-- // container -->

<?php snippet('footer') ?>