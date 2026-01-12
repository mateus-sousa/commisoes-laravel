<?php

namespace App\Http\Controllers;

use App\UseCases\CollaboratorUseCase;
use Illuminate\View\View;

class IndexController extends Controller
{
    protected CollaboratorUseCase $collaboratorUseCase;
    public function __construct()
    {
        $this->collaboratorUseCase = new CollaboratorUseCase();
    }

    public function index(): View
    {
        return view('welcome');
    }
}
