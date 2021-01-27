<?php
session_start();
if(!isSet($_SESSION['TITAPP'])) $_SESSION['TITAPP'] = '';

/* configurações globais do sistema
*/

define('PATHVIEWS','/labs/obavisto/views/');
define('PATHVIEWSCACHE','/labs/obavisto/views/cache');
define('TITLEAPP','ObaVisto!');
define('URLAPP','http://localhost/labs/obavisto/');




?>