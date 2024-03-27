<?php

declare(strict_types=1);

namespace UIAwesome\Html\Component\Bootstrap5\Tests\Dropdown;

use UIAwesome\Html\Component\Bootstrap5\Dropdown;

final class ExceptionTest extends \PHPUnit\Framework\TestCase
{
    public function testRender(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('Invalid definition: "noexist". Available definitions: "default", "language".');

        Dropdown::widget()->definition('noexist');
    }
}
