<?php

namespace Totoro\General\Responses;

use Totoro\General\Entities\Tweet;
use Totoro\General\Entities\User;

/**
 * ApiResponse
 */
class ApiResponse
{
    /** @var array|object */
    private $data;

    /**
     * Constructor
     * @param array|object $data
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * @return array|object
     */
    public function data()
    {
        return $this->data;
    }

    /**
     * @param \stdClass[] ...$tweets
     * @return Tweet[]
     */
    protected function transform(\stdClass ...$tweets): array
    {
        $data = [];
        foreach ($tweets as $tweet) {
            $data[] = $this->create($tweet);
        }
        return $data;
    }

    /**
     * @param \stdClass $tweet
     * @return Tweet
     */
    protected function create(\stdClass $tweet): Tweet
    {
        $user = new User(
            $tweet->user->id,
            $tweet->user->id_str,
            $tweet->user->name,
            $tweet->user->screen_name,
            $tweet->user->protected,
            $tweet->user->followers_count,
            $tweet->user->friends_count,
            $tweet->user->listed_count,
            new \DateTime($tweet->user->created_at),
            $tweet->user->favourites_count,
            $tweet->user->geo_enabled,
            $tweet->user->verified,
            $tweet->user->statuses_count,
            $tweet->user->is_translator,
            $tweet->user->is_translation_enabled,
            $tweet->user->profile_background_color,
            $tweet->user->profile_background_image_url,
            $tweet->user->profile_background_image_url_https,
            $tweet->user->profile_background_tile,
            $tweet->user->profile_image_url,
            $tweet->user->profile_image_url_https,
            $tweet->user->profile_link_color,
            $tweet->user->profile_sidebar_border_color,
            $tweet->user->profile_sidebar_fill_color,
            $tweet->user->profile_text_color,
            $tweet->user->profile_use_background_image,
            $tweet->user->has_extended_profile,
            $tweet->user->default_profile,
            $tweet->user->default_profile_image,
            $tweet->user->url,
            $tweet->user->description,
            $tweet->user->entities,
            $tweet->user->location,
            $tweet->user->utc_offset,
            $tweet->user->time_zone,
            $tweet->user->following,
            $tweet->user->follow_request_sent,
            $tweet->user->notifications
        );
        
        return new Tweet(
            $tweet->id,
            $tweet->id_str,
            new \DateTime($tweet->created_at),
            $tweet->text,
            $tweet->entities,
            $tweet->truncated,
            $tweet->source,
            $user,
            $tweet->is_quote_status,
            $tweet->retweet_count,
            $tweet->favorite_count,
            $tweet->favorited,
            $tweet->retweeted,
            $tweet->lang,
            $tweet->in_reply_to_status_id,
            $tweet->in_reply_to_status_id_str,
            $tweet->in_reply_to_user_id,
            $tweet->in_reply_to_user_id_str,
            $tweet->in_reply_to_screen_name,
            $tweet->coordinates,
            $tweet->place,
            $tweet->contributors,
            $tweet->geo
        );
    }
}
