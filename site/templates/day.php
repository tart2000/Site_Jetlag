<?php snippet('header') ?>
<?php snippet('menu') ?>
<?php snippet('numbers') ?>

<?php $day = $page ?>
<?php snippet('banner', array('day' => $day)) ?>


<div class="container content" role="main">
	<div class="row">
		<?php $count = 1 ?>
		<?php foreach ($page->children() as $post) : ?>
		<div class="col-xs-6 <?php e($count == '2', 'right') ?>">
    		<?php if ($post->author() != '') : ?>
    			<?php $uid = $post->author(); ?>
    			<?php $team = page('teams')->children()->find($uid); ?>
				<span class="from" style="color:<?php echo $page->thecolor() ?>">From <?php echo $team->from() ?></span></br>
				<h2><?php echo $team->title() ?></h2>
				<?php $thecover = $team->coverimage()->toFile(); ?>
				<div class="thumb-image">
					<a href="<?php echo $site->url() ?>/teams"><?php echo thumb($thecover, array('width' => 150, 'height' => 150, 'crop' => true)); ?></a>
				</div>
			<?php endif ?>

			<h1><?php echo $post->title()->html() ?></h1>
			<?php echo $post->text()->kirbytext() ?>
		</div>
		<?php $count++ ?>
		<?php endforeach ?>
	</div>
</div> <!-- // container -->

<?php if ($page->hasNextVisible()) : ?>
	<?php $day = $page->nextVisible() ?>
	<?php snippet('banner', array('day' => $day)) ?>
<?php else : ?>
	<div class="coming">
		<h1>Coming soon</h1>
	</div>
<?php endif ?>


<?php snippet('footer') ?>