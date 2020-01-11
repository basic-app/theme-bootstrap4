<?php
/**
 * @author Basic App Dev Team <dev@basic-app.com>
 * @license MIT
 * @link http://basic-app.com
 */
namespace BasicApp\Bootstrap4Theme;

use PhpTheme\Html\HtmlHelper;

abstract class BaseTheme extends \PhpTheme\Bootstrap4\Theme implements \BasicApp\Site\SiteThemeInterface
{

    public $baseUrl = '/themes/bootstrap4';

    public function __construct()
    {
        parent::__construct();

        $this->head .= HtmlHelper::linkCss($this->baseUrl . '/custom.css'); 
    }

}