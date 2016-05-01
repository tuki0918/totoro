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

    /** @var string|null */
    private $oauthCallback;

    /** @var string|null */
    private $lastOauthToken;

    /** @var string|null */
    private $lastOauthTokenSecret;

    /**
     * Constructor
     * @param TwitterOAuth $twitterOAuth
     */
    public function __construct(TwitterOAuth $twitterOAuth)
    {
        $this->twitterOAuth = $twitterOAuth;
        $this->oauthCallback = null;
        $this->lastOauthToken = null;
        $this->lastOauthTokenSecret = null;
    }

    /**
     * @param string $oauth_callback
     * @return TwitterApiClientBase
     */
    public function setOauthCallback(string $oauth_callback): TwitterApiClientBase
    {
        $this->oauthCallback = $oauth_callback;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getOauthCallback()
    {
        return $this->oauthCallback;
    }

    /**
     * @return null|string
     */
    public function getLastOauthToken()
    {
        return $this->lastOauthToken;
    }

    /**
     * @return null|string
     */
    public function getLastOauthTokenSecret()
    {
        return $this->lastOauthTokenSecret;
    }

    /**
     * @return array
     * @throws \Abraham\TwitterOAuth\TwitterOAuthException
     */
    public function getRequestToken(): array
    {
        $token = $this->twitterOAuth->oauth('oauth/request_token', ['oauth_callback' => $this->getOauthCallback()]);

        $this->lastOauthToken = $token['oauth_token'] ?? null;
        $this->lastOauthTokenSecret = $token['oauth_token_secret'] ?? null;

        return $token;
    }

    /**
     * @return string
     */
    public function getTwitterAuthenticationUrl(): string
    {
        $this->getRequestToken();

        return $this->twitterOAuth->url('oauth/authorize', ['oauth_token' => $this->getLastOauthToken()]);
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
