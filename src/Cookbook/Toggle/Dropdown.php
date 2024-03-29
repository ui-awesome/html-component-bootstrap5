<?php

declare(strict_types=1);

namespace UIAwesome\Html\Component\Bootstrap5\Cookbook\Toggle;

/**
 * Bootstrap Toggle Dropdown cookbook.
 */
final class Dropdown
{
    /**
     * Define the toggle dropdown definition.
     *
     * @return array The toggle dropdown definition.
     */
    public static function definition(): array
    {
        return [
            'ariaExpanded()' => ['false'],
            'class()' => ['btn btn-secondary dropdown-toggle'],
            'content()' => ['Dropdown button'],
            'dataBsToggle()' => [],
        ];
    }
}
