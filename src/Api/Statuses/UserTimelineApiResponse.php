<?php

namespace Totoro\Api\Statuses;

use Totoro\General\Entities\Tweet as Entity;
use Totoro\General\TwitterApiResponse as ApiResponse;

/**
 * UserTimelineApiResponse
 */
class UserTimelineApiResponse extends ApiResponse
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
