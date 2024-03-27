<?php

declare(strict_types=1);

namespace UIAwesome\Html\Component\Bootstrap5\Cookbook\Toggle;

/**
 * Bootstrap Toggle Menu cookbook.
 */
final class Menu
{
    /**
     * Define the toggle menu definition.
     *
     * @return array The toggle menu definition.
     *
     * @psalm-return array<string, mixed> The toggle menu definition.
     */
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
