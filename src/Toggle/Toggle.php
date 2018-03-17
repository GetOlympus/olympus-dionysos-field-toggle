<?php

namespace GetOlympus\Field;

use GetOlympus\Zeus\Field\Controller\Field;
use GetOlympus\Zeus\Translate\Controller\Translate;

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
     * Prepare variables.
     */
    protected function setVars()
    {
        $this->getModel()->setFaIcon('fa-toggle-off');
        $this->getModel()->setScript('js'.S.'toggle.js');
        $this->getModel()->setStyle('css'.S.'toggle.css');
        $this->getModel()->setTemplate('toggle.html.twig');
    }

    /**
     * Prepare HTML component.
     *
     * @param array $content
     * @param array $details
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

            // texts
            't_on' => Translate::t('toggle.on', [], 'togglefield'),
            't_off' => Translate::t('toggle.off', [], 'togglefield'),
        ];

        // Build defaults data
        $vars = array_merge($defaults, $content);

        // Retrieve field value
        $vars['val'] = $this->getValue($content['id'], $details, $vars['default']);

        // Update vars
        $this->getModel()->setVars($vars);
    }
}
