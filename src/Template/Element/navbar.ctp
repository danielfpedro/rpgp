
<div class="navbar navbar-default">
	<div class="container">
		<div class="navbar-right">
			<?= $this->Html->link('Adicionar Plugin', [
				'controller' => 'Plugins',
				'action' => 'add'
			], [
				'class' => 'btn btn-primary navbar-btn'
			]) ?>
		</div>
		<div class="navbar-right">
			<?php if ($authUser): ?>
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
							<?= $this->Html->link('Meus Plugins', [
								'controller' => 'Plugins',
								'action' => 'add'
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
			<?php endif ?>
		</div>
	</div>
</div>