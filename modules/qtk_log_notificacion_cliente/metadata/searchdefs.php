<?php
$module_name = 'qtk_log_notificacion_cliente';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'titulo_c' => 
      array (
        'type' => 'text',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_TITULO',
        'sortable' => false,
        'width' => '10%',
        'name' => 'titulo_c',
      ),
    ),
    'advanced_search' => 
    array (
      'titulo_c' => 
      array (
        'type' => 'text',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_TITULO',
        'sortable' => false,
        'width' => '10%',
        'name' => 'titulo_c',
      ),
      'mensaje_c' => 
      array (
        'type' => 'text',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_MENSAJE',
        'sortable' => false,
        'width' => '10%',
        'name' => 'mensaje_c',
      ),
      'error_c' => 
      array (
        'type' => 'text',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_ERROR',
        'sortable' => false,
        'width' => '10%',
        'name' => 'error_c',
      ),
      'estado_c' => 
      array (
        'type' => 'dynamicenum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_ESTADO',
        'width' => '10%',
        'name' => 'estado_c',
      ),
      'canal_c' => 
      array (
        'type' => 'dynamicenum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_CANAL',
        'width' => '10%',
        'name' => 'canal_c',
      ),
    ),
  ),
  'templateMeta' => 
  array (
    'maxColumns' => '3',
    'maxColumnsBasic' => '4',
    'widths' => 
    array (
      'label' => '10',
      'field' => '30',
    ),
  ),
);
;
?>
