<?php

declare(strict_types=1);

namespace UIAwesome\Html\Component\Bootstrap5;

use UIAwesome\Html\{Component\Bootstrap5\Cookbook\NavBar\Defaults, Core\Component\AbstractNavBar};

use function array_merge;

/**
 * A simple navbar component for displaying a navigation bar.
 *
 * @link https://getbootstrap.com/docs/5.3/components/navbar/
 */
final class NavBar extends AbstractNavBar
{
    protected function loadDefaultDefinitions(): array
    {
        return array_merge(parent::loadDefaultDefinitions(), Defaults::definition());
    }
}
