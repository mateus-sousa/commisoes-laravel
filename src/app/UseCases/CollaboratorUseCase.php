<?php

namespace App\UseCases;

use App\Models\Collaborator;
use App\Repository\CollaboratorRepository;
use Illuminate\Database\Eloquent\Collection;

class CollaboratorUseCase
{
    protected CollaboratorRepository $collaboratorRepository;

    public function __construct()
    {
        $this->collaboratorRepository = new CollaboratorRepository();
    }
    public function getAllCollaborators(): Collection
    {
        return $this->collaboratorRepository->getAllCollaborators();
    }
}
