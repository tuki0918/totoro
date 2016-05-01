<?php

namespace Totoro\General\Entities;

/**
 * User
 *
 * @see https://dev.twitter.com/overview/api/users
 */
class User
{
    /** @var int */
    private $id;
    /** @var string */
    private $idStr;
    /** @var string */
    private $name;
    /** @var string */
    private $screenName;
    /** @var bool */
    private $protected;
    /** @var int */
    private $followersCount;
    /** @var int */
    private $friendsCount;
    /** @var int */
    private $listedCount;
    /** @var \DateTime */
    private $createdAt;
    /** @var int */
    private $favouritesCount;
    /** @var bool */
    private $geoEnabled;
    /** @var bool */
    private $verified;
    /** @var int */
    private $statusesCount;
    /** @var bool */
    private $isTranslator;
    /** @var bool */
    private $isTranslationEnabled;
    /** @var string */
    private $profileBackgroundColor;
    /** @var string */
    private $profileBackgroundImageUrl;
    /** @var string */
    private $profileBackgroundImageUrlHttps;
    /** @var bool */
    private $profileBackgroundTile;
    /** @var string */
    private $profileImageUrl;
    /** @var string */
    private $profileImageUrlHttps;
    /** @var string */
    private $profileLinkColor;
    /** @var string */
    private $profileSidebarBorderColor;
    /** @var string */
    private $profileSidebarFillColor;
    /** @var string */
    private $profileTextColor;
    /** @var bool */
    private $profileUseBackgroundImage;
    /** @var bool */
    private $hasExtendedProfile;
    /** @var bool */
    private $defaultProfile;
    /** @var bool */
    private $defaultProfileImage;
    /** @var string|null */
    private $url;
    /** @var string|null */
    private $description;
    /** @var \stdClass|null */ // TODO
    private $entities;
    /** @var string|null */
    private $location;
    /** @var int|null */
    private $utcOffset;
    /** @var string|null */
    private $timeZone;
    /** @var bool|null */
    private $following;
    /** @var bool|null */
    private $followRequestSent;
    /** @var bool|null */
    private $notifications;

    /**
     * Constructor
     * @param int $id
     * @param string $id_str
     * @param string $name
     * @param string $screen_name
     * @param bool $protected
     * @param int $followers_count
     * @param int $friends_count
     * @param int $listed_count
     * @param \DateTime $created_at
     * @param int $favourites_count
     * @param bool $geo_enabled
     * @param bool $verified
     * @param int $statuses_count
     * @param bool $is_translator
     * @param bool $is_translation_enabled
     * @param string $profile_background_color
     * @param string $profile_background_image_url
     * @param string $profile_background_image_url_https
     * @param bool $profile_background_tile
     * @param string $profile_image_url
     * @param string $profile_image_url_https
     * @param string $profile_link_color
     * @param string $profile_sidebar_border_color
     * @param string $profile_sidebar_fill_color
     * @param string $profile_text_color
     * @param bool $profile_use_background_image
     * @param bool $has_extended_profile
     * @param bool $default_profile
     * @param bool $default_profile_image
     * @param string|null $url
     * @param string|null $description
     * @param \stdClass|null $entities
     * @param string|null $location
     * @param int|null $utc_offset
     * @param string|null $time_zone
     * @param bool|null $following
     * @param bool|null $follow_request_sent
     * @param bool|null $notifications
     */
    public function __construct(
        int $id,
        string $id_str,
        string $name,
        string $screen_name,
        bool $protected,
        int $followers_count,
        int $friends_count,
        int $listed_count,
        \DateTime $created_at,
        int $favourites_count,
        bool $geo_enabled,
        bool $verified,
        int $statuses_count,
        bool $is_translator,
        bool $is_translation_enabled,
        string $profile_background_color,
        string $profile_background_image_url,
        string $profile_background_image_url_https,
        bool $profile_background_tile,
        string $profile_image_url,
        string $profile_image_url_https,
        string $profile_link_color,
        string $profile_sidebar_border_color,
        string $profile_sidebar_fill_color,
        string $profile_text_color,
        bool $profile_use_background_image,
        bool $has_extended_profile,
        bool $default_profile,
        bool $default_profile_image,
        string $url = null,
        string $description = null,
        \stdClass $entities = null,
        string $location = null,
        int $utc_offset = null,
        string $time_zone = null,
        bool $following = null,
        bool $follow_request_sent = null,
        bool $notifications = null
    ) {
        $this->id = $id;
        $this->idStr = $id_str;
        $this->name = $name;
        $this->screenName = $screen_name;
        $this->protected = $protected;
        $this->followersCount = $followers_count;
        $this->friendsCount = $friends_count;
        $this->listedCount = $listed_count;
        $this->createdAt = $created_at;
        $this->favouritesCount = $favourites_count;
        $this->geoEnabled = $geo_enabled;
        $this->verified = $verified;
        $this->statusesCount = $statuses_count;
        $this->isTranslator = $is_translator;
        $this->isTranslationEnabled = $is_translation_enabled;
        $this->profileBackgroundColor = $profile_background_color;
        $this->profileBackgroundImageUrl = $profile_background_image_url;
        $this->profileBackgroundImageUrlHttps = $profile_background_image_url_https;
        $this->profileBackgroundTile = $profile_background_tile;
        $this->profileImageUrl = $profile_image_url;
        $this->profileImageUrlHttps = $profile_image_url_https;
        $this->profileLinkColor = $profile_link_color;
        $this->profileSidebarBorderColor = $profile_sidebar_border_color;
        $this->profileSidebarFillColor = $profile_sidebar_fill_color;
        $this->profileTextColor = $profile_text_color;
        $this->profileUseBackgroundImage = $profile_use_background_image;
        $this->hasExtendedProfile = $has_extended_profile;
        $this->defaultProfile = $default_profile;
        $this->defaultProfileImage = $default_profile_image;
        $this->url = $url;
        $this->description = $description;
        $this->entities = $entities;
        $this->location = $location;
        $this->utcOffset = $utc_offset;
        $this->timeZone = $time_zone;
        $this->following = $following;
        $this->followRequestSent = $follow_request_sent;
        $this->notifications = $notifications;
    }

