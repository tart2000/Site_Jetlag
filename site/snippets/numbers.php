<div class="numbers">
	<div class="center">
		<div class="line"></div>
		<?php $counter = 1 ?>
		<?php foreach (page('diaries')->children() as $d) : ?>
			<?php if ($d->isVisible()) : ?>
			<a href="<?php echo $d->url() ?>">
			<?php endif ?>
				<div class="number" 
					<?php if ($d->isVisible()) : ?>
						style="background-color:<?php echo $d->thecolor() ?>"
					<?php else : ?>	
						style="background-color:#efefef"
					<?php endif ?>
					>
					<span>	
					</span>
				</div>
			<?php if ($d->isVisible()) : ?>
			</a>
			<?php endif ?>
			<?php $counter++ ?>
		<?php endforeach ?>
		<?php for ($i = $counter; $i<= 7; $i++) : ?>
			<span><a href="#"><?php echo $i ?></a></span>
		<?php endfor ?>
	</div>
</div>