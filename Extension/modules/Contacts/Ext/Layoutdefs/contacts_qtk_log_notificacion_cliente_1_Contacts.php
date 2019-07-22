<?php
 // created: 2019-06-22 05:36:00
$layout_defs["Contacts"]["subpanel_setup"]['contacts_qtk_log_notificacion_cliente_1'] = array (
  'order' => 290,
  'module' => 'qtk_log_notificacion_cliente',
  'subpanel_name' => 'default',
  'sort_order' => 'desc',
  'sort_by' => 'fecha_notificacion_c',
  'title_key' => 'LBL_CONTACTS_QTK_LOG_NOTIFICACION_CLIENTE_1_FROM_QTK_LOG_NOTIFICACION_CLIENTE_TITLE',
  'get_subpanel_data' => 'contacts_qtk_log_notificacion_cliente_1',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);
