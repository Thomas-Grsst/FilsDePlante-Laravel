<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VirtuelController extends Controller
{
    public function index()
    {
        return view("virtuel");
    }
}