<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreVisitor_log_historiesRequest;
use App\Http\Requests\UpdateVisitor_log_historiesRequest;
use App\Http\Resources\VisitorLogHistoriesResource;
use App\Models\VisitorLogHistories;

class VisitorLogHistoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return VisitorLogHistoriesResource::collection(VisitorLogHistories::with('visitor')->get());
    }

    public function show(VisitorLogHistories $visitorloghistory)
    {
        return new VisitorLogHistoriesResource($visitorloghistory->load('visitor'));
    }
}
