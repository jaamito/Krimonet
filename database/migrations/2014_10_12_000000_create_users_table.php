<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
		if (!Schema::hasTable('users')) {
			Schema::create('users', function (Blueprint $table) {
				$table->increments('id')->unsigned();
				$table->enum('type', ["admin", "promotor", "client"])->nullable();
				$table->string('login', 15)->unique();
				$table->string('name', 45);
				$table->string('email', 128)->unique();
				$table->timestamp('email_verified_at')->nullable();
				$table->string('password', 64);
				$table->rememberToken();
				$table->timestamps();
			});
		}
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
