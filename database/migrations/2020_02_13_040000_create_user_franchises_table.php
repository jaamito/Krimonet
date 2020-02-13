<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserFranchisesTable extends Migration{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
        if (!Schema::hasTable('user_franchise')) {
            Schema::create('user_franchise', function (Blueprint $table) {
                $table->increments('id')->unsigned();
                $table->integer('franchise_id')->unsigned();
				$table->integer('user_id')->unsigned();
                $table->enum('user_franchise_type', ["admin", "manager", "user"]);

                $table->foreign('franchise_id')->references('id')->on('franchises');
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
        Schema::dropIfExists('user_franchise');
    }
}
