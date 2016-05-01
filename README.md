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

// return: Totoro\General\Entities\Tweet
print_r($tweet);

```
