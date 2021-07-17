<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePortofolioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('portofolio', function (Blueprint $table) {
            $table->id();
            $table->string('project');
            $table->bigInteger('user_id');
            $table->bigInteger('category_type_id');
            $table->bigInteger('category_model_id'); 
            $table->string('luasbangunan')->nullable();
            $table->string('lokasiprojek')->nullable();
            $table->string('url_video')->nullable();
            $table->string('url_image')->nullable();
            $table->string('desc')->nullable();
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
        Schema::dropIfExists('portofolio');
    }
}
