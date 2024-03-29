<?php

declare(strict_types=1);

namespace UIAwesome\Html\Component\Bootstrap5;

use UIAwesome\Html\{
    Component\Bootstrap5\Cookbook\Alert\Defaults,
    Component\Bootstrap5\Cookbook\Alert\Dismissible,
    Core\Component\AbstractAlert
};

/**
 * A simple alert component for displaying messages to the user.
 *
 * @link https://getbootstrap.com/docs/5.3/components/alerts/
 */
final class Alert extends AbstractAlert
{
    /**
     * The cookbook definitions for the alert component.
     *
     * @param string $option The option to load the cookbook for.
     * Available definitions: 'default', 'dismissible'.
     *
     * @return array The alert cookbook definitions.
     */
    protected function getCookbooks(string $option): array
    {
        return [
            'default' => Defaults::definition($option),
            'dismissible' => Dismissible::definition($option),
        ];
    }
}
