<?= $this->assign('title', 'Castle of Plugins') ?>
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

    <div class="home-hero">
        <div class="container">
            <h1>
                Go Further <small>Enchant your RPG Maker game with the hotest plugins out there.</small>
            </h1>
        </div>
    </div>

<div class="container container-page" style="width: 800px">

	<div class="row">
		<div class="col-md-112">
			<div class="">
				<h3>
					<span class="glyphicon glyphicon-fire"></span> Trend Plugins
				</h3>
			</div>
			<hr>
			<?php for ($i=0; $i < 10; $i++): ?>
				<?php foreach ($plugins as $plugin): ?>
					<?= $this->element('box_plugin', ['plugin' => $plugin]) ?>
				<?php endforeach ?>
			<?php endfor ?>
		</div>
<!-- 		<div class="col-md-2" style="padding-left: 50px;">
			<?= $this->cell('mainSideMenu') ?>
		</div> -->
	</div>

</div>