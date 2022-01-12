<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //Functie die controleert of je ingelogd bent en daardoor de
    //pagina mag bezoeken
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return 'COMING SOON!';
    }
}
