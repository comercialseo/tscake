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
            <?= $this->Html->link(__('List Usuarios'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="usuarios form content">
            <?= $this->Form->create($usuario) ?>
            <fieldset>
                <legend><?= __('Add Usuario') ?></legend>
                <?php
                    echo $this->Form->control('us_usuario');
                    echo $this->Form->control('us_password');
                    echo $this->Form->control('us_email');
                    echo $this->Form->control('us_nombre');
                    echo $this->Form->control('us_apellidos');
                    echo $this->Form->control('us_bio');
                    echo $this->Form->control('us_fechaingreso');
                    echo $this->Form->control('us_fechamodifica', ['empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
