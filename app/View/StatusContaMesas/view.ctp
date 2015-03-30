<div class="statusContaMesas view">
<h2><?php echo __('Status Conta Mesa'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($statusContaMesa['StatusContaMesa']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($statusContaMesa['StatusContaMesa']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($statusContaMesa['StatusContaMesa']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($statusContaMesa['StatusContaMesa']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Status Conta Mesa'), array('action' => 'edit', $statusContaMesa['StatusContaMesa']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Status Conta Mesa'), array('action' => 'delete', $statusContaMesa['StatusContaMesa']['id']), array(), __('Are you sure you want to delete # %s?', $statusContaMesa['StatusContaMesa']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Status Conta Mesas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Status Conta Mesa'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Conta Mesas'), array('controller' => 'conta_mesas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Conta Mesa'), array('controller' => 'conta_mesas', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Conta Mesas'); ?></h3>
	<?php if (!empty($statusContaMesa['ContaMesa'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Mesa Id'); ?></th>
		<th><?php echo __('Status Conta Mesa Id'); ?></th>
		<th><?php echo __('Valor'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($statusContaMesa['ContaMesa'] as $contaMesa): ?>
		<tr>
			<td><?php echo $contaMesa['id']; ?></td>
			<td><?php echo $contaMesa['created']; ?></td>
			<td><?php echo $contaMesa['modified']; ?></td>
			<td><?php echo $contaMesa['mesa_id']; ?></td>
			<td><?php echo $contaMesa['status_conta_mesa_id']; ?></td>
			<td><?php echo $contaMesa['valor']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'conta_mesas', 'action' => 'view', $contaMesa['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'conta_mesas', 'action' => 'edit', $contaMesa['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'conta_mesas', 'action' => 'delete', $contaMesa['id']), array(), __('Are you sure you want to delete # %s?', $contaMesa['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Conta Mesa'), array('controller' => 'conta_mesas', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
