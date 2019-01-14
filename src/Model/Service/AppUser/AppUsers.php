<?php
namespace LeoGalleguillos\Pinterest\Model\Service\AppUser;

use Generator;
use LeoGalleguillos\Pinterest\Model\Entity as PinterestEntity;
use LeoGalleguillos\Pinterest\Model\Factory as PinterestFactory;
use LeoGalleguillos\Pinterest\Model\Table as PinterestTable;

class AppUsers
{
    public function __construct(
        PinterestFactory\AppUser $appUserFactory,
        PinterestTable\AppUser $appUserTable
    ) {
        $this->appUserFactory = $appUserFactory;
        $this->appUserTable   = $appUserTable;
    }

    public function getAppUsers(PinterestEntity\App $appEntity): Generator
    {
        foreach ($this->appUserTable->selectWhereAppId($appEntity->getAppId()) as $array) {
            yield $this->appUserFactory->buildFromArray($array);
        }
    }
}
