<?php

namespace App\Http\Controllers;

use App\Http\Resources\PandaResource;
use App\Models\Panda;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PandaController extends Controller
{
    function index(Request $request):JsonResource{
        $pandas = Panda::all();

        $orderBy = $request->query("orderBy");
        $order = $request->query("order");

        if (!($orderBy=="name"||$orderBy=="age"||$orderBy==null)||!($order=="asc"||$order=="desc"||$order==null)) {
            abort(404);
        }
        
        if ($orderBy=="name") {
            if ($order=="desc") {
                $pandas = $pandas->sortByDesc("name");
            }
            else{
                $pandas = $pandas->sortBy("name");
            }
        }
        elseif ($orderBy=="age") {
            if ($order=="desc") {
                $pandas = $pandas->sortByDesc("birth");
            }
            else{
                $pandas = $pandas->sortBy("birth");
            }
        }

        return PandaResource::collection($pandas);
    }

    function show(int $id):JsonResource{
        $panda = Panda::findOrFail($id);
        return new PandaResource($panda);
    }
}
