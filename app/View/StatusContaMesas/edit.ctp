<div class="statusContaMesas form">
<?php echo $this->Form->create('StatusContaMesa'); ?>
	<fieldset>
		<legend><?php echo __('Edit Status Conta Mesa'); ?></legend>
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('StatusContaMesa.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('StatusContaMesa.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Status Conta Mesas'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Conta Mesas'), array('controller' => 'conta_mesas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Conta Mesa'), array('controller' => 'conta_mesas', 'action' => 'add')); ?> </li>
	</ul>
</div>
