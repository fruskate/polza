<?php namespace Frukt\Polza\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateFruktPolzaProducts2 extends Migration
{
    public function up()
    {
        Schema::table('frukt_polza_products', function($table)
        {
            $table->boolean('is_new')->default(1);
        });
    }
    
    public function down()
    {
        Schema::table('frukt_polza_products', function($table)
        {
            $table->dropColumn('is_new');
        });
    }
}
