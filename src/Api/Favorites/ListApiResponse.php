<?php

namespace Totoro\Api\Favorites;

use Totoro\General\Tweet as Entity;
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

    /**
     * @param object $tweet
     * @return Entity
     */
    private function transform($tweet): Entity
    {
        // TODO readable property
        return new Entity(
            $tweet->id,
            $tweet->text
        );
    }
}
