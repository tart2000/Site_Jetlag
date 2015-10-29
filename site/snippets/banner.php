<a href="<?php echo $day->url() ?>">
	<div class="banners">
		<!-- banners -->

		<!-- MTL image -->
		<?php if ($day->mtlcover() != '') : ?>
			<?php $thecover = $day->mtlcover()->toFile(); ?>
			<div class="banner" style="background-color:<?php echo $day->thecolor() ?>; background-image:url(<?php echo $thecover->url() ?>)">
			</div>
		<?php else : ?>
			<div class="banner" style="background-color:<?php echo $day->thecolor() ?>; background-image:url(<?php echo $site->url() ?>/assets/images/default.jpg)">
			</div>
		<?php endif ?>

		<!-- Mexico image -->
		<?php if ($day->mxcover() != '') : ?>
			<?php $thecover = $day->mxcover()->toFile(); ?>
			<div class="banner second" style="background-color:<?php echo $day->thecolor() ?>; background-image:url(<?php echo $thecover->url() ?>)">
			</div>
		<?php else : ?>
			<div class="banner second" style="background-color:<?php echo $day->thecolor() ?>; background-image:url(<?php echo $site->url() ?>/assets/images/default.jpg)">
			</div>
		<?php endif ?>


		<div class="banner-text">
			<div class="center">
				<h1><?php echo l::get('day') ?> <?php echo $day->num() ?></h1>
				<p><?php echo date('d/m/Y' , $day->date()) ?></p>
			</div>
		</div>

	</div> <!-- // container -->
</a>