<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminDataModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin_data_models', function (Blueprint $table) {
            $table->increments('adminid');
            $table->string('fullname');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('proimage');
            $table->integer('active_status')->default(1);
            $table->integer('block_status')->default(0);
            $table->rememberToken();
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
        Schema::dropIfExists('admin_data_models');
    }
}
