<?php
namespace src\Services;
use src\Models\Repository\PacienteRepository;
use src\Models\Entity\Paciente;

class PacienteService{
    private $paciente;

    public function __construct($paciente){
        $this->paciente = new PacienteRepository($paciente);
    }
    public function criar(Paciente $paciente){
        $paciente = new Paciente($cpf, $nis);
        $this->paciente->save($paciente);
    }
}
?>