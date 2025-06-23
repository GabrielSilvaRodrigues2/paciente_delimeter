<?php
namespace src\Controllers;

use src\Services\PacienteService;
use src\Models\Repository\PacienteRepository;

class PacienteController {
    private $service;

    public function __construct() {
        $repository = new PacienteRepository();
        $this->service = new PacienteService($repository);
    }

    public function criar() {
        $data = json_decode(file_get_contents("php://input"));
        echo json_encode(
            $this->service->criar($data->id_usuario, $data->cpf, $data->nis)
        );
    }

    public function mostrarFormulario() {
        echo "foi";
        include_once __DIR__ . '/view/paciente/form.php';
    }
}
?>