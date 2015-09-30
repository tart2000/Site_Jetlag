<?php snippet('header') ?>

<div id="home">

	<h1>JETLAG DIARIES LOGO</h1>
	<?php foreach (page('diaries')->children() as $day) : ?>
		<a href="<?php echo $day->url() ?>"><?php echo $day->title() ?></a>
	<?php endforeach ?>
</div>

<?php snippet('footer') ?>