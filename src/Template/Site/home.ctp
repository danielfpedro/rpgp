<!-- <div class="row">
	<div class="col-md-12">
		<div class="page-call">
			<h1>Castle of plugins is a RPG Maker package control.</h1>
		</div>
	</div>
</div> -->

<!-- <div class="row">
	<div class="col-md-12">
		<h2 class="">Trend</h2>
	</div>
</div>	 -->

<div class="row">
	<div class="col-md-9">
		<div class="text-center">
			<h4>
				<span class="glyphicon glyphicon-fire"></span> Trend Plugins
			</h4>
			<hr>
		</div>
		<?php for ($i=0; $i < 15; $i++): ?>
			<?php foreach ($plugins as $plugin): ?>
				<div class="plugin-card">
					<div class="row">
						<div class="col-md-10">
							<h3>
								<?= $this->Html->link($plugin->user->username . '/' . $plugin->name, []) ?> <!-- <span class="text-muted">[<?= $plugin->rpgmaker_version->name ?>]</span> -->
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
									Updated <?= $this->Time->timeAgoInWords($plugin->created) ?>
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
			<?php endforeach ?>
		<?php endfor ?>
	</div>
	<div class="col-md-3">
		<?= $this->cell('mainSideMenu') ?>
	</div>
</div>