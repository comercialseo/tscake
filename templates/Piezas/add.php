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
            <?= $this->Html->link(__('List Piezas'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="piezas form content">
            <?= $this->Form->create($pieza) ?>
            <fieldset>
                <legend><?= __('Add Pieza') ?></legend>
                <?php
                    echo $this->Form->control('pz_modelo');
                    echo $this->Form->control('pz_referencia');
                    echo $this->Form->control('pz_annofabricacion');
                    echo $this->Form->control('pz_tipo_id', ['options' => $pzTipos]);
                    echo $this->Form->control('pz_marca_id', ['options' => $pzMarcas]);
                    echo $this->Form->control('pz_tasacion');
                    echo $this->Form->control('pz_inversion');
                    echo $this->Form->control('pz_diferencia');
                    echo $this->Form->control('pz_galeria');
                    echo $this->Form->control('pz_anotacion');
                    echo $this->Form->control('pz_creacion');
                    echo $this->Form->control('pz_modificacion', ['empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
