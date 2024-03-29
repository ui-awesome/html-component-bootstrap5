<?php

declare(strict_types=1);

namespace UIAwesome\Html\Component\Bootstrap5\Cookbook\Toggle;

/**
 * Bootstrap Toggle Alert cookbook.
 */
final class Alert
{
    /**
     * Define the toggle alert definition.
     *
     * @return array The toggle alert definition.
     */
    public static function definition(): array
    {
        return [
            'ariaLabel()' => ['Close'],
            'class()' => ['btn-close'],
            'dataBsDismiss()' => ['alert'],
        ];
    }
}
