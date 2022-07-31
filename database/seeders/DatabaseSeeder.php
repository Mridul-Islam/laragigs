<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Listing;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory()->create([
            'name' => 'Mridul Islam',
            'email' => 'MridulIslam@mridul.com',
        ]);

        \App\Models\User::factory(5)->create();

        Listing::create([
            'title'=>'Senior Laravel Developer',
            'tags'=>'laravel',
            'company'=>'DebuggersStudio',
            'location'=>'Faidabad,DK,Dhaka',
            'email'=>'destudio.asia@gmail.com',
            'website'=>'https://debuggersstudio.com/',
            'description'=>'We’ve helped over 200 businesses around the world to build their Fastest Web solutions and Providing support to 20+ USA and European'
        ]);
        Listing::create([
            'title'=>'Software Engineer',
            'tags'=>'laravel',
            'company'=>'DebuggersStudio',
            'location'=>'Faidabad,DK,Dhaka',
            'email'=>'destudio.asia@gmail.com',
            'website'=>'https://debuggersstudio.com/',
            'description'=>'We’ve helped over 200 businesses around the world to build their Fastest Web solutions and Providing support to 20+ USA and European'
        ]);

    }
}
