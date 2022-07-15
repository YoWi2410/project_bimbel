<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CampBenefit;

class CampBenefitTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $campBenefits = [
            [
                'camp_id' => 1,
                'name' => 'Guru Professional'
            ],
            [
                'camp_id' => 1,
                'name' => 'Kurikulum Mengikuti'
            ],
            [
                'camp_id' => 1,
                'name' => 'Fokus US & AN'
            ],
            [
                'camp_id' => 1,
                'name' => '1-1 Teacher Study'
            ],
            [
                'camp_id' => 1,
                'name' => 'SBMPTN & SNMPTN'
            ],
            [
                'camp_id' => 1,
                'name' => 'Online & Offline Class'
            ],
            [
                'camp_id' => 1,
                'name' => 'Premium Class Web'
            ],
            [
                'camp_id' => 1,
                'name' => 'Untuk SD, SMP, SMA'
            ],
            [
                'camp_id' => 2,
                'name' => 'Guru Professional'
            ],
            [
                'camp_id' => 2,
                'name' => 'Untuk SD, SMP, SMA'
            ],
            [
                'camp_id' => 2,
                'name' => 'Offline Class'
            ],
        ];

        CampBenefit::insert($campBenefits);
    }
}
