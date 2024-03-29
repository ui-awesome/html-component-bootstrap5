<?php

declare(strict_types=1);

namespace UIAwesome\Html\Component\Bootstrap5\Tests\Dropdown;

use PHPForge\Support\Assert;
use UIAwesome\Html\Component\Bootstrap5\{Dropdown, Item};

/**
 * Dropdown.
 *
 * This example can be used to show a dropdown menu when clicking on a button.
 *
 * @link https://getbootstrap.com/docs/5.3/components/dropdowns/
 *
 * @psalm-suppress PropertyNotSetInConstructor
 */
final class DefaultTest extends \PHPUnit\Framework\TestCase
{
    public function testRender(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" aria-expanded="false" data-bs-toggle="dropdown">
            Dropdown button
            </button>
            <div id="dropdown">
            <ul class="dropdown-menu">
            <li>
            <a class="dropdown-item" href="#">Action</a>
            </li>
            <li>
            <a class="dropdown-item" href="#">Another actionc</a>
            </li>
            <li>
            <a class="dropdown-item" href="#">Something else here</a>
            </li>
            </ul>
            </div>
            </div>
            HTML,
            Dropdown::widget()
                ->cookbook('default')
                ->id('dropdown')
                ->items(
                    Item::widget()->label('Action')->link('#'),
                    Item::widget()->label('Another actionc')->link('#'),
                    Item::widget()->label('Something else here')->link('#'),
                )
                ->render()
        );
    }
}
