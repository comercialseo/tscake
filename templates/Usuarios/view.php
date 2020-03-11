<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Usuario $usuario
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Usuario'), ['action' => 'edit', $usuario->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Usuario'), ['action' => 'delete', $usuario->id], ['confirm' => __('Are you sure you want to delete # {0}?', $usuario->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Usuarios'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Usuario'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="usuarios view content">
            <h3><?= h($usuario->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Us Usuario') ?></th>
                    <td><?= h($usuario->us_usuario) ?></td>
                </tr>
                <tr>
                    <th><?= __('Us Password') ?></th>
                    <td><?= h($usuario->us_password) ?></td>
                </tr>
                <tr>
                    <th><?= __('Us Email') ?></th>
                    <td><?= h($usuario->us_email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Us Nombre') ?></th>
                    <td><?= h($usuario->us_nombre) ?></td>
                </tr>
                <tr>
                    <th><?= __('Us Apellidos') ?></th>
                    <td><?= h($usuario->us_apellidos) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($usuario->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Us Fechaingreso') ?></th>
                    <td><?= h($usuario->us_fechaingreso) ?></td>
                </tr>
                <tr>
                    <th><?= __('Us Fechamodifica') ?></th>
                    <td><?= h($usuario->us_fechamodifica) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Us Bio') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($usuario->us_bio)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
