<?php
$module_name = 'qtk_cuenta';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'contacts_qtk_cuenta_1_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_CONTACTS_QTK_CUENTA_1_FROM_CONTACTS_TITLE',
        'id' => 'CONTACTS_QTK_CUENTA_1CONTACTS_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'contacts_qtk_cuenta_1_name',
      ),
      'qtk_negocio_qtk_cuenta_1_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_QTK_NEGOCIO_QTK_CUENTA_1_FROM_QTK_NEGOCIO_TITLE',
        'id' => 'QTK_NEGOCIO_QTK_CUENTA_1QTK_NEGOCIO_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'qtk_negocio_qtk_cuenta_1_name',
      ),
      'saldo_disponible_c' => 
      array (
        'type' => 'decimal',
        'default' => true,
        'label' => 'LBL_SALDO_DISPONIBLE',
        'width' => '10%',
        'name' => 'saldo_disponible_c',
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
      'contacts_qtk_cuenta_1_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_CONTACTS_QTK_CUENTA_1_FROM_CONTACTS_TITLE',
        'width' => '10%',
        'default' => true,
        'id' => 'CONTACTS_QTK_CUENTA_1CONTACTS_IDA',
        'name' => 'contacts_qtk_cuenta_1_name',
      ),
      'qtk_negocio_qtk_cuenta_1_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_QTK_NEGOCIO_QTK_CUENTA_1_FROM_QTK_NEGOCIO_TITLE',
        'width' => '10%',
        'default' => true,
        'id' => 'QTK_NEGOCIO_QTK_CUENTA_1QTK_NEGOCIO_IDA',
        'name' => 'qtk_negocio_qtk_cuenta_1_name',
      ),
      'saldo_disponible_c' => 
      array (
        'type' => 'decimal',
        'default' => true,
        'label' => 'LBL_SALDO_DISPONIBLE',
        'width' => '10%',
        'name' => 'saldo_disponible_c',
      ),
      'fecha_apertura_c' => 
      array (
        'type' => 'datetimecombo',
        'default' => true,
        'label' => 'LBL_FECHA_APERTURA',
        'width' => '10%',
        'name' => 'fecha_apertura_c',
      ),
      'fecha_vigencia_c' => 
      array (
        'type' => 'datetimecombo',
        'default' => true,
        'label' => 'LBL_FECHA_VIGENCIA',
        'width' => '10%',
        'name' => 'fecha_vigencia_c',
      ),
      'fecha_expiracion_c' => 
      array (
        'type' => 'datetimecombo',
        'default' => true,
        'label' => 'LBL_FECHA_EXPIRACION',
        'width' => '10%',
        'name' => 'fecha_expiracion_c',
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
      'numero_unico_c' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_NUMERO_UNICO',
        'width' => '10%',
        'name' => 'numero_unico_c',
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
