<div class="numbers" >
	<div class="center">
		<div class="line"></div>
		<?php $counter = 1 ?>
		<?php foreach (page('diaries')->children() as $d) : ?>
			<?php if ($d->isVisible()) : ?>
			<?php endif ?>
			<?php $active = "";
				  if($page->uri() == $d->id()){
				  	$active = " active";
				  }
			?>
				<a href="<?php e($d->isVisible(),$d->url(), '#')  ?>" class="number<?php echo $active; ?>" data-link="/<?php echo $d->id() ?>"
					<?php if ($d->isVisible()) : ?>
						style="background-color:<?php echo $d->thecolor() ?>"
					<?php else : ?>	
						style="background-color:#efefef"
					<?php endif ?>
					>
					<span class="day"><?php e($d->isVisible(), $d->num(), '<i class="fa fa-lock"></i>') ?></span>
				</a>
			<?php if ($d->isVisible()) : ?>
			<?php endif ?>
			<?php $counter++ ?>
		<?php endforeach ?>
		<?php for ($i = $counter; $i<= 7; $i++) : ?>
			<span><a href="#"><?php echo $i ?></a></span>
		<?php endfor ?>
	</div>
</div>