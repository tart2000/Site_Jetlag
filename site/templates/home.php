<?php snippet('header') ?>

<div id="home">
	<?php snippet('menu') ?>
	<div class="center">
		<h1>MTL ⇄ MX</h1>
	</div>

	<div class="container">
		<div class="h-nums">
			<div class="h-line"></div>
			<?php $counter = 1 ?>
			<?php foreach (page('diaries')->children() as $day) : ?>
				<a href="<?php e($day->isVisible(),$day->url()) ?>" style="color: <?php e($day->isVisible(), $day->thecolor(), '#c6c6c6')  ?>">
					<div class="h-num" >
						<span><?php e($day->isVisible(), $counter, '<i class="fa fa-lock"></i>') ?></span>
					</div>
				</a>
				<?php $counter++ ?>
			<?php endforeach ?>

		</div>
	</div>
</div>

<?php snippet('footer') ?>