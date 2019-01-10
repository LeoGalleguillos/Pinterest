<?php
namespace LeoGalleguillos\Pinterest\Model\Entity;

use LeoGalleguillos\Pinterest\Model\Entity as PinterestEntity;

class App
{
    protected $name;
    protected $appId;
    protected $appSecret;

    public function getAppId() : int
    {
        return $this->appId;
    }

    public function getAppSecret() : string
    {
        return $this->appSecret;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setAppId(int $appId) : PinterestEntity\App
    {
        $this->appId = $appId;
        return $this;
    }

    public function setAppSecret(string $appSecret) : PinterestEntity\App
    {
        $this->appSecret = $appSecret;
        return $this;
    }

    public function setName(string $name): PinterestEntity\App
    {
        $this->name = $name;
        return $this;
    }
}
