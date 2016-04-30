<?php

namespace Totoro\General\Utils;

/**
 * TwitterApiEndpoint
 */
final class TwitterApiEndpoint
{
    /**
     * Constructor
     * @param string $value
     */
    private function __construct(string $value)
    {
        $this->value = $value;
    }

    /**
     * @return string
     */
    public function value(): string
    {
        return $this->value;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->value;
    }

    /**
     * Make API endpoint path.
     * @param string $value
     * @return TwitterApiEndpoint
     */
    private static function make(string $value): TwitterApiEndpoint
    {
        return new self($value);
    }

    /**
     * statuses/user_timeline
     * @see https://dev.twitter.com/rest/reference/get/statuses/user_timeline
     * @return TwitterApiEndpoint
     */
    public static function statuses_user_timeline(): TwitterApiEndpoint
    {
        return self::make('statuses/user_timeline');
    }

    /**
     * statuses/update
     * @see https://dev.twitter.com/rest/reference/post/statuses/update
     * @return TwitterApiEndpoint
     */
    public static function statuses_update(): TwitterApiEndpoint
    {
        return self::make('statuses/update');
    }

    /**
     * favorites/list
     * @see https://dev.twitter.com/rest/reference/get/favorites/list
     * @return TwitterApiEndpoint
     */
    public static function favorites_list(): TwitterApiEndpoint
    {
        return self::make('favorites/list');
    }

    /**
     * favorites/destroy
     * @see https://dev.twitter.com/rest/reference/post/favorites/destroy
     * @return TwitterApiEndpoint
     */
    public static function favorites_destroy(): TwitterApiEndpoint
    {
        return self::make('favorites/destroy');
    }
}
