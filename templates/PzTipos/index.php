<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\PzTipo[]|\Cake\Collection\CollectionInterface $pzTipos
 */
?>
<div class="pzTipos index content">
    <?= $this->Html->link(__('New Pz Tipo'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Pz Tipos') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('pztp_tipo') ?></th>
                    <th><?= $this->Paginator->sort('pztp_descripcion') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($pzTipos as $pzTipo): ?>
                <tr>
                    <td><?= $this->Number->format($pzTipo->id) ?></td>
                    <td><?= h($pzTipo->pztp_tipo) ?></td>
                    <td><?= h($pzTipo->pztp_descripcion) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $pzTipo->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $pzTipo->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $pzTipo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pzTipo->id)]) ?>
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
