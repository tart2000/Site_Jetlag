<?php $team = page('teams')->children()->find($uid); ?>
	<span class="from" style="color:<?php echo $page->thecolor() ?>">From <?php echo $team->from() ?></span></br>
	<h2><?php echo $team->title() ?></h2>
	<?php $thecover = $team->coverimage()->toFile(); ?>
	<div class="thumb-image">
		<a href="<?php echo $site->url() ?>/teams"><?php echo thumb($thecover, array('width' => 150, 'height' => 150, 'crop' => true)); ?></a>
	</div>
	<!-- actual posts -->
	<?php $counter = $page->children()->filterBy('author', '*=', $uid)->count() ?>

	<?php foreach ($page->children()->filterBy('author', '*=', $uid) as $post) : ?>
		<h3><?php echo $post->title()->html() ?></h3>
		<?php echo $post->text()->kirbytext() ?>
		<?php if ($post->hour()!='') : ?>
			<em>Posted : <?php echo $post->hour() ?></em>
		<?php endif ?>
		<?php if ($counter>1) : ?>
			<hr>
		<?php endif ?>
		<?php $counter-- ?>
	<?php endforeach ?>