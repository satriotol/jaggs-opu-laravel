<?php

namespace Database\Seeders;

use App\Models\About;
use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        About::create([
            'description'   => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum, doloremque.',
            'link'          => 'google.com',
            'vision'        => 'Lorem ipsum dolor sit amet.',
        ]);
    }
}
