<?php
/**
 * =====================================================================
 * Página de Creación de Items en el apartado Colecciones / Nuevo
 * =====================================================================
 * @author    Pentasys S.L.
 * @copyright 2018 Pentasys S.L. Todos los derechos resevados
 * @link      https://www.pentasys.es Projects
 * @version   CakePHP/ v-0.0.1
 * @since     4
 * @see       Restringida 
 * =====================================================================
*/
?>
<div class="container">
    <div class="row">
        <div id="breadcrumb">
        <?php
              $this->Html->addCrumb('Colecciones',  '/colecciones');
              $this->Html->addCrumb('Publicar Nueva Pieza',  '/colecciones/crear-item');  
              echo $this->Html->getCrumbs('  > ', 'Home');
         ?>
        </div>
    </div>
</div>
<div class="piezas container form large-12 medium-12 columns content">
    <?= $this->Form->create($pieza, ['type' => 'file', 'novalidate' => true]) ?>
    <div class="row">
        <div class="col-md-12">
            <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                <legend><span class="fas fa-plus-square fa-1x"></span><?= __(' Nueva Pieza de Colección ') ?></legend>
                            </a>
                        </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse in">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <?=
                                        $this->Form->control('ar_titulo', [
                                                        'class' => 'form-control inputText',
                                                        'placeholder' => 'Título *',
                                                        'label' => false,
                                                        'required'
                                                    ]);
                                        ?>
                                    </div>
                                    <div class="form-group">
                                        <?php
                                        echo $this->Form->control('ar_articulo', [
                                                        'label' => false,
                                                        'id'    => 'htmle-edit',
                                                        'class' => 'form-control inputText',
                                                        'type'  => 'textarea',
                                                        'rows'  => 20
                                                    ]);

                                        ?>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <?= 
                                        $this->Form->control(
                                                                'app_ar_ct_categorias_id', 
                                                                [
                                                                    'type'     => 'select',
                                                                    'label'    => 'Categoría *',
                                                                    'class'    => 'form-control',
                                                                    'multiple' => false,
                                                                    'options'  => $apparcategorias, 
                                                                    'empty'    => '(Selecciona una categoría)'
                                                                ]
                                                            )
                                        ?>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <?= 
                                        $this->Form->control('app_ar_tags._ids', ['options' => $apptags,
                                                                                  'label'   => 'Tags *',
                                                                                  'class'    => 'form-control'])
                                        ?>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="well well-sm">
                                        <!--<div class="input-group">
                                            <span class="input-group-addon">www.jquery2dotnet.com/</span>
                                            <input type="text" class="form-control" placeholder="Custom url" />
                                        </div>-->
                                        <div class="form-group">
                                            <?= $this->Form->input('ar_imagen', [
                                                    'type' => 'file', 
                                                    'class' => 'filestyle',
                                                    'data-buttonName' => 'btn-primary',
                                                    'data-buttonText' => 'Examinar',
                                                    'data-text' => 'Cargando...',
                                                    'data-placeholder' => 'Elige tu archivo...',
                                                    'label' => 'Imagen'
                                                    ]) 
                                            ?>
                                        </div>  
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="well well-sm well-primary">
                                        <!--<div class="form-group">
                                            <label>Estado</label>
                                            <select class="form-control">
                                                <option>Draft</option>
                                                <option>Published</option>
                                            </select>
                                        </div>-->
                                        <div class="form-group">
                                            <button type="button" class="btn btn-primary btn-lg btn-block">
                                                <span class="fas fa-eye"></span>VISTA PREVIA</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                            <legend><span class="fas fa-plus-square fa-1x"></span><?= __(' MetaDatos ') ?></legend>
                            </a>
                        </h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <?=
                                        $this->Form->control('ar_metatitulo', [
                                                        'class' => 'form-control inputText',
                                                        'placeholder' => 'Meta Título',
                                                        'label' => false,
                                                        'required'
                                                    ]);
                                        ?>
                                    </div>
                                    <div class="form-group">
                                        <?=
                                        $this->Form->control('ar_metadescripcion', [
                                                        'class' => 'form-control inputText',
                                                        'placeholder' => 'Meta Descripcion',
                                                        'label' => false,
                                                        'rows' => 10,
                                                        'required'
                                                    ]);
                                        ?>
                                    </div>
                                    <div class="form-group">
                                        <!--<textarea class="form-control" placeholder="Keywords" required></textarea>-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="well well-sm well-primary">
                        <div class="form-group">
                            <button type="submit" class="btn btn-danger btn-lg btn-block">PUBLICAR</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?= $this->Form->end() ?>
</div>