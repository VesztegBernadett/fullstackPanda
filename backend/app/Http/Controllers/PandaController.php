<?php

namespace App\Http\Controllers;

use App\Http\Resources\PandaResource;
use App\Models\Panda;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PandaController extends Controller
{
    function index():JsonResource{
        return PandaResource::collection(Panda::all());
    }

    function show(int $id):JsonResource{
        $panda = Panda::findOrFail($id);
        return new PandaResource($panda);
    }
}
