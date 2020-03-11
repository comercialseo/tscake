<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\PzMarca[]|\Cake\Collection\CollectionInterface $pzMarcas
 */
?>
<div class="pzMarcas index content">
    <?= $this->Html->link(__('New Pz Marca'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Pz Marcas') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('pz_marca') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($pzMarcas as $pzMarca): ?>
                <tr>
                    <td><?= $this->Number->format($pzMarca->id) ?></td>
                    <td><?= h($pzMarca->pz_marca) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $pzMarca->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $pzMarca->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $pzMarca->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pzMarca->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
