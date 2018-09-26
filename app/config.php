<?php
  $configs = new HXPHP\System\Configs\Config;
  ActiveRecord\Connection::$datetime_format = 'Y-m-d H:i:s';
  //Globais
  $configs->title = 'HXPHP Framework';
  //Configurações de Ambiente - Desenvolvimento
  $configs->env->add('development');
  $configs->env->development->baseURI = '/sistema/';
  $configs->env->development->database->setConnectionData([
    'host' => 'localhost',
    'user' => 'root',
    'password' => 'root',
    'dbname' => 'systemhx',
    'charset' => env('MYSQL_CHARSET', 'utf8')
  ]);

  return $configs;