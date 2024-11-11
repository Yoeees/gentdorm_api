<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBoardersRequest;
use App\Http\Requests\UpdateBoardersRequest;
use App\Http\Resources\BoardersResource;
use App\Models\Boarders;
use Illuminate\Http\Request;

class BoardersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return BoardersResource::collection(Boarders::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBoardersRequest $request)
    {
        // Create a new boarder based on the validated data
        $boarder = Boarders::create($request->validated());
        return new BoardersResource($boarder); // Return the created resource
    }

    /**
     * Display the specified resource.
     */
    public function show(Boarders $boarder)
    {
        // Attempt to retrieve the boarder by school_id
        // $boarders = Boarders::where('school_id', $school_id)->first();
    
        // // If no boarder is found, return a 404 response
        // if (!$boarders) {
        //     return response()->json(['message' => 'Boarder not found'], 404);
        // }
    
        // // Return the found boarder resource
        return new BoardersResource($boarder);
    }
    

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBoardersRequest $request, Boarders $boarder)
    {
 
        $boarder->update($request->validated());
        return new BoardersResource($boarder); // Return the updated resource
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($school_id)
    {   
        $boarders = Boarders::where('school_id', $school_id)->first();
        $boarders->delete(); // Delete the specified resource
        return response()->noContent(); // Return a 204 No Content response
    }
}
