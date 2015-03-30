<div class="statusMesas view">
<h2><?php echo __('Status Mesa'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($statusMesa['StatusMesa']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($statusMesa['StatusMesa']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($statusMesa['StatusMesa']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($statusMesa['StatusMesa']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Status Mesa'), array('action' => 'edit', $statusMesa['StatusMesa']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Status Mesa'), array('action' => 'delete', $statusMesa['StatusMesa']['id']), array(), __('Are you sure you want to delete # %s?', $statusMesa['StatusMesa']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Status Mesas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Status Mesa'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Mesas'), array('controller' => 'mesas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mesa'), array('controller' => 'mesas', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Mesas'); ?></h3>
	<?php if (!empty($statusMesa['Mesa'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Status Mesa Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($statusMesa['Mesa'] as $mesa): ?>
		<tr>
			<td><?php echo $mesa['id']; ?></td>
			<td><?php echo $mesa['created']; ?></td>
			<td><?php echo $mesa['modified']; ?></td>
			<td><?php echo $mesa['status_mesa_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'mesas', 'action' => 'view', $mesa['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'mesas', 'action' => 'edit', $mesa['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'mesas', 'action' => 'delete', $mesa['id']), array(), __('Are you sure you want to delete # %s?', $mesa['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Mesa'), array('controller' => 'mesas', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
