<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;
use Illuminate\Support\Carbon;

class UserCollection extends ResourceCollection
{

    public function toArray($request)
    {
        // return parent::toArray($request);
        return [
            "data" => $this->collection->map(function($data){
                return [
                    'id' => $data->id,
                    'name' => $data->name,
                    'email' => $data->email,
                    'created_at'    => Carbon::parse($data->created_at)->toDateTimeString()
                ];
            })
        ];
    }
}
