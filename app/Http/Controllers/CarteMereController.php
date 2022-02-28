<?php

namespace App\Http\Controllers;

use App\Models\CarteMere;
use Illuminate\Http\Request;

class CarteMereController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {
    //     //
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function create()
    // {
    //     //
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function store(Request $request)
    // {
    //     //
    // }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CarteMere  $carteMere
     * @return \Illuminate\Http\Response
     */
    public function show(CarteMere $carteMere)
    { {
            $posts = CarteMere::orderBy('created_at', 'desc')->get();
            return response($posts);
        }
    }

/**
 * Show the form for editing the specified resource.
 *
 * @param  \App\Models\CarteMere  $carteMere
 * @return \Illuminate\Http\Response
 */
// public function edit(CarteMere $carteMere)
// {
//     //
// }

/**
 * Update the specified resource in storage.
 *
 * @param  \Illuminate\Http\Request  $request
 * @param  \App\Models\CarteMere  $carteMere
 * @return \Illuminate\Http\Response
 */
// public function update(Request $request, CarteMere $carteMere)
// {
//     //
// }

/**
 * Remove the specified resource from storage.
 *
 * @param  \App\Models\CarteMere  $carteMere
 * @return \Illuminate\Http\Response
 */
// public function destroy(CarteMere $carteMere)
// {
//     //
// }
}
