<div class="contaMesas view">
<h2><?php echo __('Conta Mesa'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($contaMesa['ContaMesa']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($contaMesa['ContaMesa']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($contaMesa['ContaMesa']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mesa'); ?></dt>
		<dd>
			<?php echo $this->Html->link($contaMesa['Mesa']['id'], array('controller' => 'mesas', 'action' => 'view', $contaMesa['Mesa']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status Conta Mesa'); ?></dt>
		<dd>
			<?php echo $this->Html->link($contaMesa['StatusContaMesa']['name'], array('controller' => 'status_conta_mesas', 'action' => 'view', $contaMesa['StatusContaMesa']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Valor'); ?></dt>
		<dd>
			<?php echo h($contaMesa['ContaMesa']['valor']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Conta Mesa'), array('action' => 'edit', $contaMesa['ContaMesa']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Conta Mesa'), array('action' => 'delete', $contaMesa['ContaMesa']['id']), array(), __('Are you sure you want to delete # %s?', $contaMesa['ContaMesa']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Conta Mesas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Conta Mesa'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Mesas'), array('controller' => 'mesas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mesa'), array('controller' => 'mesas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Status Conta Mesas'), array('controller' => 'status_conta_mesas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Status Conta Mesa'), array('controller' => 'status_conta_mesas', 'action' => 'add')); ?> </li>
	</ul>
</div>
