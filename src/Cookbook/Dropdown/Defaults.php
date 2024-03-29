<?php

declare(strict_types=1);

namespace UIAwesome\Html\Component\Bootstrap5\Cookbook\Dropdown;

use UIAwesome\Html\Component\Bootstrap5\Toggle;

/**
 * Bootstrap Dropdown cookbook.
 *
 * Provide a flexible and extensible content container with multiple variants and options.
 *
 * @link https://getbootstrap.com/docs/5.3/components/dropdowns/
 */
final class Defaults
{
    /**
     * Define the dropdown definition.
     *
     * @return array The dropdown definition.
     */
    public static function definition(): array
    {
        return [
            'containerClass()' => ['dropdown'],
            'linkClass()' => ['dropdown-item'],
            'listClass()' => ['dropdown-menu'],
            'toggle()' => [Toggle::widget()->cookbook('dropdown')],
        ];
    }
}
