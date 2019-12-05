<?php
/**
 * @author Basic App Dev Team <dev@basic-app.com>
 * @license MIT
 * @link http://basic-app.com
 */
namespace BasicApp\Bootstrap4Theme;

abstract class BaseForm extends \BasicApp\Theme\Form
{

    public $groupTemplate = '<div class="form-group"{attributes}>{label}<br>{input}{hint}</div>';

}