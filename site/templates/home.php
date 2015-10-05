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
						<span><?php e($day->isVisible(), $day->num(), '<i class="fa fa-lock"></i>') ?></span>
					</div>
				</a>
			<?php endforeach ?>

		</div>
	</div>
	<div class="center">
		<h1>MTL ⇄ MX</h1>
	</div>
</div>

<?php snippet('footer') ?>