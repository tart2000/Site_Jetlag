<?php snippet('header') ?>
<?php snippet('menu') ?>
<?php snippet('numbers') ?>

	<div class="banners">
		<!-- banners -->
		<?php $counter = 1 ?>
		<?php foreach ($page->children() as $d): ?>
			<?php $thecover = $d->coverimage()->toFile(); ?>
			<div class="banner <?php e($counter == '2', 'second') ?>" style="background-color:<?php echo $page->thecolor() ?>; background-image:url(<?php echo $thecover->url() ?>)">
			</div>
			<?php $counter++ ?>
		<?php endforeach ?>
		<div class="banner-text">
			<div class="center">
				<h1><?php echo $page->title() ?></h1>
				<p><?php echo date('d/m/Y' , $page->date()) ?></p>
			</div>
		</div>

	</div> <!-- // container -->


	<div class="container" role="main">
		<div class="row">
			<?php $count = 1 ?>
			<?php foreach ($page->children() as $post) : ?>
			<div class="col-xs-6 <?php e($count == '2', 'right') ?>">
				<?php $uid = $post->author(); ?>
        		<?php $team = page('teams')->children()->find($uid); ?>
				<span style="color:<?php echo $page->thecolor() ?>">From <?php echo $team->from() ?></span></br>
				<strong><?php echo $team->title() ?></strong>
				<?php $thecover = $team->coverimage()->toFile(); ?>
				<div class="thumb-image">
					<a href="<?php echo $site->url() ?>/teams"><?php echo thumb($thecover, array('width' => 150, 'height' => 150, 'crop' => true)); ?></a>
				</div>
				<h1><?php echo $post->title()->html() ?></h1>
				<?php echo $post->text()->kirbytext() ?>
			</div>
			<?php $count++ ?>
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