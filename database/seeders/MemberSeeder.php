<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('members')->insert([
         'name' => 'kwasi',
         'number' => '+233509548585',
         'joined_at' => 'Today',
         'role' => 'pastor'
        ]);
    }
}
