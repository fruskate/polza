<?php namespace Frukt\Polza\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateFruktPolzaProducts extends Migration
{
    public function up()
    {
        Schema::create('frukt_polza_products', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('title')->nullable();
            $table->string('slug')->nullable();
            $table->decimal('price', 10, 2)->default(0);
            $table->text('desc')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->boolean('is_active')->default(1);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('frukt_polza_products');
    }
}
