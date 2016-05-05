<?php

namespace GetOlympus\Field;

use GetOlympus\Hera\Field\Controller\Field;
use GetOlympus\Hera\Translate\Controller\Translate;

/**
 * Builds Toggle field.
 *
 * @package Field
 * @subpackage Toggle
 * @author Achraf Chouk <achrafchouk@gmail.com>
 * @since 0.0.1
 *
 * @see https://olympus.readme.io/v1.0/docs/toggle-field
 *
 */

class Toggle extends Field
{
    /**
     * @var string
     */
    protected $faIcon = 'fa-toggle-off';

    /**
     * @var string
     */
    protected $template = 'toggle.html.twig';

    /**
     * Prepare HTML component.
     *
     * @param array $content
     * @param array $details
     *
     * @since 0.0.1
     */
    protected function getVars($content, $details = [])
    {
        // Build defaults
        $defaults = [
            'id' => '',
            'title' => Translate::t('toggle.title', [], 'togglefield'),
            'default' => false,
            'description' => '',
            'enable' => '',
            'disable' => '',

            // details
            'post' => 0,
            'prefix' => '',
            'template' => 'pages',

            // texts
            't_on' => Translate::t('toggle.on', [], 'togglefield'),
            't_off' => Translate::t('toggle.off', [], 'togglefield'),
        ];

        // Build defaults data
        $vars = array_merge($defaults, $content);

        // Retrieve field value
        $vars['val'] = $this->getValue($details, $vars['default'], $content['id']);

        // Update vars
        $this->getField()->setVars($vars);
    }
}
