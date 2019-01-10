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
                PinterestFactory\App::class => function ($sm) {
                    return new PinterestFactory\App(
                    );
                },
                PinterestFactory\AppUser::class => function ($sm) {
                    return new PinterestFactory\AppUser(
                    );
                },
                PinterestService\App\Apps::class => function ($sm) {
                    return new PinterestService\App\Apps(
                        $sm->get(PinterestFactory\App::class),
                        $sm->get(PinterestTable\App::class)
                    );
                },
                PinterestTable\App::class => function ($sm) {
                    return new PinterestTable\App(
                        $sm->get('pinterest')
                    );
                },
                PinterestTable\AppUser::class => function ($sm) {
                    return new PinterestTable\AppUser(
                        $sm->get('pinterest')
                    );
                },
                PinterestTable\User::class => function ($sm) {
                    return new PinterestTable\User(
                        $sm->get('pinterest')
                    );
                },
            ],
        ];
    }
}
