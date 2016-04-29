<?php

namespace Totoro\General;

/**
 * Tweet
 */
class Tweet
{
    /** @var int */
    private $id;
    /** @var string */
    private $text;

    /**
     * Constructor
     * @param int $id
     * @param string $text
     */
    public function __construct(
        int $id,
        string $text
    ) {
        $this->id = $id;
        $this->text = $text;
    }

    /**
     * @return int
     */
    public function id(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function text(): string
    {
        return $this->text;
    }
}
