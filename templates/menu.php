<nav>
	<ul>
	<?php foreach($pages->visible() as $p): ?>
		<li><a<?php echo $p->active() ? ' class="active"' : '' ?> href="<?php echo $p->url() ?>"><?php echo html($p->title()) ?></a></li>
	<?php endforeach ?>
	</ul>
</nav>
