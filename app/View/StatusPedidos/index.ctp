<div class="statusPedidos index">
    <h2><i class="fa fa-angle-right"></i> <?php echo __('Status Pedidos'); ?></h2>
    <table class="table">
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
            <?php foreach ($statusPedidos as $statusPedido): ?>
                <tr>
                    <td><?php echo h($statusPedido['StatusPedido']['id']); ?>&nbsp;</td>
                    <td><?php echo h($statusPedido['StatusPedido']['name']); ?>&nbsp;</td>
                    <td><?php echo h($statusPedido['StatusPedido']['created']); ?>&nbsp;</td>
                    <td><?php echo h($statusPedido['StatusPedido']['modified']); ?>&nbsp;</td>
                    <td class="actions">


                        <button onclick="window.location.href = '<?php echo Router::url(array('action' => 'view', $statusPedido['StatusPedido']['id'])) ?>'"   class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
                        <button onclick="window.location.href = '<?php echo Router::url(array('action' => 'edit', $statusPedido['StatusPedido']['id'])) ?>'"   class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>

                        <button>
                            <?php
                            echo $this->Form->postLink(
                                    $this->Html->tag('i', '', array('class' => 'fa fa-trash-o')) . "", array('action' => 'delete', $statusPedido['StatusPedido']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $statusPedido['StatusPedido']['id']), array('class' => 'btn btn-danger  btn-xs')
                            );
                            ?>
                        </button>


                        <?php /* echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $statusPedido['StatusPedido']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $statusPedido['StatusPedido']['id']))); */ ?>
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
        <li><?php echo $this->Html->link(__('New Status Pedido'), array('action' => 'add')); ?></li>
        <li><?php echo $this->Html->link(__('New Pedido'), array('controller' => 'pedidos', 'action' => 'add')); ?> </li>
    </ul>
</div>
