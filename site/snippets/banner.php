<a href="<?php echo $day->url() ?>">
	<div class="banners">
		<!-- banners -->
		<?php $counter = 1 ?>
		<?php foreach ($day->children() as $d): ?>
			<?php if ($d->coverimage() != '') : ?>
				<?php $thecover = $d->coverimage()->toFile(); ?>
				<div class="banner <?php e($counter == '2', 'second') ?>" style="background-color:<?php echo $day->thecolor() ?>; background-image:url(<?php echo $thecover->url() ?>)">
				</div>
			<?php elseif ($d->hasImages()) : ?>
				<div class="banner <?php e($counter == '2', 'second') ?>" style="background-color:<?php echo $day->thecolor() ?>; background-image:url(<?php echo $d->images()->first()->url() ?>)">
				</div>
			<?php else : ?>
				<div class="banner <?php e($counter == '2', 'second') ?>" style="background-color:<?php echo $day->thecolor() ?>; background-image:url(<?php echo $site->url() ?>/assets/images/default.jpg)">
				</div>
			<?php endif ?>
			<?php $counter++ ?>
		<?php endforeach ?>
		<div class="banner-text">
			<div class="center">
				<h1><?php echo $day->title() ?></h1>
				<p><?php echo date('d/m/Y' , $day->date()) ?></p>
			</div>
		</div>

	</div> <!-- // container -->
</a>