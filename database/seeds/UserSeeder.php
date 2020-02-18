<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        //********************************************************************************************************
        $user = new App\User();
        $user->user_login="admin";
        $user->user_name="Administrador";
        $user->user_type="admin";
        $user->user_email="admin@krimonet.com";
		$user->user_password="adminKrimonet%2020";
        $user->save();

        $user = new App\User();
        $user->user_login="client1";
        $user->user_name="Cliente1 - Administrador";
        $user->user_type="client";
        $user->user_email="client1@krimonet.com";
		$user->user_password="client1%2020";
        $user->save();
		
		$user->brands()->attach(App\Brand::all()->where("id", 1)->first->id, ["brand_user_type"=>"admin"]);
		//App\Brand::all()->where("id", 1)->first->users()->attach($user->id, ["brand_user_type"=>"admin"]);

		//$franchise = App\Franchise::all()->where("id",1)->first;
		//
		//$user->franchises()->attach($franchise->id, ["franchise_user_type"=>"admin"]);
	}
}