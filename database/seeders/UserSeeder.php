<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::query()->getModel()->create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'role' => 0,
            'password' => bcrypt('admin')
        ]);
    }
}
