<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class WelcomeController extends Controller
{
    /**
     * Display the welcome view.
     */
    public function __invoke(): View
    {
        return view('welcome');
    }
}
