<div class="statusMesas form">
<?php echo $this->Form->create('StatusMesa'); ?>
	<fieldset>
		<legend><?php echo __('Edit Status Mesa'); ?></legend>
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('StatusMesa.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('StatusMesa.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Status Mesas'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Mesas'), array('controller' => 'mesas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mesa'), array('controller' => 'mesas', 'action' => 'add')); ?> </li>
	</ul>
</div>
