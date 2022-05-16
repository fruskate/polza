<?php namespace Frukt\Polza\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateFruktPolzaCategories extends Migration
{
    public function up()
    {
        Schema::create('frukt_polza_categories', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('title')->nullable();
            $table->string('slug')->nullable();
            $table->string('sub_title')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->boolean('is_menu')->default(1);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('frukt_polza_categories');
    }
}
