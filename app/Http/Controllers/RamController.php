<?php

namespace App\Http\Controllers;
use App\Models\ram;
use Illuminate\Http\Request;

class RamController extends Controller
{
    public function index()
    {
        return ram::all();
    }
}