    /**
     * @return string
     */
    public function profileBackgroundImageUrl(): string
    {
        return $this->profileBackgroundImageUrl;
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
     * @return string
     */
    public function name(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function screenName(): string
    {
        return $this->screenName;
    }

    /**
     * @return bool
     */
    public function isProtected(): bool
    {
        return $this->protected;
    }

    /**
     * @return int
     */
    public function followersCount(): int
    {
        return $this->followersCount;
    }

    /**
     * @return int
     */
    public function friendsCount(): int
    {
        return $this->friendsCount;
    }

    /**
     * @return int
     */
    public function listedCount(): int
    {
        return $this->listedCount;
    }

    /**
     * @return \DateTime
     */
    public function createdAt(): \DateTime
    {
        return clone $this->createdAt;
    }

    /**
     * @return int
     */
    public function favouritesCount(): int
    {
        return $this->favouritesCount;
    }

    /**
     * @return bool
     */
    public function isGeoEnabled(): bool
    {
        return $this->geoEnabled;
    }

    /**
     * @return bool
     */
    public function isVerified(): bool
    {
        return $this->verified;
    }

    /**
     * @return int
     */
    public function statusesCount(): int
    {
        return $this->statusesCount;
    }

    /**
     * @return bool
     */
    public function isIsTranslator(): bool
    {
        return $this->isTranslator;
    }

    /**
     * @return bool
     */
    public function isIsTranslationEnabled(): bool
    {
        return $this->isTranslationEnabled;
    }

    /**
     * @return string
     */
    public function profileBackgroundColor(): string
    {
        return $this->profileBackgroundColor;
    }

    /**
     * @return string
     */
    public function profileBackgroundImageUrlHttps(): string
    {
        return $this->profileBackgroundImageUrlHttps;
    }

    /**
     * @return bool
     */
    public function isProfileBackgroundTile(): bool
    {
        return $this->profileBackgroundTile;
    }

    /**
     * @return string
     */
    public function profileImageUrl(): string
    {
        return $this->profileImageUrl;
    }

    /**
     * @return string
     */
    public function profileImageUrlHttps(): string
    {
        return $this->profileImageUrlHttps;
    }

    /**
     * @return string
     */
    public function profileLinkColor(): string
    {
        return $this->profileLinkColor;
    }

    /**
     * @return string
     */
    public function profileSidebarBorderColor(): string
    {
        return $this->profileSidebarBorderColor;
    }

    /**
     * @return string
     */
    public function profileSidebarFillColor(): string
    {
        return $this->profileSidebarFillColor;
    }

    /**
     * @return string
     */
    public function profileTextColor(): string
    {
        return $this->profileTextColor;
    }

    /**
     * @return bool
     */
    public function isProfileUseBackgroundImage(): bool
    {
        return $this->profileUseBackgroundImage;
    }

    /**
     * @return bool
     */
    public function isHasExtendedProfile(): bool
    {
        return $this->hasExtendedProfile;
    }

    /**
     * @return bool
     */
    public function isDefaultProfile(): bool
    {
        return $this->defaultProfile;
    }

    /**
     * @return bool
     */
    public function isDefaultProfileImage(): bool
    {
        return $this->defaultProfileImage;
    }

    /**
     * @return null|string
     */
    public function url()
    {
        return $this->url;
    }

    /**
     * @return null|string
     */
    public function description()
    {
        return $this->description;
    }

    /**
     * @return null|\stdClass
     */
    public function entities()
    {
        return $this->entities;
    }

    /**
     * @return null|string
     */
    public function location()
    {
        return $this->location;
    }

    /**
     * @return int|null
     */
    public function utcOffset()
    {
        return $this->utcOffset;
    }

    /**
     * @return null|string
     */
    public function timeZone()
    {
        return $this->timeZone;
    }

    /**
     * @return bool|null
     */
    public function following()
    {
        return $this->following;
    }

    /**
     * @return bool|null
     */
    public function followRequestSent()
    {
        return $this->followRequestSent;
    }

    /**
     * @return bool|null
     */
    public function notifications()
    {
        return $this->notifications;
    }
}
