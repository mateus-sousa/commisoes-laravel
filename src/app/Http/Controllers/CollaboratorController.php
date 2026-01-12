<?php

namespace App\Http\Controllers;

use App\Models\Collaborator;
use App\UseCases\CollaboratorUseCase;
use Illuminate\View\View;

class CollaboratorController extends Controller
{
    protected CollaboratorUseCase $collaboratorUseCase;

    public function __construct()
    {
        $this->collaboratorUseCase = new CollaboratorUseCase();
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
