<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Lot;
use App\Http\Resources\LotCollection;
use App\Http\Resources\LotResource;

class LotController extends Controller
{
    public function index()
    {
        return new LotCollection(Lot::paginate());
    }

    public function show(Lot $lot)
    {
        return new LotResource($lot);
    }
}
