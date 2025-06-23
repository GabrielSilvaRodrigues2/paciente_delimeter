<?php
    namespace src\Controllers;

    use src\Services\PacienteService;

    class PacienteController{
        private $service;

        public function __construct()
        {
            $this->service = new PacienteService();
        }

        public function criar(){
            $data =  json_decode(file_get_contents("php://input"));
            echo json_encode(
                $this->service->criar($data->id_usuario, $data->cpf, $data->nis)
            );
        }

        public function mostrarFormulario(){
            include_once __DIR__.'/view/aluno/form.php';
        }

    }
?>