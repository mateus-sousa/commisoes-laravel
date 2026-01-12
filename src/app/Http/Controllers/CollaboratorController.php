<?php

namespace App\Http\Controllers;

use App\Repository\CollaboratorRepository;
use App\UseCases\CollaboratorUseCase;
use Illuminate\View\View;

class CollaboratorController extends Controller
{
    protected CollaboratorUseCase $collaboratorUseCase;

    public function __construct()
    {
        $this->collaboratorUseCase = new CollaboratorUseCase(new CollaboratorRepository());
    }

    public function index(): View
    {
        $collaborators = $this->collaboratorUseCase->getAllCollaborators();
        return view('collaborators', ['collaborators' => $collaborators]);
    }

    public function create(): View
    {
        return view('welcome');
    }

    public function find($id): View
    {
        return view('welcome');
    }
}
