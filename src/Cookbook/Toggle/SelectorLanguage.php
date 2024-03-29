<?php

declare(strict_types=1);

namespace UIAwesome\Html\Component\Bootstrap5\Cookbook\Toggle;

/**
 * Bootstrap Toggle Dropdown cookbook.
 */
final class SelectorLanguage
{
    /**
     * Define the toggle selector language definition.
     *
     * @return array The toggle selector language definition.
     */
    public static function definition(): array
    {
        return [
            'ariaExpanded()' => ['false'],
            'ariaLabel()' => ['Toggle language dropdown'],
            'class()' => ['btn btn-primary dropdown-toggle d-flex align-items-center text-white'],
            'dataBsToggle()' => ['dropdown'],
            'iconAttributes()' => [['height' => '32', 'width' => '32']],
            'iconFilePath()' => [dirname(__DIR__, 2) . '/svg/globe.svg'],
            'iconTag()' => ['svg'],
            'title()' => ['Select language'],
        ];
    }
}
