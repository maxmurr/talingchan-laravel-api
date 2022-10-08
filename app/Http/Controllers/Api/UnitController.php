<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Unit;
use App\Http\Resources\UnitCollection;
use App\Http\Resources\UnitResource;

class UnitController extends Controller
{
    public function index()
    {
        return new UnitCollection(Unit::paginate());
    }

    public function show(Unit $unit)
    {
        return new UnitResource($unit);
    }
}
