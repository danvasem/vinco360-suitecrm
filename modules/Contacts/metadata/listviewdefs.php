<?php
$listViewDefs ['Contacts'] = 
array (
  'NAME' => 
  array (
    'width' => '40%',
    'label' => 'LBL_LIST_NAME',
    'link' => true,
    'contextMenu' => 
    array (
      'objectType' => 'sugarPerson',
      'metaData' => 
      array (
        'contact_id' => '{$ID}',
        'module' => 'Contacts',
        'return_action' => 'ListView',
        'contact_name' => '{$FULL_NAME}',
        'parent_id' => '{$ACCOUNT_ID}',
        'parent_name' => '{$ACCOUNT_NAME}',
        'return_module' => 'Contacts',
        'parent_type' => 'Account',
        'notes_parent_type' => 'Account',
      ),
    ),
    'orderBy' => 'name',
    'default' => true,
    'related_fields' => 
    array (
      0 => 'first_name',
      1 => 'last_name',
      2 => 'salutation',
      3 => 'account_name',
      4 => 'account_id',
    ),
  ),
  'EMAIL1' => 
  array (
    'width' => '15%',
    'label' => 'LBL_LIST_EMAIL_ADDRESS',
    'sortable' => false,
    'link' => true,
    'customCode' => '{$EMAIL1_LINK}',
    'default' => true,
  ),
  'PHONE_MOBILE' => 
  array (
    'width' => '10%',
    'label' => 'LBL_MOBILE_PHONE',
    'default' => true,
  ),
  'ESTADO_VINCO_C' => 
  array (
    'type' => 'dynamicenum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_ESTADO_VINCO',
    'width' => '10%',
  ),
  'TITLE' => 
  array (
    'width' => '15%',
    'label' => 'LBL_LIST_TITLE',
    'default' => false,
  ),
  'FIRST_NAME' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_FIRST_NAME',
    'width' => '10%',
    'default' => false,
  ),
  'LAST_NAME' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_LAST_NAME',
    'width' => '10%',
    'default' => false,
  ),
  'SEXO_C' => 
  array (
    'type' => 'dynamicenum',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_SEXO',
    'width' => '15%',
  ),
  'BIRTHDATE' => 
  array (
    'type' => 'date',
    'label' => 'LBL_BIRTHDATE',
    'width' => '10%',
    'default' => false,
  ),
  'CIUDAD_C' => 
  array (
    'type' => 'dynamicenum',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_CIUDAD',
    'width' => '15%',
  ),
  'JJWG_MAPS_ADDRESS_C' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_JJWG_MAPS_ADDRESS',
    'width' => '10%',
  ),
  'APP_REGISTRO_VINCO_C' => 
  array (
    'type' => 'dynamicenum',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_APP_REGISTRO_VINCO',
    'width' => '10%',
  ),
  'FECHA_CREACION_VINCO_C' => 
  array (
    'type' => 'datetimecombo',
    'default' => false,
    'label' => 'LBL_FECHA_CREACION_VINCO',
    'width' => '10%',
  ),
  'FECHA_ACTUALIZACION_VINCO_C' => 
  array (
    'type' => 'datetimecombo',
    'default' => false,
    'label' => 'LBL_FECHA_ACTUALIZACION_VINCO',
    'width' => '10%',
  ),
  'TIPO_LOGIN_C' => 
  array (
    'type' => 'dynamicenum',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_TIPO_LOGIN',
    'width' => '10%',
  ),
  'ID_CLIENTE_C' => 
  array (
    'type' => 'int',
    'default' => false,
    'label' => 'LBL_ID_CLIENTE',
    'width' => '10%',
  ),
  'NOMBRE_UNICO_C' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_NOMBRE_UNICO',
    'width' => '10%',
  ),
);
;
?>
