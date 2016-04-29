<?php

namespace Totoro\Api\Favorites;

use Totoro\General\Entities\Tweet as Entity;
use Totoro\General\TwitterApiResponse as ApiResponse;

/**
 * ListApiResponse
 */
class ListApiResponse extends ApiResponse
{
    /**
     * @return Entity[]
     */
    public function response(): array
    {
        return array_map(function($tweet) {
            return $this->transform($tweet);
        }, $this->getResult());
    }
}
