<?php

namespace Totoro\General;

use Totoro\General\Responses\TweetApiResponse;

/**
 * TwitterApiClient
 */
class TwitterApiClient extends TwitterApiClientBase
{
    /**
     * Alias
     * @see https://dev.twitter.com/rest/reference/post/statuses/update
     * @param array $parameters
     * @return TweetApiResponse
     */
    public function tweet(array $parameters = []): TweetApiResponse
    {
        return $this->postStatusesUpdate($parameters);
    }
}
