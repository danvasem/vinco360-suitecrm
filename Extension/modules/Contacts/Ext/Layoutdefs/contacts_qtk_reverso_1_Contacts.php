<?php
 // created: 2019-07-05 02:25:53
$layout_defs["Contacts"]["subpanel_setup"]['contacts_qtk_reverso_1'] = array (
  'order' => 100,
  'module' => 'qtk_reverso',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_CONTACTS_QTK_REVERSO_1_FROM_QTK_REVERSO_TITLE',
  'get_subpanel_data' => 'contacts_qtk_reverso_1',
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
