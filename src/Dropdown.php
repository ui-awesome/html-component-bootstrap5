<?php

declare(strict_types=1);

namespace UIAwesome\Html\Component\Bootstrap5;

use PHPForge\Widget\Factory\SimpleFactory;
use UIAwesome\Html\{
    Component\Bootstrap5\Cookbook\Dropdown\Defaults,
    Component\Bootstrap5\Cookbook\Dropdown\Language,
    Core\Component\AbstractDropdown
};

/**
 * A simple dropdown component for displaying a list of links.
 *
 * @link https://getbootstrap.com/docs/5.3/components/dropdowns/
 */
final class Dropdown extends AbstractDropdown
{
    /**
     * Define the drodpown definition.
     *
     * @param string $definition The dropdown definition.
     * Available definitions: 'default'.
     *
     * @return self A new instance or clone of the current object with the applied definition.
     */
    public function definition(string $definition): self
    {
        $definition = match ($definition) {
            'default' => Defaults::definition(),
            'language' => Language::definition(),
            default => throw new \InvalidArgumentException(
                sprintf(
                    'Invalid definition: "%s". Available definitions: "default", "language".',
                    $definition
                )
            ),
        };

        return SimpleFactory::configure($this, $definition);
    }
}
