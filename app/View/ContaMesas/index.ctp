<div class="contaMesas index">
	<h2><?php echo __('Conta Mesas'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('mesa_id'); ?></th>
			<th><?php echo $this->Paginator->sort('status_conta_mesa_id'); ?></th>
			<th><?php echo $this->Paginator->sort('valor'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($contaMesas as $contaMesa): ?>
	<tr>
		<td><?php echo h($contaMesa['ContaMesa']['id']); ?>&nbsp;</td>
		<td><?php echo h($contaMesa['ContaMesa']['created']); ?>&nbsp;</td>
		<td><?php echo h($contaMesa['ContaMesa']['modified']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($contaMesa['Mesa']['id'], array('controller' => 'mesas', 'action' => 'view', $contaMesa['Mesa']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($contaMesa['StatusContaMesa']['name'], array('controller' => 'status_conta_mesas', 'action' => 'view', $contaMesa['StatusContaMesa']['id'])); ?>
		</td>
		<td><?php echo h($contaMesa['ContaMesa']['valor']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $contaMesa['ContaMesa']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $contaMesa['ContaMesa']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $contaMesa['ContaMesa']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $contaMesa['ContaMesa']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
		'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Conta Mesa'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Mesas'), array('controller' => 'mesas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mesa'), array('controller' => 'mesas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Status Conta Mesas'), array('controller' => 'status_conta_mesas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Status Conta Mesa'), array('controller' => 'status_conta_mesas', 'action' => 'add')); ?> </li>
	</ul>
</div>
