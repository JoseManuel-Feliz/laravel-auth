<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;
use Faker\Generator as Faker;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 300; $i++) {

            $ramdonTotalContributors = rand(2, 5);
            $newProject = new Project();
            $newProject->title = $faker->realTextBetween(2, 15);
            $newProject->author = $faker->firstName() . ' ' . $faker->lastName();
            for ($j = 0; $j < $ramdonTotalContributors; $j++) {
                $newProject->contributors = $faker->firstName() . ' ' . $faker->lastName();
            };
            $newProject->status = $faker->boolean();
            $newProject->Project_start_date = $faker->dateTimeBetween('-5 weeks', 'now');
            $newProject->description = $faker->realTextBetween(60, 300);
            $newProject->save();
        }
    }
}
