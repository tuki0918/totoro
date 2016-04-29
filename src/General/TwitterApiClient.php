<?php

namespace Totoro\General;

use Abraham\TwitterOAuth\TwitterOAuth;
use Totoro\Api\Favorites\DestroyApiResponse;
use Totoro\Api\Favorites\ListApiResponse;
use Totoro\Api\Statuses\UpdateApiResponse;

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

    public function postStatusesUpdate(array $parameters = []): UpdateApiResponse
    {
        return new UpdateApiResponse($this->post(
            TwitterApiEndpoint::statuses_update(),
            $parameters
        ));
    }

    public function getFavoritesList(array $parameters = []): ListApiResponse
    {
        return new ListApiResponse($this->get(
            TwitterApiEndpoint::favorites_list(),
            $parameters
        ));
    }

    public function destroyFavorites(array $parameters = []): DestroyApiResponse
    {
        return new DestroyApiResponse($this->post(
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
