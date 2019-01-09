<?php
namespace LeoGalleguillos\Pinterest;

use LeoGalleguillos\Pinterest\Model\Factory as PinterestFactory;
use LeoGalleguillos\Pinterest\Model\Service as PinterestService;
use LeoGalleguillos\Pinterest\Model\Table as PinterestTable;
use LeoGalleguillos\Pinterest\View\Helper as PinterestHelper;

class Module
{
    public function getConfig()
    {
        return [
            'view_helpers' => [
                'aliases' => [
                ],
                'factories' => [
                ],
            ],
        ];
    }

    public function getServiceConfig()
    {
        return [
            'factories' => [
                PinterestTable\User::class => function ($sm) {
                    return new PinterestTable\User(
                        $sm->get('pinterest')
                    );
                },
            ],
        ];
    }
}
