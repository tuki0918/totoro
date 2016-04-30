<?php

namespace Totoro\General;

use Abraham\TwitterOAuth\TwitterOAuth;
use Totoro\General\Responses\TweetApiResponse;
use Totoro\General\Responses\TweetListApiResponse;
use Totoro\General\Utils\TwitterApiEndpoint;

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
            TwitterApiEndpoint::statuses_user_timeline(),
            $parameters
        ));
    }
    
    public function postStatusesUpdate(array $parameters = []): TweetApiResponse
    {
        return new TweetApiResponse($this->post(
            TwitterApiEndpoint::statuses_update(),
            $parameters
        ));
    }

    public function getFavoritesList(array $parameters = []): TweetListApiResponse
    {
        return new TweetListApiResponse($this->get(
            TwitterApiEndpoint::favorites_list(),
            $parameters
        ));
    }

    public function destroyFavorites(array $parameters = []): TweetApiResponse
    {
        return new TweetApiResponse($this->post(
            TwitterApiEndpoint::favorites_destroy(),
            $parameters
        ));
    }

    /**
     * Request GET method.
     * @param TwitterApiEndpoint $apiEndpoint
     * @param array $parameters
     * @return array|object
     */
    private function get(TwitterApiEndpoint $apiEndpoint, array $parameters = [])
    {
        return $this->twitterOAuth->get($apiEndpoint->value(), $parameters);
    }

    /**
     * Request POST method.
     * @param TwitterApiEndpoint $apiEndpoint
     * @param array $parameters
     * @return array|object
     */
    private function post(TwitterApiEndpoint $apiEndpoint, array $parameters = [])
    {
        return $this->twitterOAuth->post($apiEndpoint->value(), $parameters);
    }
}
