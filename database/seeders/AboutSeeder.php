<?php

namespace Database\Seeders;

use App\Models\About;
use App\Models\Contact;
use App\Models\Location;
use App\Models\User;
use App\Models\Whatsapp;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'      => 'admin',
            'email'     => 'admin@admin.com',
            'password'  => Hash::make('admin')
        ]);
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
        Whatsapp::create([
            'phone_number'       => 'Test',
            'message'       => '1',
        ]);
    }
}
