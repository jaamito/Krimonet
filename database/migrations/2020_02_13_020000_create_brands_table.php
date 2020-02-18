<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBrandsTable extends Migration{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
		if (!Schema::hasTable('brands')) {
			Schema::create('brands', function (Blueprint $table) {
				$table->increments('id')->unsigned();
				$table->string('brand_name', 45);
				$table->string('brand_url_logo', 128)->nullable();
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
        Schema::dropIfExists('brands');
    }
}
