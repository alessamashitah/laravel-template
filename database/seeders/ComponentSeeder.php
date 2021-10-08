<?php

namespace Database\Seeders;

use App\Models\Component;
use Illuminate\Database\Seeder;

class ComponentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $components = [
            [
                'id' => '1',
               'name' => 'kertas',
            ],
            [
                'id' => '2',
               'name' => 'kayu',
            ],
            [
                'id' => '3',
               'name' => 'plastik',
            ],

            
        ];
  
        foreach ($components as $key => $value) {
            Component::create($value);
        }
    }
}
