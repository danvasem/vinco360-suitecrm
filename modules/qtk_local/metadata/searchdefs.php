<?php
$module_name = 'qtk_local';
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
      'qtk_negocio_qtk_local_1_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_QTK_NEGOCIO_QTK_LOCAL_1_FROM_QTK_NEGOCIO_TITLE',
        'id' => 'QTK_NEGOCIO_QTK_LOCAL_1QTK_NEGOCIO_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'qtk_negocio_qtk_local_1_name',
      ),
      'nombre_unico_c' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_NOMBRE_UNICO',
        'width' => '10%',
        'name' => 'nombre_unico_c',
      ),
      'id_local_c' => 
      array (
        'type' => 'int',
        'default' => true,
        'label' => 'LBL_ID_LOCAL',
        'width' => '10%',
        'name' => 'id_local_c',
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
      'id_local_c' => 
      array (
        'type' => 'int',
        'default' => true,
        'label' => 'LBL_ID_LOCAL',
        'width' => '10%',
        'name' => 'id_local_c',
      ),
      'nombre_unico_c' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_NOMBRE_UNICO',
        'width' => '10%',
        'name' => 'nombre_unico_c',
      ),
      'qtk_negocio_qtk_local_1_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_QTK_NEGOCIO_QTK_LOCAL_1_FROM_QTK_NEGOCIO_TITLE',
        'width' => '10%',
        'default' => true,
        'id' => 'QTK_NEGOCIO_QTK_LOCAL_1QTK_NEGOCIO_IDA',
        'name' => 'qtk_negocio_qtk_local_1_name',
      ),
      'latitud_c' => 
      array (
        'type' => 'float',
        'default' => true,
        'label' => 'LBL_LATITUD',
        'width' => '10%',
        'name' => 'latitud_c',
      ),
      'longitud_c' => 
      array (
        'type' => 'float',
        'default' => true,
        'label' => 'LBL_LONGITUD',
        'width' => '10%',
        'name' => 'longitud_c',
      ),
      'direccion_c' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_DIRECCION',
        'width' => '10%',
        'name' => 'direccion_c',
      ),
      'local_fisico_c' => 
      array (
        'type' => 'bool',
        'default' => true,
        'label' => 'LBL_LOCAL_FISICO',
        'width' => '10%',
        'name' => 'local_fisico_c',
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
