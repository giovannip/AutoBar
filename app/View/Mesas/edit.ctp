<div class="mesas form">
<?php echo $this->Form->create('Mesa'); ?>
	<fieldset>
		<legend><?php echo __('Edit Mesa'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Mesa.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Mesa.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Mesas'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Pedidos'), array('controller' => 'pedidos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pedido'), array('controller' => 'pedidos', 'action' => 'add')); ?> </li>
	</ul>
</div>
