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
    public function entities(): array
    {
        return $this->transform(...$this->data());
    }
}
