<?php

namespace Totoro\General;

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
    private static function make(string $value)
    {
        return new self($value);
    }

    /**
     * statuses/update
     * @see https://dev.twitter.com/rest/reference/post/statuses/update
     * @return TwitterApiEndpoint
     */
    public static function statuses_update()
    {
        return self::make('statuses/update');
    }

    /**
     * favorites/list
     * @see https://dev.twitter.com/rest/reference/get/favorites/list
     * @return TwitterApiEndpoint
     */
    public static function favorites_list()
    {
        return self::make('favorites/list');
    }

    /**
     * favorites/destroy
     * @see https://dev.twitter.com/rest/reference/post/favorites/destroy
     * @return TwitterApiEndpoint
     */
    public static function favorites_destroy()
    {
        return self::make('favorites/destroy');
    }
}
