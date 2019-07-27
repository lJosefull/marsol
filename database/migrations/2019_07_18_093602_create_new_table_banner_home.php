<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewTableBannerHome extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::table('banner_homes', function($table) { 
               $table->string('text');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('new_table_banner_home');
    }
}
