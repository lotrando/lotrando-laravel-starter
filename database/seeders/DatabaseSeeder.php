<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'last_name'         => 'Admin',
            'first_name'        => 'Admin',
            'email'             => 'admin@admin.cz',
            'email_verified_at' => now(),
            'password'          => bcrypt('admin'),
            'remember_token'    => Str::random(10)
        ]);

        User::factory(10)->create();
    }
}
