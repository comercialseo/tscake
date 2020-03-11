<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 * 
 * Template "Default" - La usamos por defecto en el diseño del portal frontend
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 * @var \App\View\AppView $this
 * 
 * ======================================================================================================
 * ======================== TEMPLATE DEFAULT PARA LA APP ================================================
 * ======================================================================================================
 */
/** Parámetros para usar en el layout */
$urlRequest = $this->request->getAttribute('here');
(strstr($urlRequest, 'colecciones') === 'colecciones')
  ? $esColecciones = true : $esColecciones = false;
?>
<!DOCTYPE html>
<html>
<head>
  <!-- <meta charset="utf-8"> -->
  <?= $this->Html->charset() ?>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- MetaDatos -->
  <title><?=$metaTitulo?></title>
  <meta name="description" content="<?=$metaDescripcion?>" />
  <meta name="robots" content="<?=$metaRobots?>" />
  <meta name="canonical" content="<?=$metaCanonical?>" />

  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css"> -->
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  <?php /** ESTILOS DEL TEME */ ?>
  <?=$this->Html->css([
    'fontawesome-free/css/all.min', // Font Awesome
    'tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min', // Tempusdominus Bbootstrap 4
    'icheck-bootstrap/icheck-bootstrap.min', // iCheck
    'jqvmap/jqvmap.min', // JQVMap
    'adminlte.min', // Theme style 
    'overlayScrollbars/css/OverlayScrollbars.min', // overlayScrollbars
    'daterangepicker/daterangepicker', // Daterange picker 
    'summernote/summernote-bs4' // summernote
  ])?>
  <?php 
  /** END - ESTILOS DEL TEME */ 
  /** ======================================================================== */
  /** INCLUDES PARA LOS ARCHIVOS DE LAS TABLAS DATA TABLES */ 
  ?>
  <?php
  if($esColecciones) {
    echo($this->Html->css([
                            'datatables-bs4/css/dataTables.bootstrap4' // Data-Tables
                          ])
    );
  }
  ?>
  <?php /** ======================================================================== */ ?>
  <!-- FAVICON -->
  <?=$this->Html->meta('icon')?>
  <?=$this->fetch('meta')?>
  <?=$this->fetch('css')?>

</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <?=$this->element('navbar-links')?>
    <!-- SEARCH FORM -->
    <?=$this->element('navbar-form')?>
    <!-- Right navbar links -->
   <?=$this->element('navbar-right')?>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <?=$this->element('aside', [
      'logoPrincipal' => $logoPrincipal
    ])?>
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <?=$this->element('header-content', [
        'h1Principal' => $h1Principal 
      ])?>
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <?= $this->Flash->render() ?>
        <?= $this->fetch('content') ?>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <?=$this->element('footer')?>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<?=$this->Html->script([
  'jquery/jquery.min', // jQuery
  'jquery-ui/jquery-ui.min', // jQuery UI 1.11.4
  'bootstrap/js/bootstrap.bundle.min', // Bootstrap 4
  'chart.js/Chart.min', // ChartJS
  'sparklines/sparkline', // Sparkline
  'jqvmap/jquery.vmap.min', // JQVMap
  'jqvmap/maps/jquery.vmap.usa', // JQVMap
  'jquery-knob/jquery.knob.min', // jQuery Knob Chart 
  'moment/moment.min', // daterangepicker
  'daterangepicker/daterangepicker', // daterangepicker
  'tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min' , // Tempusdominus Bootstrap 4 
  'summernote/summernote-bs4.min', // Summernote
  'overlayScrollbars/js/jquery.overlayScrollbars.min', // overlayScrollbars
  'adminlte', // AdminLTE App 
  'pages/dashboard', // AdminLTE dashboard demo (This is only for demo purposes) 
  'demo' // AdminLTE for demo purposes 
])?>
<?php
/** INCLUDE DATA-TABLES */
if($esColecciones) {
  echo $this->Html->script([
                          'datatables/jquery.dataTables', // Data-Tables
                          'datatables-bs4/js/dataTables.bootstrap4' // Data-Tables
                        ]
  );
  echo ('
  <script>
    $(function () {
      $("#example2").DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
      });
    });
  </script>
  ');
}
?>
<?= $this->fetch('script') ?>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
</body>
</html>
