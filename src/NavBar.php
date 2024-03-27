<?php

declare(strict_types=1);

namespace UIAwesome\Html\Component\Bootstrap5;

use PHPForge\Widget\Factory\SimpleFactory;
use UIAwesome\Html\{
    Component\Bootstrap5\Cookbook\NavBar\AlignRight,
    Component\Bootstrap5\Cookbook\NavBar\Defaults,
    Core\Component\AbstractNavBar
};

/**
 * A simple navbar component for displaying a navigation bar.
 *
 * @link https://getbootstrap.com/docs/5.3/components/navbar/
 */
final class NavBar extends AbstractNavBar
{
    /**
     * Define the navbar definition.
     *
     * @param string $definition The navbar definition. Available definitions: 'default', 'align-right'.
     *
     * @return self A new instance or clone of the current object with the applied definition.
     */
    public function definition(string $definition): self
    {
        $definition = match ($definition) {
            'default' => Defaults::definition(),
            'align-right' => AlignRight::definition(),
            default => throw new \InvalidArgumentException(
                sprintf(
                    'Invalid definition: "%s". Available definitions: "default", "align-right".',
                    $definition
                )
            ),
        };

        return SimpleFactory::configure($this, $definition);
    }
}
