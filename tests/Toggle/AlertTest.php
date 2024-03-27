<?php

declare(strict_types=1);

namespace UIAwesome\Html\Component\Bootstrap5\Tests\Toggle;

use PHPForge\Support\Assert;
use UIAwesome\Html\Component\Bootstrap5\Toggle;

final class AlertTest extends \PHPUnit\Framework\TestCase
{
    public function testRender(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <button class="btn-close" type="button" aria-label="Close" data-bs-dismiss="alert"></button>
            HTML,
            Toggle::widget()->definition('alert')->render()
        );
    }
}
