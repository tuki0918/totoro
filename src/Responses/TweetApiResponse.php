<?php

namespace Totoro\General\Responses;

use Totoro\General\Entities\Tweet as Entity;

/**
 * TweetApiResponse
 */
class TweetApiResponse extends ApiResponse
{
    /**
     * @return Entity|null
     */
    public function entity()
    {
        $data = $this->transform($this->data());
        return isset($data[0]) ? $data[0] : null;
    }
}
