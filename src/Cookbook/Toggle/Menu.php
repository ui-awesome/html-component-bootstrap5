<?php

declare(strict_types=1);

namespace UIAwesome\Html\Component\Bootstrap5\Cookbook\Toggle;

/**
 * Bootstrap Toggle Menu cookbook.
 */
final class Menu
{
    public static function definition(): array
    {
        return [
            'ariaControls()' => [],
            'ariaExpanded()' => ['false'],
            'ariaLabel()' => ['Toggle navigation'],
            'class()' => ['navbar-toggler'],
            'dataBsToggle()' => ['collapse'],
            'dataBsTarget()' => [],
            'toggleClass()' => ['navbar-toggler-icon'],
            'toggleTag()' => ['span'],
        ];
    }
}
