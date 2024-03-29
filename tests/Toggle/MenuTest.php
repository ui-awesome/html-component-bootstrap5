<?php

declare(strict_types=1);

namespace UIAwesome\Html\Component\Bootstrap5\Tests\Toggle;

use PHPForge\Support\Assert;
use UIAwesome\Html\Component\Bootstrap5\Toggle;

final class MenuTest extends \PHPUnit\Framework\TestCase
{
    public function testRender(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <button class="navbar-toggler" type="button" aria-expanded="false" aria-label="Toggle navigation" data-bs-toggle="collapse" data-bs-target="#">
            <span class="navbar-toggler-icon"></span>
            </button>
            HTML,
            Toggle::widget()->cookbook('menu')->render()
        );
    }
}
