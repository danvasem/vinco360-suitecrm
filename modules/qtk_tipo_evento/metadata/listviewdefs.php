<?php
$module_name = 'qtk_tipo_evento';
$listViewDefs [$module_name] = 
array (
  'ID_TIPO_EVENTO_C' => 
  array (
    'type' => 'int',
    'default' => true,
    'label' => 'LBL_ID_TIPO_EVENTO',
    'width' => '5%',
  ),
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'DESCRIPTION' => 
  array (
    'type' => 'text',
    'label' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '60%',
    'default' => true,
  ),
  'ESTADO_C' => 
  array (
    'type' => 'dynamicenum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_ESTADO',
    'width' => '8%',
  ),
);
;
?>
