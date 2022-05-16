<?php namespace Frukt\Polza\Components;

use Cms\Classes\ComponentBase;
use Frukt\Polza\Models\Category;

/**
 * CatalogMenu Component
 */
class CatalogMenu extends ComponentBase
{
    public $categories;

    public function componentDetails()
    {
        return [
            'name' => 'Меню каталога',
            'description' => 'Показывает меню каталога...'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onRun()
    {
        $this->categories = Category::where('is_menu', 1)->get();
    }
}
