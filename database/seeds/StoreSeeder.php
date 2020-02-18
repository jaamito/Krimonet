<?php

use Illuminate\Database\Seeder;

class StoresTableSeeder extends Seeder{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        //********************************************************************************************************
		
		$franchise = App\Franchise::all()->where("id",1)->first->id;
        
		$store = new App\Store();
        $store->store_name="Cliente 1 - Tienda";
		$store->store_group="Tiendas";
		$store->store_address="C/ new york, nº 5, bajos";
		$store->store_codepostal="08001";
		$store->store_city="Barcelona";
		$store->store_state="Barcelona";
		$store->store_country="España";
		$store->store_longitude="41.386967";
		$store->store_latitude="2.170089";
		$store->franchise_id=$franchise->id;
        $store->save();
		
		//$store->users()->attach($franchise->id);
	}
}