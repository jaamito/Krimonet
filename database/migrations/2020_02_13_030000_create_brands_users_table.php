<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBrandsUsersTable extends Migration{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
        if (!Schema::hasTable('brand_user')) {
            Schema::create('brand_user', function (Blueprint $table) {
                $table->increments('id')->unsigned();
                $table->integer('brand_id')->unsigned();
				$table->integer('user_id')->unsigned();
                $table->enum('brand_user_type', ["admin", "manager", "user"]);

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
        Schema::dropIfExists('brand_user');
    }
}
