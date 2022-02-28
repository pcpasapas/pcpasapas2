<?php

namespace App\Http\Controllers;
use App\Models\Ssd;
use Illuminate\Http\Request;

class SsdController extends Controller
{
    public function index()
    {
        return Ssd::all();
    }
}
