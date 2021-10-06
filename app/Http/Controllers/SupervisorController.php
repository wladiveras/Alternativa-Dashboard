<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;

class SupervisorController extends Controller
{
    /**
     * Show the profile for a given user.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */

    public function index()
    {
        return view('supervisor')->with('title', 'Um pequeno titulo para a pagina');
    }
}