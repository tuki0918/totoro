<?php

namespace Totoro\General;

use Abraham\TwitterOAuth\TwitterOAuth;
use Totoro\General\Responses\TweetApiResponse;
use Totoro\General\Responses\TweetListApiResponse;
use Totoro\General\Utils\TwitterApiEndpoint as ApiEndpoint;

/**
 * TwitterApiClient
 */
class TwitterApiClient implements TwitterApiClientInterface
{
    /** @var TwitterOAuth */
    private $twitterOAuth;

    /**
     * Constructor
     * @param TwitterOAuth $twitterOAuth
     */
    public function __construct(TwitterOAuth $twitterOAuth)
    {
        $this->twitterOAuth = $twitterOAuth;
    }

    public function getStatusesUserTimeline(array $parameters = []): TweetListApiResponse
    {
        return new TweetListApiResponse($this->get(
            ApiEndpoint::statusesUserTimeline(),
            $parameters
        ));
    }
    
    public function postStatusesUpdate(array $parameters = []): TweetApiResponse
    {
        return new TweetApiResponse($this->post(
            ApiEndpoint::statusesUpdate(),
            $parameters
        ));
    }

    public function getFavoritesList(array $parameters = []): TweetListApiResponse
    {
        return new TweetListApiResponse($this->get(
            ApiEndpoint::favoritesList(),
            $parameters
        ));
    }

    public function postFavoritesDestroy(array $parameters = []): TweetApiResponse
    {
        return new TweetApiResponse($this->post(
            ApiEndpoint::favoritesDestroy(),
            $parameters
        ));
    }

    /**
     * Request GET method.
     * @param ApiEndpoint $apiEndpoint
     * @param array $parameters
     * @return array|object
     */
    private function get(ApiEndpoint $apiEndpoint, array $parameters = [])
    {
        return $this->twitterOAuth->get($apiEndpoint->value(), $parameters);
    }

    /**
     * Request POST method.
     * @param ApiEndpoint $apiEndpoint
     * @param array $parameters
     * @return array|object
     */
    private function post(ApiEndpoint $apiEndpoint, array $parameters = [])
    {
        return $this->twitterOAuth->post($apiEndpoint->value(), $parameters);
    }
}
