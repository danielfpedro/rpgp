<ul class="nav nav-pills nav-stacked">
	<?php foreach ($categories as $category): ?>
		<li>
			<?= $this->Html->link($category->name, ['controller' => 'Categories', 'action' => 'view', $category->slug]) ?>
		</li>
	<?php endforeach ?>
</ul>