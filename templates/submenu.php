<?php
$open = $pages->active(1);
$items = $open ? $open->children()->visible() : false;
?>
<?php if($items && $items->size()): ?>
<nav id="sub">
	<ul>
	<?php foreach($items as $item): ?>
		<li><a<?php echo $item->active() ? ' class="active"' : '' ?> href="<?php echo $item->url() ?>"><?php echo html($item->title()) ?></a></li>
	<?php endforeach ?>
	</ul>
</nav>
<?php endif ?>
