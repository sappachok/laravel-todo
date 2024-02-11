<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;

class TutorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {        
        return Inertia::render(
            'Tutors/index',
            [
     
            ]
        );
    }

    public function emit()
    {        
        return Inertia::render(
            'Tutors/emit',
            [
     
            ]
        );
    }    

    public function event()
    {        
        return Inertia::render(
            'Tutors/event',
            [
     
            ]
        );
    }        
}
