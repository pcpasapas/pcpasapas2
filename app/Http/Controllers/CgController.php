<?php

namespace App\Http\Controllers;
use App\Models\cg;
use Illuminate\Http\Request;

class CgController extends Controller
{
    public function index()
    {
        return cg::all();
    }
}
