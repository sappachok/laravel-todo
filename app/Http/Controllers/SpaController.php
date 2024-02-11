<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;

class SpaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {        
        return Inertia::render(
            'Spa/index',
            [
     
            ]
        );
    }    
}
