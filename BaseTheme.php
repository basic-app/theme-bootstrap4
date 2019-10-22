<?php

namespace BasicApp\Bootstrap4Theme;

use PhpTheme\Html\HtmlHelper;

abstract class BaseTheme extends \PhpTheme\Bootstrap4Theme\Theme implements \BasicApp\System\ThemeInterface
{

    public $baseUrl = '/themes/bootstrap4';

    public function __construct()
    {
        parent::__construct();

        $this->head .= HtmlHelper::linkCss($this->baseUrl . '/custom.css'); 
    }

}