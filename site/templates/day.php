<?php snippet('header') ?>
<?php snippet('menu') ?>
<?php snippet('numbers') ?>

<?php $day = $page ?>
<?php snippet('banner', array('day' => $day)) ?>


<div class="container content" role="main">
	<div class="row">
		
		<div class="col-xs-6"> <!-- Team MTL --> 
			<?php snippet('postcontent', array('day'=>$day, 'uid'=>'montreal')) ?>
		</div> <!-- column 1 -->

		<div class="col-xs-6 right"> <!-- Team Mexico -->
			<?php snippet('postcontent', array('day'=>$day, 'uid'=>'mexico')) ?>
		</div> <!-- second column -->
	</div> <!-- row -->
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