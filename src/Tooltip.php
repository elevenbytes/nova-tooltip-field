<?php

namespace Elbytes\NovaTooltipField;

use Laravel\Nova\Fields\Field;

class Tooltip extends Field
{
    /**
     * The field's component.
     *
     * @var string
     */
    public $component = 'nova-tooltip-field';

    /**
     * Depending on the value, the icon changes.
     *
     * @param  array  $icons  ['expected value' => '<svg>...</svg>']
     * @return mixed
     */
    public function setDependIcons(array $icons)
    {
        return $this->withMeta([
            'dependIcons' => $icons
        ]);
    }

    /**
     * Replace the default icon.
     *
     * @param  string  $inlineSvg
     * @return mixed
     */
    public function setDefaultIcon(string $inlineSvg)
    {
        return $this->withMeta([
            'icon' => $inlineSvg
        ]);
    }
}
