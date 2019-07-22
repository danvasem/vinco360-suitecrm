<?php
 // created: 2019-06-22 05:12:29
$layout_defs["Contacts"]["subpanel_setup"]['contacts_qtk_redencion_1'] = array (
  'order' => 240,
  'module' => 'qtk_redencion',
  'subpanel_name' => 'default',
  'sort_order' => 'desc',
  'sort_by' => 'fecha_redencion_c',
  'title_key' => 'LBL_CONTACTS_QTK_REDENCION_1_FROM_QTK_REDENCION_TITLE',
  'get_subpanel_data' => 'contacts_qtk_redencion_1',
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
