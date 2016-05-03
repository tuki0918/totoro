[![Build Status](https://travis-ci.org/tuki0918/totoro.svg?branch=master)](https://travis-ci.org/tuki0918/totoro)
[![Latest Stable Version](https://poser.pugx.org/tuki0918/totoro/v/stable)](https://packagist.org/packages/tuki0918/totoro)
[![Latest Unstable Version](https://poser.pugx.org/tuki0918/totoro/v/unstable)](https://packagist.org/packages/tuki0918/totoro)
[![Coverage Status](https://coveralls.io/repos/github/tuki0918/totoro/badge.svg?branch=master)](https://coveralls.io/github/tuki0918/totoro?branch=master)
[![Total Downloads](https://poser.pugx.org/tuki0918/totoro/downloads)](https://packagist.org/packages/tuki0918/totoro)
[![License](https://poser.pugx.org/tuki0918/totoro/license)](https://packagist.org/packages/tuki0918/totoro)

# totoro

```
<?php

use Abraham\TwitterOAuth\TwitterOAuth;
use Totoro\General\TwitterApiClient;

define('CONSUMER_KEY', getenv('CONSUMER_KEY'));
define('CONSUMER_SECRET', getenv('CONSUMER_SECRET'));

$accessToken = getenv('ACCESS_TOKEN');
$accessTokenSecret = getenv('ACCESS_TOKEN_SECRET');

$client = new TwitterApiClient(new TwitterOAuth(
    CONSUMER_KEY,
    CONSUMER_SECRET,
    $accessToken,
    $accessTokenSecret
));


// get: user timeline
$tweets = $client->getStatusesUserTimeline([
    'screen_name' => 'tuki0918',
    'count' => 5
])->entities();

// return: Totoro\General\Entities\Tweet[]
print_r($tweets);


// post: tweet
$tweet = $client->postStatusesUpdate(
    ['status' => 'twitter api post.']
)->entity();

// post: alias tweet
$tweet = $client->tweet(
    ['status' => 'twitter api post.']
)->entity();

// return: Totoro\General\Entities\Tweet
print_r($tweet);

```
