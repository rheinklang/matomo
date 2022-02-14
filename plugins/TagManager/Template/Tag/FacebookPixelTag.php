<?php
/**
 * Matomo - free/libre analytics platform
 *
 * @link https://matomo.org
 * @license http://www.gnu.org/licenses/gpl-3.0.html GPL v3 or later
 */
namespace Piwik\Plugins\TagManager\Template\Tag;

use Piwik\Settings\FieldConfig;
use Piwik\Validators\NotEmpty;

class FacebookPixelTag extends BaseTag
{
    public function getIcon()
    {
        return 'plugins/TagManager/images/icons/F_icon.svg';
    }

    public function getParameters()
    {
        return array(
            $this->makeSetting('pixelId', '', FieldConfig::TYPE_STRING, function (FieldConfig $field) {
                $field->title = 'Pixel ID';
                $field->validators[] = new NotEmpty();
            })
        );
    }

    public function getCategory()
    {
        return self::CATEGORY_SOCIAL;
    }

}