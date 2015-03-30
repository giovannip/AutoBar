<div class="statusContaMesas index">
	<h2><?php echo __('Status Conta Mesas'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($statusContaMesas as $statusContaMesa): ?>
	<tr>
		<td><?php echo h($statusContaMesa['StatusContaMesa']['id']); ?>&nbsp;</td>
		<td><?php echo h($statusContaMesa['StatusContaMesa']['name']); ?>&nbsp;</td>
		<td><?php echo h($statusContaMesa['StatusContaMesa']['created']); ?>&nbsp;</td>
		<td><?php echo h($statusContaMesa['StatusContaMesa']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $statusContaMesa['StatusContaMesa']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $statusContaMesa['StatusContaMesa']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $statusContaMesa['StatusContaMesa']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $statusContaMesa['StatusContaMesa']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Status Conta Mesa'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Conta Mesas'), array('controller' => 'conta_mesas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Conta Mesa'), array('controller' => 'conta_mesas', 'action' => 'add')); ?> </li>
	</ul>
</div>
