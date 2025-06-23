<?php
namespace src\Services;
use src\Models\Repository\PacienteRepository;
use src\Models\Entity\Paciente;

class PacienteService {
    private $pacienteRepository;

    public function __construct(PacienteRepository $pacienteRepository) {
        $this->pacienteRepository = $pacienteRepository;
    }

    public function criar(Paciente $paciente) {
        $this->pacienteRepository->save($paciente);
    }
}
?>