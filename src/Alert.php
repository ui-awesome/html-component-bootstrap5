<?php

declare(strict_types=1);

namespace UIAwesome\Html\Component\Bootstrap5;

use PHPForge\Widget\Factory\SimpleFactory;
use UIAwesome\Html\{
    Component\Bootstrap5\Cookbook\Alert\Defaults,
    Component\Bootstrap5\Cookbook\Alert\Dismissible,
    Core\Component\AbstractAlert
};

use function sprintf;

/**
 * A simple alert component for displaying messages to the user.
 *
 * @link https://getbootstrap.com/docs/5.3/components/alerts/
 */
final class Alert extends AbstractAlert
{
    /**
     * Define the alert definition.
     *
     * @param string $definition The alert definition. Available definitions: 'default', 'dismissible'.
     * @param string $type The alert type.
     * Available types: 'danger', 'dark', 'info', 'light', 'primary', 'secondary', 'success', 'warning'.
     *
     * @return self A new instance or clone of the current object with the applied definition.
     */
    public function definition(string $definition, string $type): self
    {
        $definition = match ($definition) {
            'default' => Defaults::definition($type),
            'dismissible' => Dismissible::definition($type),
            default => throw new \InvalidArgumentException(
                sprintf(
                    'Invalid definition: "%s". Available definitions: "default", "dismissible".',
                    $definition
                )
            ),
        };

        return SimpleFactory::configure($this, $definition);
    }
}
