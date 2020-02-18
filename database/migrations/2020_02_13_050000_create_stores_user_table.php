<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStoresUserTable extends Migration{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
        if (!Schema::hasTable('store_user')) {
            Schema::create('store_user', function (Blueprint $table) {
                $table->increments('id')->unsigned();
                $table->integer('store_id')->unsigned();
				$table->integer('user_id')->unsigned();
                $table->enum('store_user_type', ["admin", "manager", "user"]);

                $table->foreign('store_id')->references('id')->on('stores');
				$table->foreign('user_id')->references('id')->on('users');
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(){
        Schema::dropIfExists('store_user');
    }
}
