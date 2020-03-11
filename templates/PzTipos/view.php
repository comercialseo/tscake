<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\PzTipo $pzTipo
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Pz Tipo'), ['action' => 'edit', $pzTipo->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Pz Tipo'), ['action' => 'delete', $pzTipo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pzTipo->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Pz Tipos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Pz Tipo'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="pzTipos view content">
            <h3><?= h($pzTipo->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Pztp Tipo') ?></th>
                    <td><?= h($pzTipo->pztp_tipo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Pztp Descripcion') ?></th>
                    <td><?= h($pzTipo->pztp_descripcion) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($pzTipo->id) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Piezas') ?></h4>
                <?php if (!empty($pzTipo->piezas)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Pz Modelo') ?></th>
                            <th><?= __('Pz Referencia') ?></th>
                            <th><?= __('Pz Annofabricacion') ?></th>
                            <th><?= __('Pz Tipo Id') ?></th>
                            <th><?= __('Pz Marca Id') ?></th>
                            <th><?= __('Pz Tasacion') ?></th>
                            <th><?= __('Pz Inversion') ?></th>
                            <th><?= __('Pz Diferencia') ?></th>
                            <th><?= __('Pz Galeria') ?></th>
                            <th><?= __('Pz Anotacion') ?></th>
                            <th><?= __('Pz Creacion') ?></th>
                            <th><?= __('Pz Modificacion') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($pzTipo->piezas as $piezas) : ?>
                        <tr>
                            <td><?= h($piezas->id) ?></td>
                            <td><?= h($piezas->pz_modelo) ?></td>
                            <td><?= h($piezas->pz_referencia) ?></td>
                            <td><?= h($piezas->pz_annofabricacion) ?></td>
                            <td><?= h($piezas->pz_tipo_id) ?></td>
                            <td><?= h($piezas->pz_marca_id) ?></td>
                            <td><?= h($piezas->pz_tasacion) ?></td>
                            <td><?= h($piezas->pz_inversion) ?></td>
                            <td><?= h($piezas->pz_diferencia) ?></td>
                            <td><?= h($piezas->pz_galeria) ?></td>
                            <td><?= h($piezas->pz_anotacion) ?></td>
                            <td><?= h($piezas->pz_creacion) ?></td>
                            <td><?= h($piezas->pz_modificacion) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Piezas', 'action' => 'view', $piezas->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Piezas', 'action' => 'edit', $piezas->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Piezas', 'action' => 'delete', $piezas->id], ['confirm' => __('Are you sure you want to delete # {0}?', $piezas->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
