<?php

namespace Totoro\General;

use Totoro\Api\Favorites\DestroyApiResponse;
use Totoro\Api\Favorites\ListApiResponse;
use Totoro\Api\Statuses\UpdateApiResponse;
use Totoro\Api\Statuses\UserTimelineApiResponse;

/**
 * Interface TwitterApiClientInterface
 */
interface TwitterApiClientInterface
{
    /**
     * @see https://dev.twitter.com/rest/reference/get/statuses/user_timeline
     * @param array $parameters
     * @return UserTimelineApiResponse
     */
    public function getStatusesUserTimeline(array $parameters = []): UserTimelineApiResponse;

    /**
     * @see https://dev.twitter.com/rest/reference/post/statuses/update
     * @param array $parameters
     * @return UpdateApiResponse
     */
    public function postStatusesUpdate(array $parameters = []): UpdateApiResponse;

    /**
     * @see https://dev.twitter.com/rest/reference/get/favorites/list
     * @param array $parameters
     * @return ListApiResponse
     */
    public function getFavoritesList(array $parameters = []): ListApiResponse;

    /**
     * @see https://dev.twitter.com/rest/reference/post/mutes/users/destroy
     * @param array $parameters
     * @return DestroyApiResponse
     */
    public function destroyFavorites(array $parameters = []): DestroyApiResponse;
}