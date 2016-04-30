<?php

namespace Totoro\General\Responses;

use Totoro\General\Entities\Tweet as Entity;

/**
 * TweetApiResponse
 */
class TweetApiResponse extends ApiResponse
{
    /**
     * @return Entity
     */
    public function response(): Entity
    {
        return $this->transform($this->getResult());
    }
}
