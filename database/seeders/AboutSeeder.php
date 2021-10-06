<?php

namespace Database\Seeders;

use App\Models\About;
use App\Models\Contact;
use App\Models\Location;
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

        Location::create([
            'address'       => 'Test',
            'image'       => '1',
        ]);
        Contact::create([
            'address'       => 'Test',
            'email'       => '1',
        ]);
    }
}
