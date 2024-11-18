<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'content' => $this->when($request->is('api/blog*'), function () use ($request) {
                if ($request->is('api/blog')) {
                    return str($this->content)->limit(20);
                }
                return $this->content;
            }),
            'published_at' => $this->when(!$request->is('api/blog'), function () {
                return $this->published_at;
            }),
        ];
    }
}
