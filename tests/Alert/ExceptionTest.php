<?php

declare(strict_types=1);

namespace UIAwesome\Html\Component\Bootstrap5\Tests\Alert;

use UIAwesome\Html\Component\Bootstrap5\Alert;

final class ExceptionTest extends \PHPUnit\Framework\TestCase
{
    public function testRender(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage(
            'Invalid value: "type". Available values: "danger", "dark", "info", "light", "primary", "secondary", "success", "warning".'
        );

        Alert::widget()->cookbook('default', 'type');
    }
}
