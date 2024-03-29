<?php

declare(strict_types=1);

namespace UIAwesome\Html\Component\Bootstrap5\Cookbook\Toggle;

/**
 * Bootstrap Toggle Menu Dropdown cookbook.
 */
final class MenuDropdown
{
    /**
     * Define the toggle menu dropdown definition.
     *
     * @return array The toggle menu dropdown definition.
     */
    public static function definition(): array
    {
        return [
            'ariaExpanded()' => ['false'],
            'class()' => ['nav-link dropdown-toggle'],
            'content()' => ['Dropdown'],
            'dataBsToggle()' => ['dropdown'],
            'link()' => [],
            'role()' => ['button'],
        ];
    }
}
