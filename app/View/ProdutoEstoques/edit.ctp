<div class="produtoEstoques form">
<?php echo $this->Form->create('ProdutoEstoque'); ?>
	<fieldset>
		<legend><?php echo __('Edit Produto Estoque'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('produto_id');
		echo $this->Form->input('quantidade');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('ProdutoEstoque.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('ProdutoEstoque.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Produto Estoques'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Produtos'), array('controller' => 'produtos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Produto'), array('controller' => 'produtos', 'action' => 'add')); ?> </li>
	</ul>
</div>
