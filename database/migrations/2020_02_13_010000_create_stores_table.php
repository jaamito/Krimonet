<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStoresTable extends Migration{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
		if (!Schema::hasTable('stores')) {
			Schema::create('stores', function (Blueprint $table) {
				$table->increments('id')->unsigned();
				$table->string('name', 45);
				$table->integer('franchise_id');
				$table->string('group', 45);
				$table->string('address', 128);
				$table->string('codepostal', 5);
				$table->string('city', 64);
				$table->string('state', 64);
				$table->string('country', 45);
				$table->double('longitude');
				$table->double('latitude');
				$table->timestamps();
			});
		}
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(){
        Schema::dropIfExists('stores');
    }
}
