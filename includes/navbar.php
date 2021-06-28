<nav class="navbar center">
	<?php foreach ($navbar as $link): ?>
		<a href="<?= $link['slug'] ?>" class="navbar-link"><?= $link['name'] ?></a>
	<?php endforeach ?>
</nav>