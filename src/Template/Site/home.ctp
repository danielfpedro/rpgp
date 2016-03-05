<div class="row">
	<div class="col-md-12 text-center">
		<h1>Castle of plugins is a RPG Maker package control.</h1>
		<hr>
	</div>
</div>

<div class="row">
	<div class="col-md-9">
		<h3>Trend</h3>
		<hr>	
		<?php foreach ($plugins as $plugin): ?>
			<div class="plugin-card">
				<div class="row">
					<div class="col-md-10">
						<h3>
							<?= $this->Html->link($plugin->user->username . '/' . $plugin->name, []) ?> <span class="text-muted">[<?= $plugin->rpgmaker_version->name ?>]</span>
						</h3>		
						<p>
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
								Updated <?= $this->Time->timeAgoInWords($plugin->created) ?>
							</small> 
						</p>
					</div>
					<div class="col-md-2 text-muted text-right">
						<span class="glyphicon glyphicon-star"></span> 382
					</div>
				</div>
			</div>
		<?php endforeach ?>
	</div>
	<div class="col-md-2 col-md-offset-1">
		<?= $this->cell('mainSideMenu') ?>
	</div>
</div>