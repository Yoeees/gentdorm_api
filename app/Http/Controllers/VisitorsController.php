<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreVisitorsRequest;
use App\Http\Requests\UpdateVisitorsRequest;
use App\Http\Resources\VisitorsResource;
use App\Models\Visitors;

class VisitorsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return VisitorsResource::collection(Visitors::all());
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreVisitorsRequest $request)
    {
        //
        $visitors=Visitors::create($request->validated());
        return new VisitorsResource($visitors);
    }

    /**
     * Display the specified resource.
     */
    public function show(Visitors $visitor)
    {
        return new VisitorsResource($visitor);    

        
    }   


    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateVisitorsRequest $request, Visitors $visitors)
    {
        //
        $visitors->update($request->validated());
        return new VisitorsResource($visitors);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Visitors $visitors)
    {
        
        $visitors->delete(); // Delete the specified resource
        return response()->noContent(); // Return a 204 No Content response
    }
}
