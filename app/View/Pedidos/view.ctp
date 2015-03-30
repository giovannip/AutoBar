<div class="pedidos view">
<h2><?php echo __('Pedido'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($pedido['Pedido']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($pedido['Pedido']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($pedido['Pedido']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Produto'); ?></dt>
		<dd>
			<?php echo $this->Html->link($pedido['Produto']['name'], array('controller' => 'produtos', 'action' => 'view', $pedido['Produto']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mesa'); ?></dt>
		<dd>
			<?php echo $this->Html->link($pedido['Mesa']['id'], array('controller' => 'mesas', 'action' => 'view', $pedido['Mesa']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status Pedido'); ?></dt>
		<dd>
			<?php echo $this->Html->link($pedido['StatusPedido']['name'], array('controller' => 'status_pedidos', 'action' => 'view', $pedido['StatusPedido']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Pedido'), array('action' => 'edit', $pedido['Pedido']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Pedido'), array('action' => 'delete', $pedido['Pedido']['id']), array(), __('Are you sure you want to delete # %s?', $pedido['Pedido']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Pedidos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pedido'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Produtos'), array('controller' => 'produtos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Produto'), array('controller' => 'produtos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Mesas'), array('controller' => 'mesas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mesa'), array('controller' => 'mesas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Status Pedidos'), array('controller' => 'status_pedidos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Status Pedido'), array('controller' => 'status_pedidos', 'action' => 'add')); ?> </li>
	</ul>
</div>
