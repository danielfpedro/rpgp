<div class="container">
	<div class="row">
	    <div class="col-md-8">
	    	<h3>
	    		<?= $this->Html->link($plugin->name, ['controller' => 'Plugins', 'action' => 'view', $plugin->slug]) ?>
	    	</h3>
	    	<hr>
	    </div>
	</div>

	<div class="row">
	    <div class="col-md-8">
	    	<?php if ($authUser): ?>
	    		<?= $this->Html->link('new Release', ['controller' => 'Versions', 'action' => 'add', $plugin->id]) ?>
	    	<?php endif ?>
	        <?php foreach ($versions as $version): ?>
	        	<?= $this->Html->link('Edit', [
	        		'controller' => 'Versions',
	        		'action' => 'edit',
	        		$version->id,
	        		$plugin->id
	        	], [
	        		'class' => 'btn btn-default btn-xs pull-right',
	        	]) ?>
	            <h4><?= $version->name ?></h4>
	            <p><?= $version->description ?></p>
	            <hr>
	        <?php endforeach ?>
	    </div>
	</div>
</div>