<?php

use BasicApp\System\SystemEvents;
use BasicApp\Helpers\CliHelper;

SystemEvents::onUpdate(function()
{
    $target = FCPATH . 'themes' . DIRECTORY_SEPARATOR . 'bootstrap4';

    if (is_dir($target))
    {
        return;
    }

    $source = dirname(COMPOSER_PATH) . DIRECTORY_SEPARATOR . 'twbs' . DIRECTORY_SEPARATOR . 'bootstrap';
   
    CliHelper::copy($source . DIRECTORY_SEPARATOR . 'dist', $target);

    CliHelper::copy(
        dirname(__DIR__) . DIRECTORY_SEPARATOR . 'Css' . DIRECTORY_SEPARATOR . 'custom.css', 
        $target . DIRECTORY_SEPARATOR . 'custom.css'
    );

});