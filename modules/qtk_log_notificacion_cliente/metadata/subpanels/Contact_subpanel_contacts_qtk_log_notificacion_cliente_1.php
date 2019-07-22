<?php
// created: 2019-07-17 01:11:29
$subpanel_layout['list_fields'] = array (
  'name' => 
  array (
    'vname' => 'LBL_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
    'width' => '45%',
    'default' => true,
  ),
  'contacts_qtk_log_notificacion_cliente_1_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'vname' => 'LBL_CONTACTS_QTK_LOG_NOTIFICACION_CLIENTE_1_FROM_CONTACTS_TITLE',
    'id' => 'CONTACTS_QTK_LOG_NOTIFICACION_CLIENTE_1CONTACTS_IDA',
    'width' => '10%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'Contacts',
    'target_record_key' => 'contacts_qtk_log_notificacion_cliente_1contacts_ida',
  ),
  'fecha_notificacion_c' => 
  array (
    'type' => 'datetimecombo',
    'default' => true,
    'vname' => 'LBL_FECHA_NOTIFICACION',
    'width' => '10%',
  ),
  'canal_c' => 
  array (
    'type' => 'dynamicenum',
    'default' => true,
    'studio' => 'visible',
    'vname' => 'LBL_CANAL',
    'width' => '10%',
  ),
  'estado_c' => 
  array (
    'type' => 'dynamicenum',
    'default' => true,
    'studio' => 'visible',
    'vname' => 'LBL_ESTADO',
    'width' => '10%',
  ),
  'remove_button' => 
  array (
    'vname' => 'LBL_REMOVE',
    'widget_class' => 'SubPanelRemoveButton',
    'module' => 'qtk_log_notificacion_cliente',
    'width' => '5%',
    'default' => true,
  ),
);