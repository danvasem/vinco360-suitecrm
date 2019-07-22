<?php
$searchdefs ['Contacts'] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'search_name' => 
      array (
        'name' => 'search_name',
        'label' => 'LBL_NAME',
        'type' => 'name',
        'default' => true,
        'width' => '10%',
      ),
    ),
    'advanced_search' => 
    array (
      'first_name' => 
      array (
        'name' => 'first_name',
        'default' => true,
        'width' => '10%',
      ),
      'last_name' => 
      array (
        'name' => 'last_name',
        'default' => true,
        'width' => '10%',
      ),
      'sexo_c' => 
      array (
        'type' => 'dynamicenum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_SEXO',
        'width' => '10%',
        'name' => 'sexo_c',
      ),
      'birthdate' => 
      array (
        'type' => 'date',
        'label' => 'LBL_BIRTHDATE',
        'width' => '10%',
        'default' => true,
        'name' => 'birthdate',
      ),
      'address_city' => 
      array (
        'name' => 'address_city',
        'label' => 'LBL_CITY',
        'type' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'pais_c' => 
      array (
        'type' => 'dynamicenum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_PAIS',
        'width' => '10%',
        'name' => 'pais_c',
      ),
      'phone_mobile' => 
      array (
        'type' => 'phone',
        'label' => 'LBL_MOBILE_PHONE',
        'width' => '10%',
        'default' => true,
        'name' => 'phone_mobile',
      ),
      'direccion_c' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_DIRECCION',
        'width' => '10%',
        'name' => 'direccion_c',
      ),
      'estado_vinco_c' => 
      array (
        'type' => 'dynamicenum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_ESTADO_VINCO',
        'width' => '10%',
        'name' => 'estado_vinco_c',
      ),
      'tipo_login_c' => 
      array (
        'type' => 'dynamicenum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_TIPO_LOGIN',
        'width' => '10%',
        'name' => 'tipo_login_c',
      ),
      'app_registro_vinco_c' => 
      array (
        'type' => 'dynamicenum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_APP_REGISTRO_VINCO',
        'width' => '10%',
        'name' => 'app_registro_vinco_c',
      ),
      'fecha_creacion_vinco_c' => 
      array (
        'type' => 'datetimecombo',
        'default' => true,
        'label' => 'LBL_FECHA_CREACION_VINCO',
        'width' => '10%',
        'name' => 'fecha_creacion_vinco_c',
      ),
      'fecha_registro_vinco_c' => 
      array (
        'type' => 'datetimecombo',
        'default' => true,
        'label' => 'LBL_FECHA_REGISTRO_VINCO',
        'width' => '10%',
        'name' => 'fecha_registro_vinco_c',
      ),
      'nombre_unico_c' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_NOMBRE_UNICO',
        'width' => '10%',
        'name' => 'nombre_unico_c',
      ),
      'id_cliente_c' => 
      array (
        'type' => 'int',
        'default' => true,
        'label' => 'LBL_ID_CLIENTE',
        'width' => '10%',
        'name' => 'id_cliente_c',
      ),
    ),
  ),
  'templateMeta' => 
  array (
    'maxColumns' => '3',
    'maxColumnsBasic' => '4',
    'widths' => 
    array (
      'label' => '10',
      'field' => '30',
    ),
  ),
);
;
?>
