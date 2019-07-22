<?php
 // created: 2019-06-22 05:34:16
$layout_defs["Contacts"]["subpanel_setup"]['contacts_qtk_cliente_negocio_calificacion_1'] = array (
  'order' => 270,
  'module' => 'qtk_cliente_negocio_calificacion',
  'subpanel_name' => 'default',
  'sort_order' => 'desc',
  'sort_by' => 'fecha_calificacion_c',
  'title_key' => 'LBL_CONTACTS_QTK_CLIENTE_NEGOCIO_CALIFICACION_1_FROM_QTK_CLIENTE_NEGOCIO_CALIFICACION_TITLE',
  'get_subpanel_data' => 'contacts_qtk_cliente_negocio_calificacion_1',
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
