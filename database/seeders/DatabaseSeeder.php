<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Listing;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        \App\Models\User::factory(5)->create();

        Listing::create([
        'title' => 'Laravel Senior Developer',
        'tags' => 'laravel, javascript',
        'company' => 'Acme Corp',
        'location' => 'Boston, MA',
        'email' => 'email1@email.com',
        'website' => 'https://www.acme.com',
        'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Ipsam minima et illo reprehenderit quas possimus voluptas repudiandae cum expedita.'
        ]);
        Listing::create([
        'title' => 'Frontend Developer',
        'tags' => 'react, css, html',
        'company' => 'Tech Solutions',
        'location' => 'San Francisco, CA',
        'email' => 'frontend@techsolutions.com',
        'website' => 'https://www.techsolutions.com',
        'description' => 'Seeking a skilled frontend developer to 
                        build responsive and user-friendly interfaces with 
                        React and modern JavaScript frameworks.'
    ]);
    }
}
