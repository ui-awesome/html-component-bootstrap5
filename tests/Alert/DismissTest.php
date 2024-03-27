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
final class DismissTest extends \PHPUnit\Framework\TestCase
{
    public function testDanger(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <div class="alert alert-danger alert-dismissible fade show" id="alert_658fec01ac6cf" role="alert">
            <strong>Holy guacamole!</strong> You should check in on some of those fields below.
            <button class="btn-close" type="button" aria-label="Close" data-bs-dismiss="alert"></button>
            </div>
            HTML,
            Alert::widget()
                ->content('<strong>Holy guacamole!</strong> You should check in on some of those fields below.')
                ->definition('dismissible', 'danger')
                ->id('alert_658fec01ac6cf')
                ->render()
        );
    }

    public function testDark(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <div class="alert alert-dark alert-dismissible fade show" id="alert_658fec01ac6cf" role="alert">
            <strong>Holy guacamole!</strong> You should check in on some of those fields below.
            <button class="btn-close" type="button" aria-label="Close" data-bs-dismiss="alert"></button>
            </div>
            HTML,
            Alert::widget()
                ->content('<strong>Holy guacamole!</strong> You should check in on some of those fields below.')
                ->definition('dismissible', 'dark')
                ->id('alert_658fec01ac6cf')
                ->render()
        );
    }

    public function testInfo(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <div class="alert alert-info alert-dismissible fade show" id="alert_658fec01ac6cf" role="alert">
            <strong>Holy guacamole!</strong> You should check in on some of those fields below.
            <button class="btn-close" type="button" aria-label="Close" data-bs-dismiss="alert"></button>
            </div>
            HTML,
            Alert::widget()
                ->content('<strong>Holy guacamole!</strong> You should check in on some of those fields below.')
                ->definition('dismissible', 'info')
                ->id('alert_658fec01ac6cf')
                ->render()
        );
    }

    public function testLight(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <div class="alert alert-light alert-dismissible fade show" id="alert_658fec01ac6cf" role="alert">
            <strong>Holy guacamole!</strong> You should check in on some of those fields below.
            <button class="btn-close" type="button" aria-label="Close" data-bs-dismiss="alert"></button>
            </div>
            HTML,
            Alert::widget()
                ->content('<strong>Holy guacamole!</strong> You should check in on some of those fields below.')
                ->definition('dismissible', 'light')
                ->id('alert_658fec01ac6cf')
                ->render()
        );
    }

    public function testPrimary(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <div class="alert alert-primary alert-dismissible fade show" id="alert_658fec01ac6cf" role="alert">
            <strong>Holy guacamole!</strong> You should check in on some of those fields below.
            <button class="btn-close" type="button" aria-label="Close" data-bs-dismiss="alert"></button>
            </div>
            HTML,
            Alert::widget()
                ->content('<strong>Holy guacamole!</strong> You should check in on some of those fields below.')
                ->definition('dismissible', 'primary')
                ->id('alert_658fec01ac6cf')
                ->render()
        );
    }

    public function testSecondary(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <div class="alert alert-secondary alert-dismissible fade show" id="alert_658fec01ac6cf" role="alert">
            <strong>Holy guacamole!</strong> You should check in on some of those fields below.
            <button class="btn-close" type="button" aria-label="Close" data-bs-dismiss="alert"></button>
            </div>
            HTML,
            Alert::widget()
                ->content('<strong>Holy guacamole!</strong> You should check in on some of those fields below.')
                ->definition('dismissible', 'secondary')
                ->id('alert_658fec01ac6cf')
                ->render()
        );
    }

    public function testSuccess(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <div class="alert alert-success alert-dismissible fade show" id="alert_658fec01ac6cf" role="alert">
            <strong>Holy guacamole!</strong> You should check in on some of those fields below.
            <button class="btn-close" type="button" aria-label="Close" data-bs-dismiss="alert"></button>
            </div>
            HTML,
            Alert::widget()
                ->content('<strong>Holy guacamole!</strong> You should check in on some of those fields below.')
                ->definition('dismissible', 'success')
                ->id('alert_658fec01ac6cf')
                ->render()
        );
    }

    public function testWarning(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <div class="alert alert-warning alert-dismissible fade show" id="alert_658fec01ac6cf" role="alert">
            <strong>Holy guacamole!</strong> You should check in on some of those fields below.
            <button class="btn-close" type="button" aria-label="Close" data-bs-dismiss="alert"></button>
            </div>
            HTML,
            Alert::widget()
                ->content('<strong>Holy guacamole!</strong> You should check in on some of those fields below.')
                ->definition('dismissible', 'warning')
                ->id('alert_658fec01ac6cf')
                ->render()
        );
    }
}
