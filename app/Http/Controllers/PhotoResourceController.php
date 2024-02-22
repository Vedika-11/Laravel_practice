<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PhotoResourceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return "index!";
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        echo "create!";
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        echo "store!";
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        echo "show!";
        echo $id;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        echo "edit!";
        echo $id;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        echo "update!";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        echo "destroy!";
    }
}
