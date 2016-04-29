<?php

namespace Totoro\General;

use Totoro\Api\Favorites\DestroyApiResponse;
use Totoro\Api\Favorites\ListApiResponse;

/**
 * Interface TwitterApiClientInterface
 */
interface TwitterApiClientInterface
{
    /**
     * @see https://dev.twitter.com/rest/reference/get/favorites/list
     * @param array $params
     * @return ListApiResponse
     */
    public function getFavoritesList(array $params = []): ListApiResponse;

    /**
     * @see https://dev.twitter.com/rest/reference/post/mutes/users/destroy
     * @param array $params
     * @return DestroyApiResponse
     */
    public function destroyFavorites(array $params = []): DestroyApiResponse;
}
