<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function index()
    {
         return view('Categoria.index');
    }
    public function create()
    {}

    public function store(Request $request)
    {}


}
