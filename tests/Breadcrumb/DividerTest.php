<?php

declare(strict_types=1);

namespace UIAwesome\Html\Component\Bootstrap5\Tests\Breadcrumb;

use PHPForge\Support\Assert;
use UIAwesome\Html\Component\Bootstrap5\{Breadcrumb, Item};

/**
 * Breadcrumb.
 *
 * Indicate the current page’s location within a navigational hierarchy that automatically adds separators via CSS.
 *
 * @link https://getbootstrap.com/docs/5.3/components/breadcrumb/
 *
 * @psalm-suppress PropertyNotSetInConstructor
 */
final class DividerTest extends \PHPUnit\Framework\TestCase
{
    public function testRender(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <nav id="breadcrumb_658fec01ac6cf" aria-label="breadcrumb" style="--bs-breadcrumb-divider: &apos;&gt;&apos;">
            <ol class="breadcrumb">
            <li class="breadcrumb-item">
            <a href="/">Home</a>
            </li>
            <li class="breadcrumb-item">
            <a href="/library">Library</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
            Data
            </li>
            </ol>
            </nav>
            HTML,
            Breadcrumb::widget()
                ->cookbook('default')
                ->currentPath('/data')
                ->id('breadcrumb_658fec01ac6cf')
                ->items(
                    Item::widget()->label('Home')->link('/'),
                    Item::widget()->label('Library')->link('/library'),
                    Item::widget()->label('Data')->link('/data'),
                )
                ->style("--bs-breadcrumb-divider: '>'")
                ->render()
        );
    }
}
