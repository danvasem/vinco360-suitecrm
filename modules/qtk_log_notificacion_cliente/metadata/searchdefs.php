<?php
$module_name = 'qtk_log_notificacion_cliente';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'contacts_qtk_log_notificacion_cliente_1_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_CONTACTS_QTK_LOG_NOTIFICACION_CLIENTE_1_FROM_CONTACTS_TITLE',
        'id' => 'CONTACTS_QTK_LOG_NOTIFICACION_CLIENTE_1CONTACTS_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'contacts_qtk_log_notificacion_cliente_1_name',
      ),
      'qtk_negocio_qtk_log_notificacion_cliente_1_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_QTK_NEGOCIO_QTK_LOG_NOTIFICACION_CLIENTE_1_FROM_QTK_NEGOCIO_TITLE',
        'id' => 'QTK_NEGOCIO_QTK_LOG_NOTIFICACION_CLIENTE_1QTK_NEGOCIO_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'qtk_negocio_qtk_log_notificacion_cliente_1_name',
      ),
      'fecha_notificacion_c' => 
      array (
        'type' => 'datetimecombo',
        'default' => true,
        'label' => 'LBL_FECHA_NOTIFICACION',
        'width' => '10%',
        'name' => 'fecha_notificacion_c',
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
      'fecha_notificacion_c' => 
      array (
        'type' => 'datetimecombo',
        'default' => true,
        'label' => 'LBL_FECHA_NOTIFICACION',
        'width' => '10%',
        'name' => 'fecha_notificacion_c',
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
      'qtk_negocio_qtk_log_notificacion_cliente_1_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_QTK_NEGOCIO_QTK_LOG_NOTIFICACION_CLIENTE_1_FROM_QTK_NEGOCIO_TITLE',
        'width' => '10%',
        'default' => true,
        'id' => 'QTK_NEGOCIO_QTK_LOG_NOTIFICACION_CLIENTE_1QTK_NEGOCIO_IDA',
        'name' => 'qtk_negocio_qtk_log_notificacion_cliente_1_name',
      ),
      'contacts_qtk_log_notificacion_cliente_1_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_CONTACTS_QTK_LOG_NOTIFICACION_CLIENTE_1_FROM_CONTACTS_TITLE',
        'width' => '10%',
        'default' => true,
        'id' => 'CONTACTS_QTK_LOG_NOTIFICACION_CLIENTE_1CONTACTS_IDA',
        'name' => 'contacts_qtk_log_notificacion_cliente_1_name',
      ),
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
      'estado_c' => 
      array (
        'type' => 'dynamicenum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_ESTADO',
        'width' => '10%',
        'name' => 'estado_c',
      ),
      'nombre_unico_grupo_c' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_NOMBRE_UNICO_GRUPO',
        'width' => '10%',
        'name' => 'nombre_unico_grupo_c',
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
