<?php
$module_name = 'qtk_cliente_negocio_calificacion';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'contacts_qtk_cliente_negocio_calificacion_1_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_CONTACTS_QTK_CLIENTE_NEGOCIO_CALIFICACION_1_FROM_CONTACTS_TITLE',
        'id' => 'CONTACTS_QTK_CLIENTE_NEGOCIO_CALIFICACION_1CONTACTS_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'contacts_qtk_cliente_negocio_calificacion_1_name',
      ),
      'qtk_negocio_qtk_cliente_negocio_calificacion_1_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_QTK_NEGOCIO_QTK_CLIENTE_NEGOCIO_CALIFICACION_1_FROM_QTK_NEGOCIO_TITLE',
        'id' => 'QTK_NEGOCIO_QTK_CLIENTE_NEGOCIO_CALIFICACION_1QTK_NEGOCIO_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'qtk_negocio_qtk_cliente_negocio_calificacion_1_name',
      ),
      'calificacion_c' => 
      array (
        'type' => 'int',
        'default' => true,
        'label' => 'LBL_CALIFICACION',
        'width' => '10%',
        'name' => 'calificacion_c',
      ),
    ),
    'advanced_search' => 
    array (
      'name' => 
      array (
        'type' => 'name',
        'link' => true,
        'label' => 'LBL_NAME',
        'width' => '10%',
        'default' => true,
        'name' => 'name',
      ),
      'fecha_calificacion_c' => 
      array (
        'type' => 'datetimecombo',
        'default' => true,
        'label' => 'LBL_FECHA_CALIFICACION',
        'width' => '10%',
        'name' => 'fecha_calificacion_c',
      ),
      'calificacion_c' => 
      array (
        'type' => 'int',
        'default' => true,
        'label' => 'LBL_CALIFICACION',
        'width' => '10%',
        'name' => 'calificacion_c',
      ),
      'contacts_qtk_cliente_negocio_calificacion_1_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_CONTACTS_QTK_CLIENTE_NEGOCIO_CALIFICACION_1_FROM_CONTACTS_TITLE',
        'width' => '10%',
        'default' => true,
        'id' => 'CONTACTS_QTK_CLIENTE_NEGOCIO_CALIFICACION_1CONTACTS_IDA',
        'name' => 'contacts_qtk_cliente_negocio_calificacion_1_name',
      ),
      'qtk_negocio_qtk_cliente_negocio_calificacion_1_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_QTK_NEGOCIO_QTK_CLIENTE_NEGOCIO_CALIFICACION_1_FROM_QTK_NEGOCIO_TITLE',
        'width' => '10%',
        'default' => true,
        'id' => 'QTK_NEGOCIO_QTK_CLIENTE_NEGOCIO_CALIFICACION_1QTK_NEGOCIO_IDA',
        'name' => 'qtk_negocio_qtk_cliente_negocio_calificacion_1_name',
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
