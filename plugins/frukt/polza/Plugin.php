<?php namespace Frukt\Polza;

use System\Classes\PluginBase;
use Frukt\Polza\Components\CatalogMenu;
use Frukt\Polza\Components\Shop;
use Frukt\Polza\Components\NewProducts;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            CatalogMenu::class  => 'catalogMenu',
            Shop::class  => 'shop',
            NewProducts::class  => 'newProducts'
        ];
    }

    public function registerSettings()
    {
    }
}
