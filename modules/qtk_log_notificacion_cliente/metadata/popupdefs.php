<?php
$popupMeta = array (
    'moduleMain' => 'qtk_log_notificacion_cliente',
    'varName' => 'qtk_log_notificacion_cliente',
    'orderBy' => 'qtk_log_notificacion_cliente.name',
    'whereClauses' => array (
  'titulo_c' => 'qtk_log_notificacion_cliente_cstm.titulo_c',
  'mensaje_c' => 'qtk_log_notificacion_cliente_cstm.mensaje_c',
  'error_c' => 'qtk_log_notificacion_cliente_cstm.error_c',
  'estado_c' => 'qtk_log_notificacion_cliente_cstm.estado_c',
),
    'searchInputs' => array (
  4 => 'titulo_c',
  5 => 'mensaje_c',
  6 => 'error_c',
  7 => 'estado_c',
),
    'searchdefs' => array (
  'titulo_c' => 
  array (
    'type' => 'text',
    'studio' => 'visible',
    'label' => 'LBL_TITULO',
    'sortable' => false,
    'width' => '10%',
    'name' => 'titulo_c',
  ),
  'mensaje_c' => 
  array (
    'type' => 'text',
    'studio' => 'visible',
    'label' => 'LBL_MENSAJE',
    'sortable' => false,
    'width' => '10%',
    'name' => 'mensaje_c',
  ),
  'error_c' => 
  array (
    'type' => 'text',
    'studio' => 'visible',
    'label' => 'LBL_ERROR',
    'sortable' => false,
    'width' => '10%',
    'name' => 'error_c',
  ),
  'estado_c' => 
  array (
    'type' => 'dynamicenum',
    'studio' => 'visible',
    'label' => 'LBL_ESTADO',
    'width' => '10%',
    'name' => 'estado_c',
  ),
),
);
