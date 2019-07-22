<?php
$module_name = 'qtk_cliente_negocio';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'contacts_qtk_cliente_negocio_1_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_CONTACTS_QTK_CLIENTE_NEGOCIO_1_FROM_CONTACTS_TITLE',
        'id' => 'CONTACTS_QTK_CLIENTE_NEGOCIO_1CONTACTS_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'contacts_qtk_cliente_negocio_1_name',
      ),
      'qtk_negocio_qtk_cliente_negocio_1_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_QTK_NEGOCIO_QTK_CLIENTE_NEGOCIO_1_FROM_QTK_NEGOCIO_TITLE',
        'id' => 'QTK_NEGOCIO_QTK_CLIENTE_NEGOCIO_1QTK_NEGOCIO_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'qtk_negocio_qtk_cliente_negocio_1_name',
      ),
      'fecha_creacion_c' => 
      array (
        'type' => 'datetimecombo',
        'default' => true,
        'label' => 'LBL_FECHA_CREACION',
        'width' => '10%',
        'name' => 'fecha_creacion_c',
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
      'fecha_creacion_c' => 
      array (
        'type' => 'datetimecombo',
        'default' => true,
        'label' => 'LBL_FECHA_CREACION',
        'width' => '10%',
        'name' => 'fecha_creacion_c',
      ),
      'contacts_qtk_cliente_negocio_1_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_CONTACTS_QTK_CLIENTE_NEGOCIO_1_FROM_CONTACTS_TITLE',
        'width' => '10%',
        'default' => true,
        'id' => 'CONTACTS_QTK_CLIENTE_NEGOCIO_1CONTACTS_IDA',
        'name' => 'contacts_qtk_cliente_negocio_1_name',
      ),
      'qtk_negocio_qtk_cliente_negocio_1_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_QTK_NEGOCIO_QTK_CLIENTE_NEGOCIO_1_FROM_QTK_NEGOCIO_TITLE',
        'width' => '10%',
        'default' => true,
        'id' => 'QTK_NEGOCIO_QTK_CLIENTE_NEGOCIO_1QTK_NEGOCIO_IDA',
        'name' => 'qtk_negocio_qtk_cliente_negocio_1_name',
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
