<?php

declare(strict_types=1);

namespace UIAwesome\Html\Component\Bootstrap5\Cookbook\NavBar;

use UIAwesome\Html\Component\Bootstrap5\Toggle;

/**
 * Bootstrap Navbar cookbook with menu items on the right.
 *
 * A responsive and versatile navigation bar that can be used in various scenarios.
 */
final class AlignRight
{
    /**
     * Define the navbar with menu items on the right definition.
     *
     * @return array The navbar with menu items on the right definition.
     */
    public static function definition(): array
    {
        return [
            'brandLinkClass()' => ['navbar-brand'],
            'class()' => ['navbar navbar-expand-lg bg-body-tertiary'],
            'containerMenuClass()' => ['container'],
            'menuDefaultDefinitions()' => [
                [
                    'class()' => ['collapse justify-content-end navbar-collapse'],
                    'dropdownDefaultDefinitions()' => [
                        [
                            'containerTag()' => [false],
                            'linkClass()' => ['dropdown-item'],
                            'listClass()' => ['dropdown-menu'],
                            'tag()' => [false],
                            'toggle()' => [Toggle::widget()->cookbook('menu-dropdown')],
                        ],
                    ],
                    'linkActiveClass()' => ['active'],
                    'linkAriaCurrent()' => [],
                    'linkClass()' => ['nav-link'],
                    'linkDisableClass()' => ['disabled'],
                    'listClass()' => ['navbar-nav'],
                    'listDropdownItemClass()' => ['nav-item dropdown'],
                    'listItemClass()' => ['nav-item'],
                    'toggle()' => [Toggle::widget()->cookbook('menu')],
                ],
            ],
        ];
    }
}
