<?php namespace Frukt\Polza\Models;

use Model;

/**
 * Model
 */
class Category extends Model
{
    use \October\Rain\Database\Traits\Validation;
    use \October\Rain\Database\Traits\Sluggable;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'frukt_polza_categories';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    protected $slugs = ['slug' => 'title'];

    public $attachOne = [
        'cover' => 'System\Models\File'
    ];

    public $hasMany = [
        'products' => Product::class
    ];

}
