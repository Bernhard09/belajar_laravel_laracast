<?php

namespace Database\Seeders;

use App\Models\JobModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        JobModel::factory(20)->create();
    }
}
