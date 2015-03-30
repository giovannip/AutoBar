<div class="mesas view">
<h2><?php echo __('Mesa'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($mesa['Mesa']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($mesa['Mesa']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($mesa['Mesa']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status Mesa'); ?></dt>
		<dd>
			<?php echo $this->Html->link($mesa['StatusMesa']['name'], array('controller' => 'status_mesas', 'action' => 'view', $mesa['StatusMesa']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Mesa'), array('action' => 'edit', $mesa['Mesa']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Mesa'), array('action' => 'delete', $mesa['Mesa']['id']), array(), __('Are you sure you want to delete # %s?', $mesa['Mesa']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Mesas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mesa'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Status Mesas'), array('controller' => 'status_mesas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Status Mesa'), array('controller' => 'status_mesas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Pedidos'), array('controller' => 'pedidos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pedido'), array('controller' => 'pedidos', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Pedidos'); ?></h3>
	<?php if (!empty($mesa['Pedido'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Produto Id'); ?></th>
		<th><?php echo __('Mesa Id'); ?></th>
		<th><?php echo __('Status Pedido Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($mesa['Pedido'] as $pedido): ?>
		<tr>
			<td><?php echo $pedido['id']; ?></td>
			<td><?php echo $pedido['created']; ?></td>
			<td><?php echo $pedido['modified']; ?></td>
			<td><?php echo $pedido['produto_id']; ?></td>
			<td><?php echo $pedido['mesa_id']; ?></td>
			<td><?php echo $pedido['status_pedido_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'pedidos', 'action' => 'view', $pedido['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'pedidos', 'action' => 'edit', $pedido['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'pedidos', 'action' => 'delete', $pedido['id']), array(), __('Are you sure you want to delete # %s?', $pedido['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Pedido'), array('controller' => 'pedidos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
