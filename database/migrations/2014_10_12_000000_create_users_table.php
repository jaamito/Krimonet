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
				$table->enum('user_type', ["admin", "promotor", "client"])->nullable();
				$table->string('user_login', 15)->unique();
				$table->string('user_name', 45);
				$table->string('user_email', 128)->unique();
				$table->timestamp('email_verified_at')->nullable();
				$table->string('user_password', 64);
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
