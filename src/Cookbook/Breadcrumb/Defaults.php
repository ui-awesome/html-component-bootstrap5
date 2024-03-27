<?php

declare(strict_types=1);

namespace UIAwesome\Html\Component\Bootstrap5\Cookbook\Breadcrumb;

/**
 * Bootstrap Breadcrumb cookbook.
 *
 * Indicate the current page’s location within a navigational hierarchy that automatically adds separators via CSS.
 *
 * @link https://getbootstrap.com/docs/5.3/components/breadcrumb/
 */
final class Defaults
{
    public static function definition(): array
    {
        return [
            'listClass()' => ['breadcrumb'],
            'listItemActiveClass()' => ['active'],
            'listItemAriaCurrent()' => [],
            'listItemClass()' => ['breadcrumb-item'],
        ];
    }
}
