<?php namespace Frukt\Polza\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateFruktPolzaProducts extends Migration
{
    public function up()
    {
        Schema::table('frukt_polza_products', function($table)
        {
            $table->integer('category_id')->nullable()->unsigned();
        });
    }
    
    public function down()
    {
        Schema::table('frukt_polza_products', function($table)
        {
            $table->dropColumn('category_id');
        });
    }
}
