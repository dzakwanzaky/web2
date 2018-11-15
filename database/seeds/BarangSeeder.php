<?php

use Illuminate\Database\Seeder;



class BarangSeeder extends Seeder{

	public function run()
		{
       
        
        $faker = Faker\Factory::create();  //import library faker

        $limit = 5; //batasan berapa banyak data

        for($i=0; $i < $limit ; $i++){
        	DB::table('model_barangs')->insert([ //mengisi database
        		'nama_barang' => $faker-> company,
        		'stok' => $faker-> randomNumber('2'),
        		'harga' => $faker-> randomNumber('6'),
        		'expired_date' => $faker-> dateTime,
        		'tanggal_produksi' => $faker-> dateTime,

        	]);
    	}

    }

    
}
