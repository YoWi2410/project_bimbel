<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
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
        $camps = [
            [
                'title' => 'Bimbel Privat',
                'slug' => 'bimbel-privat',
                'price' => 300,
                'created_at' => date ('Y-m-d H:i:s', time ()),
                'updated_at' => date ('Y-m-d H:i:s', time ()),
            ],
            [
                'title' => 'Bimbel Umum',
                'slug' => 'bimbel-umum',
                'price' => 150,
                'created_at' => date ('Y-m-d H:i:s', time ()),
                'updated_at' => date ('Y-m-d H:i:s', time ()),
            ],
        ];

        // 1st methode
        //foreach ($camps as $key => $camp) {
         //   Camp::create($camp);
        //}

        // 2nd methode
        Camp::insert($camps);
    }
}
