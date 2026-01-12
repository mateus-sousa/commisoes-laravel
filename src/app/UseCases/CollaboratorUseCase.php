<?php

namespace App\UseCases;

use App\Repository\CollaboratorRepository;
use Illuminate\Database\Eloquent\Collection;

class CollaboratorUseCase
{
    protected CollaboratorRepository $collaboratorRepository;

    public function __construct(CollaboratorRepository $collaboratorRepository)
    {
        $this->collaboratorRepository = $collaboratorRepository;
    }
    public function getAllCollaborators(): Collection
    {
        return $this->collaboratorRepository->getAllCollaborators();
    }
}
