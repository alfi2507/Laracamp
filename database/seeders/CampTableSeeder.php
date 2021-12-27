<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
// melakukan import model dlu
use App\Models\Camp;

class CampTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // membeuat array
        $camps = [
            [
                'title'=> 'Gila Belajar',
                'slug'=> 'gila-belajar',
                'price'=> 280,
                'created_at'=> date('Y-m-d H:i:s', time()),
                'updated_at'=> date('Y-m-d H:i:s', time()),
            ],
            [
                'title'=> 'Baru Mulai',
                'slug'=> 'baru-mulai',
                'price'=> 140,
                'created_at'=> date('Y-m-d H:i:s', time()),
                'updated_at'=> date('Y-m-d H:i:s', time()),
            ],
        ];
        // lanjut ke perulangan
        // ini cara 1
        // foreach($camps as $key => $camp){
        //     Camp::create($camp);
        // }
            
        // ini cara 2
        Camp::insert($camps);
    
    }
}
