<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserStoresTable extends Migration{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
        if (!Schema::hasTable('user_store')) {
            Schema::create('user_store', function (Blueprint $table) {
                $table->increments('id')->unsigned();
                $table->integer('store_id')->unsigned();
				$table->integer('user_id')->unsigned();
                $table->enum('user_store_type', ["admin", "manager", "user"]);

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
        Schema::dropIfExists('user_store');
    }
}
