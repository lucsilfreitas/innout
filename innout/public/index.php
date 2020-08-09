<?php

/*
chama somente a base de dados

require_once(dirname(__FILE__, 2) . '/src/config/database.php' );

//Database::getConnection(); 

*/

require_once(dirname(__FILE__, 2) . '/src/config/config.php' );
require_once(dirname(__FILE__, 2) . '/src/models/User.php' );

$user = new User();
echo  'Fim';