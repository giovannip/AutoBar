<div class="pedidos form">
<?php echo $this->Form->create('Pedido'); ?>
	<fieldset>
		<legend><?php echo __('Add Pedido'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('produto_id');
		echo $this->Form->input('mesa_id');
		echo $this->Form->input('status_pedido_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Pedidos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Produtos'), array('controller' => 'produtos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Produto'), array('controller' => 'produtos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Mesas'), array('controller' => 'mesas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mesa'), array('controller' => 'mesas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Status Pedidos'), array('controller' => 'status_pedidos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Status Pedido'), array('controller' => 'status_pedidos', 'action' => 'add')); ?> </li>
	</ul>
</div>
