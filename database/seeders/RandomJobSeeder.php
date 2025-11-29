<?php

namespace Database\Seeders;

use App\Models\Job;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RandomJobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */


    public function run(): void
    {
        $users = User::all();

        foreach ($users as $user) {
            $user->jobs()->createMany(Job::factory(rand(0,10))->make()->toArray());
        }


    }
}
