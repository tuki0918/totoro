<?php

namespace Totoro\General;

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
}
