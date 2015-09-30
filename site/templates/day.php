<?php snippet('header') ?>
<?php snippet('menu') ?>

	<div class="banners">
		<!-- banners -->
		<?php $counter = 1 ?>
		<?php foreach ($page->children() as $d): ?>
			<?php $thecover = $d->coverimage()->toFile(); ?>
			<div class="banner <?php e($counter == '2', 'second') ?>" style="background-image:url(<?php echo $thecover->url() ?>)">
			</div>
			<?php $counter++ ?>
		<?php endforeach ?>
	</div> <!-- // container -->

	<div class="banner-text">
		<h1><?php echo $page->title() ?></h1>
	</div>

	<div class="container" role="main">
		<div class="row">
			<?php foreach ($page->children() as $post) : ?>
			<div class="col-xs-6">
				<?php $uid = $post->author(); ?>
        		<?php $team = page('teams')->children()->find($uid); ?>
				From <?php echo $team->from() ?></br>
				<strong><?php echo $team->title() ?></strong>
				<?php $thecover = $team->coverimage()->toFile(); ?>
				<div class="thumb-image">
					<?php echo thumb($thecover, array('width' => 150, 'height' => 150, 'crop' => true)); ?>
				</div>
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