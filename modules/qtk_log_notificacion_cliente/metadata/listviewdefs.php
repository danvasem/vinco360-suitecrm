<?php
$module_name = 'qtk_log_notificacion_cliente';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'CONTACTS_QTK_LOG_NOTIFICACION_CLIENTE_1_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_CONTACTS_QTK_LOG_NOTIFICACION_CLIENTE_1_FROM_CONTACTS_TITLE',
    'id' => 'CONTACTS_QTK_LOG_NOTIFICACION_CLIENTE_1CONTACTS_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'QTK_NEGOCIO_QTK_LOG_NOTIFICACION_CLIENTE_1_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_QTK_NEGOCIO_QTK_LOG_NOTIFICACION_CLIENTE_1_FROM_QTK_NEGOCIO_TITLE',
    'id' => 'QTK_NEGOCIO_QTK_LOG_NOTIFICACION_CLIENTE_1QTK_NEGOCIO_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'FECHA_NOTIFICACION_C' => 
  array (
    'type' => 'datetimecombo',
    'default' => true,
    'label' => 'LBL_FECHA_NOTIFICACION',
    'width' => '10%',
  ),
  'TITULO_C' => 
  array (
    'type' => 'text',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_TITULO',
    'sortable' => false,
    'width' => '20%',
  ),
  'CANAL_C' => 
  array (
    'type' => 'dynamicenum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_CANAL',
    'width' => '10%',
  ),
  'ESTADO_C' => 
  array (
    'type' => 'dynamicenum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_ESTADO',
    'width' => '10%',
  ),
  'NOMBRE_UNICO_GRUPO_C' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_NOMBRE_UNICO_GRUPO',
    'width' => '10%',
  ),
  'MENSAJE_C' => 
  array (
    'type' => 'text',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_MENSAJE',
    'sortable' => false,
    'width' => '30%',
  ),
  'ERROR_C' => 
  array (
    'type' => 'text',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_ERROR',
    'sortable' => false,
    'width' => '30%',
  ),
);
;
?>
