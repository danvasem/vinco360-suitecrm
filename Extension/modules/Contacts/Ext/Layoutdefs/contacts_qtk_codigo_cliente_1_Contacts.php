<?php
 // created: 2019-06-19 04:02:05
$layout_defs["Contacts"]["subpanel_setup"]['contacts_qtk_codigo_cliente_1'] = array (
  'order' => 280,
  'module' => 'qtk_codigo_cliente',
  'subpanel_name' => 'default',
  'sort_order' => 'desc',
  'sort_by' => 'fecha_activacion_c',
  'title_key' => 'LBL_CONTACTS_QTK_CODIGO_CLIENTE_1_FROM_QTK_CODIGO_CLIENTE_TITLE',
  'get_subpanel_data' => 'contacts_qtk_codigo_cliente_1',
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
