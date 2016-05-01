<?php

namespace Totoro\General\Responses;

use Totoro\General\Entities\Tweet;

/**
 * TweetListApiResponse
 */
class TweetListApiResponse extends ApiResponse
{
    /**
     * @return Tweet[]
     */
    public function entities(): array
    {
        return $this->transform(...$this->data());
    }
}
