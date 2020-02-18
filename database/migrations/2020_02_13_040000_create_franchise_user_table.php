<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFranchiseUserTable extends Migration{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
        if (!Schema::hasTable('franchise_user')) {
            Schema::create('franchise_user', function (Blueprint $table) {
                $table->increments('id')->unsigned();
                $table->integer('franchise_id')->unsigned();
				$table->integer('user_id')->unsigned();
                $table->enum('franchise_user_type', ["admin", "manager", "user"]);

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
        Schema::dropIfExists('franchise_user');
    }
}
