<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConsultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consults', function (Blueprint $table) {
            $table->increments('id')->nullable();
            $table->string('name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('identity')->nullable();
            $table->string('identity_type')->nullable();
            $table->string('email')->nullable();
            $table->string('posting')->nullable();
            $table->string('origin')->nullable();
            $table->string('D_output')->nullable();
            $table->string('D_entry')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('consults');
    }
}
