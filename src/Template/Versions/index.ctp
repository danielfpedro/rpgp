<div class="container container-page">
	<div class="row">
	    <div class="col-md-7">
			<h3>
                <?= $this->Html->image('avatar.jpg', ['style' => 'width: 35px', 'class' => 'img-circle']) ?>
                <?= $this->Html->link($plugin->user->username, []) ?> / <?= $this->Html->link($plugin->name, ['controller' => 'Plugins', 'action' => 'view', $plugin->namespace]) ?> / Releases
            </h3>
            <p class="text-muted">
                <em><?= $plugin->description ?></em>
            </p>
	    </div>
	    <div class="col-md-2 text-right">
	    	<?php if ($authUser): ?>
	    		<?= $this->Html->link('New release', [
	    			'controller' => 'Versions',
	    			'action' => 'add',
	    			$plugin->id
	    		],[
	    			'class' => 'btn btn-default'
	    		]) ?>
	    	<?php endif ?>
	    </div>
	</div>

	<div class="row">
	    <div class="col-md-9">
	    	<hr>
	        <?php foreach ($versions as $version): ?>
	        	<div class="row">
	        		<div class="col-md-3">
	        			<p><?= $this->Time->timeAgoInWords($plugin->created) ?></p>
	        		</div>
	        		<div class="col-md-7">
	        			<strong>v<?= $version->name ?></strong>
	        		</div>
		        	<?php if ($authUser && $authUser['id'] == $plugin->user_id): ?>
		        		<div class="col-md-2 text-right">
				        	<?= $this->Html->link('Edit', [
				        		'controller' => 'Versions',
				        		'action' => 'edit',
				        		$version->id,
				        		$plugin->id
				        	], [
				        		'class' => 'btn btn-default',
				        	]) ?>
			        	</div>
		        	<?php endif ?>
	        	</div>
	        	<div class="row">
	        		<div class="col-md-12 col-md-offset-3">
	        			<p><?= $version->description ?></p>
						<?= $this->Html->link($this->Html->icon('file-archive-o') . ' Download (zip)', [], ['class' => '', 'escape' => false]) ?>
	        		</div>
	        	</div>
	            <hr>
	        <?php endforeach ?>
	    </div>
	    <div class="col-md-3">
	    	<?= $this->element('plugin_menu') ?>
	    </div>
	</div>
</div>