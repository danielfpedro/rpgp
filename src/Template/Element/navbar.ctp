<div class="navbar navbar-default navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
			<?= $this->Html->link('Castle of Plugins', [
				'controller' => 'Site',
				'action' => 'home'
				],
				[
					'class' => 'navbar-brand'
				]
			) ?>
		</div>
		<?php if ($authUser): ?>
<!-- 			<div class="navbar-right">
				<?= $this->Html->link('Adicionar Plugin', [
					'controller' => 'Plugins',
					'action' => 'add'
				], [
					'class' => 'btn btn-default navbar-btn'
				]) ?>
			</div> -->
			<div class="navbar-right">
				<div class="dropdown navbar-btn">
					<a
						href="#"
						class="dropdown-profile dropdown-toggle"
						type="button"
						id="dropdownMenu1"
						data-toggle="dropdown">
						<?= $this->Html->image('avatar.jpg', ['class' => 'img-circle', 'style' => 'width: 35px; margin-right: 5px;']) ?>
						<?= $authUser['name'] ?>
						<span class="caret"></span>
					</a>
					<ul class="dropdown-menu dropdown-menu-right">
						<li>
							<?= $this->Html->link('Criar plugin', [
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
							<?= $this->Html->link('Configurações de perfil e conta', [
								'controller' => 'Users',
								'action' => 'profileSettings'
							]) ?>
						</li>
						<li class="divider"></li>
						<li>
							<?= $this->Html->link('Sair', ['controller' => 'Users', 'action' => 'logout']) ?>
						</li>
					</ul>
				</div>
			</div>
		<?php else: ?>
			<div class="navbar-right">
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
			</div>
		<?php endif ?>
	</div>
</div>