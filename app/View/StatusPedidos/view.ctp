<div class="statusPedidos view">
<h2><?php echo __('Status Pedido'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($statusPedido['StatusPedido']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($statusPedido['StatusPedido']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($statusPedido['StatusPedido']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($statusPedido['StatusPedido']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Status Pedido'), array('action' => 'edit', $statusPedido['StatusPedido']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Status Pedido'), array('action' => 'delete', $statusPedido['StatusPedido']['id']), array(), __('Are you sure you want to delete # %s?', $statusPedido['StatusPedido']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Status Pedidos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Status Pedido'), array('action' => 'add')); ?> </li>
	</ul>
</div>
