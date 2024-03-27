<?php

declare(strict_types=1);

namespace UIAwesome\Html\Component\Bootstrap5\Tests\Toggle;

use UIAwesome\Html\Component\Bootstrap5\Toggle;

final class ExceptionTest extends \PHPUnit\Framework\TestCase
{
    public function testRender(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage(
            'Invalid definition: "noexist". Available definitions: "alert", "dropdown", "menu", "menu-dropdown", "selector-language", "selector-theme".'
        );

        Toggle::widget()->definition('noexist');
    }
}
