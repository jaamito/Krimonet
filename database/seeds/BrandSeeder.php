<?php

use Illuminate\Database\Seeder;

class BrandsTableSeeder extends Seeder{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        //********************************************************************************************************
        $brand = new App\Brand();
        $brand->brand_name="Cliente 1 - Marca";
        $brand->brand_url_logo=null;
        $brand->save();
	}
}