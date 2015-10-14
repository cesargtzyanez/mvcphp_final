<?php

/** Configuration Variables **/



define ('DEVELOPMENT_ENVIRONMENT',true);

define('DB_NAME', 'ingenig4_mvcphp');
define('DB_USER', 'ingenig4_mvcphp');
define('DB_PASSWORD', 'acceso2015');
define('DB_HOST', 'localhost');
define('DB_TABLE','usuarios');

define('ADD_USER','addUser');
define('EDIT_USER','editUser');
define('DELETE_USER','deleteUser');
define('GETALL_USER','getAllUser');
define('FIND_USER','findUser');

/************** HOME *******************/
define('HOME_VIEW','views/home.html');
define('HOME_TITLE','Lista de Usuarios');
define('HOME_H1TITLE','Lista de Usuarios');
define('HOME_H2TITLE','Usuarios totales: ');

/************** ADD *******************/
define('ADD_VIEW','views/user.html');
define('ADD_TITLE','Agregar Nuevo Usuario');
define('ADD_H1TITLE','Agregar Nuevo Usuario');

/************** EDIT *******************/
define('EDIT_VIEW','views/user.html');
define('EDIT_TITLE','Editar Usuario: ');
define('EDIT_H1TITLE','Editar Usuario');

/************** FIND *******************/
define('FIND_VIEW','views/home.html');
define('FIND_TITLE','Usuarios encontrados');
define('FIND_H1TITLE','Lista de Usuarios encontrados');
define('FIND_H2TITLE','Usuarios totales encontrados: ');
