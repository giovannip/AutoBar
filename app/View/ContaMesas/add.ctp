<div class="contaMesas form">
<?php echo $this->Form->create('ContaMesa'); ?>
	<fieldset>
		<legend><?php echo __('Add Conta Mesa'); ?></legend>
	<?php
		echo $this->Form->input('mesa_id');
		echo $this->Form->input('status_conta_mesa_id');
		echo $this->Form->input('valor');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

            <li><?php echo $this->Html->link(__('List Conta Mesas'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Mesas'), array('controller' => 'mesas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mesa'), array('controller' => 'mesas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Status Conta Mesas'), array('controller' => 'status_conta_mesas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Status Conta Mesa'), array('controller' => 'status_conta_mesas', 'action' => 'add')); ?> </li>
	</ul>
</div>
