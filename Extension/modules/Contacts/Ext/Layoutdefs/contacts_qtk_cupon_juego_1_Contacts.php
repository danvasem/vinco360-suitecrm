<?php
 // created: 2019-06-22 05:20:21
$layout_defs["Contacts"]["subpanel_setup"]['contacts_qtk_cupon_juego_1'] = array (
  'order' => 250,
  'module' => 'qtk_cupon_juego',
  'subpanel_name' => 'default',
  'sort_order' => 'desc',
  'sort_by' => 'fecha_canje_cupon_c',
  'title_key' => 'LBL_CONTACTS_QTK_CUPON_JUEGO_1_FROM_QTK_CUPON_JUEGO_TITLE',
  'get_subpanel_data' => 'contacts_qtk_cupon_juego_1',
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
