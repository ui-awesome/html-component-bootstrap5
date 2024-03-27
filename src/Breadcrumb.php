<?php

declare(strict_types=1);

namespace UIAwesome\Html\Component\Bootstrap5;

use UIAwesome\Html\{Component\Bootstrap5\Cookbook\Breadcrumb\Defaults, Core\Component\AbstractBreadcrumb};

use function array_merge;

/**
 * A simple breadcrumb component for displaying the current page location.
 *
 * @link https://getbootstrap.com/docs/5.3/components/breadcrumb/
 */
final class Breadcrumb extends AbstractBreadcrumb
{
    protected function loadDefaultDefinitions(): array
    {
        return array_merge(parent::loadDefaultDefinitions(), Defaults::definition());
    }
}
