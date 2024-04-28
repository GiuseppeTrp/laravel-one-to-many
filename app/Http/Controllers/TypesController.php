<?php

namespace App\Http\Controllers;

use App\Models\Types;
use App\Http\Requests\StoreTypesRequest;
use App\Http\Requests\UpdateTypesRequest;

class TypesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $types = types::all();

        return view('admin.types.index', compact('types'));    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTypesRequest $request)
    {
        return view('admin.types.show', compact('type'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Types $types)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Types $types)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTypesRequest $request, Types $types)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Types $types)
    {
        //
    }
}
