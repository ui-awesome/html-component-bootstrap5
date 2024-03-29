<?php

declare(strict_types=1);

namespace UIAwesome\Html\Component\Bootstrap5;

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
     * The cookbook definitions for the navbar component.
     *
     * @param string $option The option to load the cookbook for.
     * Available definitions: 'default', 'align-right'.
     *
     * @return array The navbar cookbook definitions.
     */
    protected function getCookbooks(string $option): array
    {
        return [
            'default' => Defaults::definition(),
            'align-right' => AlignRight::definition(),
        ];
    }
}
