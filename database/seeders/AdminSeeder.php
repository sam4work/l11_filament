<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('admins')->upsert(
            [
                'name' => 'Super User',
                'email' => 'super@super.com',
                'password' => 'super@super.com',
            ], ['name', 'email', 'password'],
        );
    }
}
