<?php
$module_name = 'qtk_premio';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'qtk_negocio_qtk_premio_1_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_QTK_NEGOCIO_QTK_PREMIO_1_FROM_QTK_NEGOCIO_TITLE',
        'id' => 'QTK_NEGOCIO_QTK_PREMIO_1QTK_NEGOCIO_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'qtk_negocio_qtk_premio_1_name',
      ),
      'valor_c' => 
      array (
        'type' => 'decimal',
        'default' => true,
        'label' => 'LBL_VALOR',
        'width' => '10%',
        'name' => 'valor_c',
      ),
    ),
    'advanced_search' => 
    array (
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'valor_c' => 
      array (
        'type' => 'decimal',
        'default' => true,
        'label' => 'LBL_VALOR',
        'width' => '10%',
        'name' => 'valor_c',
      ),
      'qtk_negocio_qtk_premio_1_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_QTK_NEGOCIO_QTK_PREMIO_1_FROM_QTK_NEGOCIO_TITLE',
        'width' => '10%',
        'default' => true,
        'id' => 'QTK_NEGOCIO_QTK_PREMIO_1QTK_NEGOCIO_IDA',
        'name' => 'qtk_negocio_qtk_premio_1_name',
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
      'description' => 
      array (
        'type' => 'text',
        'label' => 'LBL_DESCRIPTION',
        'sortable' => false,
        'width' => '10%',
        'default' => true,
        'name' => 'description',
      ),
      'nombre_unico_c' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_NOMBRE_UNICO',
        'width' => '10%',
        'name' => 'nombre_unico_c',
      ),
      'id_premio_c' => 
      array (
        'type' => 'int',
        'default' => true,
        'label' => 'LBL_ID_PREMIO',
        'width' => '10%',
        'name' => 'id_premio_c',
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
