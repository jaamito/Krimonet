<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFranchisesTable extends Migration{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
		if (!Schema::hasTable('franchises')) {
			Schema::create('franchises', function (Blueprint $table) {
				$table->increments('id')->unsigned();
				$table->string('franchise_name', 45);
				$table->integer('brand_id');
				$table->string('franchise_url_logo', 128)->nullable();
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
        Schema::dropIfExists('franchises');
    }
}
