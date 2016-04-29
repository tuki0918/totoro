<?php

namespace Totoro\General;

use Totoro\General\Entities\Tweet as Entity;

/**
 * TwitterApiResponse
 */
class TwitterApiResponse
{
    /** @var array|object */
    protected $data;

    /**
     * Constructor
     * @param array|object $data
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * @return mixed
     */
    public function response()
    {
        // TODO limit Exception
        return $this->getResult();
    }

    /**
     * @return array|object
     */
    public function getResult()
    {
        return $this->data;
    }

    /**
     * @param object $tweet
     * @return Entity
     */
    protected function transform($tweet): Entity
    {
        // TODO readable property
        return new Entity(
            $tweet->id,
            $tweet->text
        );
    }
}
