<?php

namespace Database\Seeders;

use App\Models\Contract;
use App\Models\Owner;
use App\Models\Sector;
use App\Models\Unit;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use function Symfony\Component\String\s;

class ScenarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        //create owners to use them in contracts & units factories
        //$owners = \App\Models\User::factory(10)->state(['userable_type' => 'App\Models\Owner', 'userable_id' => Owner::factory()])->create();
    }
}
