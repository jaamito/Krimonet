<?php

use Illuminate\Database\Seeder;

class FranchisesTableSeeder extends Seeder{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        //********************************************************************************************************
		
		$brand = App\Brand::all()->where("id",1)->first->id;
        $franchise = new App\Franchise();
        $franchise->franchise_name="Cliente 1 - Franquicia";
		$franchise->franchise_url_logo=null;
		$franchise->brand_id=$brand->id;
        $franchise->save();
	}
}