<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersBrandsTable extends Migration{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
        if (!Schema::hasTable('users_brands')) {
            Schema::create('users_brands', function (Blueprint $table) {
                $table->increments('id')->unsigned();
                $table->integer('brand_id')->unsigned();
				$table->integer('user_id')->unsigned();
                $table->enum('user_brand_type', ["admin", "manager", "user"]);

				$table->foreign('user_id')->references('id')->on('users');
                $table->foreign('brand_id')->references('id')->on('brands');
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(){
        Schema::dropIfExists('users_brands');
    }
}
