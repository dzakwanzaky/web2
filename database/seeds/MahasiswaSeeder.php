<?php

use Illuminate\Database\Seeder;

class MahasiswaSeeder extends Seeder{


    public function run()
    {
        
        $faker = Faker\Factory::create();  //import library faker

        $limit = 5; //batasan berapa banyak data

        for($i=0; $i < $limit ; $i++){
        	DB::table('mahasiswas')->insert([ //mengisi database
        		'nama' => $faker-> name,
        		'email' => $faker->unique()->email, //email unique shg tdk ada yg sama
        		'username' => $faker->username,
        		'password' => $faker->password,
        	]);
    	}

    }
}

