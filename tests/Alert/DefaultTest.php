<?php

declare(strict_types=1);

namespace UIAwesome\Html\Component\Bootstrap5\Tests\Alert;

use PHPForge\Support\Assert;
use UIAwesome\Html\Component\Bootstrap5\Alert;

/**
 * Alert component with Bootstrap dismiss button.
 *
 * Provide contextual feedback messages for typical user actions with the handful of available and flexible alert
 * messages.
 *
 * @link https://getbootstrap.com/docs/5.3/components/alerts/
 *
 * @psalm-suppress PropertyNotSetInConstructor
 */
final class DefaultTest extends \PHPUnit\Framework\TestCase
{
    public function testDanger(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <div class="alert alert-danger" id="alert_658fec01ac6cf" role="alert">
            A simple danger alert—check it out!
            </div>
            HTML,
            Alert::widget()
                ->content('A simple danger alert—check it out!')
                ->definition('default', 'danger')
                ->id('alert_658fec01ac6cf')
                ->render()
        );
    }

    public function testDark(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <div class="alert alert-dark" id="alert_658fec01ac6cf" role="alert">
            A simple dark alert—check it out!
            </div>
            HTML,
            Alert::widget()
                ->content('A simple dark alert—check it out!')
                ->definition('default', 'dark')
                ->id('alert_658fec01ac6cf')
                ->render()
        );
    }

    public function testInfo(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <div class="alert alert-info" id="alert_658fec01ac6cf" role="alert">
            A simple info alert—check it out!
            </div>
            HTML,
            Alert::widget()
                ->content('A simple info alert—check it out!')
                ->definition('default', 'info')
                ->id('alert_658fec01ac6cf')
                ->render()
        );
    }

    public function testLight(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <div class="alert alert-light" id="alert_658fec01ac6cf" role="alert">
            A simple light alert—check it out!
            </div>
            HTML,
            Alert::widget()
                ->content('A simple light alert—check it out!')
                ->definition('default', 'light')
                ->id('alert_658fec01ac6cf')
                ->render()
        );
    }

    public function testPrimary(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <div class="alert alert-primary" id="alert_658fec01ac6cf" role="alert">
            A simple primary alert—check it out!
            </div>
            HTML,
            Alert::widget()
                ->content('A simple primary alert—check it out!')
                ->definition('default', 'primary')
                ->id('alert_658fec01ac6cf')
                ->render()
        );
    }

    public function testSecondary(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <div class="alert alert-secondary" id="alert_658fec01ac6cf" role="alert">
            A simple secondary alert—check it out!
            </div>
            HTML,
            Alert::widget()
                ->content('A simple secondary alert—check it out!')
                ->definition('default', 'secondary')
                ->id('alert_658fec01ac6cf')
                ->render()
        );
    }

    public function testSuccess(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <div class="alert alert-success" id="alert_658fec01ac6cf" role="alert">
            A simple success alert—check it out!
            </div>
            HTML,
            Alert::widget()
                ->content('A simple success alert—check it out!')
                ->definition('default', 'success')
                ->id('alert_658fec01ac6cf')
                ->render()
        );
    }

    public function testWarning(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <div class="alert alert-warning" id="alert_658fec01ac6cf" role="alert">
            A simple warning alert—check it out!
            </div>
            HTML,
            Alert::widget()
                ->content('A simple warning alert—check it out!')
                ->definition('default', 'warning')
                ->id('alert_658fec01ac6cf')
                ->render()
        );
    }
}
