<?php
 // created: 2019-06-22 05:22:55
$layout_defs["Contacts"]["subpanel_setup"]['contacts_qtk_partida_1'] = array (
  'order' => 260,
  'module' => 'qtk_partida',
  'subpanel_name' => 'default',
  'sort_order' => 'desc',
  'sort_by' => 'fecha_creacion_c',
  'title_key' => 'LBL_CONTACTS_QTK_PARTIDA_1_FROM_QTK_PARTIDA_TITLE',
  'get_subpanel_data' => 'contacts_qtk_partida_1',
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
