<div class="produtoEstoques view">
<h2><?php echo __('Produto Estoque'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($produtoEstoque['ProdutoEstoque']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($produtoEstoque['ProdutoEstoque']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($produtoEstoque['ProdutoEstoque']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Produto'); ?></dt>
		<dd>
			<?php echo $this->Html->link($produtoEstoque['Produto']['name'], array('controller' => 'produtos', 'action' => 'view', $produtoEstoque['Produto']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Quantidade'); ?></dt>
		<dd>
			<?php echo h($produtoEstoque['ProdutoEstoque']['quantidade']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Produto Estoque'), array('action' => 'edit', $produtoEstoque['ProdutoEstoque']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Produto Estoque'), array('action' => 'delete', $produtoEstoque['ProdutoEstoque']['id']), array(), __('Are you sure you want to delete # %s?', $produtoEstoque['ProdutoEstoque']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Produto Estoques'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Produto Estoque'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Produtos'), array('controller' => 'produtos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Produto'), array('controller' => 'produtos', 'action' => 'add')); ?> </li>
	</ul>
</div>
