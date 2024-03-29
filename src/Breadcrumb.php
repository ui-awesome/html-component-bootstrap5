<?php

declare(strict_types=1);

namespace UIAwesome\Html\Component\Bootstrap5;

use UIAwesome\Html\{Component\Bootstrap5\Cookbook\Breadcrumb\Defaults, Core\Component\AbstractBreadcrumb};

/**
 * A simple breadcrumb component for displaying the current page location.
 *
 * @link https://getbootstrap.com/docs/5.3/components/breadcrumb/
 */
final class Breadcrumb extends AbstractBreadcrumb
{
    /**
     * The cookbook definitions for the breadcrumb component.
     *
     * @param string $option The option to load the cookbook for.
     * Available definitions: 'default'.
     *
     * @return array The breadcrumb cookbook definitions.
     */
    protected function getCookbooks(string $option): array
    {
        return [
            'default' => Defaults::definition(),
        ];
    }
}
