<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Pieza $pieza
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Pieza'), ['action' => 'edit', $pieza->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Pieza'), ['action' => 'delete', $pieza->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pieza->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Piezas'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Pieza'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="piezas view content">
            <h3><?= h($pieza->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Pz Modelo') ?></th>
                    <td><?= h($pieza->pz_modelo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Pz Referencia') ?></th>
                    <td><?= h($pieza->pz_referencia) ?></td>
                </tr>
                <tr>
                    <th><?= __('Pz Annofabricacion') ?></th>
                    <td><?= h($pieza->pz_annofabricacion) ?></td>
                </tr>
                <tr>
                    <th><?= __('Pz Tipo') ?></th>
                    <td><?= $pieza->has('pz_tipo') ? $this->Html->link($pieza->pz_tipo->id, ['controller' => 'PzTipos', 'action' => 'view', $pieza->pz_tipo->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Pz Marca') ?></th>
                    <td><?= $pieza->has('pz_marca') ? $this->Html->link($pieza->pz_marca->id, ['controller' => 'PzMarcas', 'action' => 'view', $pieza->pz_marca->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Pz Galeria') ?></th>
                    <td><?= h($pieza->pz_galeria) ?></td>
                </tr>
                <tr>
                    <th><?= __('Pz Anotacion') ?></th>
                    <td><?= h($pieza->pz_anotacion) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($pieza->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Pz Tasacion') ?></th>
                    <td><?= $this->Number->format($pieza->pz_tasacion) ?></td>
                </tr>
                <tr>
                    <th><?= __('Pz Inversion') ?></th>
                    <td><?= $this->Number->format($pieza->pz_inversion) ?></td>
                </tr>
                <tr>
                    <th><?= __('Pz Diferencia') ?></th>
                    <td><?= $this->Number->format($pieza->pz_diferencia) ?></td>
                </tr>
                <tr>
                    <th><?= __('Pz Creacion') ?></th>
                    <td><?= h($pieza->pz_creacion) ?></td>
                </tr>
                <tr>
                    <th><?= __('Pz Modificacion') ?></th>
                    <td><?= h($pieza->pz_modificacion) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
