<?php

declare(strict_types=1);

namespace UIAwesome\Html\Component\Bootstrap5\Cookbook\Toggle;

use UIAwesome\Html\Graphic\Svg;

/**
 * Bootstrap Toggle Menu cookbook.
 */
final class SelectorTheme
{
    public static function definition(): array
    {
        return [
            'class()' => ['btn ms-2 me-2'],
            'content()' => [
                Svg::widget()
                    ->class('d-none')
                    ->filePath(dirname(__DIR__, 2) . '/svg/moon.svg')
                    ->fill('currentColor')
                    ->height(32)
                    ->id('theme-dark-icon')
                    ->width(32),
                PHP_EOL,
                Svg::widget()
                    ->class('d-none')
                    ->filePath(dirname(__DIR__, 2) . '/svg/sun.svg')
                    ->fill('currentColor')
                    ->height(32)
                    ->id('theme-light-icon')
                    ->width(32),
            ],
            'title()' => ['Switch light/dark mode'],
        ];
    }
}
