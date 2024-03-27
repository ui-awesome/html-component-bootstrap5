<?php

declare(strict_types=1);

namespace UIAwesome\Html\Component\Bootstrap5\Tests\Toggle;

use PHPForge\Support\Assert;
use UIAwesome\Html\Component\Bootstrap5\Toggle;

final class MenuDropdownTest extends \PHPUnit\Framework\TestCase
{
    public function testRender(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <a class="nav-link dropdown-toggle" type="button" role="button" aria-expanded="false" data-bs-toggle="dropdown">
            Dropdown
            </a>
            HTML,
            Toggle::widget()->definition('menu-dropdown')->render()
        );
    }
}
