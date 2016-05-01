<?php

namespace Totoro\General;

use Abraham\TwitterOAuth\TwitterOAuth;
use Totoro\General\Exceptions\TwitterApiException;
use Totoro\General\Responses\TweetApiResponse;
use Totoro\General\Responses\TweetListApiResponse;
use Totoro\General\Utils\TwitterApiEndpoint as ApiEndpoint;

/**
 * TwitterApiClientBase
 */
abstract class TwitterApiClientBase implements TwitterApiClientInterface
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
     *
     * @param ApiEndpoint $apiEndpoint
     * @param array $parameters
     * @return array|object
     * @throws TwitterApiException
     */
    private function get(ApiEndpoint $apiEndpoint, array $parameters = [])
    {
        $data = $this->twitterOAuth->get($apiEndpoint->value(), $parameters);

        $this->httpCodeIsValid();

        return $data;
    }

    /**
     * Request POST method.
     *
     * @param ApiEndpoint $apiEndpoint
     * @param array $parameters
     * @return array|object
     * @throws TwitterApiException
     */
    private function post(ApiEndpoint $apiEndpoint, array $parameters = [])
    {
        $data = $this->twitterOAuth->post($apiEndpoint->value(), $parameters);

        $this->httpCodeIsValid();

        return $data;

    }

    /**
     * Valid http status code.
     *
     * @see https://dev.twitter.com/overview/api/response-codes
     * @throws TwitterApiException
     */
    private function httpCodeIsValid()
    {
        if ($this->twitterOAuth->getLastHttpCode() !== 200) {
            throw new TwitterApiException();
        }
    }
}
