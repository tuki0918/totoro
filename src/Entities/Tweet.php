<?php

namespace Totoro\General\Entities;

/**
 * Tweet
 *
 * @see https://dev.twitter.com/overview/api/tweets
 */
class Tweet
{
    /** @var int */
    private $id;
    /** @var string */
    private $idStr;
    /** @var \DateTime */
    private $createdAt;
    /** @var string */
    private $text;
    /** @var \stdClass */ // TODO
    private $entities;
    /** @var bool */
    private $truncated;
    /** @var string */
    private $source;
    /** @var int|null */
    private $inReplyToStatusId;
    /** @var string|null */
    private $inReplyToStatusIdStr;
    /** @var int|null */
    private $inReplyToUserId;
    /** @var string|null */
    private $inReplyToUserIdStr;
    /** @var string|null */
    private $inReplyToScreenName;
    /** @var User */
    private $user;
    /** @var array|null */ // TODO
    private $coordinates;
    /** @var \stdClass|null */
    private $place;
    /** @var array|null */ // TODO
    private $contributors;
    /** @var bool */
    private $isQuoteStatus;
    /** @var int */
    private $retweetCount;
    /** @var int */
    private $favoriteCount;
    /** @var bool */
    private $favorited;
    /** @var bool */
    private $retweeted;
    /** @var string */ // TODO
    private $lang;
    /**
     * @var \stdClass|null // TODO
     * @deprecated
     */
    private $geo;

    /**
     * Constructor
     * @param int $id
     * @param string $id_str
     * @param \DateTime $created_at
     * @param string $text
     * @param \stdClass $entities
     * @param bool $truncated
     * @param string $source
     * @param int|null $in_reply_to_status_id
     * @param string|null $in_reply_to_status_id_str
     * @param int|null $in_reply_to_user_id
     * @param string|null $in_reply_to_user_id_str
     * @param string|null $in_reply_to_screen_name
     * @param User $user
     * @param \stdClass|null $geo
     * @param array|null $coordinates
     * @param \stdClass|null $place
     * @param array|null $contributors
     * @param bool $is_quote_status
     * @param int $retweet_count
     * @param int $favorite_count
     * @param bool $favorited
     * @param bool $retweeted
     * @param string $lang
     */
    public function __construct(
        int $id,
        string $id_str,
        \DateTime $created_at,
        string $text,
        \stdClass $entities,
        bool $truncated,
        string $source,
        User $user,
        bool $is_quote_status,
        int $retweet_count,
        int $favorite_count,
        bool $favorited,
        bool $retweeted,
        string $lang,
        int $in_reply_to_status_id = null,
        string $in_reply_to_status_id_str = null,
        int $in_reply_to_user_id = null,
        string $in_reply_to_user_id_str = null,
        string $in_reply_to_screen_name = null,
        array $coordinates = null,
        \stdClass $place = null,
        array $contributors = null,
        \stdClass $geo = null
    ) {
        $this->createdAt = $created_at;
        $this->id = $id;
        $this->idStr = $id_str;
        $this->text = $text;
        $this->entities = $entities;
        $this->truncated = $truncated;
        $this->source = $source;
        $this->inReplyToStatusId = $in_reply_to_status_id;
        $this->inReplyToStatusIdStr = $in_reply_to_status_id_str;
        $this->inReplyToUserId = $in_reply_to_user_id;
        $this->inReplyToUserIdStr = $in_reply_to_user_id_str;
        $this->inReplyToScreenName = $in_reply_to_screen_name;
        $this->user = $user;
        $this->coordinates = $coordinates;
        $this->place = $place;
        $this->contributors = $contributors;
        $this->isQuoteStatus = $is_quote_status;
        $this->retweetCount = $retweet_count;
        $this->favoriteCount = $favorite_count;
        $this->favorited = $favorited;
        $this->retweeted = $retweeted;
        $this->lang = $lang;
        $this->geo = $geo;
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
    public function idStr(): string
    {
        return $this->idStr;
    }

    /**
     * @return \DateTime
     */
    public function createdAt(): \DateTime
    {
        return clone $this->createdAt;
    }

    /**
     * @return string
     */
    public function text(): string
    {
        return $this->text;
    }

    /**
     * @return \stdClass
     */
    public function entities(): \stdClass
    {
        return $this->entities;
    }

    /**
     * @return bool
     */
    public function isTruncated(): bool
    {
        return $this->truncated;
    }

    /**
     * @return string
     */
    public function source(): string
    {
        return $this->source;
    }

    /**
     * @return int|null
     */
    public function inReplyToStatusId()
    {
        return $this->inReplyToStatusId;
    }

    /**
     * @return null|string
     */
    public function inReplyToStatusIdStr()
    {
        return $this->inReplyToStatusIdStr;
    }

    /**
     * @return int|null
     */
    public function inReplyToUserId()
    {
        return $this->inReplyToUserId;
    }

    /**
     * @return null|string
     */
    public function inReplyToUserIdStr()
    {
        return $this->inReplyToUserIdStr;
    }

    /**
     * @return null|string
     */
    public function inReplyToScreenName()
    {
        return $this->inReplyToScreenName;
    }

    /**
     * @return User
     */
    public function user(): User
    {
        return $this->user;
    }

    /**
     * @return array|null
     */
    public function coordinates()
    {
        return $this->coordinates;
    }

    /**
     * @return null|\stdClass
     */
    public function place()
    {
        return $this->place;
    }

    /**
     * @return array|null
     */
    public function contributors()
    {
        return $this->contributors;
    }

    /**
     * @return bool
     */
    public function isIsQuoteStatus(): bool
    {
        return $this->isQuoteStatus;
    }

    /**
     * @return int
     */
    public function retweetCount(): int
    {
        return $this->retweetCount;
    }

    /**
     * @return int
     */
    public function favoriteCount(): int
    {
        return $this->favoriteCount;
    }

    /**
     * @return bool
     */
    public function isFavorited(): bool
    {
        return $this->favorited;
    }

    /**
     * @return bool
     */
    public function isRetweeted(): bool
    {
        return $this->retweeted;
    }

    /**
     * @return string
     */
    public function lang(): string
    {
        return $this->lang;
    }

    /**
     * @return null|\stdClass
     */
    public function geo()
    {
        return $this->geo;
    }
}
