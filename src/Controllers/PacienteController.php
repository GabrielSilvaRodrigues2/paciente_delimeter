<?php
namespace src\Controllers;

use src\Services\PacienteService;

class PacienteController {
    private $service;

    public function __construct(PacienteService $service) {
        $this->service = $service;
    }

    public function criar() {
        $data = json_decode(file_get_contents("php://input"));
        echo json_encode(
            $this->service->criar($data->id_usuario, $data->cpf, $data->nis)
        );
    }

    public function mostrarFormulario(){
        include_once $_SERVER['DOCUMENT_ROOT'] . '/view/paciente/form.php';
    }
}
?>