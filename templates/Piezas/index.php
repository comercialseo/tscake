<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Pieza[]|\Cake\Collection\CollectionInterface $piezas
 */
?>
<div class="piezas index content">
    <?= $this->Html->link(__('New Pieza'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Piezas') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('pz_modelo') ?></th>
                    <th><?= $this->Paginator->sort('pz_referencia') ?></th>
                    <th><?= $this->Paginator->sort('pz_annofabricacion') ?></th>
                    <th><?= $this->Paginator->sort('pz_tipo_id') ?></th>
                    <th><?= $this->Paginator->sort('pz_marca_id') ?></th>
                    <th><?= $this->Paginator->sort('pz_tasacion') ?></th>
                    <th><?= $this->Paginator->sort('pz_inversion') ?></th>
                    <th><?= $this->Paginator->sort('pz_diferencia') ?></th>
                    <th><?= $this->Paginator->sort('pz_galeria') ?></th>
                    <th><?= $this->Paginator->sort('pz_anotacion') ?></th>
                    <th><?= $this->Paginator->sort('pz_creacion') ?></th>
                    <th><?= $this->Paginator->sort('pz_modificacion') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($piezas as $pieza): ?>
                <tr>
                    <td><?= $this->Number->format($pieza->id) ?></td>
                    <td><?= h($pieza->pz_modelo) ?></td>
                    <td><?= h($pieza->pz_referencia) ?></td>
                    <td><?= h($pieza->pz_annofabricacion) ?></td>
                    <td><?= $pieza->has('pz_tipo') ? $this->Html->link($pieza->pz_tipo->id, ['controller' => 'PzTipos', 'action' => 'view', $pieza->pz_tipo->id]) : '' ?></td>
                    <td><?= $pieza->has('pz_marca') ? $this->Html->link($pieza->pz_marca->id, ['controller' => 'PzMarcas', 'action' => 'view', $pieza->pz_marca->id]) : '' ?></td>
                    <td><?= $this->Number->format($pieza->pz_tasacion) ?></td>
                    <td><?= $this->Number->format($pieza->pz_inversion) ?></td>
                    <td><?= $this->Number->format($pieza->pz_diferencia) ?></td>
                    <td><?= h($pieza->pz_galeria) ?></td>
                    <td><?= h($pieza->pz_anotacion) ?></td>
                    <td><?= h($pieza->pz_creacion) ?></td>
                    <td><?= h($pieza->pz_modificacion) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $pieza->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $pieza->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $pieza->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pieza->id)]) ?>
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
