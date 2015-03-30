<div class="produtoEstoques index">
	<h2><?php echo __('Produto Estoques'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('produto_id'); ?></th>
			<th><?php echo $this->Paginator->sort('quantidade'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($produtoEstoques as $produtoEstoque): ?>
	<tr>
		<td><?php echo h($produtoEstoque['ProdutoEstoque']['id']); ?>&nbsp;</td>
		<td><?php echo h($produtoEstoque['ProdutoEstoque']['created']); ?>&nbsp;</td>
		<td><?php echo h($produtoEstoque['ProdutoEstoque']['modified']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($produtoEstoque['Produto']['name'], array('controller' => 'produtos', 'action' => 'view', $produtoEstoque['Produto']['id'])); ?>
		</td>
		<td><?php echo h($produtoEstoque['ProdutoEstoque']['quantidade']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $produtoEstoque['ProdutoEstoque']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $produtoEstoque['ProdutoEstoque']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $produtoEstoque['ProdutoEstoque']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $produtoEstoque['ProdutoEstoque']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Produto Estoque'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Produtos'), array('controller' => 'produtos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Produto'), array('controller' => 'produtos', 'action' => 'add')); ?> </li>
	</ul>
</div>
