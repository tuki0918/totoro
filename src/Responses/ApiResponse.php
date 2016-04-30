<?php

namespace Totoro\General\Responses;

use Totoro\General\Entities\Tweet as Entity;

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
     * @return Entity[]
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
     * @return Entity
     */
    protected function create(\stdClass $tweet): Entity
    {
        return new Entity(
            $tweet->id,
            $tweet->text
        );
    }
}
