<div class="statusContaMesas form">
<?php echo $this->Form->create('StatusContaMesa'); ?>
	<fieldset>
		<legend><?php echo __('Add Status Conta Mesa'); ?></legend>
	<?php
		echo $this->Form->input('name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Status Conta Mesas'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Conta Mesas'), array('controller' => 'conta_mesas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Conta Mesa'), array('controller' => 'conta_mesas', 'action' => 'add')); ?> </li>
	</ul>
</div>
