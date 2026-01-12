<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class CollaboratorController extends Controller
{
    public function index(): View
    {
        return view('welcome');
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
