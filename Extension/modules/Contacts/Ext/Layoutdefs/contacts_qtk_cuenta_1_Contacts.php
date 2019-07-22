<?php
 // created: 2019-06-22 03:39:34
$layout_defs["Contacts"]["subpanel_setup"]['contacts_qtk_cuenta_1'] = array (
  'order' => 210,
  'module' => 'qtk_cuenta',
  'subpanel_name' => 'default',
  'sort_order' => 'desc',
  'sort_by' => 'saldo_disponible_c',
  'title_key' => 'LBL_CONTACTS_QTK_CUENTA_1_FROM_QTK_CUENTA_TITLE',
  'get_subpanel_data' => 'contacts_qtk_cuenta_1',
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
