<?php

namespace GetOlympus\Field;

use GetOlympus\Zeus\Field\Field;
use GetOlympus\Zeus\Utils\Translate;

/**
 * Builds Toggle field.
 *
 * @package DionysosField
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
    protected function getDefaults() : array
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
    protected function getVars($value, $contents) : array
    {
        // Update vars
        return $contents;
    }
}
