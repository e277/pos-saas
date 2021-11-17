<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stores', function (Blueprint $table) {
            $table->id();
            $table->foreignId("user_id")->constrained();
            $table->foreignId("contact_id");
            $table->foreignId("store_type_id");
            $table->string("name");
            $table->string("title");
            $table->string("banner_message")->nullable();
            $table->string("slogan")->nullable();
            $table->string("mission")->nullable();
            $table->string("theme")->nullable();
            $table->string("desc");
            $table->string("logo_path")->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('stores');
    }
}
