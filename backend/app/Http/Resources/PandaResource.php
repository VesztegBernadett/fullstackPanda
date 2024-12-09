<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PandaResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $now = Carbon::now();
        return [
            "name"=>$this->name,
            "sex"=>$this->sex,
            "birth"=>$this->birth,
            "age"=>$now->diff($this->birth)->y
        ];
    }
}
