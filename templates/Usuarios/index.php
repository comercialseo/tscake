<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Usuario[]|\Cake\Collection\CollectionInterface $usuarios
 */
?>
<div class="usuarios index content">
    <?= $this->Html->link(__('New Usuario'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Usuarios') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('us_usuario') ?></th>
                    <th><?= $this->Paginator->sort('us_password') ?></th>
                    <th><?= $this->Paginator->sort('us_email') ?></th>
                    <th><?= $this->Paginator->sort('us_nombre') ?></th>
                    <th><?= $this->Paginator->sort('us_apellidos') ?></th>
                    <th><?= $this->Paginator->sort('us_fechaingreso') ?></th>
                    <th><?= $this->Paginator->sort('us_fechamodifica') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($usuarios as $usuario): ?>
                <tr>
                    <td><?= $this->Number->format($usuario->id) ?></td>
                    <td><?= h($usuario->us_usuario) ?></td>
                    <td><?= h($usuario->us_password) ?></td>
                    <td><?= h($usuario->us_email) ?></td>
                    <td><?= h($usuario->us_nombre) ?></td>
                    <td><?= h($usuario->us_apellidos) ?></td>
                    <td><?= h($usuario->us_fechaingreso) ?></td>
                    <td><?= h($usuario->us_fechamodifica) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $usuario->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $usuario->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $usuario->id], ['confirm' => __('Are you sure you want to delete # {0}?', $usuario->id)]) ?>
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
