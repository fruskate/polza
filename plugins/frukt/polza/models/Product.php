<?php namespace Frukt\Polza\Models;

use Model;

/**
 * Model
 */
class Product extends Model
{
    use \October\Rain\Database\Traits\Validation;
    use \October\Rain\Database\Traits\Sluggable;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'frukt_polza_products';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    protected $slugs = ['slug' => 'title'];

    public $belongsTo = [
        'category' => Category::class
    ];

    public $attachMany = [
        'images' => 'System\Models\File'
    ];

}
