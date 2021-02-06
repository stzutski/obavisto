<?php
session_start();
if(!isSet($_SESSION['TITAPP'])) $_SESSION['TITAPP'] = '';

/* configurações globais do sistema
*/

define('PATHVIEWS','/labs/obavisto/views/');
define('PATHVIEWSCACHE','/labs/obavisto/views/cache');
define('TITLEAPP','ObaVisto!');
define('URLAPP','http://localhost/labs/obavisto/');
define('URLLOGIN','http://localhost/labs/obavisto/login');
define('URLPROCLOGIN','http://localhost/labs/obavisto/proc-login');
define('URLCADASTRO','http://localhost/labs/obavisto/cadastro');
define('URLPROCCADASTRO','http://localhost/labs/obavisto/cadastro/proc-cadastro');
define('URLPWDRECOVERY','http://localhost/labs/obavisto/recuperar-senha');
define('URLPPRIVACIDADE','http://localhost/labs/obavisto/politicas-privacidade.pdf');




?>
