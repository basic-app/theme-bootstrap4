<?php
/**
 * @author Basic App Dev Team <dev@basic-app.com>
 * @license MIT
 * @link http://basic-app.com
 */
namespace BasicApp\Themes\Bootstrap4;

use BasicApp\Helpers\HtmlHelper;

class Theme extends \PhpTheme\Themes\Bootstrap4\Theme
{

    const FORM = Form::class;

    public $baseUrl = '/themes/bootstrap4';

    public $poweredBy = 'Powered by <a href="http://basic-app.com" target="_blank">Basic App</a>';

    public function __construct()
    {
        parent::__construct();

        $this->head .= HtmlHelper::linkCss($this->baseUrl . '/custom.css'); 
    }

}