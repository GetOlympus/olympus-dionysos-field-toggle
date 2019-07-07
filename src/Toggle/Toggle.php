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
 */

class Toggle extends Field
{
    /**
     * @var string
     */
    protected $style = 'css'.S.'toggle.css';

    /**
     * @var string
     */
    protected $template = 'toggle.html.twig';

    /**
     * @var string
     */
    protected $textdomain = 'togglefield';

    /**
     * Prepare defaults.
     *
     * @return array
     */
    protected function getDefaults()
    {
        return [
            'title' => Translate::t('toggle.title', $this->textdomain),
            'default' => false,
            'description' => '',
        ];
    }

    /**
     * Prepare variables.
     *
     * @param  object  $value
     * @param  array   $contents
     *
     * @return array
     */
    protected function getVars($value, $contents)
    {
        // Update vars
        return $contents;
    }
}
