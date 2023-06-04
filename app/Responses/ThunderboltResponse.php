<?php

namespace App\Responses;

use App\Models\BaseThunderboltModel;
use Illuminate\Contracts\Support\Responsable;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

class ThunderboltResponse implements Responsable
{
    public function __construct(
        public readonly array | Collection | BaseThunderboltModel $data,
        public readonly int $status = Response::HTTP_OK
    ) {
    }

    public function toResponse($request): JsonResponse
    {
        return new JsonResponse(['data' => $this->data, 'status' => $this->status]);
    }
}
