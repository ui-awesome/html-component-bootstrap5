<?php

declare(strict_types=1);

namespace UIAwesome\Html\Component\Bootstrap5\Tests\Toggle;

use PHPForge\Support\Assert;
use UIAwesome\Html\Component\Bootstrap5\Toggle;

final class DropdownTest extends \PHPUnit\Framework\TestCase
{
    public function testRender(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <button class="btn btn-secondary dropdown-toggle" type="button" aria-expanded="false">
            Dropdown button
            </button>
            HTML,
            Toggle::widget()->cookbook('dropdown')->render()
        );
    }
}
