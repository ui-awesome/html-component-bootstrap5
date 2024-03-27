<?php

declare(strict_types=1);

namespace UIAwesome\Html\Component\Bootstrap5;

use PHPForge\Widget\Factory\SimpleFactory;
use UIAwesome\Html\{
    Component\Bootstrap5\Cookbook\Toggle\Alert,
    Component\Bootstrap5\Cookbook\Toggle\Dropdown,
    Component\Bootstrap5\Cookbook\Toggle\Menu,
    Component\Bootstrap5\Cookbook\Toggle\MenuDropdown,
    Component\Bootstrap5\Cookbook\Toggle\SelectorLanguage,
    Component\Bootstrap5\Cookbook\Toggle\SelectorTheme,
    Core\Component\AbstractToggle
};

use function sprintf;

/**
 * The `Toggle` component is a simple `HTML` component that can be used to create a toggle button.
 */
final class Toggle extends AbstractToggle
{
    /**
     * Define the toggle definition.
     *
     * @param string $definition The toggle definition.
     * Available definitions: 'alert', 'menu', 'menu-dropdown', 'selector-language', 'selector-theme'.
     *
     * @return self A new instance or clone of the current object with the applied definition.
     */
    public function definition(string $definition): self
    {
        $definition = match ($definition) {
            'alert' => Alert::definition(),
            'dropdown' => Dropdown::definition(),
            'menu' => Menu::definition(),
            'menu-dropdown' => MenuDropdown::definition(),
            'selector-language' => SelectorLanguage::definition(),
            'selector-theme' => SelectorTheme::definition(),
            default => throw new \InvalidArgumentException(
                sprintf(
                    'Invalid definition: "%s". Available definitions: ' .
                    '"alert", "dropdown", "menu", "menu-dropdown", "selector-language", "selector-theme".',
                    $definition
                )
            ),
        };

        return SimpleFactory::configure($this, $definition);
    }
}
