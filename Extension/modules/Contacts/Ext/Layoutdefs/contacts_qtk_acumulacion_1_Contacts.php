<?php
 // created: 2019-06-22 03:21:16
$layout_defs["Contacts"]["subpanel_setup"]['contacts_qtk_acumulacion_1'] = array (
  'order' => 230,
  'module' => 'qtk_acumulacion',
  'subpanel_name' => 'default',
  'sort_order' => 'desc',
  'sort_by' => 'fecha_acumulacion_c',
  'title_key' => 'LBL_CONTACTS_QTK_ACUMULACION_1_FROM_QTK_ACUMULACION_TITLE',
  'get_subpanel_data' => 'contacts_qtk_acumulacion_1',
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
