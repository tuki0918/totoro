<?php

namespace Totoro\Api\Favorites;

use Totoro\General\Tweet as Entity;
use Totoro\General\TwitterApiResponse as ApiResponse;

/**
 * DestroyApiResponse
 */
class DestroyApiResponse extends ApiResponse
{
    /**
     * @return Entity
     */
    public function response(): Entity
    {
        return $this->transform($this->getResult());
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
