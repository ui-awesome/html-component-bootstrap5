<?php

declare(strict_types=1);

namespace UIAwesome\Html\Component\Bootstrap5\Tests\NavBar;

use PHPForge\Support\Assert;
use UIAwesome\Html\Component\Bootstrap5\{Dropdown, Item, Menu, NavBar};

/**
 * Navigation bar built dropdown with the utility classes from Bootstrap on the right.
 *
 * @psalm-suppress PropertyNotSetInConstructor
 */
final class AlignRightTest extends \PHPUnit\Framework\TestCase
{
    public function testRender(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container">
            <a class="navbar-brand" href="#">
            Navbar
            </a>
            <button class="navbar-toggler" type="button" aria-expanded="false" aria-label="Toggle navigation" data-bs-toggle="collapse" aria-controls="menu_1" data-bs-target="#menu_1">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse justify-content-end navbar-collapse" id="menu_1">
            <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link active" href="/home" aria-current="page">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="/link">Link</a>
            </li>
            <li class="nav-item">
            <a class="nav-link disabled" href="/disable">Disable</a>
            </li>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" type="button" role="button" aria-expanded="false" data-bs-toggle="dropdown">
            Dropdown
            </a>
            <ul class="dropdown-menu">
            <li>
            <a class="dropdown-item" href="#">Action</a>
            </li>
            <li>
            <a class="dropdown-item" href="#">Another actionc</a>
            </li>
            <li>
            <a class="dropdown-item" href="#">Something else here</a>
            </li>
            </ul>
            </li>
            </ul>
            </div>
            </div>
            </nav>
            HTML,
            NavBar::widget()
                ->brandLink('#')
                ->brandText('Navbar')
                ->definition('align-right')
                ->menu(
                    Menu::widget()
                        ->currentPath('/home')
                        ->id('menu_1')
                        ->items(
                            Item::widget()->label('Home')->link('/home'),
                            Item::widget()->label('Link')->link('/link'),
                            Item::widget()->label('Disable')->link('/disable')->disable(),
                            Dropdown::widget()
                                ->id('dropdown')
                                ->items(
                                    Item::widget()->label('Action')->link('#'),
                                    Item::widget()->label('Another actionc')->link('#'),
                                    Item::widget()->label('Something else here')->link('#'),
                                )
                        )
                )
                ->render()
        );
    }
}
