<?php

use BasicApp\System\SystemEvents;
use BasicApp\Site\SiteEvents;
use BasicApp\Helpers\CliHelper;
use BasicApp\Themes\Bootstrap4\SiteTheme;

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

if (class_exists(SiteEvents::class))
{
    SiteEvents::onThemes(function($event)
    {
        $event->result[SiteTheme::class] = 'Bootstrap 4';
    });
}