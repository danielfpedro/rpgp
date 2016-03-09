<div class="navbar navbar-default navbar-fixed-top">
	<div class="container">
		<p class="navbar-text" style="color: #FFF;">Plugins Castle</p>
		<?php if ($authUser): ?>
<!-- 			<div class="navbar-right">
				<?= $this->Html->link('Adicionar Plugin', [
					'controller' => 'Plugins',
					'action' => 'add'
				], [
					'class' => 'btn btn-default navbar-btn'
				]) ?>
			</div> -->
			<!-- <div class="navbar-right">
				<div class="dropdown">
					<button
						class="btn btn-default dropdown-toggle"
						type="button"
						id="dropdownMenu1"
						data-toggle="dropdown">
						<?= $authUser['name'] ?>
						<span class="caret"></span>
					</button>
					<ul class="dropdown-menu dropdown-menu-right">
						<li>
							<?= $this->Html->link('Configurações de perfil e conta', [
								'controller' => 'Users',
								'action' => 'profileSettings'
							]) ?>
						</li>
						<li>
							<?= $this->Html->link('Meus Plugins', [
								'controller' => 'Users',
								'action' => 'view',
								$authUser['username']
							]) ?>
						</li>
						<li class="divider"></li>
						<li>
							<?= $this->Html->link('Sair', ['controller' => 'Users', 'action' => 'logout']) ?>
						</li>
					</ul>
				</div>
			</div> -->
		<?php else: ?>
			<!-- <div class="navbar-right">
				<?= $this->Html->link('Sign up', [
					'controller' => 'Users',
					'action' => 'add'
				], [
					'class' => 'btn btn-primary navbar-btn'
				]) ?>
				<?= $this->Html->link('Sign in', [
					'controller' => 'Users',
					'action' => 'login'
				], [
					'class' => 'btn btn-default navbar-btn'
				]) ?>
			</div> -->
		<?php endif ?>
	</div>
</div>