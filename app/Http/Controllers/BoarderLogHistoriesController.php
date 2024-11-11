<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBoarderLogHistoryRequest;
use App\Http\Resources\BoarderLogHistoriesResource;

use App\Models\BoarderLogHistories;
use Illuminate\Http\Request;

class BoarderLogHistoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return BoarderLogHistoriesResource::collection(BoarderLogHistories::with('boarder')->get());
    }

    public function show(BoarderLogHistories $boarderloghistory)
    {
        return new BoarderLogHistoriesResource($boarderloghistory->load('boarder'));
    }
    public function store(StoreBoarderLogHistoryRequest $request)
    {

        $data = $request->validated();
        if (!isset($data['time_stamp'])) {
            $data['time_stamp'] = now(); // Automatically set the current timestamp
        }
        $boarderLogHistory = BoarderLogHistories::create($request->validated());

        return new BoarderLogHistoriesResource($boarderLogHistory);
    }

}
