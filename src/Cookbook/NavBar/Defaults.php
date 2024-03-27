<?php

declare(strict_types=1);

namespace UIAwesome\Html\Component\Bootstrap5\Cookbook\NavBar;

use UIAwesome\Html\Component\Bootstrap5\Toggle;

/**
 * Bootstrap Navbar cookbook.
 *
 * A responsive and versatile navigation bar that can be used in various scenarios.
 *
 * @link https://getbootstrap.com/docs/5.3/components/navbar/
 */
final class Defaults
{
    /**
     * Define the navbar definition.
     *
     * @return array The navbar definition.
     *
     * @psalm-return array<string, mixed> The navbar definition.
     */
    public static function definition(): array
    {
        return [
            'brandLinkClass()' => ['navbar-brand'],
            'class()' => ['navbar navbar-expand-lg bg-body-tertiary'],
            'containerMenuClass()' => ['container-fluid'],
            'menuDefaultDefinitions()' => [
                [
                    'class()' => ['collapse navbar-collapse'],
                    'dropdownDefaultDefinitions()' => [
                        [
                            'containerTag()' => [false],
                            'linkClass()' => ['dropdown-item'],
                            'listClass()' => ['dropdown-menu'],
                            'tag()' => [false],
                            'toggle()' => [Toggle::widget()->definition('menu-dropdown')],
                        ],
                    ],
                    'linkActiveClass()' => ['active'],
                    'linkAriaCurrent()' => [],
                    'linkClass()' => ['nav-link'],
                    'linkDisableClass()' => ['disabled'],
                    'listClass()' => ['navbar-nav me-auto mb-2 mb-lg-0'],
                    'listDropdownItemClass()' => ['nav-item dropdown'],
                    'listItemClass()' => ['nav-item'],
                    'toggle()' => [Toggle::widget()->definition('menu')],
                ],
            ],
        ];
    }
}
