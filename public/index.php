<?php

require_once __DIR__ . '/vendor/autoload.php';


use src\Routes\Routes;
use src\Models\Repository\PacienteRepository;
use src\Services\PacienteService;
use src\Controllers\PacienteController;

$pacienteRepository = new PacienteRepository();
$pacienteService = new PacienteService($pacienteRepository);
$pacienteController = new PacienteController($pacienteService);

$route = new Routes();

$route->add('POST', '/api/paciente', [$pacienteController, 'criar']);
$route->add('GET', '/paciente/cadastro', [$pacienteController, 'mostrarFormulario']);

$method = $_SERVER['REQUEST_METHOD'];
$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

$route->dispatch($method, $path);
?>