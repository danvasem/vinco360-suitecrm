<?php
 // created: 2019-06-22 05:18:56
$layout_defs["Contacts"]["subpanel_setup"]['contacts_qtk_afiliacion_1'] = array (
  'order' => 220,
  'module' => 'qtk_afiliacion',
  'subpanel_name' => 'default',
  'sort_order' => 'desc',
  'sort_by' => 'fecha_afiliacion_c',
  'title_key' => 'LBL_CONTACTS_QTK_AFILIACION_1_FROM_QTK_AFILIACION_TITLE',
  'get_subpanel_data' => 'contacts_qtk_afiliacion_1',
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
