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
				$table->string('store_name', 45);
				$table->integer('franchise_id');
				$table->string('store_group', 45);
				$table->string('store_address', 128);
				$table->string('store_codepostal', 5);
				$table->string('store_city', 64);
				$table->string('store_state', 64);
				$table->string('store_country', 45);
				$table->double('store_longitude');
				$table->double('store_latitude');
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
