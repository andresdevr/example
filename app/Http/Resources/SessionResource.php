<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Log;

class SessionResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'ip' => $this->ip_address,
            'last_activity' => Carbon::createFromTimestamp($this->last_activity)->toDateTimeString(),
            'user' => UserResource::make($this->whenLoaded('user')),
            'user_agent' => $this->user_agent
        ];
    }
}
