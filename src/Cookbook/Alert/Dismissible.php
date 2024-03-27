<?php

declare(strict_types=1);

namespace UIAwesome\Html\Component\Bootstrap5\Cookbook\Alert;

use UIAwesome\Html\{Component\Bootstrap5\Toggle, Helper\CssClass};

/**
 * Bootstrap Alert Dismiss cookbook.
 *
 * Provide contextual feedback messages for typical user actions with the handful of available and flexible alert
 * messages.
 *
 * @link https://getbootstrap.com/docs/5.3/components/alerts/
 */
final class Dismissible
{
    private const BASE_CLASS = 'alert alert-%1$s alert-dismissible fade show';
    private const TYPE_ALERTS = ['danger', 'dark', 'info', 'light', 'primary', 'secondary', 'success', 'warning'];

    /**
     * Define the alert definition.
     *
     * @param string $type The alert type.
     * Available types: 'danger', 'dark', 'info', 'light', 'primary', 'secondary', 'success', 'warning'.
     *
     * @return array The alert definition.
     *
     * @psalm-return array<string, mixed> The alert definition.
     */
    public static function definition(string $type): array
    {
        return [
            'class()' => [CssClass::render($type, self::BASE_CLASS, self::TYPE_ALERTS)],
            'toggle()' => [Toggle::widget()->definition('alert')],
        ];
    }
}
