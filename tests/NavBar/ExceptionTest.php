<?php

declare(strict_types=1);

namespace UIAwesome\Html\Component\Bootstrap5\Tests\Navbar;

use UIAwesome\Html\Component\Bootstrap5\NavBar;

final class ExceptionTest extends \PHPUnit\Framework\TestCase
{
    public function testRender(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage(
            'Invalid definition: "noexist". Available definitions: "default", "align-right".'
        );

        NavBar::widget()->definition('noexist');
    }
}
