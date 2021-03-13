<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{

    public function index()
    {
        return 'Sono il metodo Index del Controller Test';
    }

    public function show($id = null)
    {
        return view('test')->with(['id' => $id]);
    }
}
