<?php

declare(strict_types=1);

namespace UIAwesome\Html\Component\Bootstrap5\Tests\Dropdown;

use PHPForge\Support\Assert;
use UIAwesome\Html\Component\Bootstrap5\{Dropdown, Item};

/**
 * Dropdown.
 *
 * This example can be used to show a dropdown menu when clicking on a button.
 *
 * @link https://getbootstrap.com/docs/5.3/components/dropdowns/
 *
 * @psalm-suppress PropertyNotSetInConstructor
 */
final class SelectorLanguageTest extends \PHPUnit\Framework\TestCase
{
    public function testRender(): void
    {
        Assert::equalsWithoutLE(
            <<<HTML
            <div class="btn-group dropup ms-3">
            <button class="btn btn-primary dropdown-toggle d-flex align-items-center text-white" type="button" title="Select language" aria-expanded="false" aria-label="Toggle language dropdown" data-bs-toggle="dropdown">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" aria-hidden="true" width="32" height="32" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M8.64 4.737A7.97 7.97 0 0 1 12 4a7.997 7.997 0 0 1 6.933 4.006h-.738c-.65 0-1.177.25-1.177.9 0 .33 0 2.04-2.026 2.008-1.972 0-1.972-1.732-1.972-2.008 0-1.429-.787-1.65-1.752-1.923-.374-.105-.774-.218-1.166-.411-1.004-.497-1.347-1.183-1.461-1.835ZM6 4a10.06 10.06 0 0 0-2.812 3.27A9.956 9.956 0 0 0 2 12c0 5.289 4.106 9.619 9.304 9.976l.054.004a10.12 10.12 0 0 0 1.155.007h.002a10.024 10.024 0 0 0 1.5-.19 9.925 9.925 0 0 0 2.259-.754 10.041 10.041 0 0 0 4.987-5.263A9.917 9.917 0 0 0 22 12a10.025 10.025 0 0 0-.315-2.5A10.001 10.001 0 0 0 12 2a9.964 9.964 0 0 0-6 2Zm13.372 11.113a2.575 2.575 0 0 0-.75-.112h-.217A3.405 3.405 0 0 0 15 18.405v1.014a8.027 8.027 0 0 0 4.372-4.307ZM12.114 20H12A8 8 0 0 1 5.1 7.95c.95.541 1.421 1.537 1.835 2.415.209.441.403.853.637 1.162.54.712 1.063 1.019 1.591 1.328.52.305 1.047.613 1.6 1.316 1.44 1.825 1.419 4.366 1.35 5.828Z" clip-rule="evenodd"/></svg>
            </button>
            <div id="selector-language">
            <ul class="dropdown-menu dropdown-menu-end shadow">
            <li>
            <a class="dropdown-item d-flex align-items-center" href="/language/de">Deutsch</a>
            </li>
            <li>
            <a class="dropdown-item d-flex align-items-center active" href="/language/en" aria-current="true">English</a>
            </li>
            <li>
            <a class="dropdown-item d-flex align-items-center" href="/language/es">Español</a>
            </li>
            <li>
            <a class="dropdown-item d-flex align-items-center" href="/language/fr">Français</a>
            </li>
            </ul>
            </div>
            </div>
            HTML,
            Dropdown::widget()
                ->cookbook('language')
                ->id('selector-language')
                ->items(
                    Item::widget()->label('Deutsch')->link('/language/de'),
                    Item::widget()->label('English')->link('/language/en')->active(),
                    Item::widget()->label('Español')->link('/language/es'),
                    Item::widget()->label('Français')->link('/language/fr'),
                )
                ->render()
        );
    }
}
