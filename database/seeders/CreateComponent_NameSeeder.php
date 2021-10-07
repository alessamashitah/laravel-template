<?php

namespace Database\Seeders;

use App\Models\Component_name;
use Illuminate\Database\Seeder;

class CreateComponent_NameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $component_name = [
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
  
        foreach ($component_name as $key => $value) {
            Component_name::create($value);
        }
    }
}
