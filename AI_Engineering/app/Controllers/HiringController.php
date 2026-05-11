<?php

namespace App\Controllers;

class HiringController extends BaseController
{
    /**
     * Renders the futuristic hiring landing page.
     */
    public function index(): string
    {
        // This assumes your view file is named 'hiring.php' 
        // and located in 'app/Views/'
        return view('pages/hiring');
    }
}