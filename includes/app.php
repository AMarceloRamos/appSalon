<?php 

require_once __DIR__ . '/funciones.php';
require_once __DIR__ . '/database.php';
require_once __DIR__ . '/../vendor/autoload.php';

use Model\ActiveRecord;

ActiveRecord::setDB($db);