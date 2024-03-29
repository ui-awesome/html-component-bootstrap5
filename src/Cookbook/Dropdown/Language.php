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
final class Language
{
    /**
     * Define the dropdown selection language definition.
     *
     * @return array The dropdown definition.
     */
    public static function definition(): array
    {
        return [
            'containerClass()' => ['btn-group dropup ms-3'],
            'linkActiveClass()' => ['active'],
            'linkClass()' => ['dropdown-item d-flex align-items-center'],
            'listClass()' => ['dropdown-menu dropdown-menu-end shadow'],
            'toggle()' => [Toggle::widget()->cookbook('selector-language')],
        ];
    }
}
