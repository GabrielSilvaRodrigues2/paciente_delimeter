<?php

require_once __DIR__ . '/vendor/autoload.php';

use src\Routes\Routes;
use src\Controllers\PacienteController;
include  __DIR__ . 'view/index.php';

echo "Hello Word!";
$route = new Routes();

//rota é apenas o Back-End com API
$route->add('POST', '/api/paciente', [new PacienteController, 'criar']);


//rota tem o Front-End em PHP com Back-end em PHP
$route->add('GET', '/paciente/cadastro', [new PacienteController, 'mostrarFormulario']);
?>