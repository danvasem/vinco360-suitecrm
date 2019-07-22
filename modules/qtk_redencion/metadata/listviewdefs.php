<?php
$module_name = 'qtk_redencion';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'CONTACTS_QTK_REDENCION_1_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_CONTACTS_QTK_REDENCION_1_FROM_CONTACTS_TITLE',
    'id' => 'CONTACTS_QTK_REDENCION_1CONTACTS_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'QTK_NEGOCIO_QTK_REDENCION_1_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_QTK_NEGOCIO_QTK_REDENCION_1_FROM_QTK_NEGOCIO_TITLE',
    'id' => 'QTK_NEGOCIO_QTK_REDENCION_1QTK_NEGOCIO_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'QTK_LOCAL_QTK_REDENCION_1_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_QTK_LOCAL_QTK_REDENCION_1_FROM_QTK_LOCAL_TITLE',
    'id' => 'QTK_LOCAL_QTK_REDENCION_1QTK_LOCAL_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'QTK_PREMIO_QTK_REDENCION_1_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_QTK_PREMIO_QTK_REDENCION_1_FROM_QTK_PREMIO_TITLE',
    'id' => 'QTK_PREMIO_QTK_REDENCION_1QTK_PREMIO_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'FECHA_REDENCION_C' => 
  array (
    'type' => 'datetimecombo',
    'default' => true,
    'label' => 'LBL_FECHA_REDENCION',
    'width' => '15%',
  ),
  'VALOR_C' => 
  array (
    'type' => 'decimal',
    'default' => true,
    'label' => 'LBL_VALOR',
    'width' => '10%',
  ),
  'MONTO_REFERENCIAL_C' => 
  array (
    'type' => 'decimal',
    'default' => false,
    'label' => 'LBL_MONTO_REFERENCIAL',
    'width' => '10%',
  ),
  'CUENTA_C' => 
  array (
    'type' => 'relate',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_CUENTA',
    'id' => 'QTK_CUENTA_ID_C',
    'link' => true,
    'width' => '10%',
  ),
  'USUARIO_RESPONSABLE_C' => 
  array (
    'type' => 'relate',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_USUARIO_RESPONSABLE',
    'id' => 'USER_ID_C',
    'link' => true,
    'width' => '10%',
  ),
  'ESTADO_C' => 
  array (
    'type' => 'dynamicenum',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_ESTADO',
    'width' => '10%',
  ),
  'QTK_CODIGO_CLIENTE_QTK_REDENCION_1_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_QTK_CODIGO_CLIENTE_QTK_REDENCION_1_FROM_QTK_CODIGO_CLIENTE_TITLE',
    'id' => 'QTK_CODIGO_CLIENTE_QTK_REDENCION_1QTK_CODIGO_CLIENTE_IDA',
    'width' => '10%',
    'default' => false,
  ),
  'TIPO_EVENTO_C' => 
  array (
    'type' => 'relate',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_TIPO_EVENTO',
    'id' => 'QTK_TIPO_EVENTO_ID_C',
    'link' => true,
    'width' => '20%',
  ),
  'CODIGO_CLIENTE_C' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_CODIGO_CLIENTE',
    'width' => '10%',
  ),
  'TIPO_CODIGO_CLIENTE_C' => 
  array (
    'type' => 'dynamicenum',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_TIPO_CODIGO_CLIENTE',
    'width' => '10%',
  ),
  'NUMERO_UNICO_C' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_NUMERO_UNICO',
    'width' => '20%',
  ),
);
;
?>
