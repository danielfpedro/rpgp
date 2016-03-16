<div class="plugin-card">
	<div class="row">
		<div class="col-md-10">
			<h3>
				<?= $this->Html->link($plugin->user->username . '/' . $plugin->name, [
					'controller' => 'plugins',
					'action' => 'view',
					$plugin->namespace
				]) ?> <!-- <span class="text-muted">[<?= $plugin->rpgmaker_version->name ?>]</span> -->
			</h3>		
			<p class="plugin-card-description">
				<?= $plugin->description ?>
			</p>
			<div>
				<small>
					<span class="glyphicon glyphicon-tags text-muted"></span>
					&nbsp;
					<?php foreach ($plugin->tags_array as $tag): ?>
						<?= $this->Html->link($tag, []) ?>&nbsp;
					<?php endforeach ?>
				</small>
			</div>
			<p class="text-muted">
				<small>
					Updated <?= $this->Time->timeAgoInWords($plugin->created, ['accuracy' => 'day']) ?>
				</small> 
			</p>
		</div>
		<div class="col-md-2 text-right">
			<div class="row">
				<div class="col-md-12">
					<span class="glyphicon glyphicon-star"></span> 382	
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					RPG Maker <strong><ins>MV</ins></strong>
				</div>
			</div>
		</div>
	</div>
</div>