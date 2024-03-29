<?php

declare(strict_types=1);

namespace UIAwesome\Html\Component\Bootstrap5\Tests\NavBar;

use PHPForge\Support\Assert;
use UIAwesome\Html\Component\Bootstrap5\{Item, Menu, NavBar};

/**
 * Navigation bar built dropdown with the utility classes from Bootstrap.
 *
 * Here’s what you need to know about the supported content for the navbar.
 *
 * @link https://getbootstrap.com/docs/5.3/components/navbar/
 *
 * @psalm-suppress PropertyNotSetInConstructor
 */
final class DefaultTest extends \PHPUnit\Framework\TestCase
{
    public function testRender(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
            <a class="navbar-brand" href="#">
            Navbar
            </a>
            <button class="navbar-toggler" type="button" aria-expanded="false" aria-label="Toggle navigation" data-bs-toggle="collapse" aria-controls="menu_1" data-bs-target="#menu_1">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="menu_1">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
            <a class="nav-link active" href="/home" aria-current="page">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="/link">Link</a>
            </li>
            <li class="nav-item">
            <a class="nav-link disabled" href="/disable">Disable</a>
            </li>
            </ul>
            </div>
            </div>
            </nav>
            HTML,
            NavBar::widget()
                ->brandLink('#')
                ->brandText('Navbar')
                ->cookbook('default')
                ->menu(
                    Menu::widget()
                        ->currentPath('/home')
                        ->id('menu_1')
                        ->items(
                            Item::widget()->label('Home')->link('/home'),
                            Item::widget()->label('Link')->link('/link'),
                            Item::widget()->label('Disable')->link('/disable')->disable(),
                        )
                )
                ->render()
        );
    }
}
