<?php

use BasicApp\System\SystemEvents;
use BasicApp\Helpers\CliHelper;

SystemEvents::onUpdate(function()
{
    $target = FCPATH . 'themes/bootstrap4';

    if (is_dir($target))
    {
        return;
    }

    $source = dirname(COMPOSER_PATH) . '/twbs/bootstrap';
   
    CliHelper::copy($source . '/dist', $target);

    CliHelper::copy(dirname(__DIR__) . '/Css/custom.css', $target . '/custom.css');

});

if (class_exists(SystemEvents::class))
{
    SystemEvents::onThemes(function($event)
    {
        $event->result[BasicApp\Bootstrap4Theme\Theme::class] = 'Bootstrap 4';
    });
}