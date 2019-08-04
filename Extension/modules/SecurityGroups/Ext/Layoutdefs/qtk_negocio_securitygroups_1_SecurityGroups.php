<?php
 // created: 2019-07-31 17:12:07
$layout_defs["SecurityGroups"]["subpanel_setup"]['qtk_negocio_securitygroups_1'] = array (
  'order' => 100,
  'module' => 'qtk_negocio',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_QTK_NEGOCIO_SECURITYGROUPS_1_FROM_QTK_NEGOCIO_TITLE',
  'get_subpanel_data' => 'qtk_negocio_securitygroups_1',
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
