<?php namespace Frukt\Polza\Components;

use Cms\Classes\ComponentBase;
use Frukt\Polza\Models\Product;

/**
 * NewProducts Component
 */
class NewProducts extends ComponentBase
{
    public $novelties;
    public function componentDetails()
    {
        return [
            'name' => 'Новинки',
            'description' => 'Отображает слайдер с новинками...'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onRun()
    {
        $this->novelties = Product::where('is_new', 1)->get();
    }
}
