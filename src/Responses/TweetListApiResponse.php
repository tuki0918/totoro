<?php

namespace Totoro\General\Responses;

use Totoro\General\Entities\Tweet as Entity;

/**
 * TweetListApiResponse
 */
class TweetListApiResponse extends ApiResponse
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
