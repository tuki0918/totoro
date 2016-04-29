<?php

namespace Totoro\Api\Statuses;

use Totoro\General\Entities\Tweet as Entity;
use Totoro\General\TwitterApiResponse as ApiResponse;

/**
 * UpdateApiResponse
 */
class UpdateApiResponse extends ApiResponse
{
    /**
     * @return Entity
     */
    public function response(): Entity
    {
        return $this->transform($this->getResult());
    }
}
