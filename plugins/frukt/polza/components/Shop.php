<?php namespace Frukt\Polza\Components;

use Cms\Classes\ComponentBase;
use Frukt\Polza\Models\Category;
use Frukt\Polza\Models\Product;

/**
 * Shop Component
 */
class Shop extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'Компонент каталога',
            'description' => 'Показывает страницы с категориями и товарами...'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onRun()
    {
        if ($this->page->id == 'shop-all') {
            $this->page['categories'] = Category::where('is_menu', 1)->get();
        } elseif ($this->page->id == 'shop-category') {
            $category = Category::where('slug', $this->param('slug_category'))->first();
            $this->page['products'] = Product::where('is_active', 1)->where('category_id', $category->id)->get();
        } elseif ($this->page->id == 'shop-product') {
            $this->page['item'] = Product::where('slug', $this->param('slug_product'))->first();
        }
    }
}
