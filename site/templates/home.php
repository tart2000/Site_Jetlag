<?php snippet('header') ?>

<div id="home">
	<?php snippet('menu') ?>
	<div class="center">
		<img src="<?php echo $site->url() ?>/assets/images/LOGO_home_EN.png"/>
	</div>

	<div class="container">
		<div class="h-nums">
			<div class="h-line"></div>
			<?php foreach (page('diaries')->children() as $day) : ?>
				<a href="<?php e($day->isVisible(),$day->url()) ?>">
					<div class="h-num" style="background-color: <?php e($day->isVisible(), $day->thecolor(), '#c6c6c6')  ?>">
						<?php if ($day->isVisible()) : ?>
							<span><?php echo $day->num() ?></span>
						<?php else : ?>
							<span class="fa fa-lock"></span>
						<?php endif ?>
					</div>
				</a>
			<?php endforeach ?>

		</div>
	</div>
	<?php if (!page('diaries')->hasVisibleChildren()) : ?>
		<div class="center">
			<h1>Coming november 1st</h1>
		</div>
	<?php endif ?>
</div>

<?php snippet('footer') ?>