<?php

namespace Totoro\Api\Favorites;

use Totoro\General\Entities\Tweet as Entity;
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
}
