<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;

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
            'user' => $this->user_id ? UserResource::make($this->user) : 'unknown',
            'user_agent' => $this->user_agent
        ];
    }
}
