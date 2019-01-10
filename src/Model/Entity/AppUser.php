<?php
namespace LeoGalleguillos\Pinterest\Model\Entity;

use LeoGalleguillos\Pinterest\Model\Entity as PinterestEntity;

class AppUser
{
    protected $accessToken;
    protected $appId;
    protected $userId;

    public function getAccessToken(): string
    {
        return $this->accessToken;
    }

    public function getAppId(): int
    {
        return $this->appId;
    }

    public function getUserId(): int
    {
        return $this->userId;
    }

    public function setAccessToken(string $accessToken): PinterestEntity\AppUser
    {
        $this->accessToken = $accessToken;
        return $this;
    }

    public function setAppId(int $appId) : PinterestEntity\AppUser
    {
        $this->appId = $appId;
        return $this;
    }

    public function setUserId(int $userId) : PinterestEntity\AppUser
    {
        $this->userId = $userId;
        return $this;
    }
}
