<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class vendors_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB:tables('vendors')->insert([
            ['name'=>'Intel',
            'website'=> 'https://www.intel.com/'],
            ['name'=>'AMD',
            'website'=> 'https://www.amd.com/'],
            ['name'=>'NVIDIA',
            'website'=> 'https://www.nvidia.com/'],
            ['name'=>'Lenovo',
            'website'=> 'https://www.lenovo.com/'],
            ['name'=>'ASUS',
            'website'=> 'https://www.asus.com/'],
            ['name'=>'Msi',
            'website'=> 'https://www.msi.com/'],
            ['name'=>'Apple',
            'website'=> 'https://www.apple.com/'],
            ['name'=>'HP',
            'website'=> 'https://www.hp.com/'],
            ['name'=>'Asrock',
            'website'=> 'https://www.asrock.com/'],
            ['name'=>'Kingston',
            'website'=> 'https://www.kingston.com/'],
            ['name'=>'Cooler Master',
            'website'=> 'https://www.coolermaster.com/'],
        ]);
    }
}
