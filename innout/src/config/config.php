<?php

date_default_timezone_set('America/Sao_Paulo');
setlocale(LC_TIME, 'pt-br', 'pr_BR.utf-8', 'portuguese');

//Pastas
define('MODEL-PATH', realpath(dirname(__FILE__) . '/../models'));

//
require_once(realpath(dirname(__FILE__) . '/database.php'));