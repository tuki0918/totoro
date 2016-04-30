<?php

namespace Totoro\General;

use Totoro\General\Responses\TweetApiResponse;
use Totoro\General\Responses\TweetListApiResponse;

/**
 * Interface TwitterApiClientInterface
 */
interface TwitterApiClientInterface
{
    /**
     * @see https://dev.twitter.com/rest/reference/get/statuses/user_timeline
     * @param array $parameters
     * @return TweetListApiResponse
     */
    public function getStatusesUserTimeline(array $parameters = []): TweetListApiResponse;

    /**
     * @see https://dev.twitter.com/rest/reference/post/statuses/update
     * @param array $parameters
     * @return TweetApiResponse
     */
    public function postStatusesUpdate(array $parameters = []): TweetApiResponse;

    /**
     * @see https://dev.twitter.com/rest/reference/get/favorites/list
     * @param array $parameters
     * @return TweetListApiResponse
     */
    public function getFavoritesList(array $parameters = []): TweetListApiResponse;

    /**
     * @see https://dev.twitter.com/rest/reference/post/mutes/users/destroy
     * @param array $parameters
     * @return TweetApiResponse
     */
    public function postFavoritesDestroy(array $parameters = []): TweetApiResponse;
}
